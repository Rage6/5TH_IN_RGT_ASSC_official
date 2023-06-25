<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;

use App\Http\Controllers\stdClass;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

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

      if (!file_exists('../public/storage')) {
        Artisan::call('storage:link');
      };

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
        'action'           => 'required'
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

      if (!file_exists('../public/storage')) {
        Artisan::call('storage:link');
      };

      return view('admin.delete_user',[
        'id'     => $id,
        'member' => $member,
        'status' => $status
      ]);
    }

    public function delete_member_post($id) {
      $member = User::find($id);
      if ($member->current_img) {
        $member->current_img = str_replace("storage/","",$member->current_img);
        Storage::delete($member->current_img);
      };
      if ($member->veteran_img) {
        $member->veteran_img = str_replace("storage/","",$member->veteran_img);
        Storage::delete($member->veteran_img);
      };
      User::where('id',$id)->delete();
      return redirect()->route('delete.member.list');
    }

    public function all_members() {
      // $all_users = User::all();
      $all_users = User::orderBy('last_name','asc')->get();

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
}
