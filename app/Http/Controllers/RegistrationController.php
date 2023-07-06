<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\RegistrationEmail;

use App\Models\Applicant;

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

      $currentYear = date("Y");
      $modern_conflicts = DB::table('conflicts')
        ->select('id','name')
        ->where('end_year','>',$currentYear - 100)
        ->orWhere('end_year','=',null)
        ->orderBy('start_year','asc')
        ->get();

      $this_user = Auth::user();
      return view('member_registration',[
        'style' => 'registration_style',
        'js' => config('app.url_ext').'/js/my_custom/registration/registration.js',
        'content' => 'registration_content',
        'this_user' => $this_user,
        'cart_count' => $cart_count,
        'modern_conflicts' => $modern_conflicts
      ]);
    }

    public function post(Request $request)
    {
      $request->validate([
        'first_name' => 'string|required',
        'last_name' => 'string|required',
        'spouse_name' => 'string|nullable',
        'address_line_1' => 'string|nullable',
        'address_line_2' => 'string|nullable',
        'city' => 'string|nullable',
        'state' => 'string|nullable',
        'zip_code' => 'string|nullable',
        'country' => 'string|nullable',
        'phone_number' => 'string|nullable',
        'conflicts' => 'string|nullable',
        'unit_details' => 'string|nullable',
        'email' => 'string|required',
        'comments' => 'string|nullable|max:255',
      ]);

      $currentYear = date("Y");
      $modern_conflicts = DB::table('conflicts')
        ->select('id','name')
        ->where('end_year','>',$currentYear - 100)
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
      $new_submission->unit_details = $request->unit_details;
      $new_submission->email = $request->email;
      $new_submission->comments = $request->comments;
      if (App::environment() == 'local') {
        $registration_email_test = explode(',',env('MEMBERSHIP_EMAIL_TEST'));
        Mail::to($registration_email_test)->send(new RegistrationEmail($new_submission));
      } else {
        $registration_email_official = explode(',',env('MEMBERSHIP_EMAIL_OFFICIAL'));
        Mail::to($registration_email_official)->send(new RegistrationEmail($new_submission));
      };

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
      $applicant['unit_details'] = $request->unit_details;
      $applicant['email'] = $request->email;
      $applicant['comments'] = $request->comments;
      $applicant['type'] = 'membership';
      Applicant::create($applicant);

      return redirect('items?purpose=registration.index&title=Member%20Registration%20Fee%20Options');
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
