<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Album;
use App\Models\Photo;

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

  public function create(Request $request) {
    // The 'get_cart_count' function is in 'app\helper.php'
    $cart_count = get_cart_count($request)->cart_count;

    return view('album.create',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'cart_count' => $cart_count
    ]);
  }

  public function store(Request $request) {

    $current_user = Auth::user();

    $request->validate([
      'title'          => 'required|string|max:250|unique:photos,title',
      'caption'        => 'nullable|string|max:1000',
      'membersOnly'    => 'required|integer',
    ]);

    $album = Album::create([
        'title' => $request->title,
        'caption' => $request->caption,
        'members_only' => $request->membersOnly,
        'user_id' => $current_user->id
    ]);

    $album->save();

    return redirect()->route('photos.index');
  }

  public function edit($id)
  {
      $current_user = Auth::user();

      $album = Album::find($id);

      if ($current_user->id == $album->user_id) {
          return view('album.edit', compact('current_user','album'));
      } else {
          return redirect()->route('photos.index');
      };
  }

  public function update(Request $request, $id)
  {
      $current_user = Auth::user();

      $album = Album::find($id);

      if ($current_user->id == $album->user_id) {  
        $request->validate([
          'title'          => 'nullable|string|max:250',
          'caption'        => 'nullable|string|max:1000',
          'membersOnly'     => 'required|integer'
        ]);

        // $album = Album::find($id);
        $album->title = $request['title'];
        $album->caption = $request['caption'];
        $album->members_only = $request['membersOnly'];

        $album->save();
      };
          
      return redirect()->route('photos.index',['album' => $id]);
  }

  public function destroy($id)
  {
      $album = Album::find($id);

      $current_user = Auth::user();

      if ($album->user_id == $current_user->id) {
          Photo::where('album_id',$album->id)->update(['album_id' => null]);
          Album::where('id',$album->id)->delete();
      };

      return redirect()->route('photos.index');
  }

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