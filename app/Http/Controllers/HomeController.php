<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Role;
use App\Models\Link;
use App\Models\Timespan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $current_user = Auth::user();
      $user_roles = User::find($current_user->id)->all_user_roles;
      $is_admin = false;
      $role_model = new Role();
      $users_permissions = $role_model->users_permissions($current_user->id);
      $unique_users_permissions = [];
      foreach ($users_permissions as $one_permission) {
        // This determines if the permission is already recognized
        $is_unique = true;
        foreach ($unique_users_permissions as $one_unique) {
          if ($one_permission[1] == $one_unique[1]) {
            $is_unique = false;
          };
        };
        if ($is_unique) {
          $unique_users_permissions[] = $one_permission;
        };
      };
      $titles_for_access = explode(",",env('ADMIN_ACCESS'));
      foreach($user_roles as $one_role) {
        foreach($titles_for_access as $one_title) {
          if ($one_title == $one_role->title) {
            $is_admin = true;
          };
        };
      };

      return view('home',[
        'current_user' => $current_user,
        'user_roles' => $user_roles,
        'users_permissions' => $unique_users_permissions,
        // 'users_permissions' => $users_permissions,
        'is_admin' => $is_admin
      ]);
    }

    public function edit_profile_index() {
      $user = Auth::user();
      $all_links = Link::where('user_id',$user->id)->where('is_member_link',1)->get();
      return view('edit_profile',[
        'user' => $user,
        'all_links' => $all_links
      ]);
    }

    public function edit_profile_change(Request $request) {

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => 'nullable|string',
        'email_visible'    => 'required|integer',
        'phoneNumber'      => 'nullable|string',
        'phone_visible'    => 'required|integer',
        'spouseName'       => 'nullable|string',
        'biography'        => 'nullable|string',
        'mailingAddress'   => 'nullable|string',
        'currentImg'       => 'nullable|file',
        'veteranImg'       => 'nullable|file'
      ]);

      $user = Auth::user();
      $user['first_name'] = $request->firstName;
      $user['middle_name'] = $request->middleName;
      $user['last_name'] = $request->lastName;
      $user['email'] = $request->email;
      $user['email_visible'] =$request->email_visible;
      $user['phone_number'] = $request->phoneNumber;
      $user['phone_visible'] =$request->phone_visible;
      $user['spouse'] = $request->spouseName;
      $user['biography'] = $request->biography;
      $user['mailing_address'] = $request->mailingAddress;

      if (request('currentImg')) {
        $old_current_filename = $user->current_img;
        $user['current_img'] = request('currentImg')->store("public/images/current");
        $filename = request('currentImg')->hashName();
        $user->current_img = $filename;
        if ($old_current_filename != null) {
          Storage::delete("public/images/current/".$old_current_filename);
        };
      };
      if (request('veteranImg')) {
        $old_veteran_filename = $user->veteran_img;
        $user['veteran_img'] = request('veteranImg')->store("public/images/veteran");
        $filename = request('veteranImg')->hashName();
        $user->veteran_img = $filename;
        if ($old_veteran_filename != null) {
          Storage::delete("public/images/veteran/".$old_veteran_filename);
        };
      };

      $user->save();

      return redirect()->route('home');
    }

    public function profile_link_new() {
      return view('profile_link');
    }

    public function profile_link_new_post(Request $request) {

      $user_id = Auth::user()->id;

      $request->validate([
        'linkName' => 'required|string',
        'linkUrl'  => 'required|string'
      ]);

      $new_link = new Link;
      $new_link->name = $request->linkName;
      $new_link->url = $request->linkUrl;
      $new_link->is_member_link = 1;
      $new_link->user_id = $user_id;

      $new_link->save();

      return redirect()->route('profile.edit');
    }

    public function profile_link_existing($link_id) {

      $user = Auth::user();

      $this_link = Link::find($link_id);

      if ($this_link->user_id == $user->id) {
        return view('profile_link',[
          'link' => $this_link
        ]);
      } else {
        $all_links = Link::where('user_id',$user->id)->get();
        return view('edit_profile',[
          'user' => $user,
          'all_links' => $all_links
        ]);
      };
    }

    public function profile_link_change(Request $request,$link_id) {

      $user = Auth::user();

      $this_link = Link::find($link_id);

      if ($this_link->user_id == $user->id) {

        $request->validate([
          'linkName' => 'required|string',
          'linkUrl'  => 'required|string'
        ]);

        $this_link->name = $request->linkName;
        $this_link->url  = $request->linkUrl;
        $this_link->save();

        return redirect()->route('profile.edit');
      } else {
        return view('edit_profile');
      };
    }

    public function profile_link_delete($link_id) {

      $user = Auth::user();

      $this_link = Link::find($link_id);

      if ($this_link->user_id == $user->id) {
        Link::where('id',$link_id)->delete();
        return redirect()->route('profile.edit');
      } else {
        return view('edit_profile');
      };
    }

    public function image_personal_index($img_type) {
      $member = Auth::user();

      if (explode(":",$_SERVER['HTTP_HOST'])[0] == 'localhost') {
        $imagePath = 'images';
      } else {
        $imagePath = 'images';
      };

      $return_route = 'profile.edit';
      // $delete_method = 'image.member.delete';
      $delete_method = 'delete.personal.image.complete';

      return view('admin.delete_image',[
        'member' => $member,
        'img_type' => $img_type,
        'image_path' => $imagePath,
        'return_name' => $return_route,
        'delete_method' => $delete_method
      ]);
    }

    public function image_personal_delete($img_type) {

      $member = Auth::user();

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

      return redirect()->route('profile.edit');
    }

    public function edit_password_index($message = null) {
      return view('edit_password');
    }

    public function edit_password_change(Request $request) {

      $request->validate([
        'newPassword'     => 'required|string',
        'confirmPassword' => 'required|string'
      ]);

      if ($request->newPassword != $request->confirmPassword) {
        return view('edit_password')->withErrors(['Sorry, your passwords did not match.']);
      } else {
        $hashedPassword = Hash::make($request->newPassword);
        $user = Auth::user();
        $user['password'] = $hashedPassword;
        $user->save();
        return redirect()->route('profile.edit');
      };
    }

    public function bobcat_staff_index() {
      $all_roles = Role::where('public',1)->orderBy('title','ASC')->get();

      foreach ($all_roles as $one_role) {
        $all_users = Role::find($one_role->id)->all_role_users;
        $one_role->all_users = $all_users;
      };

      return view('staff',[
        'all_staff' => $all_roles
      ]);
    }

    public function bobcat_list_index() {

      $all_bobcats = User::where([
        ['deceased',"=",0],
        ['expiration_date',">",date('Y-m-d h:m:s')]
      ])
      ->orWhere([
        ['deceased',"=",0],
        ['expiration_date',"=",'1970-01-01 00:00:00']
      ])
      ->orderBy('last_name','ASC')
      ->orderBy('first_name','ASC')
      ->paginate(20);
      return view('all_bobcats',[
        'all_bobcats' => $all_bobcats
      ]);
    }

    public function bobcat_profile_index($id) {

      $bobcat = User::where('id',$id)->first();

      $all_links = Link::where('user_id',$bobcat->id)->get();

      $all_raw_jobs = Timespan::where('user_id',$bobcat->id)->orderBy('end_year','asc')->orderBy('end_month','asc')->get();
      $months = [
        ['JAN',1],
        ['FEB',2],
        ['MAR',3],
        ['APR',4],
        ['MAY',5],
        ['JUN',6],
        ['JUL',7],
        ['AUG',8],
        ['SEP',9],
        ['OCT',10],
        ['NOV',11],
        ['DEC',12]
      ];
      $all_jobs = [];
      foreach ($all_raw_jobs as $one_job) {
        for ($i = 0; count($months) > $i; $i++) {
          if ($one_job->start_month == $months[$i][1]) {
            $one_job->start_month = $months[$i][0];
          };
          if ($one_job->end_month == $months[$i][1]) {
            $one_job->end_month = $months[$i][0];
          };
        };
        $all_jobs[] = $one_job;
      };

      return view('profile',[
        'bobcat' => $bobcat,
        'all_links' => $all_links,
        'all_jobs' => $all_jobs
      ]);
    }
}
