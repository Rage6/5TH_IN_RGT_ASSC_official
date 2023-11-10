<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

use App\Mail\ReunionEmail;

use App\Models\Event;
use App\Models\Subevent;
use App\Models\Applicant;
use App\Models\User;

use Illuminate\Support\Facades\App;

class ReunionController extends Controller
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
      $this_user = Auth::user();
      $reunion = Event::where('slug',env('CURRENT_REUNION'))->first();
      $subevents = Subevent::where('event_id',$reunion->id)
                            ->orderByRaw('order_number IS NULL')
                            ->orderBy('order_number','ASC')
                            ->get();

      $all_boolean_options = $reunion->form_options;
      $all_boolean_list = explode(';',$all_boolean_options);

      return view('reunion.reunion',[
        'js' => config('app.url_ext').'/js/my_custom/reunion/reunion.js',
        'content' => 'reunion_content',
        'page_title' => "Reunion",
        'this_user' => $this_user,
        'cart_count' => $cart_count,
        'reunion_main' => $reunion,
        'all_boolean_list' => $all_boolean_list,
        'all_subevents' => $subevents
      ]);
    }

    public function post(Request $request)
    {
      $reunion = Event::where('slug',env('CURRENT_REUNION'))->first();

      $request->validate([
        'first_name' => 'string|required',
        'last_name' => 'string|required',
        'email' => 'email|required',
        'guest_num' => 'integer|nullable',
        'guest_names' => 'string|nullable',
        'phone_number' => 'string|nullable|min:10|max:16',
        'arrival_date' => 'date|nullable',
      ]);

      // Assembles data for email
      $init_submission = app();
      $new_submission = $init_submission->make('stdClass');
      $new_submission->first_name = $request->first_name;
      $new_submission->last_name = $request->last_name;
      $new_submission->guest_num = $request->guest_num;
      $new_submission->guest_names = $request->guest_names;
      $new_submission->phone_number = $request->phone_number;
      $new_submission->email = $request->email;
      $new_submission->arrival_date = $request->arrival_date;
      // $new_submission->event_one = $request->event_0;
      // $new_submission->event_two = $request->event_1;
      // $new_submission->event_three = $request->event_2;
      // $new_submission->ladies_breakfast = $request->ladies_breakfast;
      // $new_submission->driving = $request->driving;
      // $new_submission->first_reunion = $request->first_reunion;
      $all_boolean_string = '';
      $all_boolean_list = explode(';',$reunion->form_options);
      for ($k = 0; $k < count($all_boolean_list); $k++) {
        $key = 'event_'.strval($k);
        $request->validate([
          $key => [
            'string',
            'required',
            Rule::in('Yes','No')
          ]
        ]);
        $question = $all_boolean_list[$k];
        $new_submission->{$key} = $question."::".$request->{$key};
        $all_boolean_string .= $new_submission->{$key};
      };
      $new_submission->all_boolean_count = count($all_boolean_list);
      $new_submission->type = "reunion";
      $new_submission->comments = $request->comments;
      $new_email = $request->email;

      // Saves registration in 'applicants' table
      $new_applicant['first_name'] = $request->first_name;
      $new_applicant['last_name'] = $request->last_name;
      $new_applicant['guest_num'] = $request->guest_num;
      $new_applicant['guest_names'] = $request->guest_names;
      $new_applicant['phone_number'] = $request->phone_number;
      $new_applicant['email'] = $request->email;
      $new_applicant['arrival_date'] = $request->arrival_date;
      $new_applicant['all_boolean_options'] = $all_boolean_string;
      $new_applicant['type'] = "reunion";
      $new_applicant['comments'] = $request->comments;
      Applicant::create($new_applicant);

      $users = User::where([
        ['expiration_date','!=',null],
        ['deceased','=',0]
      ])->get();

      $application_email = [];
      foreach ($users as $one_user) {
        $is_manager = User::find($one_user->id)->check_for_role("Event Coordinator");
        $is_all_permissions = User::find($one_user->id)->check_for_role("All Permissions Staff Member");
        if ($is_manager == true || $is_all_permissions == true) {
          $application_email[] = $one_user->email;
        };
      };

      Mail::to($application_email)->send(new ReunionEmail($new_submission));
      
      return redirect('items?purpose=reunion.index&title=Reunion%20Fee%20and%20Options');
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

    public function checkBilling(Request $request) {
      return $request->user()->redirectToBillingPortal(route('reunion/check-billing'));
    }
}
