<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart_count = get_cart_count($request)->cart_count;

        $current_user = Auth::user();
        
        if ($current_user == null) {
            $all_photos = Photo::where('member_only',0)->get();
        } else {
            $all_photos = Photo::all();
        };

        return view('photos.index',[
            'style' => 'album_style',
            'js' => '/js/my_custom/history/album/album.js',
            'content' => 'photos_content',
            'all_photos' => $all_photos,
            'cart_count' => $cart_count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $current_user = Auth::user();
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current_user = Auth::user();

        $request->validate([
            'title'          => 'nullable|string|max:250',
            'photo_file'     => 'required|file|max:255',
            'photographer'   => 'nullable|string|max:255',
            'caption'        => 'nullable|string|max:1000',
            'monthOfPhoto'   => 'nullable|integer|max:12|min:1',
            'dayOfPhoto'     => 'nullable|integer|max:31|min:1',
            'yearOfPhoto'    => 'nullable|integer|min:1830',
            'membersOnly'    => 'required|integer',
        ]);

        $photo = Photo::create([
            'title' => $request->title,
            'photo_file' => $request->photo_file,
            'photographer' => $request->photographer,
            'caption' => $request->caption,
            'month_of_photo' => $request->monthOfPhoto,
            'day_of_photo' => $request->dayOfPhoto,
            'year_of_photo' => $request->yearOfPhoto,
            'members_only' => $request->membersOnly,
            'user_id' => $current_user->id
        ]);

        $photo->photo_file = request('photo_file')->store("public/images/gallery");
        $filename = request('photo_file')->hashName();
        $photo->photo_file = $filename;

        $photo->save();
          
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $cart_count = get_cart_count($request)->cart_count;

        $photo = Photo::find($id);

        return view('photos.view',[
            'style' => 'album_style',
            'js' => '/js/my_custom/history/album/album.js',
            'content' => 'photo_content',
            'photo' => $photo,
            'cart_count' => $cart_count
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
        $current_user = Auth::user();

        $photo = Photo::find($id);

        if ($current_user->id == $photo->user_id) {
            return view('photos.edit', compact('current_user','photo'));
        } else {
            return redirect()->route('home');
        }
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
        $current_user = Auth::user();

        $request->validate([
            'title'          => 'nullable|string|max:250',
            'photographer'   => 'nullable|string|max:250',
            'caption'        => 'nullable|string|max:1000',
            'monthOfPhoto'   => 'nullable|integer|max:12|min:1',
            'dayOfPhoto'     => 'nullable|integer|max:31|min:1',
            'yearOfPhoto'    => 'nullable|integer|min:1830',
            'memberOnly'     => 'required|integer',
        ]);

        $photo = Photo::find($id);
        $photo->title = $request['title'];
        $photo->title = $request['photographer'];
        $photo->caption = $request['caption'];
        $photo->month_of_photo = $request['monthOfPhoto'];
        $photo->day_of_photo = $request['dayOfPhoto'];
        $photo->year_of_photo = $request['yearOfPhoto'];
        $photo->member_only = $request['memberOnly'];

        $photo->save();
          
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);

        $current_user = Auth::user();

        if ($photo->user_id == $current_user->id) {
            Storage::delete("public/images/gallery/".$photo->photo_file);
            Photo::where('id',$id)->delete();
            return redirect()->route('photos.index');
        } else {
            return redirect()->route('photos.show', ['id' => $photo->id]);
        };
    }
}
