<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;
use App\Models\Event;
use App\Models\Subevent;
use App\Models\Payment;
use App\Models\Applicant;

use App\Http\Controllers\stdClass;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $all_permission_data = [];

      for ($num = 0; $num < count($users_permissions); $num++) {
        $permission_data = new \stdClass;
        $permission_data->label_name = $users_permissions[$num][0];
        $permission_data->data = $users_permissions[$num];
        $unique_permission = true;
        for ($unique_num = 0; $unique_num < count($all_permission_data); $unique_num++) {
          if ($users_permissions[$num][0] == $all_permission_data[$unique_num]->label_name) {
            $unique_permission = false;
          };
        };
        if ($unique_permission) {
          $all_permission_data[] = $permission_data;
        };
      };

      return view('admin.index',[
        'current_user' => $current_user,
        'user_roles' => $user_roles,
        'all_permission_data' => $all_permission_data
      ]);
    }

    public function add_member_index() {
      return view('admin.new_user');
    }

    public function add_member_post(Request $request) {
      $request->validate([
        'firstName'        => 'required|string',
        'middleName'        => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => 'nullable|string',
        'currentImg'       => 'nullable|file',
        'veteranImg'       => 'nullable|file',
        'tombstoneImg'     => 'nullable|file',
        'biography'        => 'nullable|string',
        'isDeceased'       => 'required',
        'membershipStatus' => 'nullable',
        'mailingAddress'   => 'nullable|string',
        'rank'             => 'nullable|string',
        'kiaLocation'      => 'nullable|string',
        'injuryType'       => 'nullable|string',
        'burialSite'       => 'nullable|string'
      ]);
      $input['first_name'] = $request->firstName;
      $input['middle_name'] = $request->middleName;
      $input['last_name'] = $request->lastName;
      $input['email'] = $request->email;
      $input['current_img'] = $request->currentImg;
      $input['veteran_img'] = $request->veteranImg;
      $input['tombstone_img'] = $request->tombstoneImg;
      $input['biography'] = $request->biography;
      $input['deceased'] = $request->isDeceased;
      $input['mailing_address'] = $request->mailingAddress;
      $input['rank'] = $request->rank;
      $input['kia_location'] = $request->kiaLocation;
      $input['injury_type'] = $request->injuryType;
      $input['burial_site'] = $request->burialSite;
      $input['day_of_death'] = $request->dayOfDeath;
      $input['month_of_death'] = $request->dayOfMonth;
      $input['year_of_death'] = $request->dayOfYear;

      $random_password = '';
      $all_characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
      $character_count = strlen($all_characters);
      for ($i = 0; $i < 20; $i++) {
        $random_password .=  $all_characters[random_int(0,$character_count - 1)];
      };
      $input['password'] = Hash::make($random_password);

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $storagePath = 'images';
        $public_path = 'storage/images';
      } else {
        $storagePath = 'public/images';
        $public_path = 'storage/images';
      };

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      /*
      // Add member's current photo
      if (request('currentImg')) {
        $input['current_img'] = request('currentImg')->store($storagePath);
        $filename = request('currentImg')->hashName();
        $input['current_img'] = $public_path."/".$filename;
      };
      // Add member's veteran photo while in service
      if (request('veteranImg')) {
        $input['veteran_img'] = request('veteranImg')->store($storagePath);
        $filename = request('veteranImg')->hashName();
        $input['veteran_img'] = $public_path."/".$filename;
      };
      // Add bobcat's tombstone photo while in service
      if (request('tombstoneImg')) {
        $input['tombstone_img'] = request('tombstoneImg')->store($storagePath);
        $filename = request('tombstoneImg')->hashName();
        $input['tombstone_img'] = $public_path."/".$filename;
      };
      */

      if ($request->membershipStatus == 'start_trial') {
        $start_date = date("Y-m-d H:i:s");
        $timestamp = date("Y-m-d H:i:s",strtotime($start_date." +30 days"));
      } elseif ('permanent') {
        $timestamp = '1970-01-01 00:00:00';
      } else {
        $timestamp = null;
      };
      $input['expiration_date'] = $timestamp;

      User::create($input);
      return redirect()->route('admin.index');
    }

    public function edit_member_index($id) {
      $member = User::find($id);
      if ($member->expiration_date != '1970-01-01 00:00:00' && $member->expiration_date != null) {
        $status = "start_trial";
      } elseif ($member->expiration_date == '1970-01-01 00:00:00') {
        $status = "permanent";
      } else {
        $status = "nonmember";
      };

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      return view('admin.edit_user',[
        'id'     => $id,
        'member' => $member,
        'status' => $status
      ]);
    }

    public function edit_member_post(Request $request,$id) {
      $request->validate([
        'firstName'        => 'required|string',
        'lastName'         => 'required|string',
        'email'            => 'nullable|string',
        'currentImg'       => 'nullable|file',
        'veteranImg'       => 'nullable|file',
        'biography'        => 'nullable|string',
        'isDeceased'       => 'required',
        'membershipStatus' => 'nullable',
        'action'           => 'required',
        'mailingAddress'   => 'nullable|string'
      ]);

      $member = User::find($id);

      if ($request->action == 'update') {
        $member->first_name = $request->firstName;
        $member->last_name = $request->lastName;
        $member->email = $request->email;
        // $member->current_img = $request->currentImg;
        // $member->veteran_img = $request->veteranImg;
        $member->biography = $request->biography;
        $member->deceased = $request->isDeceased;
        $member->mailing_address = $request->mailingAddress;

        if ($request->membershipStatus == "permanent") {
          $member->expiration_date = '1970-01-01 00:00:00';
        } elseif ($request->membershipStatus == "start_trial") {
          if ($member->expiration_date == '1970-01-01 00:00:00' || $member->expiration_date == null) {
            $start_date = date("Y-m-d H:i:s");
            $member->expiration_date = date("Y-m-d H:i:s",strtotime($start_date." +30 days"));
          };
        } else {
          $member->expiration_date = null;
        };

        // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
          $storagePath = 'images';
          $public_path = 'storage/images';
        // } else {
        //   $storagePath = 'storage/images';
        //   $public_path = 'storage/images';
        // };

        /*
        // if (!file_exists('../public/storage')) {
        //   Artisan::call('storage:link');
        // };

        if (request('currentImg')) {
          $old_filename = $member->current_img;
          $member['current_img'] = request('currentImg')->store($storagePath);
          $filename = request('currentImg')->hashName();
          $member['current_img'] = $public_path."/".$filename;
          if ($old_filename != null) {
            Storage::delete($old_filename);
          };
        };
        if (request('veteranImg')) {
          $old_filename = $member['veteran_img'];
          $member['veteran_img'] = request('veteranImg')->store($storagePath);
          $filename = request('veteranImg')->hashName();
          $member->veteran_img = $public_path."/".$filename;
          if ($old_filename != null) {
            Storage::delete($old_filename);
          };
        };
        */

        $member->save();
      } elseif ($request->action == 'current') {
        $member->current_img = str_replace("storage/","",$member->current_img);
        Storage::delete($member->current_img);
        User::find($member->id)->update(['current_img' => null]);
      } elseif ($request->action == 'veteran') {
        $member->veteran_img = str_replace("storage/","",$member->veteran_img);
        Storage::delete($member->veteran_img);
        User::find($member->id)->update(['veteran_img' => null]);
      };

      return redirect()->route('edit.member.list');
    }

    public function delete_member_index($id) {
      $member = User::find($id);
      if ($member->expiration_date != '1970-01-01 00:00:00' && $member->expiration_date != null) {
        $status = "start_trial";
      } elseif ($member->expiration_date == '1970-01-01 00:00:00') {
        $status = "permanent";
      } else {
        $status = "nonmember";
      };

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      return view('admin.delete_user',[
        'id'     => $id,
        'member' => $member,
        'status' => $status
      ]);
    }

    public function delete_member_post($id) {
      $member = User::find($id);
      // if ($member->current_img) {
      //   $member->current_img = str_replace("storage/","",$member->current_img);
      //   Storage::delete($member->current_img);
      // };
      // if ($member->veteran_img) {
      //   $member->veteran_img = str_replace("storage/","",$member->veteran_img);
      //   Storage::delete($member->veteran_img);
      // };
      User::where('id',$id)->delete();
      return redirect()->route('delete.member.list');
    }

    public function all_members() {
      // $all_users = User::all();
      $all_users = User::where('expiration_date','!=',null)->orderBy('last_name','asc')->paginate(20);

      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_assign = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Assign Roles To Members") {
          $can_assign = true;
        };
      };

      $can_edit = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit A Member") {
          $can_edit = true;
        };
      };

      $can_delete = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete A Member") {
          $can_delete = true;
        };
      };

      return view('admin.all_members',[
        'all_members' => $all_users,
        'can_assign' => $can_assign,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function edit_casualty_index($id) {
      $casualty = User::find($id);
      if ($casualty->expiration_date == null) {
        $status = "false";
      } else {
        $status = "true";
      };

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      return view('admin.edit_casualty',[
        'id'     => $id,
        'casualty' => $casualty,
        'status' => $status
      ]);
    }

    public function edit_casualty_post(Request $request,$id) {

      $request->validate([
        'firstName'        => 'required',
        'middleName'       => 'nullable',
        'lastName'         => 'required',
        'rank'             => 'nullable',
        'kiaLocation'      => 'required',
        'injuryType'       => 'nullable',
        'city'             => 'nullable',
        'state'            => 'nullable',
        'burialSite'       => 'nullable',
        'comments'         => 'nullable',
        'membershipStatus' => 'required',
      ]);

      if ($request['membershipStatus'] == "nonmember") {
        $membershipStatus = null;
      } else {
        $membershipStatus = "1970-01-01 00:00:00";
      };

      $casualty = User::find($id);
      $casualty->first_name = $request['firstName'];
      $casualty->middle_name = $request['middleName'];
      $casualty->last_name = $request['lastName'];
      $casualty->rank = $request['rank'];
      $casualty->kia_location = $request['kiaLocation'];
      $casualty->injury_type = $request['injuryType'];
      $casualty->city = $request['city'];
      $casualty->state = $request['state'];
      $casualty->burial_site = $request['burialSite'];
      $casualty->comments = $request['comments'];
      $casualty->expiration_date = $membershipStatus;
      $casualty->save();

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };


      return redirect()->route('edit.casualty.list');
    }

    public function all_casualties() {
      $all_casualties = User::where('kia_or_mia','1')->orderBy('last_name','asc')->paginate(20);

      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_edit = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit Casualty Records") {
          $can_edit = true;
        };
      };

      $can_delete = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete A Member") {
          $can_delete = true;
        };
      };

      return view('admin.all_casualties',[
        'all_casualties' => $all_casualties,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function member_roles($member_id)
    {
      $member = User::find($member_id);
      $all_roles = Role::orderBy('title','asc')->get();
      $all_user_roles = User::find($member_id)->all_user_roles;
      $all_role_descriptions = [];
      foreach($all_roles as $one_role) {
        $permission_object = new \stdClass;
        $permission_object->role_title = $one_role->title;
        $permission_list = [];
        foreach(Role::find($one_role->id)->all_role_permissions as $one_permission) {
          $permission_list[] = $one_permission->label;
        };
        $permission_object->permissions = $permission_list;
        $all_role_descriptions[] = $permission_object;
      };
      return view('admin.member_roles')
        ->with('member', $member)
        ->with('all_roles', $all_roles)
        ->with('all_user_roles', $all_user_roles)
        ->with('all_role_descriptions', $all_role_descriptions);
    }

    public function assign_roles($id, Request $request)
    {
      $all_roles = Role::all();
      $all_user_roles = User::find($id)->all_user_roles;

      foreach ($all_roles as $init_role) {
        $request_name = "role_".$init_role->id;

        $request_value = $request->$request_name;
        $request_boolean = intval($request_value);
        User::find($id)->all_user_roles()->detach($init_role->id);
        if ($request_boolean == 1) {
          User::find($id)->all_user_roles()->attach($init_role->id);
        };
      };

      return redirect()->route('admin.assign',[
        'id' => $id,
        'all_roles' => $all_roles,
        'all_user_roles' => $all_user_roles
      ]);
    }

    public function add_event_index()
    {
      return view('admin.new_event');
    }

    public function add_event_post(Request $request) {
      $request->validate([
        'eventTitle'       => 'required|string',
        'startDay'         => 'nullable|integer',
        'startMonth'       => 'nullable|integer',
        'startYear'        => 'nullable|integer',
        'endDay'           => 'nullable|integer',
        'endMonth'         => 'nullable|integer',
        'endYear'          => 'nullable|integer',
        'location'         => 'nullable|string',
        'form_options'         => 'nullable|string'
      ]);

      if ($request->startYear && $request->startMonth && $request->startDay) {
        $firstDay = strval($request->startYear)."-".strval($request->startMonth)."-".strval($request->startDay);
      } else {
        $firstDay = null;
      };
      if ($request->endYear && $request->endMonth && $request->endDay) {
        $lastDay = strval($request->endYear)."-".strval($request->endMonth)."-".strval($request->endDay);
      } else {
        $lastDay = null;
      };
      $slug_array = explode(" ",$request->eventTitle);
      $slug = strtolower(end($slug_array))."_".time();

      $input['title'] = $request->eventTitle;
      $input['slug'] = $slug;
      $input['first_day'] = $firstDay;
      $input['last_day'] = $lastDay;
      $input['location'] = $request->location;
      $input['form_options'] = $request->form_options;

      Event::create($input);

      return redirect()->route('admin.index');
    }

    public function all_events() {
      // $all_users = User::all();
      $all_events = Event::orderBy('first_day','asc')->paginate(20);

      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_edit = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit An Event") {
          $can_edit = true;
        };
      };

      $can_delete = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete An Event") {
          $can_delete = true;
        };
      };

      return view('admin.all_events',[
        'all_events' => $all_events,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function edit_event_index($id) {
      $event = Event::find($id);

      // This was required IOT get the subevents ordered and with the unordered subevents at the bottom
      $all_subevents = DB::table('subevents')
                    ->where('event_id',$id)
                    ->orderByRaw('order_number IS NULL')
                    ->orderBy('order_number','ASC')
                    ->get();

      if ($event->first_day) {
        $firstDay = [
          intval(explode("-",$event->first_day)[1]), // month
          intval(explode("-",$event->first_day)[2]), // day
          intval(explode("-",$event->first_day)[0])  // year
        ];
      } else {
        $firstDay = null;
      };

      if ($event->last_day) {
        $lastDay = [
          intval(explode("-",$event->last_day)[1]), // month
          intval(explode("-",$event->last_day)[2]), // day
          intval(explode("-",$event->last_day)[0])  // year
        ];
      } else {
        $lastDay = null;
      };

      return view('admin.edit_event',[
        'id' => $id,
        'event' => $event,
        'all_subevents' => $all_subevents,
        'firstDay' => $firstDay,
        'lastDay' => $lastDay
      ]);
    }

    public function edit_event_post(Request $request,$id) {
      $request->validate([
        'eventTitle'       => 'required|string',
        'startDay'         => 'nullable|integer',
        'startMonth'       => 'nullable|integer',
        'startYear'        => 'nullable|integer',
        'endDay'           => 'nullable|integer',
        'endMonth'         => 'nullable|integer',
        'endYear'          => 'nullable|integer',
        'location'         => 'nullable|string',
        'form_options'     => 'nullable|string'
      ]);

      $event = Event::find($id);

      $event->title = $request->eventTitle;

      if ($request->startYear && $request->startMonth && $request->startDay) {
        // Turns 'month' integer to string
        $first_month = strval($request->startMonth);
        if ($request->startMonth < 10) {
          $first_month = "0".$first_month;
        };
        // Turns 'day' integer to string
        $first_day = strval($request->startDay);
        if ($request->startDay < 10) {
          $first_day = "0".$first_day;
        };
        // Combines into full date string
        $event->first_day = strval($request->startYear)."-".$first_month."-".$first_day;
      } else {
        $event->first_day = null;
      };

      if ($request->endYear && $request->endMonth && $request->endDay) {
        // Turns 'month' integer to string
        $end_month = strval($request->endMonth);
        if ($request->endMonth < 10) {
          $end_month = "0".$end_month;
        };
        // Turns 'day' integer to string
        $end_day = strval($request->endDay);
        if ($request->endDay < 10) {
          $end_day = "0".$end_day;
        };
        // Combines into full date string
        $event->last_day = strval($request->endYear)."-".$end_month."-".$end_day;
      } else {
        $event->last_day = null;
      };

      $event->location = $request->location;

      $event->form_options = $request->form_options;

      $event->save();

      return redirect()->route('edit.event.list');
    }


    public function delete_event_index($id) {
      $event = Event::find($id);
      $all_subevents = Event::find($id)->all_event_subevents;

      return view('admin.delete_event',[
        'id'     => $id,
        'event' => $event,
        'all_subevents' => $all_subevents
      ]);
    }


    public function delete_event_post($id) {
      Subevent::where('event_id',$id)->delete();
      Event::where('id',$id)->delete();

      return redirect()->route('delete.event.list');
    }


    public function add_subevent_index($event_id)
    {
      $event = Event::find($event_id);
      return view('admin.new_subevent',[
        'event' => $event
      ]);
    }


    public function add_subevent_post(Request $request, $event_id) {

      $request->validate([
        'subeventTitle'    => 'required|string',
        'startDay'         => 'nullable|integer',
        'startMonth'       => 'nullable|integer',
        'startYear'        => 'nullable|integer',
        'startFullTime'    => 'nullable|string',
        'endDay'           => 'nullable|integer',
        'endMonth'         => 'nullable|integer',
        'endYear'          => 'nullable|integer',
        'endFullTime'      => 'nullable|string',
        'iframe_map_src'   => 'nullable|string',
        'order_num'        => 'nullable|integer',
        'classes'          => 'nullable|string',
        'description'      => 'nullable|string',
        'location'         => 'nullable|string',
        // 'image_src'        => 'nullable|string',
        'is_payment'       => 'nullable|string'
      ]);

      if ($request->startYear && $request->startMonth && $request->startDay) {
        $firstMonth = strval($request->startMonth);
        if (strlen($firstMonth) < 2) {
          $firstMonth = "0".$firstMonth;
        };
        $firstDay = strval($request->startDay);
        if (strlen($firstDay) < 2) {
          $firstDay = "0".$firstDay;
        };
        $firstDate = strval($request->startYear)."-".$firstMonth."-".$firstDay;
        if ($request->startFullTime) {
          $firstDate = $firstDate." ".$request->startFullTime.":00";
        } else {
          $firstDate = $firstDate." 00:00:00";
        };
      } else {
        $firstDate = null;
      };
      if ($request->endYear && $request->endMonth && $request->endDay) {
        $lastDay = strval($request->endYear)."-".strval($request->endMonth)."-".strval($request->endDay);
        if ($request->endFullTime) {
          $lastDay = $lastDay." ".$request->endFullTime.":00";
        } else {
          $lastDay = $lastDay." 00:00:00";
        };
      } else {
        $lastDay = null;
      };

      if ($request->is_payment == "null") {
        $request->is_payment = null;
      }

      if (!$request->startHour || !$request->startMinute || $request->startMinute != 0) {
        $has_start_time = 0;
      } else {
        $has_start_time = 1;
      };

      $input['title'] = $request->subeventTitle;
      $input['start_time'] = $firstDate;
      $input['no_start_time'] = $has_start_time;
      $input['end_time'] = $lastDay;
      $input['classes'] = $request->classes;
      $input['description'] = $request->description;
      $input['order_number'] = $request->order_num;
      $input['location'] = $request->location;
      $input['iframe_map_src'] = $request->iframe_map_src;
      // $input['image_src'] = $request->imgSource;
      $input['is_payment'] = $request->is_payment;
      $input['event_id'] = $event_id;

      Subevent::create($input);

      return redirect()->route('edit.event.index',[ 'id' => $request->event_id ]);
    }


    public function edit_subevent_index($event_id,$id) {
      $subevent = Subevent::find($id);

      if ($subevent->start_time) {
        $startDate = explode(" ",$subevent->start_time)[0];
        $startTime = explode(" ",$subevent->start_time)[1];
        $startDateInt = [
          intval(explode("-",$startDate)[1]), // month
          intval(explode("-",$startDate)[2]), // day
          intval(explode("-",$startDate)[0])  // year
        ];
        $startFullTime = substr($startTime,0,5);
      } else {
        $startDateInt = null;
        $startFullTime = "";
      };

      if ($subevent->end_time) {
        $endDate = explode(" ",$subevent->end_time)[0];
        $endTime = explode(" ",$subevent->end_time)[1];
        $endDateInt = [
          intval(explode("-",$endDate)[1]), // month
          intval(explode("-",$endDate)[2]), // day
          intval(explode("-",$endDate)[0])  // year
        ];
        $endFullTime = substr($endTime,0,5);
      } else {
        $endDateInt = null;
        $endFullTime = "";
      };

      return view('admin.edit_subevent',[
        'subevent' => $subevent,
        'id' => $id,
        'startDate' => $startDateInt,
        'startTime' => $startFullTime,
        'endDate' => $endDateInt,
        'endTime' => $endFullTime
      ]);
    }


    public function edit_subevent_post(Request $request, $event_id, $id) {

      $request->validate([
        'subeventTitle'    => 'required|string',
        'startDay'         => 'nullable|integer',
        'startMonth'       => 'nullable|integer',
        'startYear'        => 'nullable|integer',
        'endDay'           => 'nullable|integer',
        'endMonth'         => 'nullable|integer',
        'endYear'          => 'nullable|integer',
        'startFullTime'    => 'nullable|string',
        'endFullTime'      => 'nullable|string',
        'iframe_map_src'   => 'nullable|string',
        'classes'          => 'nullable|string',
        'description'      => 'nullable|string',
        'location'         => 'nullable|string',
        'order_num'        => 'nullable|integer',
        // 'image_src'        => 'nullable|string',
        'is_payment'       => 'nullable|string'
      ]);

      if ($request->startYear && $request->startMonth && $request->startDay) {
        $firstMonth = strval($request->startMonth);
        if (strlen($firstMonth) < 2) {
          $firstMonth = "0".$firstMonth;
        };
        $firstDay = strval($request->startDay);
        if (strlen($firstDay) < 2) {
          $firstDay = "0".$firstDay;
        };
        $firstDate = strval($request->startYear)."-".$firstMonth."-".$firstDay;
        if ($request->startFullTime) {
          $firstDate = $firstDate." ".$request->startFullTime.":00";
        } else {
          $firstDate = $firstDate." 00:00:00";
        };
      } else {
        $firstDate = null;
      };
      if ($request->endYear && $request->endMonth && $request->endDay) {
        $lastDay = strval($request->endYear)."-".strval($request->endMonth)."-".strval($request->endDay);
        if ($request->endFullTime) {
          $lastDay = $lastDay." ".$request->endFullTime.":00";
        } else {
          $lastDay = $lastDay." 00:00:00";
        };
      } else {
        $lastDay = null;
      };

      $input = Subevent::find($id);

      if ($request->is_payment == "null") {
        $request->is_payment = null;
      };

      if (!$request->startFullTime) {
        $has_start_time = 0;
      } else {
        $has_start_time = 1;
      };

      if (!$request->endFullTime) {
        $has_end_time = 0;
      } else {
        $has_end_time = 1;
      };

      $input['title'] = $request->subeventTitle;
      $input['start_time'] = $firstDate;
      $input['end_time'] = $lastDay;
      $input['has_start_time'] = $has_start_time;
      $input['has_end_time'] = $has_end_time;
      $input['iframe_map_src'] = $request->iframe_map_src;
      $input['classes'] = $request->classes;
      $input['description'] = $request->description;
      $input['location'] = $request->location;
      $input['order_number'] = $request->order_num;
      // $input['image_src'] = $request->imgSource;
      $input['is_payment'] = $request->is_payment;
      $input['event_id'] = $event_id;

      $input->save();

      return redirect()->route('edit.event.index',['id' => $event_id]);
    }


    public function delete_subevent_index($event_id, $id) {
      $subevent = Subevent::find($id);

      return view('admin.delete_subevent',[
        'id' => $id,
        'event_id' => $event_id,
        'subevent' => $subevent
      ]);
    }


    public function delete_subevent_post($event_id, $id) {
      Subevent::where('id',$id)->delete();

      return redirect()->route('edit.event.index',['id' => $event_id]);
    }


    public function payment_history_index() {
      $all_payments = Payment::orderBy('created_at','desc')->paginate(20);

      return view('admin.all_payments',[
        'all_payments' => $all_payments
      ]);
    }

    public function membership_list_index() {
      $all_applications = Applicant::where('type','membership')->orderBy('created_at','desc')->paginate(20);

      return view('admin.all_member_applications',[
        'all_applications' => $all_applications
      ]);
    }

    public function reunion_list_index() {
      $all_applications = Applicant::where('type','reunion')->orderBy('created_at','desc')->paginate(20);

      return view('admin.all_reunion_applications',[
        'all_applications' => $all_applications
      ]);
    }

    // public function upload_all_casualties() {
    //   $query = DB::connection('heroku')->select('select * from casualties where id > :id',['id' => 8464]);
    //
    //   foreach ($query as $one_query) {
    //
    //     $random_password = '';
    //     $all_characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    //     $character_count = strlen($all_characters);
    //     for ($i = 0; $i < 20; $i++) {
    //       $random_password .=  $all_characters[random_int(0,$character_count - 1)];
    //     };
    //     $encrypted = Hash::make($random_password);
    //
    //     DB::connection('qra')
    //       ->insert('
    //         insert into users (
    //           id, password, first_name, middle_name, last_name, `rank`, kia_location, injury_type, city, state, burial_site, day_of_death, month_of_death, year_of_death, comments, veteran_img, unit, when_displayed, deceased
    //         ) values (
    //           :id, :password, :first_name, :middle_name, :last_name, :rank, :kia_location, :injury_type, :city, :state, :burial_site, :day_of_death, :month_of_death, :year_of_death, :comments, :veteran_img, :unit, :when_displayed, :deceased
    //         )',
    //         [
    //           ':id' => $one_query->id,
    //           ':password' => $encrypted,
    //           ':first_name' => $one_query->first_name,
    //           ':middle_name' => $one_query->middle_name,
    //           ':last_name' => $one_query->last_name,
    //           ':rank' => $one_query->rank,
    //           ':kia_location' => $one_query->place,
    //           ':injury_type' => $one_query->injury_type,
    //           ':city' => $one_query->city,
    //           ':state' => $one_query->state,
    //           ':burial_site' => $one_query->burial_site,
    //           ':day_of_death' => $one_query->day_of_death,
    //           ':month_of_death' => $one_query->month_of_death,
    //           ':year_of_death' => $one_query->year_of_death,
    //           ':comments' => $one_query->comments,
    //           ':veteran_img' => $one_query->photo,
    //           ':unit' => $one_query->unit,
    //           ':when_displayed' => $one_query->when_displayed,
    //           ':deceased' => 1
    //         ]
    //       );
    //   };
    //
    //   return view('welcome');
    // }
}
