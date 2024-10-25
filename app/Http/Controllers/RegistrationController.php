<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\RegistrationEmail;

use App\Models\Applicant;
use App\Models\Item;
use App\Models\Conflict;
use App\Models\User;

use Illuminate\Support\Facades\App;

class RegistrationController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $current_year = date("Y");
      $modern_conflicts = Conflict::
        where([
          ['end_year','>',$current_year - 100],
          ['unit_participated','=',1],
          ['name','!=','While on duty']
        ])
        ->orWhere([
          ['end_year','=',null],
          ['unit_participated','=',1],
          ['name','!=','While on duty']
        ])
        ->orderBy('start_year','asc')
        ->get();

      $membership_options = Item::where(
          [
            ['purpose','registration.index'],
            ['is_donation','=',0]
          ])
        ->orderBy('name','ASC')
        ->get();

      $this_user = Auth::user();
      return view('membership.member_registration',[
        'js' => config('app.url_ext').'/js/my_custom/registration/registration.js',
        'content' => 'registration_content',
        'page_title' => "Membership",
        'this_user' => $this_user,
        'cart_count' => $cart_count,
        'modern_conflicts' => $modern_conflicts,
        'membership_options' => $membership_options
      ]);
    }

    public function post(Request $request)
    {
      $request->validate([
        'first_name' => 'string|required|max:255',
        'last_name' => 'string|required|max:255',
        'spouse_name' => 'string|nullable|max:255',
        'address_line_1' => 'string|nullable|max:255',
        'address_line_2' => 'string|nullable|max:255',
        'city' => 'string|nullable|max:255',
        'state' => 'string|nullable|max:255',
        'zip_code' => 'string|nullable|max:255',
        'country' => 'string|nullable|max:255',
        'phone_number' => 'string|nullable|max:255',
        'conflicts' => 'string|nullable|max:255',
        'other_conflicts' => 'string|nullable|max:255',
        'job_1' => 'string|nullable|max:255',
        'unit_1' => 'string|nullable|max:255',
        'start_year_1' => 'string|nullable|max:255',
        'end_year_1' => 'string|nullable|max:255',
        'job_2' => 'string|nullable|max:255',
        'unit_2' => 'string|nullable|max:255',
        'start_year_2' => 'string|nullable|max:255',
        'end_year_2' => 'string|nullable|max:255',
        'job_3' => 'string|nullable|max:255',
        'unit_3' => 'string|nullable|max:255',
        'start_year_3' => 'string|nullable|max:255',
        'end_year_3' => 'string|nullable|max:255',
        'unit_details' => 'string|nullable|max:500',
        'free_trial' => 'integer|required|max:1',
        'email' => 'string|required|max:255',
        'comments' => 'string|nullable|max:500',
      ]);

      // The unit details are then put together into one, standardized string
      $unit_list = '';
      for ($i = 1; $i <= 3; $i++) {
        $job = 'job_'.$i;
        $unit = 'unit_'.$i;
        $start = 'start_year_'.$i;
        $end = 'end_year_'.$i;
        if ($request[$job] != null || $request[$unit] != null || $request[$start] != null || $request[$end] != null) {
          $unit_string = "Job: ".$request[$job].", Unit: ".$request[$unit].", Start Date: ".$request[$start].", End Date: ".$request[$end].";";
          $unit_list .= $unit_string;
        };
      };
      $request->unit_details = $unit_list.$request->unit_details;

      // This attempts to prevent bots or hacker attacks
      $is_duplicate = false;
      $all_applicants = Applicant::all();
      foreach ($all_applicants as $one_applicant) {
        if ($one_applicant->email == $request->email && $one_applicant->type == 'membership') {
          $is_duplicate = true;
        };
      };
      if ($request->first_name == $request->last_name) {
        $is_duplicate = true;
      };

      if (!$is_duplicate) {

        $current_year = date("Y");
        $modern_conflicts = Conflict::
          where('end_year','>',$current_year - 100)
          ->orWhere('end_year','=',null)
          ->orderBy('start_year','asc')
          ->get();

        // Creates an applicant letter and mails it
        $init_submission = app();
        $new_submission = $init_submission->make('stdClass');
        $new_submission->first_name = $request->first_name;
        $new_submission->last_name = $request->last_name;
        $new_submission->spouse_name = $request->spouse_name;
        $new_submission->address_line_1 = $request->address_line_1;
        $new_submission->address_line_2 = $request->address_line_2;
        $new_submission->city = $request->city;
        $new_submission->state = $request->state;
        $new_submission->zip_code = $request->zip_code;
        $new_submission->country = $request->country;
        $new_submission->phone_number = $request->phone_number;
        $new_submission->conflicts = '';
        $init_conflict = true;
        foreach ($modern_conflicts as $one_conflict) {
          $input_name = "conflict_".$one_conflict->id;
          $conflict_result = request($input_name);
          if (isset($conflict_result)) {
            if ($init_conflict == true) {
              $new_submission->conflicts .= request($input_name);
              $init_conflict = false;
            } else {
              $new_submission->conflicts .= ", ".request($input_name);
            }
          };
        };
        $new_submission->other_conflicts = $request->other_conflicts;
        $new_submission->unit_details = $request->unit_details;

        if (intval($request->free_trial) == 1) {
          $new_submission->free_trial = "YES";
        } else {
          $new_submission->free_trial = "NO";
        };
        $new_submission->email = $request->email;
        $new_submission->comments = $request->comments;

        $users = User::where([
          ['expiration_date','!=',null],
          ['deceased','=',0]
        ])->get();

        $registration_email = [];
        foreach ($users as $one_user) {
          $is_manager = User::find($one_user->id)->check_for_role("Member Data Manager");
          $is_all_permissions = User::find($one_user->id)->check_for_role("All Permissions Staff Member");
          if ($is_manager == true || $is_all_permissions == true) {
            $registration_email[] = $one_user->email;
          };
        };

        // $is_duplicate = false;
        // $all_applicants = Applicant::all();
        // foreach ($all_applicants as $one_applicant) {
        //   if ($one_applicant->first_name == $request->first_name && $one_applicant->last_name == $request->last_name && $one_applicant->type == 'membership') {
        //     $original_date = $one_applicant->created_at;
        //     $expire_date = date_add($original_date,date_interval_create_from_date_string("45 seconds"));
        //     $current_date = date("Y-m-d h:i:s");
        //     if ($current_date < $expire_date) {
        //       $is_duplicate = true;
        //     };
        //   };
        // };

        // if (!$is_duplicate) {
        Mail::to($registration_email)->send(new RegistrationEmail($new_submission));

        $applicant['first_name'] = $request->first_name;
        $applicant['last_name'] = $request->last_name;
        $applicant['spouse_name'] = $request->spouse_name;
        $applicant['address_line_1'] = $request->address_line_1;
        $applicant['address_line_2'] = $request->address_line_2;
        $applicant['city'] = $request->city;
        $applicant['state'] = $request->state;
        $applicant['zip_code'] = $request->zip_code;
        $applicant['country'] = $request->country;
        $applicant['phone_number'] = $request->phone_number;
        $applicant['conflicts'] = $new_submission->conflicts;
        $applicant['other_conflicts'] = $new_submission->other_conflicts;
        $applicant['unit_details'] = $request->unit_details;
        $applicant['free_trial'] = $request->free_trial;
        $applicant['email'] = $request->email;
        $applicant['comments'] = $request->comments;
        $applicant['type'] = 'membership';
        Applicant::create($applicant);

        if ($request->free_trial == 0) {
          return redirect('items?purpose=registration.index&title=Member%20Registration%20Fee%20Options')->with('submit_message','Member Registration Submitted>>>You will be notified when your membership is approved');
        } else {
          return redirect()->route('welcome');
        };
      } else {
        return redirect()->route('registration.index')->with('duplicate','You either already applied or filled out your form incorrectly. If you already applied, then one of our members will contact you soon.');
      };

      // return redirect('items?purpose=registration.index&title=Member%20Registration%20Fee%20Options')->with('submit_message','Member Registration Submitted>>>You will be notified when your membership is approved');
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
