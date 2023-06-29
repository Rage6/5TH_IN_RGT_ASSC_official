<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\ReunionEmail;

use App\Models\Event;
use App\Models\Subevent;

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
      $subevents = Subevent::where('event_id',$reunion->id)->get();
      return view('reunion',[
        'style' => 'reunion_style',
        'js' => config('app.url_ext').'/js/my_custom/reunion/reunion.js',
        'content' => 'reunion_content',
        'this_user' => $this_user,
        'cart_count' => $cart_count,
        'reunion_main' => $reunion,
        'all_subevents' => $subevents
      ]);
    }

    public function post(Request $request)
    {
      $init_submission = app();
      $new_submission = $init_submission->make('stdClass');
      $new_submission->first_name = $request->first_name;
      $new_submission->last_name = $request->last_name;
      $new_submission->guest_num = $request->guest_num;
      $new_submission->guest_names = $request->guest_names;
      $new_submission->phone_number = $request->phone_number;
      $new_submission->email = $request->email;
      $new_submission->arrival_date = $request->arrival_date;
      $new_submission->event_one = $request->event_one;
      $new_submission->event_two = $request->event_two;
      $new_submission->event_three = $request->event_three;
      // $new_submission->mil_id = $request->mil_id;
      // $new_submission->comp_mil_id = $request->comp_mil_id;
      $new_submission->ladies_breakfast = $request->ladies_breakfast;
      $new_submission->driving = $request->driving;
      $new_submission->first_reunion = $request->first_reunion;
      $new_submission->comments = $request->comments;
      $new_email = $request->email;

      if (App::environment() == 'local') {
        $reunion_email_test = explode(',',env('REUNION_EMAIL_TEST'));
        Mail::to($reunion_email_test)->send(new ReunionEmail($new_submission));
      } else {
        $reunion_email_official = explode(',',env('REUNION_EMAIL_OFFICIAL'));
        Mail::to($reunion_email_official)->send(new ReunionEmail($new_submission));
      };
      // return redirect('http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html');
      // return redirect('/reunion?payment');
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
