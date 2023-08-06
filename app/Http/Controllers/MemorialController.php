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
         // $first_name = '%'.$first_name.'%';
         // $all_conditions[] = ['first_name','LIKE','%'.$first_name.'%'];
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

       if ($request->conflict == 'ALL' || !isset($request->conflict)) {
         $raw_sql .= ' and casualty_conflict_id is not null';
         $conflict = 'ALL';
       } else {
         $conflict = $request->validate([
           'conflict' => 'string|required'
         ]);
         $conflict_id = intval($conflict['conflict']);
         $raw_sql .= ' and (casualty_conflict_id = '.$conflict_id;
         $child_conflicts = Conflict::where('parent_id',$conflict_id)->get();
         if (count($child_conflicts) > 0) {
           foreach($child_conflicts as $one_child) {
             $raw_sql .= ' or casualty_conflict_id = '.$one_child->id;
           };
         };
         $raw_sql .= ')';
       };

       $all_casualties = DB::table('users')
        ->join('conflicts','users.casualty_conflict_id','conflicts.id')
        ->select('users.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id AS con_id','conflicts.parent_id AS con_parent','when_displayed')
        // ->where('kia_or_mia',1)
        ->whereRaw($raw_sql)
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->paginate(20);
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
         $all_casualties->appends(['conflict' => $conflict]);
       };

       $all_conflicts = Conflict::orderBy('start_year')->get();

       $casualty_count = DB::table('users')
        ->join('conflicts','users.casualty_conflict_id','conflicts.id')
        ->select('users.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id AS con_id','conflicts.parent_id AS con_parent','when_displayed')
        // ->where('kia_or_mia',1)
        ->whereRaw($raw_sql)
        ->count();

       // This selects the "Soldier of the Day"
       $find_selected = User::where('when_displayed',date('Y-m-d'))->first();
       if (!$find_selected) {
         $all_null = User::where('kia_or_mia',1)->where('when_displayed',null)->get();
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

       return view('casualties',[
         'style' => 'casualties_style',
         'js' => '/js/my_custom/memorials/memorials.js',
         'content' => 'casualties_content',
         'all_casualty_basics' => $all_casualties,
         'all_conflicts' => $all_conflicts,
         'casualty_count' => $casualty_count,
         'already_selected' => $already_selected,
         'cas_links' => $cas_links,
         'casualty_data' => $casualty_data,
         'cart_count' => $cart_count
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

       $url = 'memorials/casualties'.$parameters;

       return redirect($url);
     }

    public function index_old()
    {
      $all_casualty_basics = User::where('kia_or_mia',1)->get();
      $init_all_conflicts = Conflict::orderBy('start_year')->get();
      foreach ($init_all_conflicts as $one_conflict) {
        foreach ($all_casualty_basics as $one_casualty) {
          if ($one_conflict->id === $one_casualty->casualty_conflict_id) {
            $all_conflicts[] = $one_conflict;
            if ($one_conflict->parent_id != null) {
              foreach($init_all_conflicts as $finding_parent) {
                if ($finding_parent->id === $one_conflict->parent_id) {
                  $already_there = false;
                  foreach($all_conflicts as $one_check) {
                    if ($one_check->id === $finding_parent->id) {
                      // $all_conflicts[] = $finding_parent;
                      $already_there = true;
                    };
                  };
                  if ($already_there === false) {
                    $all_conflicts[] = $finding_parent;
                  };
                };
              };
            };
            break;
          }
        };
      };
     $casualty_count = count($all_casualty_basics);
     date_default_timezone_set('America/New_York');
     $current_date = date('Y-m-d');
     $current_casualty = null;
     // Shows today's selected casualty, or chooses a casualty for today
     $all_null_request = DB::table('users')
      ->join('conflicts','users.casualty_conflict_id','conflicts.id')
      ->select('users.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id AS con_id','when_displayed')
      ->where('kia_or_mia',1)
      ->where('when_displayed',null)
      ->get();
     $null_count = count($all_null_request);
     if ($null_count > 0) {
       $already_selected = null;
       $cas_links = null;
       for ($cas_num = 0; $cas_num < count($all_casualty_basics); $cas_num++) {
         $one_casualty_basic = $all_casualty_basics[$cas_num];
         if ($one_casualty_basic->when_displayed == $current_date) {
           // $already_selected = $one_casualty_basic;
           $already_selected_id = $one_casualty_basic->cas_id;
           $already_selected = DB::table('users')
            ->join('conflicts','users.casualty_conflict_id','conflicts.id')
            ->select('users.id AS cas_id','first_name','last_name','rank','place','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','conflicts.name AS con_name','conflicts.id AS con_id','veteran_img','unit','when_displayed')
            ->where('users.id','=',$already_selected_id)
            ->first();
           $cas_links = Link::where('is_casualty_link',1)
            ->where('user_id',$already_selected_id)
            ->get();
         };
         if ($already_selected == null && $cas_num == count($all_casualty_basics)-1) {
           $max_rand = $null_count - 1;
           $selected_num = rand(0,$max_rand);
           $already_selected_id = $all_null_request[$selected_num]->cas_id;
           User::where('id',$already_selected_id)
             ->update(['when_displayed' => $current_date]);
           $already_selected = DB::table('users')
            ->join('conflicts','conflicts.id','users.casualty_conflict_id')
            ->select('users.id AS cas_id','first_name','last_name','rank','kia_location','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','conflicts.name AS con_name','conflicts.id AS con_id','veteran_img','unit','when_displayed')
            ->where('users.id','=',$already_selected_id)
            ->first();
           $cas_links = Link::where('user_id',$already_selected_id)
            ->where('is_casualty_link',1)
            ->get();
         };
       };
     } else {
       $already_selected = null;
       $cas_links = null;
       DB::table('users')
         ->update(['when_displayed' => null]);
       $all_casualty_count = count($all_casualty_basics);
       $max_rand = $all_casualty_count - 1;
       $selected_num = rand(0,$max_rand);
       $already_selected_id = $all_casualty_basics[$selected_num]->cas_id;
       DB::table('users')
         ->where('id','=',$already_selected_id)
         ->update(['when_displayed' => $current_date]);
       $already_selected = DB::table('users')
        ->join('conflicts','users.casualty_conflict_id','conflicts.id')
        ->select('users.id AS cas_id','first_name','last_name','rank','kia_location','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','conflicts.name AS con_name','conflicts.id AS con_id','veteran_img','unit','when_displayed')
        ->where('users.id',$already_selected_id)
        ->first();
       $cas_links = Link::where('user_id',$already_selected_id)
        ->where('is_casualty_link',1)
        ->get();
     };
     if (request()->has('id') == true && request()->filled('id')) {
       $casualty_id = request()->id;
       $casualty_data = DB::table('users')
        ->join('conflicts','users.casualty_conflict_id','conflicts.id')
        ->select('users.id AS cas_id','first_name','last_name','rank','kia_location','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','conflicts.name AS con_name','conflicts.id AS con_id','veteran_img','unit','when_displayed','comments')
        ->where('users.id',$casualty_id)
        ->first();
       // $casualty_links = DB::table('other_urls')
       //  ->select('name','url')
       //  ->where('casualty_id','=',$casualty_id)
       //  ->get();
       // $casualty_data_raw[0] = (array)$casualty_data_raw[0];
       // $casualty_data_raw[0]['all_links'] = (array)$casualty_links;
       // $casualty_data_raw[0] = (object)$casualty_data_raw[0];
     } else {
       $casualty_data = null;
     };
     // if (Auth::user()) {
     //   $unread_count = DB::table('messages')
     //     ->where([
     //       ['messages.received_id',Auth::user()->id],
     //       ['messages.is_read','==',0]
     //     ])
     //     ->count();
     //   return view('casualties',[
     //     'unread_count' => $unread_count,
     //     'style' => 'casualties_style',
     //     'js' => '/js/my_custom/memorials/memorials.js',
     //     'content' => 'casualties_content',
     //     'all_casualty_basics' => $all_casualty_basics,
     //     'all_conflicts' => $all_conflicts,
     //     'casualty_count' => $casualty_count,
     //     'already_selected' => $already_selected,
     //     'cas_links' => $cas_links,
     //     'casualty_data' => $casualty_data
     //   ]);
     // } else {
       return view('casualties',[
         'style' => 'casualties_style',
         'js' => '/js/my_custom/memorials/memorials.js',
         'content' => 'casualties_content',
         'all_casualty_basics' => $all_casualty_basics,
         'all_conflicts' => $all_conflicts,
         'casualty_count' => $casualty_count,
         'already_selected' => $already_selected,
         'cas_links' => $cas_links,
         'casualty_data' => $casualty_data
       ]);
     // };
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
