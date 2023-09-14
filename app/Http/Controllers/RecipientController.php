<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Conflict;
use App\Models\Link;

use Illuminate\Support\Facades\DB;

class RecipientController extends Controller
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

       $raw_sql = 'moh_recipient = 1';

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

       $all_conflicts = Conflict::where('bobcat_recipients',1)->orderBy('start_year')->get();
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
           $conflict_raw = ' and (moh_conflict_id = '.$conflict_id;
           for ($i = 0; $i < count($child_list); $i++) {
             $conflict_raw .= ' or moh_conflict_id = '.$child_list[$i];
           };
           $conflict_raw .= ')';
         } else {
           $conflict_raw = ' and moh_conflict_id = '.$conflict_id;
         }
         $raw_sql .= $conflict_raw;
       } else {
         $conflict_id = "ALL";
       };

       $all_recipients = User::whereRaw($raw_sql)
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->paginate(18);

       for ($i = 0; $i < count($all_recipients); $i++) {
         $all_recipients[$i]->con_name = null;
         $all_recipients[$i]->con_id = null;
         $all_recipients[$i]->con_parent = null;
         for ($j = 0; $j < count($all_conflicts); $j++) {
           if ($all_recipients[$i]->moh_conflict_id == $all_conflicts[$j]->id) {
             $all_recipients[$i]->con_name = $all_conflicts[$j]->name;
             $all_recipients[$i]->con_id = $all_conflicts[$j]->id;
             $all_recipients[$i]->con_parent = $all_conflicts[$j]->parent_id;
           };
         };
         // Gets written date
         $day = $all_recipients[$i]->day_of_moh_action;
         if ($day == 1 || $day == 21 || $day == 31) {
           $day.="st";
         } elseif ($day == 2 || $day == 22) {
           $day.="nd";
         } elseif ($day == 3 || $day == 23) {
           $day.="rd";
         } else {
           $day.= "th";
         };
         $month = $all_recipients[$i]->month_of_moh_action;
         if ($month != null) {
           $all_months = array('Jan.','Feb.','Mar.','Apr.','May','June','July','Aug.','Sept.','Oct.','Nov.','Dec.');
           $index = $month - 1;
           $month = $all_months[$index];
         };
         $year = $all_recipients[$i]->year_of_moh_action;
         if ($day != null && $month != null && $year != null) {
           $full_date = $month." ".$day.", ".$year;
         } else {
           $full_date = null;
         };
         $all_recipients[$i]->full_date = $full_date;
       };

       // This makes the pagination links include the necessary, additional GET parameters
       if ($request->firstName) {
         $all_recipients->appends(['firstName' => $first_name]);
       };
       if ($request->lastName) {
         $all_recipients->appends(['lastName' => $last_name]);
       };
       if ($request->conflict) {
         $all_recipients->appends(['conflict' => $conflict_id]);
       };

       $recipient_count = User::whereRaw($raw_sql)->count();

       // // This selects the "Soldier of the Day"
       // $find_selected = User::where('when_displayed',date('Y-m-d'))->first();
       // if (!$find_selected) {
       //   $all_null = User::where('kia_or_mia',1)->where('when_displayed',null)->get();
       //   if (count($all_null) == 0) {
       //     User::where('kia_or_mia',1)->update(['when_displayed' => null]);
       //     $all_null = User::where('kia_or_mia',1)->where('when_displayed',null)->get();
       //   }
       //   $count_of_null = count($all_null);
       //   $max_random_index = $count_of_null - 1;
       //   $selected_index = rand(0,$max_random_index);
       //   $already_selected = $all_null[$selected_index];
       //   $already_selected->when_displayed = date('Y-m-d');
       //   $already_selected->save();
       // } else {
       //   $already_selected = $find_selected;
       // };
       //
       // $cas_links = Link::where('is_casualty_link',1)->where('user_id',$already_selected->id)->get();

       $recipient_data = null;

       // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
         $imagePath = 'images/veteran';
       // } else {
       //   $imagePath = 'public/images/veteran';
       // };

       return view('recipients',[
         'style' => 'recipients_style',
         'js' => '/js/my_custom/memorials/recipients.js',
         'content' => 'recipients_content',
         'all_recipient_basics' => $all_recipients,
         'all_conflicts' => $all_conflicts,
         'recipient_count' => $recipient_count,
         'recipient_data' => $recipient_data,
         'cart_count' => $cart_count,
         'image_path' => $imagePath
       ]);
     }

     public function search(Request $request)
     {
       $input = $request->validate([
         'firstName' => 'string|nullable',
         'lastName'  => 'string|nullable',
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

       // $url = 'medal-of-honor/recipients'.$parameters;
       $url = route('recipients.all').$parameters;

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

       $recipient = User::find($id);
       $conflict = Conflict::where('id',$recipient->moh_conflict_id)->first();
       $all_links = Link::where('is_moh_link',1)
          ->where('user_id',$recipient->id)
          ->get();

       // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
         $imagePath = 'images/veteran';
       // } else {
       //   $imagePath = 'public/images/veteran';
       // };

       return view('selected_recipient',[
         'style' => 'recipients_style',
         'js' => '/js/my_custom/memorials/memorials.js',
         'content' => 'recipients_selected',
         'cart_count' => $cart_count,
         'recipient_data' => $recipient,
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
