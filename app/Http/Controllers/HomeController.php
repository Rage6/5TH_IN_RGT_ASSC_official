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
use App\Models\Payment;

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

      $user_expiration = strtotime($current_user->expiration_date);
      $time_now = time();
      if ($current_user->expiration_date == "1970-01-01 00:00:00") {
        $time_left = null;
      } else {
        $time_left = $user_expiration - $time_now;
      };

      return view('home',[
        'current_user' => $current_user,
        'user_roles' => $user_roles,
        'users_permissions' => $unique_users_permissions,
        // 'users_permissions' => $users_permissions,
        'is_admin' => $is_admin,
        'time_left' => $time_left,
        'page_title' => "Dashboard"
      ]);
    }

    public function edit_profile_index() {
      $user = Auth::user();
      $all_links = Link::where('user_id',$user->id)->where('is_member_link',1)->get();
      return view('edit_profile',[
        'user' => $user,
        'all_links' => $all_links,
        'page_title' => "Profile"
      ]);
    }

    public function edit_profile_change(Request $request) {

      $current_user = Auth::user();

      if ($current_user->email == $request->email) {
        $email_setting = 'required|string';
      } else {
        $email_setting = 'required|string|unique:users';
      };

      $request->validate([
        'firstName'        => 'required|string',
        'middleName'       => 'nullable|string',
        'lastName'         => 'required|string',
        'email'            => $email_setting,
        'email_visible'    => 'required|integer',
        'phoneNumber'      => 'nullable|string',
        'phone_visible'    => 'required|integer',
        'spouseName'       => 'nullable|string',
        'biography'        => 'nullable|string|max:1000',
        // 'mailingAddress'   => 'nullable|string',
        'streetAddressOne' => 'required|string',
        'streetAddressTwo' => 'nullable|string',
        'mailingCity'      => 'required|string',
        'mailingState'     => 'required|string',
        'zipCode'          => 'required|string',
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
      // $user['mailing_address'] = $request->mailingAddress;
      $user['street_address_1'] = $request->streetAddressOne;
      $user['street_address_2'] = $request->streetAddressTwo;
      $user['mailing_city'] = $request->mailingCity;
      $user['mailing_state'] = $request->mailingState;
      $user['zip_code'] = $request->zipCode;

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
      return view('profile_link',[
        'page_title' => "Links"
      ]);
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
          'link' => $this_link,
          'page_title' => "Links"
        ]);
      } else {
        $all_links = Link::where('user_id',$user->id)->get();
        return view('edit_profile',[
          'user' => $user,
          'all_links' => $all_links,
          'page_title' => "Profile"
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
        return view('edit_profile',[
          'page_title' => "Dashboard"
        ]);
      };
    }

    public function profile_link_delete($link_id) {

      $user = Auth::user();

      $this_link = Link::find($link_id);

      if ($this_link->user_id == $user->id) {
        Link::where('id',$link_id)->delete();
        return redirect()->route('profile.edit');
      } else {
        return view('edit_profile',[
          'page_title' => "Profile"
        ]);
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
        'delete_method' => $delete_method,
        'page_title' => "Images"
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
      return view('edit_password',[
        'page_title' => "Passwords"
      ]);
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
        'all_staff' => $all_roles,
        'page_title' => "Staff"
      ]);
    }

    public function bobcat_payment_index() {
      $user = Auth::user();
      $name = $user->first_name." ".$user->last_name;

      $all_payments = Payment::where('user_id',$user->id)
        ->orWhere([
          ['user_id',null],
          ['customer_email',$user->email]
        ])
        ->orderBy('created_at','DESC')
        ->paginate(20);

      return view('personal_payments',[
        'user_name' => $name,
        'all_payments' => $all_payments,
        'page_title' => "Payments"
      ]);
    }

    public function bobcat_list_index(?string $name = null) {

      $current_user = Auth::user();

      if ($name != null) {
        $all_bobcats = User::where([
          ['deceased',"=",0],
          ['expiration_date',">",date('Y-m-d h:m:s')],
          ['first_name','LIKE',$name.'%']
        ])
        ->orWhere([
          ['deceased',"=",0],
          ['expiration_date',">",date('Y-m-d h:m:s')],
          ['last_name','LIKE',$name.'%']
        ])
        ->orWhere([
          ['deceased',"=",0],
          ['expiration_date',"=",'1970-01-01 00:00:00'],
          ['first_name','LIKE',$name.'%']
        ])
        ->orWhere([
          ['deceased',"=",0],
          ['expiration_date',"=",'1970-01-01 00:00:00'],
          ['last_name','LIKE',$name.'%']
        ])
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->paginate(20);

        $is_free_trial = false;
        if ($current_user) {
          $roles = User::find($current_user->id)->all_user_roles;
          foreach ($roles as $one_role) {
            if ($one_role->slug == "trial-member") {
              $is_free_trial = true;
            };
          };
        };

        return view('all_bobcats',[
          'all_bobcats' => $all_bobcats,
          'page_title' => "Find A Bobcats",
          'is_free_trial' => $is_free_trial
        ]);
      } else {
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

        $is_free_trial = false;
        if ($current_user) {
          $roles = User::find($current_user->id)->all_user_roles;
          foreach ($roles as $one_role) {
            if ($one_role->slug == "trial-member") {
              $is_free_trial = true;
            };
          };
        };

        return view('all_bobcats',[
          'all_bobcats' => $all_bobcats,
          'page_title' => "Find A Bobcats",
          'is_free_trial' => $is_free_trial
        ]);
      };
    }

    public function bobcat_list_search(Request $request) {
      $request->validate([
        'bobcatName' => 'string|nullable|max:100'
      ]);

      return redirect()->route('bobcat.list.index',['name' => $request->bobcatName]);
    }

    public function bobcat_list_export_excel() {
      // The following code for exporting SQL data as an Excel spreadsheet is a modified version of this example: https://www.codexworld.com/export-data-to-excel-in-php/
      // Excel file name for download 
      $fileName = "bobcat-data_" . date('Y-m-d') . ".xls";
      // Column names 
      // $fields = array('LAST NAME', 'FIRST NAME', 'MI', 'MAILING ADDRESS', 'PHONE NUMBER', 'UNIT/YEAR','SPOUSE', 'EMAIL');
      $fields = array('LAST NAME', 'FIRST NAME', 'MI', 'STREET ADDRESS', 'CITY', 'STATE', 'ZIP CODE', 'PHONE NUMBER', 'UNIT/YEAR','SPOUSE', 'EMAIL');
      // Display column names as first row 
      $excelData = implode("\t", array_values($fields)) . "\n";
      // Fetch records from database 
      $current_timestamp = time();
      $bobcat_list = User::where([
          ['expiration_date','1970-01-01 00:00:00'],
          ['year_of_death',null]
        ])
        ->orWhere([
          ['expiration_date','>',$current_timestamp],
          ['year_of_death',null]
        ])
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->get();
      if (count($bobcat_list) > 0){ 
        // Output each row of the data 
        foreach ($bobcat_list as $one_bobcat) { 
          if ($one_bobcat->email != null && $one_bobcat->email_visible == 0) {
            $one_bobcat->email = "*** private ***";
          };
          if ($one_bobcat->phone_number != null && $one_bobcat->phone_visible == 0) {
            $one_bobcat->phone_number = "*** private ***";
          };
          $all_careers = Timespan::where([
            ['user_id',$one_bobcat->id]
          ])
          ->orderBy('start_year','ASC')
          ->orderBy('start_month','ASC')
          ->get();
          $bobcat_careers = "";
          if (count($all_careers) > 0) {
            foreach ($all_careers as $career) {
              $bobcat_careers .= $career->job.", ".$career->unit." (".$career->start_year."-".$career->end_year.")";
              if (count($all_careers) > 1) {
                $bobcat_careers .= "; ";
              };
            };
          };
          $street_address = $one_bobcat->street_address_1;
          if ($one_bobcat->street_address_2) {
            $street_address .= ", ".$one_bobcat->street_address_2;
          };
          $lineData = array($one_bobcat->last_name, $one_bobcat->first_name, $one_bobcat->middle_name, $street_address, $one_bobcat->mailing_city, $one_bobcat->mailing_state, $one_bobcat->zip_code, $one_bobcat->phone_number, $bobcat_careers, $one_bobcat->spouse, $one_bobcat->email);

          for ($index = 0; count($lineData) > $index; $index++) {
            $str = $lineData[$index];
            $str = preg_replace("/\t/", "\\t", $str); 
            $str = preg_replace("/\r?\n/", "\\n", $str); 
            if (strstr($str, '"')) {
              $str = '"' . str_replace('"', '""', $str) . '"'; 
            };
          };

          $excelData .= implode("\t", array_values($lineData)) . "\n"; 
        };
      } else { 
        $excelData .= 'No records found...'. "\n"; 
      };
      // Headers for download 
      header("Content-Type: application/vnd.ms-excel"); 
      header("Content-Disposition: attachment; filename=\"$fileName\"");
      // Render excel data 
      echo $excelData;
      exit;

      return redirect(route('home'));

    }

    public function bobcat_list_export_html() {

      // The following code for exporting SQL data as an HTML page is a modified version of this example: https://www.codexworld.com/export-data-to-excel-in-php/
      // HTML file name for download 
      $fileName = "Bobcat_roster_" . date('Y-m-d') . ".html";
      // Column names 
      $fields = array('LAST NAME', 'FIRST NAME', 'MI', 'STREET ADDRESS', 'CITY', 'STATE', 'ZIP CODE', 'PHONE NUMBER', 'UNIT/YEAR','SPOUSE', 'EMAIL');
      // Display column names as first row 
      $name_row = "<tr style='background-color:lightgrey'>";
      for ($i = 0; $i < count($fields); $i++) {
        $name_row .= "<th style='border:black solid 1px;border-collapse:collapse;padding: 2px 5px'>".$fields[$i]."</th>";
      };
      $name_row .= "</tr>";
      // Fetch records from database 
      $current_timestamp = time();
      $bobcat_list = User::where([
          ['expiration_date','1970-01-01 00:00:00'],
          ['year_of_death',null]
        ])
        ->orWhere([
          ['expiration_date','>',$current_timestamp],
          ['year_of_death',null]
        ])
        ->orderBy('last_name','ASC')
        ->orderBy('first_name','ASC')
        ->get();
      $all_user_rows = "";
      if (count($bobcat_list) > 0){ 
        // Output each row of the data 
        foreach ($bobcat_list as $one_bobcat) {
          $this_row = "<tr>";
          // Changes '@' to '(a)' in order to prevent 'email protection' errors 
          if ($one_bobcat->email) {
            $one_bobcat->email = str_replace("@","(a)",$one_bobcat->email);
          };
          // Hides email if the member doesn't want their email address with other members
          if ($one_bobcat->email != null && $one_bobcat->email_visible == 0) {
            $one_bobcat->email = "*** private ***";
          };
          // Hides email if the member doesn't want their email address with other members
          if ($one_bobcat->phone_number != null && $one_bobcat->phone_visible == 0) {
            $one_bobcat->phone_number = "*** private ***";
          };
          // Combines the first and second street addresses, if applicable
          $street_address = $one_bobcat->street_address_1;
          if ($one_bobcat->street_address_2) {
            $street_address .= ", ".$one_bobcat->street_address_2;
          };
          // Gets all career info 
          $all_careers = Timespan::where([
            ['user_id',$one_bobcat->id]
          ])
          ->orderBy('start_year','ASC')
          ->orderBy('start_month','ASC')
          ->get();
          $bobcat_careers = "";
          if (count($all_careers) > 0) {
            foreach ($all_careers as $career) {
              $bobcat_careers .= $career->job.", ".$career->unit." (".$career->start_year."-".$career->end_year.")";
              if (count($all_careers) > 1) {
                $bobcat_careers .= "; ";
              };
            };
          };
          // Makes the entire row
          $this_array = array($one_bobcat->last_name, $one_bobcat->first_name, $one_bobcat->middle_name, $street_address, $one_bobcat->mailing_city, $one_bobcat->mailing_state, $one_bobcat->zip_code, $one_bobcat->phone_number, $bobcat_careers, $one_bobcat->spouse, $one_bobcat->email);
          for ($a = 0; $a < count($this_array); $a++) {
            $this_row .= "<td style='border:black solid 1px;border-collapse:collapse;padding: 2px 5px'>".$this_array[$a]."</td>";
          };
          $this_row .= "</tr>";
          $all_user_rows .= $this_row;
        };
      };

      $all_bobcats = "
        <html>
          <div style='margin-bottom: 20px; display:flex; justify-content: right'>
            <div style='border: 1px solid black;padding: 5px'>
              NOTE: (a) means @ in the emails
            </div>
          </div>
          <table style='border:black solid 1px;border-collapse:collapse'>
            ".$name_row.$all_user_rows."
          </table>";

      // Headers for download 
      header("Content-Type: text/html"); 
      header("Content-Disposition: attachment; filename=\"$fileName\"");
      // Render excel data 
      echo $all_bobcats;
      exit;

      return redirect(route('home'));

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

      $all_conflicts = $bobcat->all_user_conflicts()->get();

      $current_user = Auth::user();
      $is_free_trial = false;
      if ($current_user) {
        $roles = User::find($current_user->id)->all_user_roles;
        foreach ($roles as $one_role) {
          if ($one_role->slug == "trial-member") {
            $is_free_trial = true;
          };
        };
      };

      return view('profile',[
        'bobcat' => $bobcat,
        'all_links' => $all_links,
        'all_jobs' => $all_jobs,
        'all_conflicts' => $all_conflicts,
        'trial_member' => $is_free_trial,
        'page_title' => "Profile"
      ]);
    }
}
