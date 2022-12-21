<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\ReunionEmail;

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
      $cart_count = 0;
      $cart_content = $request->session()->get('cart');
      if ($cart_content) {
        for ($i = 0; $i < count($cart_content); $i++) {
          $cart_count += intval($cart_content[$i][3]);
        };
      };
      $this_user = Auth::user();
      if (Auth::user()) {
        $unread_count = DB::table('messages')
          ->where([
            ['messages.received_id',Auth::user()->id],
            ['messages.is_read','==',0]
          ])
          ->count();
        return view('reunion',[
          'unread_count' => $unread_count,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'reunion_content',
          'this_user' => $this_user,
          'cart_count' => $cart_count
        ]);
      } else {
        return view('reunion',[
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'reunion_content',
          'this_user' => $this_user,
          'cart_count' => $cart_count
        ]);
      };
    }

    public function post(Request $request)
    {
      $init_submission = app();
      $new_submission = $init_submission->make('stdClass');
      $new_submission->first_name = Request::input('first_name');
      $new_submission->last_name = Request::input('last_name');
      $new_submission->guest_num = Request::input('guest_num');
      $new_submission->guest_names = Request::input('guest_names');
      $new_submission->phone_number = Request::input('phone_number');
      $new_submission->email = Request::input('email');
      $new_submission->arrival_date = Request::input('arrival_date');
      $new_submission->event_one = Request::input('event_one');
      $new_submission->event_two = Request::input('event_two');
      $new_submission->event_three = Request::input('event_three');
      $new_submission->mil_id = Request::input('mil_id');
      $new_submission->comp_mil_id = Request::input('comp_mil_id');
      $new_submission->ladies_breakfast = Request::input('ladies_breakfast');
      $new_submission->driving = Request::input('driving');
      $new_submission->first_reunion = Request::input('first_reunion');
      $new_submission->comments = Request::input('comments');
      $new_email = Request::input('email');
      if (App::environment() == 'local') {
        Mail::to([env('REUNION_EMAIL_1')])->send(new ReunionEmail($new_submission));
      } else {
        Mail::to([env('REUNION_EMAIL_2'),env('REUNION_EMAIL_3'),env('REUNION_EMAIL_4'),env('REUNION_EMAIL_5')])->send(new ReunionEmail($new_submission));
      };
      // return redirect('http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html');
      return redirect('/reunion?payment');
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
