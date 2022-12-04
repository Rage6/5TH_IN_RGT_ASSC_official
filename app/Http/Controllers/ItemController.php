<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Below is added by Nicholas Vogt
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $purpose = $_GET['purpose'];
      // $all_items = Item::all();
      $cart = $request->session()->get('cart');
      $all_items = Item::where('purpose',$purpose)->get();
      $this_user = Auth::user();
      if (Auth::user()) {
        $unread_count = DB::table('messages')
          ->where([
            ['messages.received_id',Auth::user()->id],
            ['messages.is_read','==',0]
          ])
          ->count();
        return view('all_items',[
          'all_items' => $all_items,
          'unread_count' => $unread_count,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'all_items_content',
          'this_user' => $this_user,
          'purpose' => $purpose
        ]);
      } else {
        return view('all_items',[
          'all_items' => $all_items,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'all_items_content',
          'this_user' => $this_user,
          'purpose' => $purpose
        ]);
      };
    }

    public function cart(Request $request)
    {
      $intent = auth()->user()->createSetupIntent();
      $this_user = Auth::user();
      $cart = $request->session()->get('cart');
      if ($this_user) {
        $unread_count = DB::table('messages')
          ->where([
            ['messages.received_id',Auth::user()->id],
            ['messages.is_read','==',0]
          ])
          ->count();
        return view('cart',[
          'cart' => $cart,
          'intent' => $intent,
          'unread_count' => $unread_count,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'cart_content',
          'this_user' => $this_user
        ]);
      } else {
        return view('cart',[
          'cart' => $cart,
          'intent' => $intent,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'cart_content'
        ]);
      };
    }

    public function add(Request $request)
    {
      $this_user = Auth::user();
      $init_cart = [];
      $count = $request->count;
      for ($i = 0; $i < $count; $i++) {
        $a = [
          $request['item_id_'.$i],
          $request['item_name_'.$i],
          $request['item_price_'.$i],
          $request['item_count_'.$i]
        ];
        $init_cart[] = $a;
      };
      $cart = $request->session()->put('cart',$init_cart);
      return redirect('/items/cart');
    }

    public function purchase(Request $request)
    {
      // $plan = Item::find($request->plan);

      $plan_A = Item::find(6);
      $plan_B = Item::find(7);
      $array_A = [6,$plan_A];
      $array_B = [7,$plan_B];
      $all_array = [$array_A, $array_B];

      $this_user = Auth::user();
      $paymentMethod = $request->payment_method;

      foreach ($all_array as $one_array) {
        $this_user->createOrGetStripeCustomer();
        $this_user->updateDefaultPaymentMethod($paymentMethod);
        $this_user->charge(100, $request->payment_method);
      };

      if (Auth::user()) {
        $unread_count = DB::table('messages')
          ->where([
            ['messages.received_id',Auth::user()->id],
            ['messages.is_read','==',0]
          ])
          ->count();
        return view('reunion_registration',[
          'unread_count' => $unread_count,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'reunion_content',
          'this_user' => $this_user
        ]);
      } else {
        return view('reunion_registration',[
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'reunion_content',
          'this_user' => $this_user
        ]);
      };
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
      $item = Item::find($id);
      $this_user = Auth::user();
      $intent = auth()->user()->createSetupIntent();
      if (Auth::user()) {
        $unread_count = DB::table('messages')
          ->where([
            ['messages.received_id',Auth::user()->id],
            ['messages.is_read','==',0]
          ])
          ->count();
        return view('subscription',[
          'item' => $item,
          'intent' => $intent,
          'unread_count' => $unread_count,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'one_item_content',
          'this_user' => $this_user
        ]);
      } else {
        return view('subscription',[
          'item' => $items,
          'intent' => $intent,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'one_item_content',
          'this_user' => $this_user
        ]);
      };
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

    public function submit(Request $request)
    {
      // $plan = Item::find($request->plan);

      $plan_A = Item::find(6);
      $plan_B = Item::find(7);
      $array_A = [6,$plan_A];
      $array_B = [7,$plan_B];
      $all_array = [$array_A, $array_B];

      $this_user = Auth::user();

      foreach ($all_array as $one_array) {
        $subscription = $request->user()->newSubscription($one_array[0], $one_array[1]->stripe_item)->create($request->token);
      };

      if (Auth::user()) {
        $unread_count = DB::table('messages')
          ->where([
            ['messages.received_id',Auth::user()->id],
            ['messages.is_read','==',0]
          ])
          ->count();
        return view('reunion_registration',[
          'unread_count' => $unread_count,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'reunion_content',
          'this_user' => $this_user
        ]);
      } else {
        return view('reunion_registration',[
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'reunion_content',
          'this_user' => $this_user
        ]);
      };
    }
}
