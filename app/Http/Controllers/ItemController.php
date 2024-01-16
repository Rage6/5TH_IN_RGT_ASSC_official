<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Below is added by Nicholas Vogt
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\InvoiceEmail;

use App\Models\Item;
use App\Models\User;
use App\Models\Payment;
use App\Models\Cart;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

use Stripe;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $current_cart = Cart::where('id',Cookie::get('cartid'))->first();
      // The 'get_cart_count' function is in 'app\helper.php'
      // $cart_count = get_cart_count($request)->cart_count;
      if ($current_cart) {
        $cart_count = $current_cart->count_of_selected;
      } else {
        $cart_count = 0;
      };
      // $test_a = get_cart_count($request)->test_a;

      if (isset($_GET['purpose']) && isset($_GET['title'])) {
        $purpose = $_GET['purpose'];
        $title = str_replace("%20"," ",$_GET['title']);
      } else {
        $purpose = null;
        $title = null;
      };
      if ($purpose == "donation.index") {
        $all_items = Item::where('is_donation',1)->get();
      } else {
        $all_items = Item::where('purpose',$purpose)->get();
      };

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
      if ($current_user && !$is_free_trial) {
        $is_member = true;
      } else {
        $is_member = false;
      };

      $selected_array = [];
      $total_item_count = 0;
      if ($current_cart) {
        // $current_cart = Cart::where('id',Cookie::get('cartid'))->first();
        $current_cart_string = $current_cart->selected_items;
        $split_string = explode("&",$current_cart_string); // splits the string to into individual items
        for ($a = 0; $a < count($split_string); $a++) {
          $new_item = (object) array('id' => null);
          $item_traits= explode("%",$split_string[$a]); // splits the item into its characteristics (ex. "key#value)
          for ($b = 0; $b < count($item_traits); $b++) {
            $item_character = explode("#",$item_traits[$b]); // splits the characteristic into its key and value
            if ($item_character[0] == "id") {
              $new_item->id = intval($item_character[1]);
            };
            if ($item_character[0] == "price") {
              $new_item->price = floatval($item_character[1]);
            };
            if ($item_character[0] == "count") {
              $new_item->count = intval($item_character[1]);
              $total_item_count += $new_item->count;
            };
            if ($item_character[0] == "size") {
              $new_item->size = strval($item_character[1]);
            };
            if ($item_character[0] == "color") {
              $new_item->color = strval($item_character[1]);
            };
            if ($item_character[0] == "patches") {
              $new_item->patches = strval($item_character[1]);
            };
          };
          $selected_array[] = $new_item;
        };
      };

      return view('items.all_items',[
        'all_items' => $all_items,
        'js' => '/'.config('app.url_ext').'js/my_custom/items/items.js',
        'content' => 'all_items_content',
        'page_title' => "Merchandise",
        'purpose' => $purpose,
        'title' => $title,
        'cart_count' => $cart_count,
        // 'cookie_test' => $test_a,
        'is_member' => $is_member,
        'selected_array' => $selected_array,
        'total_item_count' => $total_item_count
      ]);
    }

    public function add(Request $request)
    {
      $count = $request->count;
      $purpose = $request->purpose;
      $title = str_replace("%20"," ",$request->title);
      $db_item_row = '';
      $db_item_count = 0;
      for ($i = 0; $i < $count; $i++) {
        if ($request['item_count_'.$i] > 0 && $request['item_price_'.$i] > 0) {
          if ($db_item_count == 0) {
            $db_item_row = "id#".$request['item_id_'.$i];
          } else {
            $db_item_row = $db_item_row."&id#".$request['item_id_'.$i];
          };
          $db_item_row = $db_item_row."%count#".$request['item_count_'.$i];
          $db_item_row = $db_item_row."%price#".$request['item_price_'.$i];
          if ($request['item_size_'.$i]) {
            $db_item_row .= "%size#".$request['item_size_'.$i];
          };
          if ($request['item_color_'.$i]) {
            $db_item_row .= "%color#".$request['item_color_'.$i];
          };
          if ($request['item_patch_'.$i]) {
            $db_item_row .= "%patches#".$request['item_patch_'.$i];
          };
          $db_item_count += $request['item_count_'.$i];
        };
      };
      
      $db_cart = Cart::where('id',Cookie::get('cartid'))->first();
      $expires_in_minutes = 30;
      $user_id = null;
      if (Auth::user()) {
        $user_id = auth()->user()->id;
      };
      if (!$db_cart) {
        $new_cart = Cart::create([
          'selected_items' => $db_item_row,
          'count_of_selected' => $db_item_count,
          'expires_on' => time() + (60 * $expires_in_minutes), // 60 seconds * minutes to expiraion
          'user_id' => $user_id
        ]);
        Cookie::queue(Cookie::make('cartid',$new_cart->id,$expires_in_minutes));
      } else {
        $current_cart = Cart::where('id',$db_cart->id)->first();
        $current_cart->selected_items = $db_item_row;
        $current_cart->count_of_selected = $db_item_count;
        $current_cart->expires_on = time() + (60 * $expires_in_minutes); // 60 seconds * minutes to expiraion
        $current_cart->user_id = $user_id;
        $current_cart->save();
      };

      return redirect('/items/cart?purpose='.$purpose.'&title='.$title);
    }

    public function cart(Request $request)
    {
      $current_cart = Cart::where('id',Cookie::get('cartid'))->first();
      if (isset($current_cart->id)) {
        $current_cart_id = $current_cart->id;
      } else {
        $current_cart_id = null;
      };
      if ($current_cart) {
        $cart_count = $current_cart->count_of_selected;
        $current_cart_string = $current_cart->selected_items;
      } else {
        $cart_count = 0;
        $current_cart_string = null;
      };
      // if ($current_cart) {
      //   $current_cart_string = $current_cart->selected_items;
      // } else {
      //   $current_cart_string = null;
      // };
      // $cart_count = 0;

      // $cart_content = $request->session()->get('cart');
      // $cookie_string = $request->cookie('cart');
      // $test_a = explode("&",$cookie_string);
      // for ($b = 0; $b < count($test_a); $b++) {
      //   $test_a[$b] = explode("#",$test_a[$b]);
      // };
      // for ($c = 0; $c < count($test_a); $c++) {
      //   for ($d = 0; $d < count($test_a[$c]); $d++) {
      //     if (is_numeric($test_a[$c][$d])) {
      //       $test_a[$c][$d] = floatval($test_a[$c][$d]);
      //     };
      //   };
      // };
      // $cart_content = $test_a;
      $selected_array = [];
      $total_item_count = 0;

      if (isset($_GET['purpose']) && isset($_GET['title'])) {
        $purpose = $_GET['purpose'];
        $title = str_replace("%20"," ",$_GET['title']);
      } else {
        $purpose = null;
        $title = null;
      };

      if ($current_cart) {
      // if ($cart_content) {
        // for ($i = 0; $i < count($cart_content); $i++) {
        //   if (floatval($cart_content[$i][2]) > 0) {
        //     $cart_count += intval($cart_content[$i][3]);
        //   } else {
        //     $cart_content[$i][2] = 0;
        //   };

        //   $item_name_details = "";

        //   $patch_pricing = explode(":",$cart_content[$i][8]);
        //   if (count($patch_pricing) > 1) {
        //     $cart_content[$i][2] += floatval($patch_pricing[1]);
        //   };
        //   if ($patch_pricing[0] != "" && $patch_pricing[0] != "None") {
        //     $item_name_details = $item_name_details." with ".$patch_pricing[0];
        //   };

        //   $size_pricing = explode(":",$cart_content[$i][6]);
        //   if (count($size_pricing) > 1) {
        //     $cart_content[$i][2] += floatval($size_pricing[1]);
        //   };
        //   if ($size_pricing[0] != "") {
        //     $item_name_details = $item_name_details.", ".$size_pricing[0];
        //   };

        //   $color_pricing = explode(":",$cart_content[$i][7]);
        //   if (count($color_pricing) > 1) {
        //     $cart_content[$i][2] += floatval($color_pricing[1]);
        //   };
        //   if ($color_pricing[0] != "") {
        //     $item_name_details = $item_name_details.", ".$color_pricing[0];
        //   };

        //   $cart_content[$i][1] = $cart_content[$i][1].$item_name_details;
        // };
        $current_cart_string = $current_cart->selected_items;
        $split_string = explode("&",$current_cart_string); // splits the string to into individual items
        for ($a = 0; $a < count($split_string); $a++) {
          $new_item = (object) array('id' => null);
          $item_traits= explode("%",$split_string[$a]); // splits the item into its characteristics (ex. "key#value)
          for ($b = 0; $b < count($item_traits); $b++) {
            $item_character = explode("#",$item_traits[$b]); // splits the characteristic into its key and value
            if ($item_character[0] == "id") {
              $new_item->id = intval($item_character[1]);
              $basic_info = Item::where('id',$new_item->id)->first();
              $new_item->name = $basic_info->name;
              $new_item->purpose = $purpose;
              $new_item->title = $title;
            };
            if ($item_character[0] == "price") {
              $new_item->price = floatval($item_character[1]);
            };
            if ($item_character[0] == "count") {
              $new_item->count = intval($item_character[1]);
              $total_item_count += $new_item->count;
            };
            if ($item_character[0] == "size") {
              $new_item->size = strval($item_character[1]);
              if (isset(explode(":",$new_item->size)[1])) {
                $new_item->price += floatval(explode(":",$new_item->size)[1]);
              };
            };
            if ($item_character[0] == "color") {
              $new_item->color = strval($item_character[1]);
              if (isset(explode(":",$new_item->color)[1])) {
                $new_item->price += floatval(explode(":",$new_item->color)[1]);
              };
            };
            if ($item_character[0] == "patches") {
              $new_item->patches = strval($item_character[1]);
              if (isset(explode(":",$new_item->patches)[1])) {
                $new_item->price += floatval(explode(":",$new_item->patches)[1]);
              };
              // $selected_patch = strval($item_character[1]);
            };
          };
          $selected_array[] = $new_item;
        };
      };

      if (Auth::user()) {
        $this_user = auth()->user();
        // $intent = auth()->user()->createSetupIntent();
      // } elseif ($request->session()->get('guest')) {
      } elseif ($request->cookie('guest')) {
        // $this_user = $request->session()->get('guest');
        $this_user = User::where('password',$request->cookie('guest'))->first();
        // $intent = $this_user->createSetupIntent();
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
        // $guest = $request->session()->put('guest',$this_user);
        $one_day = 60 * 24;
        $this_user = User::where('password',$guest_user->password)->first();
        Cookie::queue(Cookie::make('guest',$this_user->password,$one_day));
        // $intent = $this_user->createSetupIntent();
      };
      $intent = $this_user->createSetupIntent();
      
      // $cart = $cart_content;
      // $text_cart = "";
      // $count = 0;
      // if ($cart) {
      //   for ($i = 0; $i < count($cart); $i++) {
      //     if ($i != 0) {
      //       $text_cart = $text_cart."&";
      //     };
      //     if ($cart[$i][2] == 0) {
      //       $cart[$i][3] = 0;
      //     };
      //     $text_cart =
      //     $text_cart
      //     .strval($i)."[]=".strval($cart[$i][0])."&" // id
      //     .strval($i)."[]=".strval($cart[$i][1])."&" // name
      //     .strval($i)."[]=".strval($cart[$i][2])."&" // price
      //     .strval($i)."[]=".strval($cart[$i][3])."&" // quantity
      //     .strval($i)."[]=".strval($cart[$i][4])."&" // return route
      //     .strval($i)."[]=".strval($cart[$i][5])."&" // return page title
      //     .strval($i)."[]=".strval($cart[$i][6])."&" // clothing size
      //     .strval($i)."[]=".strval($cart[$i][7])."&" // clothing color
      //     .strval($i)."[]=".strval($cart[$i][8]);    // clothing patches
      //     // if ($cart[$i][6]) {
      //     //   $text_cart.strval($i)."[]=".strval($cart[$i][6]); // clothing size
      //     // };
      //     if (intval($cart[$i][3]) > 0) {
      //       $count++;
      //     };
      //   };
      // } else {
      //   $text_cart = "expired";
      // };
      return view('items.cart',[
        // 'cart' => $cart,
        'cart' => $selected_array,
        'cart_id' => $current_cart_id,
        'intent' => $intent,
        'cart_count' => $cart_count,
        'js' => '/'.config('app.url_ext').'js/my_custom/reunion/reunion.js',
        'content' => 'cart_content',
        'page_title' => "Cart",
        // 'text_cart' => $text_cart,
        'text_cart' => $current_cart_string,
        'count' => $cart_count,
        'purpose' => $purpose,
        'title' => $title
      ]);
    }

    public function purchase(Request $request)
    {
      $request->validate([
        'payment_email'    => 'required|string',
        'mailing_address'  => 'nullable|string',
        // 'payment_method'   => 'required',
        'text_cart'        => 'required|string',
        'card_holder_name' => 'required|string',
        'email_title'      => 'required|string',
        'get_email_list'   => 'required|string'
      ]);

      $current_cart = Cart::where('id',intval(Cookie::get('cartid')))->first();
      $cart_count = $current_cart->count_of_selected;

      if ($current_cart) {
        $current_cart_string = $current_cart->selected_items;
        $split_string = explode("&",$current_cart_string); // splits the string to into individual items
        for ($a = 0; $a < count($split_string); $a++) {
          $new_item = (object) array('id' => null);
          $item_traits= explode("%",$split_string[$a]); // splits the item into its characteristics (ex. "key#value)
          for ($b = 0; $b < count($item_traits); $b++) {
            $item_character = explode("#",$item_traits[$b]); // splits the characteristic into its key and value
            if ($item_character[0] == "id") {
              $new_item->id = intval($item_character[1]);
              $basic_info = Item::where('id',$new_item->id)->first();
              $new_item->name = $basic_info->name;
              // $new_item->purpose = $purpose;
              // $new_item->title = $title;
            };
            if ($item_character[0] == "price") {
              $new_item->price = floatval($item_character[1]);
            };
            if ($item_character[0] == "count") {
              $new_item->count = intval($item_character[1]);
            };
            if ($item_character[0] == "size") {
              $new_item->size = strval($item_character[1]);
            };
            if ($item_character[0] == "color") {
              $new_item->color = strval($item_character[1]);
            };
            if ($item_character[0] == "patches") {
              $new_item->patches = strval($item_character[1]);
              // $selected_patch = strval($item_character[1]);
            };
          };
          $selected_array[] = $new_item;
        };
      };

      // $cart_count = 0;
      // $cart_content = $request->session()->get('cart');

      // $cookie_string = $request->cookie('cart');
      // $test_a = explode("&",$cookie_string);
      // for ($b = 0; $b < count($test_a); $b++) {
      //   $test_a[$b] = explode("#",$test_a[$b]);
      // };
      // for ($c = 0; $c < count($test_a); $c++) {
      //   for ($d = 0; $d < count($test_a[$c]); $d++) {
      //     if (is_numeric($test_a[$c][$d])) {
      //       $test_a[$c][$d] = floatval($test_a[$c][$d]);
      //     };
      //   };
      // };
      // $cart_content = $test_a;

      // if ($cart_content) {
      //   for ($i = 0; $i < count($cart_content); $i++) {
      //     if (floatval($cart_content[$i][2]) > 0) {
      //       $cart_count += intval($cart_content[$i][3]);
      //     } else {
      //       $cart_content[$i][2] = "0";
      //     };
      //   };
      // };
      // // $plan = Item::find($request->plan);

      // // $plan_A = Item::find(6);
      // // $plan_B = Item::find(7);
      // // $array_A = [6,$plan_A];
      // // $array_B = [7,$plan_B];
      // // $all_array = [$array_A, $array_B];

      // parse_str($request->text_cart,$all_array);

      if (Auth::user()) {
        $this_user = Auth::user();
        $this_user->email = $request->payment_email;
        $this_user->mailing_address = $request->mailing_address;
        $customer_id = $this_user->id;
      } else {
        // $this_user = User::find($request->session()->get('guest')->id);
        $this_user = User::where('password',$request->cookie('guest'))->first();
        $this_user->email = $request->payment_email;
        $this_user->mailing_address = $request->mailing_address;
        $customer_id = null;
      };
      // $paymentMethod = $request->payment_method;
      //
      // $this_user->createOrGetStripeCustomer();
      // // $this_user->updateDefaultPaymentMethod($paymentMethod);
      // $this_user->addPaymentMethod($paymentMethod);
      $overall_total = 0;
      $purchase_email_details = "";
      $purchase_list = [
        "Card Holder Name: ".$request->card_holder_name,
        "Email Address: ".$this_user->email,
        "Mailing Address: ".$this_user->mailing_address
      ];
      // foreach ($all_array as $one_array) {
      //   if (intval($one_array[3]) > 0) {
      //     $one_id = intval($one_array[0]);
      //     $one_quantity = intval($one_array[3]);
      //     $one_item = Item::find($one_id);
      //     $one_price = $one_item->price;
      //     if ($one_item->adjustable_price == 1) {
      //       $one_price = floatval($one_array[2]);
      //     };
      //     if ($one_array[6] != "" || $one_array[6] != null) {
      //       $size_price = explode(":",$one_array[6]);
      //       if (count($size_price) > 1) {
      //         $one_price += floatval($size_price[1]);
      //       };
      //     };
      //     if ($one_array[7] != "" || $one_array[7] != null) {
      //       $color_price = explode(":",$one_array[7]);
      //       if (count($color_price) > 1) {
      //         $one_price += floatval($color_price[1]);
      //       };
      //     };
      //     if ($one_array[8] != "" || $one_array[8] != null) {
      //       $patch_price = explode(":",$one_array[8]);
      //       if (count($patch_price) > 1) {
      //         $one_price += floatval($patch_price[1]);
      //       };
      //     };
      //     $one_total = $one_quantity * $one_price * 100;
      //     $total_cost += $one_total;
      //   };
      // };
      for ($c = 0; $c < count($selected_array); $c++) {
        $item_string = $selected_array[$c]->name;
        $one_price = $selected_array[$c]->price;
        $one_quantity = $selected_array[$c]->count;
        if (isset($selected_array[$c]->patches)) {
          $patch_price = explode(":",$selected_array[$c]->patches);
          $item_string .= " with ".$patch_price[0]." patches";
          if (count($patch_price) > 1) {
            $one_price += floatval($patch_price[1]);
          };
        };
        if (isset($selected_array[$c]->size)) {
          $size_price = explode(":",$selected_array[$c]->size);
          $item_string .= ", Size:".$size_price[0];
          if (count($size_price) > 1) {
            $one_price += floatval($size_price[1]);
          };
        };
        if (isset($selected_array[$c]->color)) {
          $color_price = explode(":",$selected_array[$c]->color);
          $item_string .= ", Color:".$color_price[0];
          if (count($color_price) > 1) {
            $one_price += floatval($color_price[1]);
          };
        };
        $one_total = $one_quantity * $one_price;
        $item_string = $item_string.": $".$one_price." x ".$one_quantity." = $".$one_total;
        if ($purchase_email_details != "") {
          $purchase_email_details = $purchase_email_details.">>>".$item_string;
        } else {
          $purchase_email_details = $item_string;
        };
        $overall_total+=$one_total;
      };

      // $purchase_list = [
      //   "Card Holder Name: ".$request->card_holder_name,
      //   "Email Address: ".$this_user->email,
      //   "Mailing Address: ".$this_user->mailing_address
      // ];
      // $overall_total = 0;
      // $purchase_email_details = "";
      // foreach ($all_array as $one_array) {
      //   if (intval($one_array[3]) > 0) {
      //     $one_id = intval($one_array[0]);
      //     $one_quantity = intval($one_array[3]);
      //     $one_item = Item::find($one_id);
      //     $one_price = $one_item->price;
      //     if ($one_item->adjustable_price == 1) {
      //       $one_price = floatval($one_array[2]);
      //     };
      //     if ($one_array[6] != "" || $one_array[6] != null) {
      //       $size_price = explode(":",$one_array[6]);
      //       if (count($size_price) > 1) {
      //         $one_price += floatval($size_price[1]);
      //       };
      //     };
      //     if ($one_array[7] != "" || $one_array[7] != null) {
      //       $color_price = explode(":",$one_array[7]);
      //       if (count($color_price) > 1) {
      //         $one_price += floatval($color_price[1]);
      //       };
      //     };
      //     if ($one_array[8] != "" || $one_array[8] != null) {
      //       $patch_price = explode(":",$one_array[8]);
      //       if (count($patch_price) > 1) {
      //         $one_price += floatval($patch_price[1]);
      //       };
      //     };
      //     $one_sum_price = $one_quantity * $one_price;
      //     $size_name = explode(":",$one_array[6])[0];
      //     $color_name = explode(":",$one_array[7])[0];
      //     $patch_name = explode(":",$one_array[8])[0];
      //     if ($patch_name !== null && $patch_name != "" && $patch_name != "None") {
      //       $one_item->name = $one_item->name." with ".$patch_name." patches";
      //     };
      //     if ($color_name !== null && $color_name != "") {
      //       $one_item->name = $one_item->name.", Color:".$color_name;
      //     };
      //     if ($size_name !== null && $size_name != "") {
      //       $one_item->name = $one_item->name.", Size: ".$size_name;
      //     };
      //     $item_string = $one_item->name.": $".$one_price." x ".$one_quantity." = $".$one_sum_price;
      //     $purchase_list[] = $item_string;
      //     if ($purchase_email_details != "") {
      //       $purchase_email_details = $purchase_email_details.">>>".$item_string;
      //     } else {
      //       $purchase_email_details = $item_string;
      //     };
      //     $overall_total += $one_sum_price;
      //   };
      // };
      $transaction_fee = $overall_total * 0.029 + 0.3;
      $final_total = $overall_total - $transaction_fee;
      $purchase_list[] = "-------------------";
      $purchase_list[] = "Total: $".round($overall_total,2);
      $purchase_list[] = "Transaction Fee: $".round($transaction_fee,2);
      $purchase_list[] = "FINAL TOTAL: $".round($final_total,2);

      $users = User::where([
        ['expiration_date','!=',null],
        ['deceased','=',0]
      ])->get();

      $invoice_email = [];

      if ($request->get_email_list == "registration.index") {
        // if (App::environment() == 'local') {
        //   $email_list_test = 'MEMBERSHIP_EMAIL_TEST';
        // } else {
        //   $email_list_official = 'MEMBERSHIP_EMAIL_OFFICIAL';
        // };
        foreach ($users as $one_user) {
          $is_manager = User::find($one_user->id)->check_for_role("Member Data Manager");
          $is_treasurer = User::find($one_user->id)->check_for_role("Treasurer");
          $is_all_permissions = User::find($one_user->id)->check_for_role("All Permissions Staff Member");
          if ($is_manager == true || $is_treasurer == true ||$is_all_permissions == true) {
            $invoice_email[] = $one_user->email;
          };
        };
      } elseif ($request->get_email_list == "reunion.index") {
        // if (App::environment() == 'local') {
        //   $email_list_test = 'REUNION_EMAIL_TEST';
        // } else {
        //   $email_list_official = 'REUNION_EMAIL_OFFICIAL';
        // };
        foreach ($users as $one_user) {
          $is_coordinator = User::find($one_user->id)->check_for_role("Event Coordinator");
          $is_treasurer = User::find($one_user->id)->check_for_role("Treasurer");
          $is_all_permissions = User::find($one_user->id)->check_for_role("All Permissions Staff Member");
          if ($is_coordinator == true || $is_treasurer == true ||$is_all_permissions == true) {
            $invoice_email[] = $one_user->email;
          };
        };
      } elseif ($request->get_email_list == "merchandise.index") {
        // if (App::environment() == 'local') {
        //   $email_list_test = 'MERCHANDISE_EMAIL_TEST';
        // } else {
        //   $email_list_official = 'MERCHANDISE_EMAIL_OFFICIAL';
        // };
        foreach ($users as $one_user) {
          $is_quartermaster = User::find($one_user->id)->check_for_role("Quartermaster");
          $is_treasurer = User::find($one_user->id)->check_for_role("Treasurer");
          $is_all_permissions = User::find($one_user->id)->check_for_role("All Permissions Staff Member");
          if ($is_quartermaster == true || $is_treasurer == true ||$is_all_permissions == true) {
            $invoice_email[] = $one_user->email;
          };
        };
      } elseif ($request->get_email_list == "donation.index") {
        // if (App::environment() == 'local') {
        //   $email_list_test = 'DONATION_EMAIL_TEST';
        // } else {
        //   $email_list_official = 'DONATION_EMAIL_OFFICIAL';
        // };
        foreach ($users as $one_user) {
          $is_treasurer = User::find($one_user->id)->check_for_role("Treasurer");
          $is_all_permissions = User::find($one_user->id)->check_for_role("All Permissions Staff Member");
          if ($is_treasurer == true || $is_all_permissions == true) {
            $invoice_email[] = $one_user->email;
          };
        };
      };

      // if (App::environment() == 'local') {
      //   $invoice_email_test = explode(',',env($email_list_test));
      //   $invoice_email_test[] = $this_user->email;
      //   Mail::to($invoice_email_test)->send(new InvoiceEmail($purchase_list, $request->email_title));
      // } else {
      //   $invoice_email_official = explode(',',env($email_list_official));
      //   Mail::to($invoice_email_official)->send(new InvoiceEmail($purchase_list, $request->email_title));
      // };

      // Email to customer
      Mail::to($this_user->email)->send(new InvoiceEmail($purchase_list, $request->email_title));
      // Email to Bobcat Staff
      Mail::to($invoice_email)->send(new InvoiceEmail($purchase_list, $request->email_title));

      $all_payments = Payment::where([
        ['total_cost',round($overall_total,2)],
        ['customer_email',$this_user->email]
      ]);
      $has_duplicate = false;
      foreach ($all_payments as $one_payment) {
        if ($this_user->created_at >= $one_payment->created_at && $this_user->created_at <= $one_payment->timestamp + 5) {
          $has_duplicate = true;
        };
      };

      if (!$has_duplicate) {

        // $this_user->charge($total_cost, $request->payment_method);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $overall_total*100,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => "Card Holder Name: ".$request->card_holder_name,
        ]);

        Payment::create([
          'customer_email' => $this_user->email,
          'total_cost' => round($overall_total,2),
          'details' => $purchase_email_details,
          'user_id' => $customer_id
        ]);
      };

      $guest_user = User::where('password',$request->cookie('guest'))->first();
      if ($guest_user) {
        $guest_user->delete();
      };

      // $request->session()->forget('cart');
      // $request->session()->forget('guest');

      // Cookie::queue(Cookie::forget('cart'));
      Cookie::queue(Cookie::forget('cartid'));
      Cart::destroy($current_cart->id);
      Cookie::queue(Cookie::forget('guest'));

      return redirect ('/');

    }

    public function clear(Request $request)
    {

      $guest_user = User::where('password',$request->cookie('guest'))->first();
      if ($guest_user) {
        $guest_user->delete();
      };

      // $request->session()->forget('cart');
      // $request->session()->forget('guest');

      // Cookie::queue(Cookie::forget('cart'));
      Cookie::queue(Cookie::forget('guest'));

      $cart_id = intval(Cookie::get('cartid'));
      Cart::destroy($cart_id);
      Cookie::queue(Cookie::forget('cartid'));

      return redirect ('/');
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

      return view('subscription',[
        'item' => $items,
        'intent' => $intent,
        'style' => 'reunion_style',
        'js' => '/js/my_custom/reunion/reunion.js',
        'content' => 'one_item_content',
        'this_user' => $this_user
      ]);
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

      return view('reunion',[
        'style' => 'reunion_style',
        'js' => '/'.config('app.url_ext').'js/my_custom/reunion/reunion.js',
        'content' => 'reunion_content',
        'this_user' => $this_user
      ]);

    }
}
