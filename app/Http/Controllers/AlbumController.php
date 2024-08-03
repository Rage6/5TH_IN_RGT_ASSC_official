<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{

  // public function index()
  // {
  //   return view('album',[
  //     'style' => 'album_style',
  //     'js' => '/js/my_custom/history/album/album.js',
  //     'content' => 'album_content'
  //   ]);
  // }

  public function ww2(Request $request)
  {
    // The 'get_cart_count' function is in 'app\helper.php'
    $cart_count = get_cart_count($request)->cart_count;

    return view('history.album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'ww2_content',
      'cart_count' => $cart_count
    ]);
  }

  public function korea(Request $request)
  {
    // The 'get_cart_count' function is in 'app\helper.php'
    $cart_count = get_cart_count($request)->cart_count;

    return view('history.album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'korea_content',
      'cart_count' => $cart_count
    ]);
  }

  public function vietnam(Request $request)
  {
    // The 'get_cart_count' function is in 'app\helper.php'
    $cart_count = get_cart_count($request)->cart_count;

    return view('history.album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'vietnam_content',
      'cart_count' => $cart_count
    ]);
  }

  public function ben_cui(Request $request)
  {
    // The 'get_cart_count' function is in 'app\helper.php'
    $cart_count = get_cart_count($request)->cart_count;

    return view('history.album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'ben_cui_content',
      'cart_count' => $cart_count
    ]);
  }

  public function gwot()
  {
    if (Auth::user()) {
       $unread_count = DB::table('messages')
         ->where([
           ['messages.received_id',Auth::user()->id],
           ['messages.is_read','==',0]
         ])
         ->count();
      return view('album',[
        'unread_count' => $unread_count,
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'gwot_content'
      ]);
    } else {
      return view('album',[
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ww2_content'
      ]);
    }
  }

  public function vietnam_maps(Request $request)
  {
    // The 'get_cart_count' function is in 'app\helper.php'
    $cart_count = get_cart_count($request)->cart_count;

    return view('history.album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'vietnam_map_content',
      'cart_count' => $cart_count
    ]);
  }

}