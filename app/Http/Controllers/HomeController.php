<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;

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
      return view('edit_profile',[
        'user' => $user
      ]);
    }

    public function edit_profile_change(Request $request) {

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => 'nullable|string',
        'biography'        => 'nullable|string',
        'mailingAddress'   => 'nullable|string'
      ]);

      $user = Auth::user();
      $user['first_name'] = $request->firstName;
      $user['middle_name'] = $request->middleName;
      $user['last_name'] = $request->lastName;
      $user['email'] = $request->email;
      $user['biography'] = $request->biography;
      $user['mailing_address'] = $request->mailingAddress;

      $user->save();

      return redirect()->route('home');
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
}
