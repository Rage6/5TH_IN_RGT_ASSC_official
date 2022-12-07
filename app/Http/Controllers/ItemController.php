<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Below is added by Nicholas Vogt
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Item;
use App\Models\User;

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
      $current_cart = $request->session()->get('cart');
      $current_guest = $request->session()->get('guest');
      $all_items = Item::where('purpose',$purpose)->get();
      if ($current_cart) {
        foreach ($all_items as $one_item) {
          $one_item->count = 0;
          for ($i = 0; count($current_cart) > $i; $i++) {
            if (intval($current_cart[$i][0]) == $one_item->id) {
              $one_item->count = $current_cart[$i][3];
              if ($one_item->count == null) {
                $one_item->count = 0;
              };
            };
          };
        };
      };
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
          'purpose' => $purpose,
          'current_cart' => $current_cart
        ]);
      } else {
        return view('all_items',[
          'all_items' => $all_items,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'all_items_content',
          'purpose' => $purpose,
          'current_cart' => $current_cart
        ]);
      };
    }

    public function add(Request $request)
    {
      $init_cart = [];
      $count = $request->count;
      $purpose = $request->purpose;
      for ($i = 0; $i < $count; $i++) {
        $a = [
          $request['item_id_'.$i],
          $request['item_name_'.$i],
          $request['item_price_'.$i],
          $request['item_count_'.$i],
          $request['item_return_'.$i]
        ];
        $init_cart[] = $a;
      };
      $cart = $request->session()->put('cart',$init_cart);
      return redirect('/items/cart?purpose='.$purpose);
    }

    public function cart(Request $request)
    {
      $purpose = $_GET['purpose'];
      if (Auth::user()) {
        $intent = auth()->user()->createSetupIntent();
      } elseif ($request->session()->get('guest')) {
        // $this_user = $request->session()->get('guest');
        $this_user = User::find($request->session()->get('guest')->id);
        $intent = $this_user->createSetupIntent();
      } else {
        $all_characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $random_password = '';
        for ($i = 0; $i < 20; $i++) {
          $index = rand(0, strlen($all_characters) - 1);
          $random_password .= $all_characters[$index];
        };
        $guest_user = new User();
        $guest_user->first_name = "Guest";
        $guest_user->last_name = time();
        $guest_user->email = "guest@email.com";
        $guest_user->password = "guest_".$random_password;
        $guest_user->save();
        $new_guest = User::where('password',$guest_user->password)->first();
        $guest = $request->session()->put('guest',$new_guest);
        $intent = $new_guest->createSetupIntent();
      };
      if (Auth::user()) {
        $this_user = Auth::user();
      } elseif ($request->session()->get('guest')) {
        $this_user = User::find($request->session()->get('guest')->id);
      };
      $cart = $request->session()->get('cart');
      $text_cart = "";
      $count = 0;
      for ($i = 0; $i < count($cart); $i++) {
        $text_cart = $text_cart.strval($i)."[]=".strval($cart[$i][0])."&".strval($i)."[]=".strval($cart[$i][1])."&".strval($i)."[]=".strval($cart[$i][2])."&".strval($i)."[]=".strval($cart[$i][3])."&".strval($i)."[]=".strval($cart[$i][4]."&");
        if (intval($cart[$i][3]) > 0) {
          $count++;
        };
      };
      if (Auth::user()) {
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
          'text_cart' => $text_cart,
          'count' => $count,
          'purpose' => $purpose
        ]);
      } else {
        return view('cart',[
          'cart' => $cart,
          'intent' => $intent,
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'cart_content',
          'text_cart' => $text_cart,
          'count' => $count,
          'purpose' => $purpose
        ]);
      };
    }

    public function purchase(Request $request)
    {
      // $plan = Item::find($request->plan);

      // $plan_A = Item::find(6);
      // $plan_B = Item::find(7);
      // $array_A = [6,$plan_A];
      // $array_B = [7,$plan_B];
      // $all_array = [$array_A, $array_B];

      parse_str($request->text_cart,$all_array);

      if (Auth::user()) {
        $this_user = Auth::user();
      } else {
        $this_user = User::find($request->session()->get('guest')->id);
      };
      $paymentMethod = $request->payment_method;

      foreach ($all_array as $one_array) {
        $one_id = intval($one_array[0]);
        $one_item = Item::find($one_id);
        $one_price = $one_item->price;
        $this_user->createOrGetStripeCustomer();
        $this_user->updateDefaultPaymentMethod($paymentMethod);
        $this_user->charge($one_price * 100, $request->payment_method);
      };

      $request->session()->forget('cart');
      $request->session()->forget('guest');

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
