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
      $can_edit_casualty = Auth::user()->check_for_permission("Edit Casualty Records");
      $can_edit_recipient = Auth::user()->check_for_permission("Edit MOH Recipient Records");
      $all_reg_options = Item::where('purpose','registration.index')->get();
      return view('admin.new_user',[
        'can_edit_casualty' => $can_edit_casualty,
        'can_edit_recipient' => $can_edit_recipient,
        'all_reg_options' => $all_reg_options
      ]);
    }

    public function add_member_post(Request $request) {

      if (!$request['isKiaMia']) {
        $request['isKiaMia'] = 0;
      };
      if (!$request['isRecipient']) {
        $request['isRecipient'] = 0;
      };

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => 'nullable|string',
        'currentImg'       => 'nullable|file',
        'veteranImg'       => 'nullable|file',
        // 'tombstoneImg'     => 'nullable|file',
        // 'biography'        => 'nullable|string',
        'isDeceased'       => 'required|integer',
        'isKiaMia'         => 'required|integer',
        'isRecipient'      => 'required|integer',
        'membershipStatus' => 'required|string',
        // 'mailingAddress'   => 'nullable|string',
        'rank'             => 'nullable|string',
        // 'kiaLocation'      => 'nullable|string',
        // 'injuryType'       => 'nullable|string',
        // 'burialSite'       => 'nullable|string'
      ]);

      if ($request->isKiaMia == 1 || $request->isKiaMia == "1") {
        $request->isDeceased = 1;
      };

      $input['first_name'] = $request->firstName;
      $input['middle_name'] = $request->middleName;
      $input['last_name'] = $request->lastName;
      $input['email'] = $request->email;
      $input['current_img'] = $request->currentImg;
      $input['veteran_img'] = $request->veteranImg;
      // $input['tombstone_img'] = $request->tombstoneImg;
      // $input['biography'] = $request->biography;
      $input['deceased'] = $request->isDeceased;
      // $input['mailing_address'] = $request->mailingAddress;
      $input['rank'] = $request->rank;
      // $input['kia_location'] = $request->kiaLocation;
      $input['kia_or_mia'] = $request->isKiaMia;
      $input['moh_recipient'] = $request->isRecipient;
      // $input['injury_type'] = $request->injuryType;
      // $input['burial_site'] = $request->burialSite;
      // $input['day_of_death'] = $request->dayOfDeath;
      // $input['month_of_death'] = $request->monthOfDeath;
      // $input['year_of_death'] = $request->yearOfDeath;

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

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $storagePath = 'public/images';
      } else {
        $storagePath = 'public/images';
      };

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

      $role_id = Role::where('slug','basic-member')->first();

      if ($input['expiration_date'] != null) {
        $new_user->all_user_roles()->attach($role_id);
      };

      $can_edit_casualty = Auth::user()->check_for_permission("Edit Casualty Records");
      $can_edit_recipient = Auth::user()->check_for_permission("Edit MOH Recipient Records");

      if ($request->isKiaMia == 1 && $can_edit_casualty && $request->isRecipient == 1 && $can_edit_recipient) {
        return redirect()->route('edit.casualty.index',[
          'id' => $new_user->id,
          'next_route' => 'edit-recipient'
        ]);
      } elseif ($request->isKiaMia == 1 && $can_edit_casualty) {
        return redirect()->route('edit.casualty.index',[
          'id' => $new_user->id,
          'next_route' => 'casualty-list'
        ]);
      } elseif ($request->isRecipient == 1 && $can_edit_recipient) {
        return redirect()->route('edit.recipient.index',[
          'id' => $new_user->id
        ]);
      } else {
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

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      } else {
        $imagePath = 'public/images';
      };

      return view('admin.edit_user',[
        'id'     => $id,
        'member' => $member,
        'status' => $status,
        'can_edit_recipient' => $can_edit_recipient,
        'can_edit_member' => $can_edit_member,
        'can_edit_casualty' => $can_edit_casualty,
        'image_path' => $imagePath
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

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => 'nullable|string',
        'currentImg'       => 'nullable|file',
        'veteranImg'       => 'nullable|file',
        // 'biography'        => 'nullable|string',
        'isDeceased'       => 'required|integer',
        'isKiaMia'         => 'required|integer',
        'isRecipient'      => 'required|integer',
        // 'action'           => 'required',
        'mailingAddress'   => 'nullable|string'
      ]);

      // $old_current_filename = $member->current_img;
      // $old_veteran_filename = $member->veteran_img;

      // if ($request->action == 'update') {
        $member->first_name = $request['firstName'];
        $member->middle_name = $request['middleName'];
        $member->last_name = $request['lastName'];
        $member->email = $request['email'];
        // $member->current_img = $request->currentImg;
        // $member->veteran_img = $request->veteranImg;
        // $member->biography = $request['biography'];
        $member->deceased = $request['isDeceased'];
        $member->mailing_address = $request['mailingAddress'];
        $member->kia_or_mia = $request['isKiaMia'];
        $member->moh_recipient = $request['isRecipient'];

        if ($member->kia_or_mia == 1) {
          $member->deceased = 1;
        };

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
        //   $storagePath = 'storage/images';
        //   $public_path = 'images';
        // };
        if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
          $storagePath = 'public/images';
        } else {
          $storagePath = 'public/images';
        };

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
      // } elseif ($request->action == 'current') {
      //   $member->current_img = str_replace("storage/","",$member->current_img);
      //   Storage::delete($member->current_img);
      //   User::find($member->id)->update(['current_img' => null]);
      // } elseif ($request->action == 'veteran') {
      //   $member->veteran_img = str_replace("storage/","",$member->veteran_img);
      //   Storage::delete($member->veteran_img);
      //   User::find($member->id)->update(['veteran_img' => null]);
      // };

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

      return redirect()->route('edit.member.index',['id' => $id]);
    }

    public function edit_member_deadline_nonmember($id) {
      $member = User::find($id);
      $member->expiration_date = null;
      $member->save();

      $past_roles = $member->all_user_roles;
      foreach ($past_roles as $one_role) {
        $member->all_user_roles()->detach($one_role->id);
      };

      return redirect()->route('edit.member.index',['id' => $id]);
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

      return redirect()->route('edit.member.index',['id' => $id]);
    }

    public function image_member_index($id,$img_type,$edit_type) {
      $member = User::find($id);

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      } else {
        $imagePath = 'public/images';
      };

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
      // if ($member->current_img) {
      //   $member->current_img = str_replace("storage/","",$member->current_img);
      //   Storage::delete($member->current_img);
      // };
      // if ($member->veteran_img) {
      //   $member->veteran_img = str_replace("storage/","",$member->veteran_img);
      //   Storage::delete($member->veteran_img);
      // };

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

      User::where('id',$id)->delete();
      return redirect()->route('delete.member.list');
    }

    public function all_members() {
      // $all_users = User::all();
      $all_users = User::where('expiration_date','!=',null)
        ->orderBy('last_name','asc')
        ->orderBy('first_name','asc')
        ->orderBy('middle_name','asc')
        ->paginate(20);

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
        if ($users_permissions[$num][0] == "Delete A Nonmember") {
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
      $user_roles = User::find($current_user->id)->all_user_roles;
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

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      } else {
        $imagePath = 'public/images';
      };

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
      $casualty->comments = $request['comments'];
      $casualty->expiration_date = $membershipStatus;
      $casualty->casualty_conflict_id = $request['conflictId'];
      $casualty->moh_recipient = $request['mohStatus'];

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $storagePath = 'images';
        $public_path = 'storage/images';
      } else {
        $storagePath = 'storage/images';
        $public_path = 'images';
      };

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

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      } else {
        $imagePath = 'public/images';
      };

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

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $storagePath = 'images';
        $public_path = 'storage/images';
      } else {
        $storagePath = 'storage/images';
        $public_path = 'images';
      };

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

    public function all_casualties() {
      $all_casualties = User::where('kia_or_mia','1')
        ->orderBy('last_name','asc')
        ->orderBy('first_name','asc')
        ->orderBy('middle_name','asc')
        ->paginate(20);

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
        if ($users_permissions[$num][0] == "Delete A Nonmember") {
          $can_delete = true;
        };
      };

      return view('admin.all_casualties',[
        'all_casualties' => $all_casualties,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
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

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      } else {
        $imagePath = 'public/images';
      };

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
        // 'action'           => 'required|string',
        'isKiaMia'         => 'required|integer',
        'membershipStatus' => 'nullable|string',
      ]);

      $recipient = User::find($id);

      // if ($request->action == 'update') {
        $recipient->first_name = $request->firstName;
        $recipient->middle_name = $request->middleName;
        $recipient->last_name = $request->lastName;
        // $member->veteran_img = $request->veteranImg;
        $recipient->city = $request->city;
        $recipient->state = $request->state;
        $recipient->citation = $request->citation;
        $recipient->kia_or_mia = $request->isKiaMia;

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
        if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
          $storagePath = 'images';
          $public_path = 'storage/images';
        } else {
          $storagePath = 'storage/images';
          $public_path = 'images';
        };

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
      $user_roles = User::find($current_user->id)->all_user_roles;
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

      return view('admin.all_recipients',[
        'all_recipients' => $all_recipients,
        'can_edit' => $can_edit,
        'can_delete' => $can_delete
      ]);
    }

    public function image_recipient_index($id,$img_type,$edit_type) {
      $member = User::find($id);

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      } else {
        $imagePath = 'public/images';
      };

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

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $storagePath = 'images';
        $public_path = 'storage/images';
      } else {
        $storagePath = 'storage/images';
        $public_path = 'images';
      };

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

    public function add_conflict_index() {
      $all_conflicts = Conflict::where('parent_id',null)->get();
      return view('admin.new_conflict',[
        'all_parents' => $all_conflicts
      ]);
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
        'parentId' => 'nullable|integer'
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
}
