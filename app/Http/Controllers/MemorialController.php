<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Conflict;
use App\Models\Link;

use Illuminate\Support\Facades\DB;

class MemorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
       // The 'get_cart_count' function is in 'app\helper.php'
       $cart_count = get_cart_count($request)->cart_count;

       $raw_sql = 'kia_or_mia = 1';

       if ($request->firstName) {
         $first_input = $request->validate([
           'firstName' => 'string|nullable'
         ]);
         $first_name = str_replace("%20"," ",$first_input['firstName']);
         $first_raw = ' and first_name like "%'.$first_name.'%"';
         $raw_sql .= $first_raw;
       };

       if ($request->lastName) {
         $last_name = $request->validate([
           'lastName' => 'string|nullable'
         ]);
         $last_name = str_replace("%20"," ",$last_name['lastName']);
         $last_raw = ' and last_name like "%'.$last_name.'%"';
         $raw_sql .= $last_raw;
       };

       if ($request->unit) {
         $unit = $request->validate([
           'unit' => 'string|nullable'
         ]);
         $unit = str_replace("%20"," ",$unit['unit']);
         $unit_raw = ' and unit like "%'.$unit.'%"';
         $raw_sql .= $unit_raw;
       };

       $all_conflicts = Conflict::where('bobcat_casualties',1)->orderBy('start_year')->get();
       if ($request->conflict && $request->conflict != "ALL") {
         $conflict = $request->validate([
           'conflict' => 'integer|nullable'
         ]);
         $conflict_id = intval($request->conflict);
         $select_conflict = Conflict::where('id',$conflict_id)->first();
         $child_list = [];
         foreach ($all_conflicts as $one_conflict) {
           if ($select_conflict->id == $one_conflict->parent_id) {
             $child_list[] = $one_conflict->id;
           };
         };
         if (count($child_list) > 0) {
           $conflict_raw = ' and (casualty_conflict_id = '.$conflict_id;
           for ($i = 0; $i < count($child_list); $i++) {
             $conflict_raw .= ' or casualty_conflict_id = '.$child_list[$i];
           };
           $conflict_raw .= ')';
         } else {
           $conflict_raw = ' and casualty_conflict_id = '.$conflict_id;
         }
         $raw_sql .= $conflict_raw;
       } else {
         $conflict_id = "ALL";
       };

       $all_casualties = User::whereRaw($raw_sql)
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->paginate(20);

       for ($i = 0; $i < count($all_casualties); $i++) {
         $all_casualties[$i]->con_name = null;
         $all_casualties[$i]->con_id = null;
         $all_casualties[$i]->con_parent = null;
         for ($j = 0; $j < count($all_conflicts); $j++) {
           if ($all_casualties[$i]->casualty_conflict_id == $all_conflicts[$j]->id) {
             $all_casualties[$i]->con_name = $all_conflicts[$j]->name;
             $all_casualties[$i]->con_id = $all_conflicts[$j]->id;
             $all_casualties[$i]->con_parent = $all_conflicts[$j]->parent_id;
           };
         };
       };

       // This makes the pagination links include the necessary, additional GET parameters
       if ($request->firstName) {
         $all_casualties->appends(['firstName' => $first_name]);
       };
       if ($request->lastName) {
         $all_casualties->appends(['lastName' => $last_name]);
       };
       if ($request->unit) {
         $all_casualties->appends(['unit' => $unit]);
       };
       if ($request->conflict) {
         $all_casualties->appends(['conflict' => $conflict_id]);
       };

       $casualty_count = User::whereRaw($raw_sql)->count();

       // This selects the "Soldier of the Day"
       $find_selected = User::where('when_displayed',date('Y-m-d'))->first();
       if (!$find_selected) {
         $all_null = User::where('kia_or_mia',1)->where('when_displayed',null)->get();
         if (count($all_null) == 0) {
           User::where('kia_or_mia',1)->update(['when_displayed' => null]);
           $all_null = User::where('kia_or_mia',1)->where('when_displayed',null)->get();
         }
         $count_of_null = count($all_null);
         $max_random_index = $count_of_null - 1;
         $selected_index = rand(0,$max_random_index);
         $already_selected = $all_null[$selected_index];
         $already_selected->when_displayed = date('Y-m-d');
         $already_selected->save();
       } else {
         $already_selected = $find_selected;
       };

       $cas_links = Link::where('is_casualty_link',1)->where('user_id',$already_selected->id)->get();

       $casualty_data = null;

       if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
         $imagePath = 'images/veteran';
       } else {
         $imagePath = 'public/images/veteran';
       };

       unset($raw_sql);
       unset($find_selected);

       return view('casualties.casualties',[
         'js' => '/js/my_custom/memorials/memorials.js',
         'content' => 'casualties_content',
         'page_title' => "Casualties",
         'all_casualty_basics' => $all_casualties,
         'all_conflicts' => $all_conflicts,
         'casualty_count' => $casualty_count,
         'already_selected' => $already_selected,
         'cas_links' => $cas_links,
         'casualty_data' => $casualty_data,
         'cart_count' => $cart_count,
         'image_path' => $imagePath
       ]);
     }

     public function search(Request $request)
     {
       $input = $request->validate([
         'firstName' => 'string|nullable',
         'lastName'  => 'string|nullable',
         'unit'      => 'string|nullable',
         'conflict'  => 'string|required'
       ]);

       $parameters = '';
       $first_parameter = true;
       foreach ($input as $key => $value) {
         if ($value != null) {
           $one_parameter = $key."=".$value;
           if ($first_parameter == true) {
             $parameters .= "?".$one_parameter;
             $first_parameter = false;
           } else {
             $parameters .= "&".$one_parameter;
           };
         };
       };

       // $url = 'memorials/casualties'.$parameters;
       $url = route('casualties.all').$parameters;

       return redirect($url);
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show(Request $request,$id)
     {
       // The 'get_cart_count' function is in 'app\helper.php'
       $cart_count = get_cart_count($request)->cart_count;

       $casualty = User::find($id);
       $name = $casualty->first_name." ".$casualty->last_name;
       $conflict = Conflict::where('id',$casualty->casualty_conflict_id)->first();
       $all_links = Link::where('is_casualty_link',1)
          ->where('user_id',$casualty->id)
          ->get();

       if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
         $imagePath = 'images/veteran';
       } else {
         $imagePath = 'public/images/veteran';
       };

       return view('casualties.selected',[
         'js' => '/js/my_custom/memorials/memorials.js',
         'content' => 'casualties_selected',
         'page_title' => $name,
         'cart_count' => $cart_count,
         'casualty_data' => $casualty,
         'img_path' => $imagePath,
         'conflict' => $conflict,
         'all_links' => $all_links
       ]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
