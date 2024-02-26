<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;
use App\Models\Event;
use App\Models\Subevent;
use App\Models\Payment;
use App\Models\Item;
use App\Models\Applicant;
use App\Models\Conflict;
use App\Models\Link;
use App\Models\Timespan;
use App\Models\Bulletin;

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

      unset($role_model);
      unset($users_permissions);

      return view('admin.index',[
        'current_user' => $current_user,
        'user_roles' => $user_roles,
        'all_permission_data' => $all_permission_data
      ]);
    }

    public function add_member_index() {
      $can_edit_casualty = Auth::user()->check_for_permission("Edit Casualty Records");
      $can_edit_recipient = Auth::user()->check_for_permission("Edit MOH Recipient Records");
      $all_reg_options = Item::where('purpose','registration.index')->get();
      $oldest_date = intval(date("Y")) - 100;
      $all_conflicts = Conflict::where('end_year','>',$oldest_date)->orderBy('end_year','ASC')->get();

      unset($oldest_date);

      return view('admin.new_user',[
        'can_edit_casualty' => $can_edit_casualty,
        'can_edit_recipient' => $can_edit_recipient,
        'all_reg_options' => $all_reg_options,
        'all_conflicts' => $all_conflicts
      ]);
    }

    public function add_member_post(Request $request) {

      if (!$request['isKiaMia']) {
        $request['isKiaMia'] = 0;
      };
      if (!$request['isRecipient']) {
        $request['isRecipient'] = 0;
      };

      if ($request->email != null) {
        $setting = 'required|string|unique:users';
      } else {
        $setting = 'nullable|string';
      };

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => $setting,
        'currentImg'       => 'nullable|file',
        'veteranImg'       => 'nullable|file',
        // 'tombstoneImg'     => 'nullable|file',
        'phoneNumber'      => 'nullable|string',
        'spouse'           => 'nullable|string',
        'isDeceased'       => 'required|integer',
        'monthOfDeath'     => 'nullable|integer|min:1|max:12',
        'dayOfDeath'       => 'nullable|integer|min:1|max:31',
        'yearOfDeath'      => 'nullable|integer|min:1808|max:3000',
        'comments'         => 'nullable|string',
        'isKiaMia'         => 'required|integer',
        'isRecipient'      => 'required|integer',
        'membershipStatus' => 'required|string',
        'honoraryMember'   => 'required|integer',
        'associateMember'  => 'nullable|string',
        'rank'             => 'nullable|string',
        'burialSite'       => 'nullable|string',
        'timespanIndexList' => 'nullable|string',
        'conflictTotal' => 'required|string'
      ]);

      if ($request->isKiaMia == 1 || $request->isKiaMia == "1") {
        $request->isDeceased = 1;
      };

      if ($request->monthOfDeath || $request->dayOfDeath || $request->yearOfDeath) {
        $request->isDeceased = 1;
      };

      $input['first_name'] = $request->firstName;
      $input['middle_name'] = $request->middleName;
      $input['last_name'] = $request->lastName;
      $input['email'] = $request->email;
      $input['email_visible'] = 1;
      $input['phone_number'] = $request->phoneNumber;
      $input['phone_visible'] = 1;
      $input['spouse'] = $request->spouseName;
      $input['current_img'] = $request->currentImg;
      $input['veteran_img'] = $request->veteranImg;
      $input['deceased'] = $request->isDeceased;
      $input['burial_site'] = $request->burialSite;
      $input['honorary_member'] = $request->honoraryMember;
      $input['associated_by'] = $request->associateMember;
      $input['month_of_death'] = $request->monthOfDeath;
      $input['day_of_death'] = $request->dayOfDeath;
      $input['year_of_death'] = $request->yearOfDeath;
      $input['comments'] = $request->comments;
      $input['rank'] = $request->rank;
      $input['kia_or_mia'] = $request->isKiaMia;
      $input['moh_recipient'] = $request->isRecipient;

      $random_password = '';
      $all_characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
      $character_count = strlen($all_characters);
      for ($i = 0; $i < 20; $i++) {
        $random_password .=  $all_characters[random_int(0,$character_count - 1)];
      };
      $input['password'] = Hash::make($random_password);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'images';
      //   $public_path = 'storage/images';
      // } else {
      //   $storagePath = 'public/images';
      //   $public_path = 'storage/images';
      // };

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'public/images';
      // } else {
        $storagePath = 'public/images';
      // };

      // Add member's current photo
      if (request('currentImg')) {
        $input['current_img'] = request('currentImg')->store($storagePath."/current");
        $filename = request('currentImg')->hashName();
        $input['current_img'] = $filename;
      };
      // Add member's veteran photo while in service
      if (request('veteranImg')) {
        $input['veteran_img'] = request('veteranImg')->store($storagePath."/veteran");
        $filename = request('veteranImg')->hashName();
        $input['veteran_img'] = $filename;
      };
      /* // Add bobcat's tombstone photo while in service
      if (request('tombstoneImg')) {
        $input['tombstone_img'] = request('tombstoneImg')->store($storagePath);
        $filename = request('tombstoneImg')->hashName();
        $input['tombstone_img'] = $public_path."/".$filename;
      };
      */

      $start_date = date("Y-m-d H:i:s");
      $all_reg_options = Item::where('purpose','registration.index')->get();

      $item_status = false;
      foreach ($all_reg_options as $one_option) {
        if ($request->membershipStatus == $one_option->id) {
          $item_status = "permanent";
          if ($one_option->how_long != null) {
            $item_status = $one_option->how_long;
          };
        };
      };

      if ($request->membershipStatus != 'nonmember' && $request->isDeceased == 1) {
        $timestamp = '1970-01-01 00:00:00';
      } elseif ($request->membershipStatus == 'nonmember') {
        $timestamp = null;
      } elseif ($request->membershipStatus == 'start_trial') {
        $timestamp = date("Y-m-d H:i:s",strtotime($start_date." +30 days"));
      } elseif ($item_status == "permanent") {
        $timestamp = '1970-01-01 00:00:00';
      } elseif ($item_status != "permanent") {
        $timestamp = date("Y-m-d H:i:s",strtotime($start_date." +".$item_status));
      };
      $input['expiration_date'] = $timestamp;

      $new_user = User::create($input);

      if ($request->timespanIndexList != null && $request->timespanIndexList != "") {
        $string = $request->timespanIndexList;
        $stringArray = explode(",",$string);
        for ($i = 0; count($stringArray) > $i; $i++) {
          $jobKey = 'timespanJob_'.$stringArray[$i];
          $unitKey = 'timespanUnit_'.$stringArray[$i];
          $startMonthKey = 'startMonth_'.$stringArray[$i];
          $startYearKey = 'startYear_'.$stringArray[$i];
          $endMonthKey = 'endMonth_'.$stringArray[$i];
          $endYearKey = 'endYear_'.$stringArray[$i];
          $request->validate([
            $jobKey => 'nullable|string',
            $unitKey => 'nullable|string',
            $startMonthKey => 'nullable|numeric|min:1|max:12',
            $startYearKey => 'nullable|numeric|min:1812|max:3000',
            $endMonthKey => 'nullable|numeric|min:1|max:12',
            $endYearKey => 'nullable|numeric|min:1812|max:3000',
          ]);
          if ($request[$jobKey] || $request[$unitKey] || $request[$startMonthKey] || $request[$startYearKey] || $request[$endMonthKey] || $request[$endYearKey]) {
            $new_timespan = new Timespan;
            $new_timespan->job = $request[$jobKey];
            $new_timespan->unit = $request[$unitKey];
            $new_timespan->start_month = $request[$startMonthKey];
            $new_timespan->start_year = $request[$startYearKey];
            $new_timespan->end_month = $request[$endMonthKey];
            $new_timespan->end_year = $request[$endYearKey];
            $new_timespan->user_id = $new_user->id;
            $new_timespan->save();
          };
        };
      };

      $conflict_total = intval($request->conflictTotal);
      if ($conflict_total > 0) {
        for ($i = 1; $i <= $conflict_total; $i++) {
          $this_conflict = 'conflict_'.strval($i);
          if ($request[$this_conflict] == true) {
            $request->validate([
              $this_conflict => 'required|integer'
            ]);

            $conflict = Conflict::find($request[$this_conflict]);
            $user_conflicts = User::find($new_user->id)->all_user_conflicts;
            // Below is to see if the current conflict is already attached.
            $child_already_selected = false;
            foreach ($user_conflicts as $child_check) {
              if ($child_check->id == $conflict->id) {
                $child_already_selected = true;
              };
            };
            // Below is to see if a child conflict has already attached this conflict
            $parent_already_selected = false;
            foreach ($user_conflicts as $parent_check) {
              if ($parent_check->id == $conflict->parent_id) {
                $parent_already_selected = true;
              };
            };

            if ($child_already_selected == false) {
              User::find($new_user->id)->all_user_conflicts()->attach($conflict->id);
              if ($conflict->member_participated == 0) {
                $conflict->member_participated = 1;
                $conflict->save();
              };
              if ($parent_already_selected == false && $conflict->parent_id != null) {
                User::find($new_user->id)->all_user_conflicts()->attach($conflict->parent_id);
                $parent_conflict = Conflict::find($conflict->parent_id);
                if ($parent_conflict->member_participated == 0) {
                  $parent_conflict->member_participated = 1;
                  $parent_conflict->save();
                };
              };
            };
          };
        };
      };

      $role_id = Role::where('slug','basic-member')->first();

      if ($input['expiration_date'] != null) {
        $new_user->all_user_roles()->attach($role_id);
      };

      $can_edit_casualty = Auth::user()->check_for_permission("Edit Casualty Records");
      $can_edit_recipient = Auth::user()->check_for_permission("Edit MOH Recipient Records");

      unset($input);
      unset($role_id);
      unset($conflict_total);
      unset($timestamp);
      unset($start_date);
      unset($all_reg_options);
      unset($item_status);
      unset($storagePath);
      unset($random_password);
      unset($all_characters);
      unset($character_count);

      if ($request->isKiaMia == 1 && $can_edit_casualty && $request->isRecipient == 1 && $can_edit_recipient) {
        unset($can_edit_casualty);
        unset($can_edit_recipient);
        return redirect()->route('edit.casualty.index',[
          'id' => $new_user->id,
          'next_route' => 'edit-recipient'
        ]);
      } elseif ($request->isKiaMia == 1 && $can_edit_casualty) {
        unset($can_edit_casualty);
        unset($can_edit_recipient);
        return redirect()->route('edit.casualty.index',[
          'id' => $new_user->id,
          'next_route' => 'casualty-list'
        ]);
      } elseif ($request->isRecipient == 1 && $can_edit_recipient) {
        unset($can_edit_casualty);
        unset($can_edit_recipient);
        return redirect()->route('edit.recipient.index',[
          'id' => $new_user->id
        ]);
      } else {
        unset($can_edit_casualty);
        unset($can_edit_recipient);
        return redirect()->route('admin.index');
      };
    }

    public function edit_member_index($id) {
      $member = User::find($id);
      if ($member->expiration_date != '1970-01-01 00:00:00' && $member->expiration_date != null) {
        $status = "temporary";
      } elseif ($member->expiration_date == '1970-01-01 00:00:00') {
        $status = "permanent";
      } elseif ($member->expiration_date == null) {
        $status = "nonmember";
      };

      $all_timespans = Timespan::where('user_id',$id)->get();

      $all_conflicts = Conflict::orderBy('start_year','ASC')->get();

      $member_conflicts = $member->all_user_conflicts()->get();

      foreach ($all_conflicts as $one_overall) {
        $one_overall->selected = false;
        foreach ($member_conflicts as $member_conflict) {
          if ($one_overall->id == $member_conflict->id) {
            $one_overall->selected = true;
          };
        };
      };

      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);
      $can_edit_recipient = false;
      $can_edit_member = false;
      $can_edit_casualty = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit MOH Recipient Records") {
          $can_edit_recipient = true;
        };
        if ($users_permissions[$num][0] == "Edit A Member") {
          $can_edit_member = true;
        };
        if ($users_permissions[$num][0] == "Edit Casualty Records") {
          $can_edit_casualty = true;
        };
      };

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      // } else {
      //   $imagePath = 'public/images';
      // };

      return view('admin.edit_user',[
        'id'     => $id,
        'member' => $member,
        'status' => $status,
        'can_edit_recipient' => $can_edit_recipient,
        'can_edit_member' => $can_edit_member,
        'can_edit_casualty' => $can_edit_casualty,
        'image_path' => $imagePath,
        'all_timespans' => $all_timespans,
        'all_conflicts' => $all_conflicts
      ]);
    }

    public function edit_member_post(Request $request,$id) {

      $member = User::find($id);

      if ($request['isKiaMia'] == null) {
        $request['isKiaMia'] = $member->kia_or_mia;
      };
      if ($request['isRecipient'] == null) {
        $request['isRecipient'] = $member->moh_recipient;
      };

      $current_email = $member->email;
      if ($request->email != null) {
        if ($request->email == $current_email) {
          $setting = 'required|string';
        } else {
          $setting = 'required|string|unique:users';
        };
      } else {
        $setting = 'nullable|string';
      };

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => $setting,
        'phoneNumber'      => 'nullable|string',
        'spouseName'       => 'nullable|string',
        'currentImg'       => 'nullable|file',
        'veteranImg'       => 'nullable|file',
        'rank'             => 'nullable|string',
        // 'biography'        => 'nullable|string',
        'associateMember'  => 'nullable|string',
        'honoraryMember'   => 'required|integer',
        'isDeceased'       => 'required|integer',
        'burialSite'       => 'nullable|string',
        'monthOfDeath'     => 'nullable|integer|min:1|max:12',
        'dayOfDeath'       => 'nullable|integer|min:1|max:31',
        'yearOfDeath'      => 'nullable|integer|min:1808|max:3000',
        'comments'         => 'nullable|string',
        'isKiaMia'         => 'required|integer',
        'isRecipient'      => 'required|integer',
        // 'action'           => 'required',
        'mailingAddress'   => 'nullable|string',
        'conflictTotal'    => 'required|string'
      ]);

      // $old_current_filename = $member->current_img;
      // $old_veteran_filename = $member->veteran_img;

      $member->first_name = $request['firstName'];
      $member->middle_name = $request['middleName'];
      $member->last_name = $request['lastName'];
      $member->email = $request['email'];
      $member->phone_number = $request['phoneNumber'];
      $member->spouse = $request['spouseName'];
      $member->rank = $request['rank'];
      // $member->current_img = $request->currentImg;
      // $member->veteran_img = $request->veteranImg;
      // $member->biography = $request['biography'];
      $member->honorary_member = $request['honoraryMember'];
      $member->associated_by = $request['associateMember'];
      $member->deceased = $request['isDeceased'];
      $member->burial_site = $request['burialSite'];
      $member->month_of_death = $request['monthOfDeath'];
      $member->day_of_death = $request['dayOfDeath'];
      $member->year_of_death = $request['yearOfDeath'];
      $member->comments = $request['comments'];
      $member->mailing_address = $request['mailingAddress'];
      $member->kia_or_mia = $request['isKiaMia'];
      $member->moh_recipient = $request['isRecipient'];

      if ($member->kia_or_mia == 1) {
        $member->deceased = 1;
      };

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'public/images';
      // } else {
        $storagePath = 'public/images';
      // };

      /*
      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };
      */

      if (request('currentImg')) {
        $old_current_filename = $member->current_img;
        $member['current_img'] = request('currentImg')->store($storagePath."/current");
        $filename = request('currentImg')->hashName();
        $member->current_img = $filename;
        if ($old_current_filename != null) {
          Storage::delete($storagePath."/current/".$old_current_filename);
        };
      };
      if (request('veteranImg')) {
        $old_veteran_filename = $member->veteran_img;
        $member['veteran_img'] = request('veteranImg')->store($storagePath."/veteran");
        $filename = request('veteranImg')->hashName();
        $member->veteran_img = $filename;
        if ($old_veteran_filename != null) {
          Storage::delete($storagePath."/veteran/".$old_veteran_filename);
        };
      };

      $member->save();

      $past_conflicts = $member->all_user_conflicts;
      foreach ($past_conflicts as $one_conflict) {
        $member->all_user_conflicts()->detach($one_conflict->id);
        $users_left = count($one_conflict->all_conflict_users);
        if ($users_left <= 1) {
          $one_conflict->member_participated = 0;
          $one_conflict->save();
        };
      };
      $conflict_total = intval($request->conflictTotal);
      if ($conflict_total > 0) {
        // $all_conflicts = Conflict::all();
        for ($i = 1; $i <= $conflict_total; $i++) {
          $this_conflict = 'conflict_'.strval($i);
          if ($request[$this_conflict] == true) {
            $request->validate([
              $this_conflict => 'required|integer'
            ]);

            $conflict = Conflict::find($request[$this_conflict]);
            $user_conflicts = User::find($member->id)->all_user_conflicts;
            // Below is to see if the current conflict is already attached.
            $child_already_selected = false;
            foreach ($user_conflicts as $child_check) {
              if ($child_check->id == $conflict->id) {
                $child_already_selected = true;
              };
            };
            // Below is to see if a child conflict has already attached this conflict
            $parent_already_selected = false;
            foreach ($user_conflicts as $parent_check) {
              if ($parent_check->id == $conflict->parent_id) {
                $parent_already_selected = true;
              };
            };

            if ($child_already_selected == false) {
              User::find($member->id)->all_user_conflicts()->attach($conflict->id);
              if ($parent_already_selected == false && $conflict->parent_id != null) {
                User::find($member->id)->all_user_conflicts()->attach($conflict->parent_id);
              };
            };

            $conflict->member_participated = 1;
            $conflict->save();
            if ($conflict->parent_id != null) {
              $parent_conflict = Conflict::find($conflict->parent_id);
              $parent_conflict->member_participated = 1;
              $parent_conflict->save();
            };
          };
        };
      };

      return redirect()->route('edit.member.list');
    }

    public function edit_member_deadline_index($id) {
      $member = User::find($id);
      $all_registration_options = Item::where('purpose','registration.index')->get();
      return view('admin.edit_deadline',[
        'member' => $member,
        'all_options' => $all_registration_options
      ]);
    }

    public function edit_member_deadline_permanent($id) {
      $member = User::find($id);
      $member->expiration_date = '1970-01-01 00:00:00';
      $member->save();

      $role_id = Role::where('slug','basic-member')->first();

      $already_member = $member->check_for_role('Bobcat Member');
      if ($already_member == false) {
        $member->all_user_roles()->attach($role_id);
      };

      $member_conflict = $member->all_user_conflicts;
      foreach ($member_conflict as $one_conflict) {
        if ($one_conflict->member_participated == 0) {
          $one_conflict->member_participated = 1;
          $one_conflict->save();
        };
      };

      return redirect()->route('edit.member.index',['id' => $id]);
    }

    public function edit_member_deadline_nonmember($id) {
      $member = User::find($id);

      $past_roles = $member->all_user_roles;
      foreach ($past_roles as $one_role) {
        $member->all_user_roles()->detach($one_role->id);
      };

      $member_conflict = $member->all_user_conflicts;
      foreach ($member_conflict as $one_conflict) {
        $check_conflict = Conflict::find($one_conflict->id);
        $user_count = count($check_conflict->all_conflict_users);
        if ($user_count <= 1) {
          $check_conflict->member_participated = 0;
          $check_conflict->save();
        };
        if ($check_conflict->parent_id) {
          $parent_check_conflict = Conflict::find($one_conflict->parent_id);
          $parent_count = count($parent_check_conflict->all_conflict_users);
          if ($parent_count <= 1) {
            $parent_check_conflict->member_participated = 0;
            $parent_check_conflict->save();
          };
        };
      };

      $member->expiration_date = null;
      $member->save();

      return redirect()->route('edit.member.list',['id' => $id]);
    }

    public function edit_member_deadline_manual(Request $request,$id) {
      $request->validate([
        'yearNumber' => 'required|numeric',
        'monthNumber' => 'required|numeric',
        'dayNumber' => 'required|numeric'
      ]);

      $custom_date = $request->yearNumber."-".$request->monthNumber."-".$request->dayNumber." 00:00:00";

      $member = User::find($id);
      $member->expiration_date = $custom_date;
      $member->save();

      $role_id = Role::where('slug','basic-member')->first();

      $already_member = $member->check_for_role('Bobcat Member');
      if ($already_member == false) {
        $member->all_user_roles()->attach($role_id);
      };

      $member_conflict = $member->all_user_conflicts;
      foreach ($member_conflict as $one_conflict) {
        if ($member->deceased == 1 && $one_conflict->member_participated == 0) {
          $one_conflict->member_participated = 1;
          $one_conflict->save();
        };
      };

      return redirect()->route('edit.member.index',['id' => $id]);
    }

    public function add_member_timespan_index($id) {
      return view('admin.new_timespan',[
        'id' => $id
      ]);
    }

    public function add_member_timespan_post(Request $request,$id) {

      $request->validate([
        'startMonth' => 'nullable|integer',
        'startYear' => 'required|integer',
        'endMonth' => 'nullable|integer',
        'endYear' => 'nullable|integer',
        'job' => 'nullable|string',
        'unit' => 'nullable|string'
      ]);

      $timespan = new Timespan;
      $timespan->start_month = $request->startMonth;
      $timespan->start_year = $request->startYear;
      $timespan->end_month = $request->endMonth;
      $timespan->end_year = $request->endYear;
      $timespan->job = $request->job;
      $timespan->unit = $request->unit;
      $timespan->user_id = $id;

      $timespan->save();

      return redirect()->route('edit.member.index',[
        'id' => $id
      ]);
    }

    public function edit_member_timespan_index($id,$timespan_id) {
      $timespan = Timespan::find($timespan_id);
      return view('admin.edit_timespan',[
        'timespan' => $timespan,
        'id' => $id
      ]);
    }

    public function edit_member_timespan_post(Request $request,$id,$timespan_id) {

      $request->validate([
        'startMonth' => 'nullable|integer',
        'startYear' => 'required|integer',
        'endMonth' => 'nullable|integer',
        'endYear' => 'nullable|integer',
        'job' => 'nullable|string',
        'unit' => 'nullable|string'
      ]);

      $timespan = Timespan::find($timespan_id);
      if ($request->startMonth == 0) {
        $timespan->start_month = null;
      } else {
        $timespan->start_month = $request->startMonth;
      };
      $timespan->start_year = $request->startYear;
      if ($request->endMonth == 0) {
        $timespan->end_month = null;
      } else {
        $timespan->end_month = $request->endMonth;
      };
      $timespan->end_year = $request->endYear;
      $timespan->job = $request->job;
      $timespan->unit = $request->unit;

      $timespan->save();

      return redirect()->route('edit.member.index',[
        'id' => $id
      ]);
    }

    public function delete_member_timespan($id,$timespan_id) {

      Timespan::where('id',$timespan_id)->delete();

      return redirect()->route('edit.member.index',['id' => $id]);
    }

    public function image_member_index($id,$img_type,$edit_type) {
      $member = User::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      // } else {
      //   $imagePath = 'public/images';
      // };

      $return_route = 'edit.'.$edit_type.'.index';
      $delete_method = 'image.member.delete';

      return view('admin.delete_image',[
        'member' => $member,
        'img_type' => $img_type,
        'image_path' => $imagePath,
        'return_name' => $return_route,
        'delete_method' => $delete_method
      ]);
    }

    public function image_member_delete($id,$img_type) {

      $member = User::find($id);

      $storagePath = 'public/images';

      if ($img_type == 'current') {
        Storage::delete($storagePath."/current/".$member->current_img);
        $member->current_img = null;
        $member->save();
      } elseif ($img_type == 'veteran') {
        Storage::delete($storagePath."/veteran/".$member->veteran_img);
        $member->veteran_img = null;
        $member->save();
      };

      return redirect()->route('edit.member.index',['id' => $id]);
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

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      // } else {
      //   $imagePath = 'public/images';
      // };

      return view('admin.delete_user',[
        'id'     => $id,
        'member' => $member,
        'status' => $status,
        'image_path' => $imagePath
      ]);
    }

    public function delete_member_post($id) {
      $member = User::find($id);

      if ($member->current_img) {
        $fileWithPath = "public/images/current/".$member->current_img;
        Storage::delete($member->current_img);
      };
      if ($member->veteran_img) {
        $fileWithPath = "public/images/veteran/".$member->veteran_img;
        Storage::delete($member->veteran_img);
      };

      $past_roles = $member->all_user_roles;
      foreach ($past_roles as $one_role) {
        $member->all_user_roles()->detach($one_role->id);
      };

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $storagePath = 'public/images';
        // $public_path = 'storage/images';
      // } else {
      //   $storagePath = 'public/images';
      //   $public_path = 'images';
      // };

      if ($member->current_img) {
        Storage::delete($storagePath."/current/".$member->current_img);
      };
      if ($member->veteran_img) {
        Storage::delete($storagePath."/veteran/".$member->veteran_img);
      };

      Link::where('user_id',$member->id)->delete();

      Timespan::where('user_id',$member->id)->delete();

      $all_conflicts = Conflict::all();
      foreach ($all_conflicts as $one_conflict) {
        $member->all_user_conflicts()->detach($one_conflict);
      };

      User::where('id',$id)->delete();
      return redirect()->route('delete.member.list');
    }

    public function all_members($search_type = 'current',$name = null) {
      // $all_users = User::all();
      if ($search_type == 'all') {
        $where_conditions = [
          ['expiration_date','!=',null]
        ];
      } elseif ($search_type == 'deceased') {
        $where_conditions = [
          ['deceased','=',1],
          ['expiration_date','!=',null]
        ];
      } else {
        $where_conditions = [
          ['deceased','=',0],
          ['expiration_date','!=',null]
        ];
      };

      if ($name != null) {
        $first_name_conditions = $where_conditions;
        $first_name_conditions[] = ['first_name','LIKE',$name.'%'];
        $last_name_conditions = $where_conditions;
        $last_name_conditions[] = ['last_name','LIKE',$name.'%'];
        $all_users = User::where($first_name_conditions)
          ->orWhere($last_name_conditions)
          ->orderBy('last_name','asc')
          ->orderBy('first_name','asc')
          ->orderBy('middle_name','asc')
          ->paginate(20);
      } else {
        $all_users = User::where($where_conditions)
          ->orderBy('last_name','asc')
          ->orderBy('first_name','asc')
          ->orderBy('middle_name','asc')
          ->paginate(20);
      };

      $current_user = Auth::user();
      // $user_roles = User::find($current_user->id)->all_user_roles;
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
        if ($users_permissions[$num][0] == "Delete A Nonmember") {
          $can_delete = true;
        };
      };

      // This unsets data that is not needed by 'view'
      unset($current_user);
      unset($users_permissions);
      unset($role_model);

      return view('admin.all_members',[
        'all_members' => $all_users,
        'can_assign' => $can_assign,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete,
        'search_type' => $search_type,
        'name' => $name
      ]);
    }

    public function all_members_search(Request $request,$search_type) {
      $request->validate([
        'memberName' => 'string|nullable|max:100'
      ]);

      return redirect()->route('edit.member.list',['search_type' => $search_type,'name' => $request->memberName]);
    }

    public function all_nonmembers() {
      // $all_users = User::all();
      $all_users = User::where([
          ['expiration_date',null],
          ['kia_or_mia','0'],
          ['moh_recipient','0']
        ])
        ->orderBy('last_name','asc')
        ->orderBy('first_name','asc')
        ->orderBy('middle_name','asc')
        ->paginate(20);

      $current_user = Auth::user();
      // $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_edit_member = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit A Member") {
          $can_edit_member = true;
        };
      };

      $can_edit_casualty = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit Casualty Records") {
          $can_edit_casualty = true;
        };
      };

      $can_edit_recipient = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit MOH Recipient Records") {
          $can_edit_recipient = true;
        };
      };

      $can_delete_person = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete A Nonmember") {
          $can_delete_person = true;
        };
      };

      // This unsets data that is not needed by 'view'
      unset($current_user);
      unset($user_roles);
      unset($users_permissions);

      return view('admin.all_nonmembers',[
        'all_nonmembers' => $all_users,
        'can_edit_member' => $can_edit_member,
        'can_edit_casualty' => $can_edit_casualty,
        'can_edit_recipient' => $can_edit_recipient,
        'can_delete_person' => $can_delete_person
      ]);
    }

    public function edit_casualty_index($id,$next_route) {
      $casualty = User::find($id);
      if ($casualty->expiration_date == null) {
        $status = "nonmember";
      } else {
        $status = "member";
      };

      $all_links = Link::where([
        ['user_id',$id],
        ['is_casualty_link',1]
      ])->orderBy('name','asc')->get();

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);
      $can_edit_recipient = false;
      $can_edit_member = false;
      $can_edit_casualty = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit MOH Recipient Records") {
          $can_edit_recipient = true;
        };
        if ($users_permissions[$num][0] == "Edit A Member") {
          $can_edit_member = true;
        };
        if ($users_permissions[$num][0] == "Edit Casualty Records") {
          $can_edit_casualty = true;
        };
      };

      $all_conflicts = Conflict::orderBy('start_year')->get();

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      // } else {
      //   $imagePath = 'public/images';
      // };

      return view('admin.edit_casualty',[
        'id'     => $id,
        'casualty' => $casualty,
        'status' => $status,
        'can_edit_recipient' => $can_edit_recipient,
        'can_edit_member' => $can_edit_member,
        'can_edit_casualty' => $can_edit_casualty,
        'all_conflicts' => $all_conflicts,
        'all_links' => $all_links,
        'image_path' => $imagePath,
        'next_route' => $next_route
      ]);
    }

    public function edit_casualty_post(Request $request,$id,$next_route) {

      // $casualty = User::find($id);

      // if (!$request['membershipStatus'] || $casualty->expiration_date == null) {
      //   $request['membershipStatus'] = "nonmember";
      // } else {
      //   $request['membershipStatus'] = "1970-01-01 00:00:00";
      // };
      // if (!$request['mohStatus']) {
      //   $request['mohStatus'] = $casualty->moh_recipient;
      // };

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'rank'             => 'nullable|string',
        'veteranImg'       => 'nullable|file',
        'kiaLocation'      => 'nullable|string',
        'injuryType'       => 'nullable|string',
        'city'             => 'nullable|string',
        'state'            => 'nullable|string',
        'burialSite'       => 'nullable|string',
        'monthOfDeath'     => 'nullable|integer|min:1|max:12',
        'dayOfDeath'       => 'nullable|integer|min:1|max:31',
        'yearOfDeath'      => 'nullable|integer|min:1800|max:3000',
        'comments'         => 'nullable|string',
        'membershipStatus' => 'required|string',
        'mohStatus'        => 'required|integer',
        'conflictId'       => 'required|numeric'
      ]);

      $casualty = User::find($id);

      if ($request['membershipStatus'] == "nonmember") {
        $membershipStatus = null;
      } else {
        $membershipStatus = "1970-01-01 00:00:00";
      };

      // // Checks to see if there are no casualties in the conflict that this person used to be in
      // if ($casualty->casualty_conflict_id != $request['conflictId']) {
      //   $init_count = User::where([
      //       ['casualty_conflict_id',$casualty->casualty_conflict_id],
      //       ['kia_or_mia',1]
      //     ])->count();
      //   if ($init_count <= 1) {
      //     $init_conflict = Conflict::find($casualty->casualty_conflict_id);
      //     $init_conflict->bobcat_casualties = 0;
      //     $init_conflict->save();
      //   };
      // };
      // // Makes sure that this user's conflict is made active
      // $new_conflict = Conflict::find($request['conflictId']);
      // if ($new_conflict->bobcat_casualties == 0) {
      //   $new_conflict->bobcat_casualties = 1;
      //   $new_conflict->save();
      // };

      // Checks to see if old conflict still has casualties, either directly or from a 'child' conflict. If it doesn't, then it changes the 'bobcat_casualties' in that conflict to 'false'.
      $init_casualty_conflict = Conflict::find($casualty->casualty_conflict_id);
      if ($init_casualty_conflict != null && $casualty->casualty_conflict_id != $request->conflictId) {
        // The $init_casualty_conflict_id == null happens when a new user or previously non-casualty user is being switched to being a casualty
        $init_casualty_conflict_id = $init_casualty_conflict->id;
        // It starts by only adding the casualties directly connected to the old conflict
        $init_casualty_count = User::where('casualty_conflict_id',$init_casualty_conflict_id)->count();
        $old_conflict_count = $init_casualty_count;
        // If the old conflict is a 'parent' conflict, then it counts the casualties of its 'child' conflicts
        $other_child_conflicts = Conflict::where([
          ['parent_id',$init_casualty_conflict_id],
          ['id','!=',$id]
        ])->get();
        foreach ($other_child_conflicts as $one_conflict) {
          $casualties = User::where('casualty_conflict_id',$one_conflict->id)->count();
          $init_casualty_count += $casualties;
        };
        // This subtracts the casualty that leaving the old conflict
        // if ($casualty->casualty_conflict_id != $request->conflictId) {
          $init_casualty_count -= 1;
        // };
        // With the old conflict's total complete, it is decided if the old conflict should be active or not
        $init_conflict = Conflict::find($init_casualty_conflict_id);
        if ($init_casualty_count > 0) {
          $init_conflict->bobcat_casualties = 1;
        } else {
          $init_conflict->bobcat_casualties = 0;
        };
        // With that done, the changes are saved
        $init_conflict->save();
        // Side detail: if a) the old conflict is a 'child' conflict and b) the old conflict is now empty, then this checks to see if its old 'parent' conflict is also empty.
        if ($init_conflict->parent_id != null && $old_conflict_count - 1 <= 0) {
          $old_parent_conflict = Conflict::find($init_conflict->parent_id);
          $old_parent_count = User::where([
            ['casualty_conflict_id',$old_parent_conflict->id],
            ['id','!=',$casualty->id]
          ])->count();
          $old_child_conflicts = Conflict::where('parent_id',$old_parent_conflict->id)->get();
          $old_child_count = 0;
          foreach ($old_child_conflicts as $one_child_conflict) {
            $another_count = User::where([
              ['casualty_conflict_id',$one_child_conflict->id],
              ['id','!=',$casualty->id]
            ])->count();
            $old_child_count += $another_count;
          };
          if ($old_parent_count + $old_child_count == 0) {
            $old_parent_conflict->bobcat_casualties = 0;
            $old_parent_conflict->save();
          };
        };
      };
      // Activates the new conflict (as well as its 'parent' conflict, if has one) by switching their 'bobcat_casualties' to 'true'
      $new_conflict = Conflict::find($request->conflictId);
      $new_conflict->bobcat_casualties = 1;
      $new_conflict->save();
      if ($new_conflict->parent_id != null) {
        $new_parent = Conflict::find($new_conflict->parent_id);
        $new_parent->bobcat_casualties = 1;
        $new_parent->save();
      };

      $casualty->first_name = $request['firstName'];
      $casualty->middle_name = $request['middleName'];
      $casualty->last_name = $request['lastName'];
      $casualty->rank = $request['rank'];
      $casualty->deceased = 1;
      $casualty->kia_or_mia = 1;
      $casualty->kia_location = $request['kiaLocation'];
      $casualty->injury_type = $request['injuryType'];
      $casualty->city = $request['city'];
      $casualty->state = $request['state'];
      $casualty->burial_site = $request['burialSite'];
      $casualty->month_of_death = $request['monthOfDeath'];
      $casualty->day_of_death = $request['dayOfDeath'];
      $casualty->year_of_death = $request['yearOfDeath'];
      $casualty->comments = $request['comments'];
      $casualty->expiration_date = $membershipStatus;
      $casualty->casualty_conflict_id = $request['conflictId'];
      $casualty->moh_recipient = $request['mohStatus'];

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'images';
      //   $public_path = 'storage/images';
      // } else {
        $storagePath = 'public/images';
      //   $public_path = 'images';
      // };

      if (request('veteranImg')) {
        $old_veteran_filename = $casualty->veteran_img;
        $casualty['veteran_img'] = request('veteranImg')->store($storagePath."/veteran");
        $filename = request('veteranImg')->hashName();
        $casualty->veteran_img = $filename;
        if ($old_veteran_filename != null) {
          Storage::delete($storagePath."/veteran/".$old_veteran_filename);
        };
      };

      $casualty->save();

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      if ($next_route == 'edit-recipient') {
        return redirect()->route('edit.recipient.index',[
          'id' => $id
        ]);
      } elseif ($next_route == 'nonmember-list') {
        return redirect()->route('edit.nonmember.list');
      } elseif ($next_route == 'casualty-list') {
        return redirect()->route('edit.casualty.list');
      };
    }

    public function edit_casualty_disable($id) {

      $user = User::find($id);

      $user->kia_or_mia = 0;

      if ($user->casualty_conflict_id) {
        $conflict_count = User::where([
            ['casualty_conflict_id',$user->casualty_conflict_id],
            ['kia_or_mia',1]
          ])->count();
        if ($conflict_count <= 1) {
          $conflict = Conflict::find($user->casualty_conflict_id);
          $conflict->bobcat_casualties = 0;
          $conflict->save();
        };
      };

      $user->save();

      return redirect()->route('edit.casualty.list');
    }

    public function image_casualty_index($id,$img_type,$edit_type) {
      $member = User::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      // } else {
      //   $imagePath = 'public/images';
      // };

      $return_route = 'edit.'.$edit_type.'.index';
      $delete_method = 'image.casualty.delete';

      return view('admin.delete_image',[
        'member' => $member,
        'img_type' => $img_type,
        'image_path' => $imagePath,
        'return_name' => $return_route,
        'delete_method' => $delete_method
      ]);
    }

    public function image_casualty_delete($id,$img_type) {

      $member = User::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'images';
      //   $public_path = 'storage/images';
      // } else {
        $storagePath = 'public/images';
      //   $public_path = 'images';
      // };

      if ($img_type == 'current') {
        Storage::delete($storagePath."/current/".$member->current_img);
        $member->current_img = null;
        $member->save();
      } elseif ($img_type == 'veteran') {
        Storage::delete($storagePath."/veteran/".$member->veteran_img);
        $member->veteran_img = null;
        $member->save();
      };

      return redirect()->route('edit.casualty.index',[
        'id' => $id,
        'next_route' => 'casualty'
      ]);
    }

    public function add_casualty_link_index($id) {
      return view('admin.new_link',[
        'id' => $id,
        'userType' => 'casualty'
      ]);
    }

    public function add_casualty_link_post(Request $request,$id) {
      $request->validate([
        'name' => 'required|string',
        'url' => 'required|string'
      ]);

      $new_link = new Link;
      $new_link->name = $request->name;
      $new_link->url = $request->url;
      $new_link->is_casualty_link = 1;
      $new_link->user_id = $id;

      $new_link->save();

      return redirect()->route('edit.casualty.index',[
        'id' => $id,
        'next_route' => 'casualty-list'
      ]);
    }

    public function edit_casualty_link_index($id,$linkId) {

      $link = Link::where('id',$linkId)->first();

      return view('admin.new_link',[
        'id' => $id,
        'link' => $link,
        'userType' => 'casualty',
        'method' => 'edit'
      ]);
    }

    public function edit_casualty_link_post(Request $request,$id,$linkId) {

      $request->validate([
        'name' => 'required|string',
        'url' => 'required|string'
      ]);

      $link = Link::where([
        ['id',$linkId],
        ['is_casualty_link',1]
      ])->first();
      $link->name = $request->name;
      $link->url = $request->url;
      $link->is_casualty_link = 1;
      $link->user_id = $id;

      $link->save();

      return redirect()->route('edit.casualty.index',[
        'id' => $id,
        'next_route' => 'casualty-list'
      ]);
    }

    public function delete_casualty_link_index($id,$linkId) {

      $link = Link::where([
        ['id',$linkId],
        ['is_casualty_link',1]
      ])->first();

      return view('admin.new_link',[
        'id' => $id,
        'link' => $link,
        'userType' => 'casualty',
        'method' => 'delete'
      ]);
    }

    public function delete_casualty_link_post($id,$linkId) {
      Link::where([
        ['id',$linkId],
        ['is_casualty_link',1]
      ])->delete();

      return redirect()->route('edit.casualty.index',[
        'id' => $id,
        'next_route' => 'casualty-list'
      ]);
    }

    public function add_recipient_link_index($id) {
      return view('admin.new_link',[
        'id' => $id,
        'userType' => 'recipient'
      ]);
    }

    public function add_recipient_link_post(Request $request,$id) {
      $request->validate([
        'name' => 'required|string',
        'url' => 'required|string'
      ]);

      $new_link = new Link;
      $new_link->name = $request->name;
      $new_link->url = $request->url;
      $new_link->is_moh_link = 1;
      $new_link->user_id = $id;

      $new_link->save();

      return redirect()->route('edit.recipient.index',[
        'id' => $id,
        'next_route' => 'recipient-list'
      ]);
    }

    public function edit_recipient_link_index($id,$linkId) {

      $link = Link::where('id',$linkId)->first();

      return view('admin.new_link',[
        'id' => $id,
        'link' => $link,
        'userType' => 'recipient',
        'method' => 'edit'
      ]);
    }

    public function edit_recipient_link_post(Request $request,$id,$linkId) {

      $request->validate([
        'name' => 'required|string',
        'url' => 'required|string'
      ]);

      $link = Link::where([
        ['id',$linkId],
        ['is_moh_link',1]
      ])->first();
      $link->name = $request->name;
      $link->url = $request->url;
      $link->is_moh_link = 1;
      $link->user_id = $id;

      $link->save();

      return redirect()->route('edit.recipient.index',[
        'id' => $id,
        'next_route' => 'recipient-list'
      ]);
    }

    public function delete_recipient_link_index($id,$linkId) {

      $link = Link::where([
        ['id',$linkId],
        ['is_moh_link',1]
      ])->first();

      return view('admin.new_link',[
        'id' => $id,
        'link' => $link,
        'userType' => 'recipient',
        'method' => 'delete'
      ]);
    }

    public function delete_recipient_link_post($id,$linkId) {
      Link::where([
        ['id',$linkId],
        ['is_moh_link',1]
      ])->delete();

      return redirect()->route('edit.recipient.index',[
        'id' => $id,
        'next_route' => 'recipient-list'
      ]);
    }

    public function all_casualties(?string $name = null) {
      if ($name != null) {
        $all_casualties = User::where([
          ['kia_or_mia',"=",1],
          ['first_name','LIKE',$name.'%']
        ])
        ->orWhere([
          ['kia_or_mia',"=",1],
          ['last_name','LIKE',$name.'%']
        ])
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->orderBy('middle_name','asc')
        ->paginate(20);
      } else {
        $all_casualties = User::where('kia_or_mia','1')
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->orderBy('middle_name','asc')
        ->paginate(20);
      };

      $current_user = Auth::user();
      // $user_roles = User::find($current_user->id)->all_user_roles;
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
        if ($users_permissions[$num][0] == "Delete A Nonmember") {
          $can_delete = true;
        };
      };

      // This unsets data that is not needed by 'view'
      unset($current_user);
      unset($users_permissions);
      unset($role_model);

      return view('admin.all_casualties',[
        'all_casualties' => $all_casualties,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete,
        'name' => $name
      ]);
    }

    public function casualties_list_search(Request $request) {
      $request->validate([
        'casualtyName' => 'string|nullable|max:100'
      ]);

      return redirect()->route('edit.casualty.list',['name' => $request->casualtyName]);
    }

    public function edit_recipient_index($id) {
      $recipient = User::find($id);

      if ($recipient->expiration_date != '1970-01-01 00:00:00' && $recipient->expiration_date != null) {
        $status = "temporary";
      } elseif ($recipient->expiration_date == '1970-01-01 00:00:00') {
        $status = "permanent";
      } elseif ($recipient->expiration_date == null) {
        $status = "nonmember";
      };

      $all_links = Link::where([
        ['user_id',$id],
        ['is_moh_link',1]
      ])->orderBy('name','asc')->get();

      // if (!file_exists('../public/storage')) {
      //   Artisan::call('storage:link');
      // };

      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);
      $can_edit_recipient = false;
      $can_edit_member = false;
      $can_edit_casualty = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit MOH Recipient Records") {
          $can_edit_recipient = true;
        };
        if ($users_permissions[$num][0] == "Edit A Member") {
          $can_edit_member = true;
        };
        if ($users_permissions[$num][0] == "Edit Casualty Records") {
          $can_edit_casualty = true;
        };
      };

      $all_conflicts = Conflict::orderBy('start_year','asc')->get();

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      // } else {
      //   $imagePath = 'public/images';
      // };

      return view('admin.edit_recipient',[
        'id'     => $id,
        'recipient' => $recipient,
        'status' => $status,
        'can_edit_recipient' => $can_edit_recipient,
        'can_edit_member' => $can_edit_member,
        'can_edit_casualty' => $can_edit_casualty,
        'all_links' => $all_links,
        'all_conflicts' => $all_conflicts,
        'image_path' => $imagePath
      ]);
    }

    public function edit_recipient_post(Request $request,$id) {
      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'rank'             => 'nullable|string',
        'veteranImg'       => 'nullable|file',
        'citation'         => 'nullable|string',
        'conflictId'       => 'required|numeric',
        'city'             => 'nullable|string',
        'state'            => 'nullable|string',
        'moh_location'     => 'nullable|string',
        // 'action'           => 'required|string',
        'isKiaMia'         => 'required|integer',
        'membershipStatus' => 'nullable|string',
        'burialSite'       => 'nullable|string',
        'monthOfDeath'     => 'nullable|integer|min:1|max:12',
        'dayOfDeath'       => 'nullable|integer|min:1|max:31',
        'yearOfDeath'      => 'nullable|integer|min:1800|max:3000',
      ]);

      $recipient = User::find($id);

      // if ($request->action == 'update') {
        $recipient->first_name = $request->firstName;
        $recipient->middle_name = $request->middleName;
        $recipient->last_name = $request->lastName;
        $recipient->veteran_img = $request->veteranImg;
        $recipient->city = $request->city;
        $recipient->state = $request->state;
        $recipient->citation = $request->citation;
        $recipient->moh_location = $request->mohLocation;
        $recipient->kia_or_mia = $request->isKiaMia;
        $recipient->burial_site = $request->burialSite;
        $recipient->month_of_death = $request->monthOfDeath;
        $recipient->day_of_death = $request->dayOfDeath;
        $recipient->year_of_death = $request->yearOfDeath;


        // // Checks to see if old parent conflict still has MOH recipients. If it doesn't, then it changes the 'bobcat_recipients' in the old parent conflict to 'false'.
        // $init_recipient_conflict_id = Conflict::find($recipient->moh_conflict_id)->id;
        // if ($init_recipient_conflict_id != null) {
        //   $init_recipient_count = User::where('moh_conflict_id',$init_recipient_conflict_id)->count();
        //   $other_child_conflicts = Conflict::where([
        //     ['parent_id',$init_recipient_conflict_id],
        //     ['id','!=',$id]
        //   ])->get();
        //   foreach ($other_child_conflicts as $one_conflict) {
        //     $recipients = User::where('moh_conflict_id',$one_conflict->id)->count();
        //     $init_recipient_count += $recipients;
        //   };
        //   $init_conflict = Conflict::find($init_recipient_conflict_id);
        //   if ($init_recipient_count > 0) {
        //     $init_conflict->bobcat_recipients = 1;
        //   } else {
        //     $init_conflict->bobcat_recipients = 0;
        //   };
        //   $init_conflict->save();
        // };
        // // Makes the 'bobcat_recipients' in the new parent conflict 'true' (event if it already is) as long as this conflict has some recipient
        // $new_conflict = Conflict::find($request->conflictId);
        // $new_conflict->bobcat_recipients = 1;
        // $new_conflict->save();
        // if ($new_conflict->parent_id != null) {
        //   $new_parent = Conflict::find($new_conflict->parent_id);
        //   $new_parent->bobcat_recipients = 1;
        //   $new_parent->save();
        // };
        // $recipient->moh_conflict_id = $request->conflictId;

        // Checks to see if old conflict still has recipients, either directly or from a 'child' conflict. If it doesn't, then it changes the 'bobcat_recipients' in that conflict to 'false'.
        $init_recipient_conflict = Conflict::find($recipient->moh_conflict_id);
        if ($init_recipient_conflict != null && $recipient->moh_conflict_id != $request->conflictId) {
          // The $init_recipient_conflict_id == null happens when a new user or previously non-recipient user is being switched to being a recipient
          $init_recipient_conflict_id = $init_recipient_conflict->id;
          // It starts by only adding the recipients directly connected to the old conflict
          $init_recipient_count = User::where('moh_conflict_id',$init_recipient_conflict_id)->count();
          $old_conflict_count = $init_recipient_count;
          // If the old conflict is a 'parent' conflict, then it counts the recipients of its 'child' conflicts
          $other_child_conflicts = Conflict::where([
            ['parent_id',$init_recipient_conflict_id],
            ['id','!=',$id]
          ])->get();
          foreach ($other_child_conflicts as $one_conflict) {
            $recipients = User::where('moh_conflict_id',$one_conflict->id)->count();
            $init_recipient_count += $recipients;
          };
          // This subtracts the recipient that leaving the old conflict
          // if ($recipient->moh_conflict_id != $request->conflictId) {
            $init_recipient_count -= 1;
          // };
          // With the old conflict's total complete, it is decided if the old conflict should be active or not
          $init_conflict = Conflict::find($init_recipient_conflict_id);
          if ($init_recipient_count > 0) {
            $init_conflict->bobcat_recipients = 1;
          } else {
            $init_conflict->bobcat_recipients = 0;
          };
          // With that done, the changes are saved
          $init_conflict->save();
          // Side detail: if a) the old conflict is a 'child' conflict and b) the old conflict is now empty, then this checks to see if its old 'parent' conflict is also empty.
          if ($init_conflict->parent_id != null && $old_conflict_count - 1 <= 0) {
            $old_parent_conflict = Conflict::find($init_conflict->parent_id);
            $old_parent_count = User::where([
              ['moh_conflict_id',$old_parent_conflict->id],
              ['id','!=',$recipient->id]
            ])->count();
            $old_child_conflicts = Conflict::where('parent_id',$old_parent_conflict->id)->get();
            $old_child_count = 0;
            foreach ($old_child_conflicts as $one_child_conflict) {
              $another_count = User::where([
                ['moh_conflict_id',$one_child_conflict->id],
                ['id','!=',$recipient->id]
              ])->count();
              $old_child_count += $another_count;
            };
            if ($old_parent_count + $old_child_count == 0) {
              $old_parent_conflict->bobcat_recipients = 0;
              $old_parent_conflict->save();
            };
          };
        };
        // Activates the new conflict (as well as its 'parent' conflict, if has one) by switching their 'bobcat_recipients' to 'true'
        $new_conflict = Conflict::find($request->conflictId);
        $new_conflict->bobcat_recipients = 1;
        $new_conflict->save();
        if ($new_conflict->parent_id != null) {
          $new_parent = Conflict::find($new_conflict->parent_id);
          $new_parent->bobcat_recipients = 1;
          $new_parent->save();
        };
        $recipient->moh_conflict_id = $request->conflictId;

        // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        //  $storagePath = 'images';
        //  $public_path = 'storage/images';
        // } else {
        //   $storagePath = 'storage/images';
        //   $public_path = 'storage/images';
        // };
        // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        //   $storagePath = 'images';
        //   $public_path = 'storage/images';
        // } else {
          $storagePath = 'public/images';
        //   $public_path = 'public/images';
        // };

        /*
        // if (!file_exists('../public/storage')) {
        //   Artisan::call('storage:link');
        // };
        */

        if (request('veteranImg')) {
          $old_veteran_filename = $recipient->veteran_img;
          $recipient['veteran_img'] = request('veteranImg')->store($storagePath."/veteran");
          $filename = request('veteranImg')->hashName();
          $recipient->veteran_img = $filename;
          if ($old_veteran_filename != null) {
            Storage::delete($storagePath."/veteran/".$old_veteran_filename);
          };
        };

        $recipient->save();
      // } elseif ($request->action == 'veteran') {
      //   $member->veteran_img = str_replace("storage/","",$member->veteran_img);
      //   Storage::delete($member->veteran_img);
      //   User::find($member->id)->update(['veteran_img' => null]);
      // };


      return redirect()->route('edit.recipient.list');
    }

    public function edit_recipient_disable($id) {

      $user = User::find($id);
      $user->moh_recipient = 0;
      $user->save();

      return redirect()->route('edit.recipient.list');
    }

    public function all_recipients() {
      $all_recipients = User::where('moh_recipient','1')
        ->orderBy('last_name','asc')
        ->orderBy('first_name','asc')
        ->orderBy('middle_name','asc')
        ->paginate(20);

      $current_user = Auth::user();
      // $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_edit = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit MOH Recipient Records") {
          $can_edit = true;
        };
      };

      $can_delete = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete A Recipient") {
          $can_delete = true;
        };
      };

      // This unsets data that is not needed by 'view'
      unset($current_user);
      unset($users_permissions);
      unset($role_model);

      return view('admin.all_recipients',[
        'all_recipients' => $all_recipients,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function image_recipient_index($id,$img_type,$edit_type) {
      $member = User::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      // } else {
      //   $imagePath = 'public/images';
      // };

      $return_route = 'edit.'.$edit_type.'.index';
      $delete_method = 'image.recipient.delete';

      return view('admin.delete_image',[
        'member' => $member,
        'img_type' => $img_type,
        'image_path' => $imagePath,
        'return_name' => $return_route,
        'delete_method' => $delete_method
      ]);
    }

    public function image_recipient_delete($id,$img_type) {

      $member = User::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'images';
      //   $public_path = 'storage/images';
      // } else {
        $storagePath = 'public/images';
      //   $public_path = 'images';
      // };

      if ($img_type == 'current') {
        Storage::delete($storagePath."/current/".$member->current_img);
        $member->current_img = null;
        $member->save();
      } elseif ($img_type == 'veteran') {
        Storage::delete($storagePath."/veteran/".$member->veteran_img);
        $member->veteran_img = null;
        $member->save();
      };

      return redirect()->route('edit.recipient.index',['id' => $id]);
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
        'form_options'     => 'nullable|string',
        'eventPhoto'       => 'nullable|file'
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
      $input['primary_image'] = $request->eventPhoto;

      if (request('eventPhoto')) {
        // $storagePath = 'public/images';
        $input['primary_image'] = request('eventPhoto')->store("public/images/events");
        $filename = request('eventPhoto')->hashName();
        $input['primary_image'] = $filename;
      };

      Event::create($input);

      return redirect()->route('admin.index');
    }

    public function all_events() {
      // $all_users = User::all();
      $all_events = Event::orderBy('first_day','asc')->paginate(20);

      $current_user = Auth::user();
      // $user_roles = User::find($current_user->id)->all_user_roles;
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

      // This unsets data that is not needed by 'view'
      unset($current_user);
      unset($users_permissions);
      unset($role_model);

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
        'eventPhoto'       => 'nullable|file',
        'startDay'         => 'nullable|integer',
        'startMonth'       => 'nullable|integer',
        'startYear'        => 'nullable|integer',
        'endDay'           => 'nullable|integer',
        'endMonth'         => 'nullable|integer',
        'endYear'          => 'nullable|integer',
        'location'         => 'nullable|string',
        'form_options'     => 'nullable|string',
        'eventPhoto'       => 'nullable|file'
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

      if (request('eventPhoto')) {
        $old_event_filename = $event->primary_image;
        $event->primary_image = request('eventPhoto')->store("public/images/events");
        $filename = request('eventPhoto')->hashName();
        $event->primary_image = $filename;
        if ($old_event_filename != null) {
          Storage::delete("public/images/events/".$old_event_filename);
        };
      };

      $event->save();

      return redirect()->route('edit.event.list');
    }

    public function image_event_index($id,$img_type,$edit_type) {
      $event = Event::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $imagePath = 'images';
      // } else {
        $imagePath = 'images';
      // };

      $return_route = 'edit.event.index';
      $delete_method = 'image.event.delete';

      return view('admin.delete_image',[
        'member' => $event,
        'img_type' => $img_type,
        'image_path' => $imagePath,
        'return_name' => $return_route,
        'delete_method' => $delete_method
      ]);
    }

    public function image_event_delete($id,$img_type) {

      $event = Event::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'images';
      //   $public_path = 'storage/images';
      // } else {
        $storagePath = 'public/images';
      //   $public_path = 'images';
      // };

      // if ($img_type == 'current') {
      //   Storage::delete($storagePath."/current/".$member->current_img);
      //   $member->current_img = null;
      //   $member->save();
      // } elseif ($img_type == 'veteran') {
        Storage::delete($storagePath."/events/".$event->primary_image);
        $event->primary_image = null;
        $event->save();
      // };

      return redirect()->route('edit.event.index',[
        'id' => $id,
        'next_route' => 'event'
      ]);
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
      $storagePath = "public/images";

      $event = Event::find($id);
      if ($event->primary_image) {
        Storage::delete($storagePath."/events/".$event->primary_image);
      };

      $all_subevents = Event::find($id)->all_event_subevents;
      foreach($all_subevents as $one_subevent) {
        Storage::delete($storagePath."/subevents/".$one_subevent->photo);
      };

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
        'subeventImage'    => 'nullable|file',
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
      $input['primary_image'] = $request->subeventImage;
      $input['is_payment'] = $request->is_payment;
      $input['event_id'] = $event_id;

      if (request('subeventImage')) {
        // $storagePath = 'public/images';
        $input['primary_image'] = request('subeventImage')->store("public/images/events/subevents");
        $filename = request('subeventImage')->hashName();
        $input['primary_image'] = $filename;
      };

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
        'subeventPhoto'    => 'nullable|file',
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

      if (request('subeventPhoto')) {
        $old_event_filename = $input['primary_image'];
        $input['primary_image'] = request('subeventPhoto')->store("public/images/events/subevents");
        $filename = request('subeventPhoto')->hashName();
        $input['primary_image'] = $filename;
        if ($old_event_filename != null) {
          Storage::delete("public/images/events/subevents/".$old_event_filename);
        };
      };

      $input->save();

      return redirect()->route('edit.event.index',['id' => $event_id]);
    }

    public function add_conflict_index() {
      $all_conflicts = Conflict::where('parent_id',null)->get();
      return view('admin.new_conflict',[
        'all_parents' => $all_conflicts
      ]);
    }

    public function add_item_index() {
      return view('admin.new_item');
    }

    public function add_item_post(Request $request) {
      $request->validate([
        'itemTitle'         => 'required|string', // name
        'itemPhoto'         => 'nullable|file',   // photo
        'itemPrice'         => 'required|numeric|min:0|max:9999.99', // price
        'itemSizes'         => 'nullable|string', // sizes with added cost
        'itemColors'        => 'nullable|string', // colors with added cost
        'itemPatches'       => 'nullable|string', // patches with added cost
        'itemDescription'   => 'nullable|string', // description
        'itemDurationYear'  => 'nullable|integer|min:0', // part of how_long
        'itemDurationDay'   => 'nullable|integer|min:0', // part of how_long
        'itemStockStatus'   => 'required|integer',
        'itemMembership'    => 'required|integer',
        'itemDonation'      => 'required|integer', // is_donation
        'itemRoute'         => 'required|string', // purpose
        'itemAdjust'        => 'required|integer'  // adjustable_price
      ]);

      $item = new Item;
      $item->name = $request->itemTitle;
      $item->price = $request->itemPrice;
      $item->sizes = $request->itemSizes;
      $item->colors = $request->itemColors;
      $item->patches = $request->itemPatches;
      $item->description = $request->itemDescription;
      $item->out_of_stock = $request->itemStockStatus;
      $item->members_only = $request->itemMembership;
      $item->is_donation = $request->itemDonation;
      $item->purpose = $request->itemRoute;
      $item->adjustable_price = $request->itemAdjust;

      if ($request->itemDurationDay == 0 && $request->itemDurationYear == 0) {
        $item->how_long = null;
      } else {
        $item->how_long = (60 * 60 * 24 * $request->itemDurationDay) + (60 * 60 * 24 * 365 * $request->itemDurationYear);
      };

      $item->slug = 'item-'.time();

      if ($request->itemPhoto) {
        $storagePath = 'public/images';
        $item->photo = request('itemPhoto')->store($storagePath."/items");
        $filename = request('itemPhoto')->hashName();
        $item->photo = $filename;
      };

      $item->save();

      return redirect()->route('admin.index');
    }

    public function all_items() {
      // $all_users = User::all();
      $all_items = Item::orderBy('name','asc')->paginate(20);

      $current_user = Auth::user();
      // $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_edit = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit An Item") {
          $can_edit = true;
        };
      };

      $can_delete = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete An Item") {
          $can_delete = true;
        };
      };

      // This unsets data that is not needed by 'view'
      unset($current_user);
      unset($users_permissions);
      unset($role_model);

      return view('admin.all_items',[
        'all_items' => $all_items,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function edit_item_index($id) {
      $item = Item::find($id);

      if ($item->how_long) {
        $total_days = $item->how_long / 60 / 60 / 24;
        if ($total_days >= 365) {
          $day_count = $total_days % 365;
          $year_count = ($total_days - $day_count) / 365;
        } else {
          $day_count = $item->how_long / 60 / 60 / 24;
          $year_count = 0;
        };
      } else {
        $day_count = null;
        $year_count = null;
      };

      return view('admin.edit_item',[
        'item' => $item,
        'year_count' => $year_count,
        'day_count' => $day_count
      ]);
    }

    public function edit_item_post(Request $request,$id) {
      $item = Item::find($id);

      $request->validate([
        'itemTitle'         => 'required|string', // name
        'itemPhoto'         => 'nullable|file',   // photo
        'itemPrice'         => 'required|numeric|min:0|max:9999.99', // price
        'itemDescription'   => 'nullable|string', // description
        'itemSizes'         => 'nullable|string', // sizes and added cost
        'itemColors'        => 'nullable|string', // colors and added cost
        'itemPatches'       => 'nullable|string', // patches and added cost
        'itemDurationYear'  => 'nullable|integer|min:0', // part of how_long
        'itemDurationDay'   => 'nullable|integer|min:0', // part of how_long
        'itemStockStatus'   => 'required|integer',
        'itemMembership'    => 'required|integer',
        'itemDonation'      => 'required|integer', // is_donation
        'itemRoute'         => 'required|string', // purpose
        'itemAdjust'        => 'required|integer'  // adjustable_price
      ]);

      $item->name = $request->itemTitle;
      $item->price = $request->itemPrice;
      $item->description = $request->itemDescription;
      $item->sizes = $request->itemSizes;
      $item->colors = $request->itemColors;
      $item->patches = $request->itemPatches;
      $item->out_of_stock = $request->itemStockStatus;
      $item->is_donation = $request->itemDonation;
      $item->members_only = $request->itemMembership;
      $item->purpose = $request->itemRoute;
      $item->adjustable_price = $request->itemAdjust;

      if ($request->itemDurationDay == 0 && $request->itemDurationYear == 0) {
        $item->how_long = null;
      } else {
        $item->how_long = (60 * 60 * 24 * $request->itemDurationDay) + (60 * 60 * 24 * 365 * $request->itemDurationYear);
      };

      if ($request->itemPhoto) {
        $old_item_filename = $item->photo;
        $item->photo = request('itemPhoto')->store("public/images/items");
        $filename = request('itemPhoto')->hashName();
        $item->photo = $filename;
        if ($old_item_filename != null) {
          Storage::delete("public/images/items/".$old_item_filename);
        };
      };

      $item->save();

      return redirect()->route('edit.item.list');
    }

    public function image_item_index($id,$img_type,$edit_type) {
      $item = Item::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $imagePath = 'images';
      // } else {
        $imagePath = 'images';
      // };

      $return_route = 'edit.'.$edit_type.'.index';
      $delete_method = 'image.item.delete';

      return view('admin.delete_image',[
        'member' => $item,
        'img_type' => $img_type,
        'image_path' => $imagePath,
        'return_name' => $return_route,
        'delete_method' => $delete_method
      ]);
    }

    public function image_item_delete($id,$img_type) {

      $item = Item::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'images';
      //   $public_path = 'storage/images';
      // } else {
        $storagePath = 'public/images';
      //   $public_path = 'images';
      // };

      // if ($img_type == 'current') {
      //   Storage::delete($storagePath."/current/".$member->current_img);
      //   $member->current_img = null;
      //   $member->save();
      // } elseif ($img_type == 'veteran') {
        Storage::delete($storagePath."/items/".$item->photo);
        $item->photo = null;
        $item->save();
      // };

      return redirect()->route('edit.item.index',[
        'id' => $id,
        'next_route' => 'item'
      ]);
    }

    public function delete_item_index($id) {
      $item = Item::find($id);

      return view('admin.delete_item',[
        'id'     => $id,
        'item' => $item
      ]);
    }


    public function delete_item_post($id) {
      $storagePath = "public/images";

      $item = Item::find($id);
      if ($item->photo) {
        Storage::delete($storagePath."/items/".$item->photo);
      };

      Item::where('id',$id)->delete();

      return redirect()->route('delete.item.list');
    }

    public function add_conflict_post(Request $request) {
      $request->validate([
        'name' => 'required|string',
        'startYear' => 'required|integer',
        'endYear' => 'nullable|integer',
        'hasCasualties' => 'required|integer',
        'hasRecipients' => 'required|integer',
        'parentId' => 'required|integer'
      ]);

      if ($request->parentId == 0) {
        $request->parentId = null;
      };

      $input = new Conflict;

      $input->name = $request->name;
      $input->start_year = $request->startYear;
      $input->end_year = $request->endYear;
      $input->bobcat_casualties = $request->hasCasualties;
      $input->bobcat_recipients = $request->hasRecipients;
      $input->parent_id = $request->parentId;

      $input->save();

      return redirect()->route('admin.index');
    }

    public function edit_conflict_list() {
      $all_conflicts = Conflict::orderBy('start_year','asc')->paginate(20);

      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_edit = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit A Conflict") {
          $can_edit = true;
        };
      };

      $can_delete = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete A Conflict") {
          $can_delete = true;
        };
      };

      return view('admin.all_conflicts',[
        'all_conflicts' => $all_conflicts,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function edit_conflict_index($id) {
      $conflict = Conflict::find($id);

      $parent_conflict = Conflict::find($conflict->parent_id);

      $all_parent_conflicts = Conflict::where('parent_id',null)->orderBy('start_year','asc')->get();

      $child_conflicts = Conflict::where('parent_id',$id)->get();

      return view('admin.edit_conflict',[
        'id' => $id,
        'conflict' => $conflict,
        'parent_conflict' => $parent_conflict,
        'all_parents' => $all_parent_conflicts,
        'all_children' => $child_conflicts
      ]);
    }

    public function edit_conflict_post(Request $request,$id) {
      $conflict = Conflict::find($id);
      $init_parent_id = $conflict->parent_id;

      $request->validate([
        'name' => 'required|string',
        'startYear' => 'required|integer',
        'endYear' => 'nullable|integer',
        'parentId' => 'nullable|integer',
        // 'memberParticipated' => 'required|integer'
      ]);

      if ($request->parentId == 0) {
        $request->parentId = null;
      };

      if ($request->parentId != $init_parent_id) {
        // Checks to see if old parent conflict still has casualties. If it doesn't, then it makes the 'bobcat_casualties' in the old parent conflict 'false'.
        if ($init_parent_id != null) {
          $init_parent_casualties = User::where([
            ['casualty_conflict_id',$init_parent_id],
            ['kia_or_mia',1]
          ])->count();
          $other_child_conflicts = Conflict::where([
            ['parent_id',$init_parent_id],
            ['id','!=',$id]
          ])->get();
          foreach ($other_child_conflicts as $one_conflict) {
            $casualties = User::where([
              ['casualty_conflict_id',$one_conflict->id],
              ['kia_or_mia',1]
            ])->count();
            $init_parent_casualties += $casualties;
          };
          $init_parent = Conflict::find($init_parent_id);
          if ($init_parent_casualties > 0) {
            $init_parent->bobcat_casualties = 1;
          } else {
            $init_parent->bobcat_casualties = 0;
          };
          $init_parent->save();
        };
        // Makes the 'bobcat_casualties' in the new parent conflict 'true' (event if it already is) as long as this conflict has some casualties
        if ($request->parentId != null) {
          $conflict_count = User::where([
            ['casualty_conflict_id',$id],
            ['kia_or_mia',1]
          ])->count();
          if ($conflict_count > 0) {
            $new_parent = Conflict::find($request->parentId);
            $new_parent->bobcat_casualties = 1;
            $new_parent->save();
          };
        };
        // Checks to see if old parent conflict still has MOH recipients. If it doesn't, then it changes the 'bobcat_recipients' in the old parent conflict to 'false'.
        if ($init_parent_id != null) {
          $init_parent_recipients = User::where('moh_conflict_id',$init_parent_id)->count();
          $other_child_conflicts = Conflict::where([
            ['parent_id',$init_parent_id],
            ['id','!=',$id]
          ])->get();
          foreach ($other_child_conflicts as $one_conflict) {
            $recipients = User::where('moh_conflict_id',$one_conflict->id)->count();
            $init_parent_recipients += $recipients;
          };
          $init_parent = Conflict::find($init_parent_id);
          if ($init_parent_recipients > 0) {
            $init_parent->bobcat_recipients = 1;
          } else {
            $init_parent->bobcat_recipients = 0;
          };
          $init_parent->save();
        };
        // Makes the 'bobcat_recipients' in the new parent conflict 'true' (event if it already is) as long as this conflict has some recipient
        if ($request->parentId != null) {
          $conflict_count = User::where('moh_conflict_id',$id)->count();
          if ($conflict_count > 0) {
            $new_parent = Conflict::find($request->parentId);
            $new_parent->bobcat_recipients = 1;
            $new_parent->save();
          };
        };
      };

      $conflict->name = $request->name;
      $conflict->start_year = $request->startYear;
      $conflict->end_year = $request->endYear;
      $conflict->parent_id = $request->parentId;
      // $conflict->member_participated = $request->memberParticipated;

      $conflict->save();

      return redirect()->route('edit.conflict.list');
    }

    public function delete_conflict_index($id) {
      $conflict = Conflict::find($id);

      $child_conflicts = Conflict::where('parent_id',$id)->get();

      // Counts casualties in the actual conflict
      $count_by_casualty_primary = DB::table('users')
        ->where('users.casualty_conflict_id','=',$id)
        ->count();

      // Counts casualties in any 'child' conflict
      $count_by_casualty_secondary = DB::table('users')
        ->join('conflicts','users.casualty_conflict_id','=','conflicts.id')
        ->where('conflicts.parent_id','=',$conflict->id)
        ->count();

      $total_casualty_count = $count_by_casualty_primary + $count_by_casualty_secondary;

      // Counts casualties in the actual conflict
      $count_by_recipient_primary = DB::table('users')
        ->where('users.moh_conflict_id','=',$id)
        ->count();

      // Counts casualties in any 'child' conflict
      $count_by_recipient_secondary = DB::table('users')
        ->join('conflicts','users.moh_conflict_id','=','conflicts.id')
        ->where('conflicts.parent_id','=',$conflict->id)
        ->count();

      $total_recipient_count = $count_by_recipient_primary + $count_by_recipient_secondary;

      return view('admin.delete_conflict',[
        'id' => $id,
        'conflict' => $conflict,
        'casualty_count' => $total_casualty_count,
        'recipient_count' => $total_recipient_count,
        'all_children' => $child_conflicts
      ]);
    }

    public function delete_conflict_post(Request $request,$id) {
      $conflict = Conflict::find($id);

      // Checks to see if there this conflict has any 'childr' conflicts
      $count_child_conflicts = Conflict::where('parent_id',$id)->count();

      // Checks to see if there are any casualties or recipients directly attached to this conflict
      $count_by_primary = DB::table('users')
        ->where('users.casualty_conflict_id','=',$id)
        ->orWhere('users.moh_conflict_id','=',$id)
        ->count();

      if ($count_child_conflicts == 0 && $count_by_primary == 0) {
        $conflict->delete();
        return redirect()->route('delete.conflict.list');
      } else {
        return redirect()->route('delete.conflict.index',[
          'id' => $id
        ]);
      };
    }

    public function image_subevent_index($id,$img_type,$edit_type) {
      $subevent = Subevent::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $imagePath = 'images';
      // } else {
        $imagePath = 'images';
      // };

      $return_route = 'subevent.edit';
      $delete_method = 'image.subevent.delete';

      return view('admin.delete_image',[
        'member' => $subevent,
        'img_type' => $img_type,
        'image_path' => $imagePath,
        'return_name' => $return_route,
        'delete_method' => $delete_method
      ]);
    }

    public function image_subevent_delete($id,$img_type) {

      $subevent = Subevent::find($id);

      // if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
      //   $storagePath = 'images';
      //   $public_path = 'storage/images';
      // } else {
        $storagePath = 'public/images';
      //   $public_path = 'images';
      // };

      // if ($img_type == 'current') {
      //   Storage::delete($storagePath."/current/".$member->current_img);
      //   $member->current_img = null;
      //   $member->save();
      // } elseif ($img_type == 'veteran') {
        Storage::delete($storagePath."/events/subevents/".$subevent->primary_image);
        $subevent->primary_image = null;
        $subevent->save();
      // };

      return redirect()->route('subevent.edit',[
        'id' => $id,
        'event_id' => $subevent->event_id,
        'next_route' => 'subevent'
      ]);
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
      $all_payments = Payment::orderBy('created_at','desc')
        ->paginate(20);
        // ->map(function($payment) {
        //   $payment->user_name = null;
        //   return $payment;
        // });

      $all_members = User::where('expiration_date','!=',null)->get();

      // foreach ($all_payments as $one_payment) {
      //   if ($one_payment->user_id) {
      //     foreach ($all_members as $one_member) {
      //       if ($one_payment->user_id == $one_member->id) {
      //         $one_payment->user_name = $one_member->first_name." ".$one_member->last_name;
      //       };
      //     };
      //   } else {
      //     $one_payment->user_name = null;
      //   };
      // };

      return view('admin.all_payments',[
        'all_payments' => $all_payments,
        'all_members' => $all_members
      ]);
    }

    public function add_bulletin_index()
    {
      return view('admin.new_bulletin');
    }

    public function add_bulletin_post(Request $request) {
      $request->validate([
        'bulletinYear'     => 'required|integer|min:1970',
        'bulletinSeason'   => 'required|integer|min:1|max:4',
        'bulletinFile'     => 'required|mimes:pdf'
      ]);

      $input['post_year'] = $request->bulletinYear;
      $input['season_order'] = $request->bulletinSeason;

      if ($input['season_order'] == 1) {
        $input['season'] = "Spring";
      } elseif ($input['season_order'] == 2) {
        $input['season'] = "Summer";
      } elseif ($input['season_order'] == 3) {
        $input['season'] = "Fall";
      } else {
        $input['season'] = "Winter";
      };

      $input['filename'] = request('bulletinFile')->store("public/bulletins");
      $filename = request('bulletinFile')->hashName();
      $input['filename'] = $filename;

      Bulletin::create($input);

      return redirect()->route('admin.index');
    }

    public function all_bulletins() {

      $all_bulletins = Bulletin::orderBy('post_year','asc')
        ->orderBy('season_order','asc')
        ->paginate(20);

      $current_user = Auth::user();
      // $user_roles = User::find($current_user->id)->all_user_roles;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);

      $can_edit = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Edit A Bulletin") {
          $can_edit = true;
        };
      };

      $can_delete = false;
      for ($num = 0; $num < count($users_permissions); $num++) {
        if ($users_permissions[$num][0] == "Delete A Bulletin") {
          $can_delete = true;
        };
      };

      // This unsets data that is not needed by 'view'
      unset($current_user);
      unset($users_permissions);
      unset($role_model);

      return view('admin.all_bulletins',[
        'all_bulletins' => $all_bulletins,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function edit_bulletin_index($id)
    {
      $bulletin = Bulletin::find($id);

      return view('admin.edit_bulletin',[
        'bulletin' => $bulletin
      ]);
    }

    public function edit_bulletin_post(Request $request,$id) {

      $input = Bulletin::find($id);

      $request->validate([
        'bulletinYear'     => 'required|integer|min:1970',
        'bulletinSeason'   => 'required|integer|min:1|max:4'
      ]);

      $input['post_year'] = $request->bulletinYear;
      $input['season_order'] = $request->bulletinSeason;

      if ($input['season_order'] == 1) {
        $input['season'] = "Spring";
      } elseif ($input['season_order'] == 2) {
        $input['season'] = "Summer";
      } elseif ($input['season_order'] == 3) {
        $input['season'] = "Fall";
      } else {
        $input['season'] = "Winter";
      };

      $input->save();

      return redirect()->route('edit.bulletin.list');
    }

    public function delete_bulletin_index($id)
    {
      $bulletin = Bulletin::find($id);

      return view('admin.delete_bulletin',[
        'bulletin' => $bulletin
      ]);
    }

    public function delete_bulletin_post($id)
    {
      $bulletin = Bulletin::find($id);

      $storagePath = 'public/bulletins';

      Storage::delete($storagePath."/".$bulletin->filename);
      $bulletin->delete();

      return redirect()->route('delete.bulletin.list',['id' => $id]);
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

    // IMPORTANT! To activate the 'qra' or 'heroku' connections, go to 'config/database.php'

    // public function update_conflict_id() {
    //   $query = DB::connection('heroku')->select('select * from casualties');
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

    // public function update_link_url() {
    //   $query = DB::connection('heroku')->select('select * from other_urls where casualty_id IS NOT NULL');
    //
    //   foreach ($query as $one_row) {
    //
    //     $init_url = str_replace('http://www.bobcat.ws','https://classic.bobcat.ws',$one_row->url);
    //     $url = str_replace('htm#','html#',$init_url);
    //     DB::connection('qra')
    //       ->update('update links set url = :url where id = :id',[
    //         ':url' => $url,
    //         ':id' => $one_row->id
    //       ]);
    //   };
    //
    //   return view('welcome');
    // }
}
