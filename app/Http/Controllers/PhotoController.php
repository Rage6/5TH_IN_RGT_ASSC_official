<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\Photo;
use App\Models\Album;
use App\Models\User;

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
        $is_album_admin = false;

        $album_id = null;
        $public_album = false;

        $photos_per_page = 24;

        if (isset($_GET['album'])) {
            if ($_GET['album'] == 'unassigned') {
                $album_where = ['album_id',null];
            } else {
                $album_id = intval($_GET['album']);
                $album_where = ['album_id',$album_id];
                $selected_album = Album::where('id',$album_id)->first();
                if ($selected_album->members_only == 0) {
                    $public_album = true;
                };
            };
        } else {
            $album_where = [null];
        };
        
        if ($current_user == null) {
            $all_albums = Album::where('members_only',0)
                ->orderBy('title','ASC')
                ->get();
            if (!isset($_GET['album']) || $_GET['album'] == 'unassigned' || $public_album == true) {
                $all_photos = Photo::where([['members_only',0],$album_where])
                    ->paginate($photos_per_page);
            } else {
                $all_photos = null;
            };
        } else {
            $all_albums = Album::orderBy('title','ASC')
                ->get();
            if ($album_id != null) {
                foreach ($all_albums as $one_album) {
                    if ($one_album->id == $album_id && $one_album->user_id == $current_user->id) {
                        $is_album_admin = true;
                    };
                };
            };

            $all_photos = Photo::where([$album_where])
                ->paginate($photos_per_page);
        };

        if (isset($_GET['album'])) {
            $all_photos->appends(['album' => $_GET['album']]);
        };

        return view('photos.index',[
            'style' => 'album_style',
            'js' => '/js/my_custom/history/album/album.js',
            'current_user' => $current_user,
            'content' => 'photos_content',
            'all_albums' => $all_albums,
            'all_photos' => $all_photos,
            'cart_count' => $cart_count,
            'is_album_admin' => $is_album_admin,
            'album_id' => $album_id,
            'photos_per_page' => $photos_per_page
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

        $public_albums = Album::where([
                ['members_only', 0],
                ['only_creator_photos', 0]
            ])
            ->orWhere([
                ['members_only', 0],
                ['user_id', $current_user->id]
            ])
            ->orderBy('title', 'ASC')
            ->get();

        $member_albums = Album::where([
                ['members_only', 1],
                ['only_creator_photos', 0]
            ])
            ->orWhere([
                ['members_only', 1],
                ['user_id', $current_user->id]
            ])
            ->orderBy('title', 'ASC')
            ->get();

        return view('photos.create', [
            'public_albums' => $public_albums,
            'member_albums' => $member_albums
        ]);
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

        if ($request->albumId == "none") {
            $request->albumId = null;
        };

        $request->validate([
            'title'          => 'nullable|string|max:250',
            'photo_file'     => 'required|file|max:2048', // <-- 8192 KB == 8 MB
            'photographer'   => 'nullable|string|max:255',
            'caption'        => 'nullable|string|max:1000',
            'monthOfPhoto'   => 'nullable|integer|max:12|min:1',
            'dayOfPhoto'     => 'nullable|integer|max:31|min:1',
            'yearOfPhoto'    => 'nullable|integer|min:1830',
            'membersOnly'    => 'required|integer',
            'album_id'       => 'nullable|integer'
        ]);

        $photo = Photo::create([
            'title' => $request->title,
            'photo_file' => $request->photo_file,
            'photographer' => $request->photographer,
            'caption' => $request->caption,
            'month_of_photo' => $request->monthOfPhoto,
            'day_of_photo' => $request->dayOfPhoto,
            'year_of_photo' => $request->yearOfPhoto,
            'members_only' => intval($request->membersOnly),
            'user_id' => $current_user->id,
            'album_id' => $request->albumId
        ]);

        $photo->photo_file = request('photo_file')->store("public/images/gallery");
        $filename = request('photo_file')->hashName();
        $photo->photo_file = $filename;

        $photo->save();
          
        return redirect()->route('photos.show', ['id' => $photo->id]);
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

        $current_user = Auth::user();

        $photo = Photo::find($id);

        $uploaded_by = User::find($photo->user_id);
        $uploaded_by = $uploaded_by->first_name." ".$uploaded_by->last_name;

        // Day
        if ($photo->day_of_photo == null) {
            $day = "__";
        } elseif ($photo->day_of_photo == 1 || $photo->day_of_photo == 21 || $photo->day_of_photo == 31) {
            $day = $photo->day_of_photo."st";
        } elseif ($photo->day_of_photo == 2 || $photo->day_of_photo == 22) {
            $day = $photo->day_of_photo."nd";
        } elseif ($photo->day_of_photo == 3 || $photo->day_of_photo == 23) {
            $day = $photo->day_of_photo."rd";
        } else {
            $day = $photo->day_of_photo."th";
        };

        // Month
        if ($photo->month_of_photo == 1) {
            $month == "Jan.";
        } elseif ($photo->month_of_photo == 2) {
            $month = "Feb.";
        } elseif ($photo->month_of_photo == 3) {
            $month = "Mar.";
        } elseif ($photo->month_of_photo == 4) {
            $month = "Apr.";
        } elseif ($photo->month_of_photo == 5) {
            $month = "May";
        } elseif ($photo->month_of_photo == 6) {
            $month = "June";
        } elseif ($photo->month_of_photo == 7) {
            $month = "July";
        } elseif ($photo->month_of_photo == 8) {
            $month = "Aug.";
        } elseif ($photo->month_of_photo == 9) {
            $month = "Sept.";
        } elseif ($photo->month_of_photo == 10) {
            $month = "Oct.";
        } elseif ($photo->month_of_photo == 11) {
            $month = "Nov.";
        } elseif ($photo->month_of_photo == 12) {
            $month = "Dec.";
        } else {
            $month = "__";
        };

        // Year
        if ($photo->year_of_photo == null) {
            $year = "____";
        } else {
            $year = $photo->year_of_photo;
        };

        $photo_date = $month." ".$day.", ".$year;

        return view('photos.view',[
            'style' => 'album_style',
            'js' => '/js/my_custom/history/album/album.js',
            'content' => 'photo_content',
            'photo' => $photo,
            'photo_date' => $photo_date,
            'uploaded_by' => $uploaded_by,
            'cart_count' => $cart_count,
            'current_user' => $current_user
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

        $public_albums = Album::where([
                ['members_only', 0],
                ['only_creator_photos', 0]
            ])
            ->orWhere([
                ['members_only', 0],
                ['user_id', $current_user->id]
            ])
            ->orderBy('title', 'ASC')
            ->get();

        $member_albums = Album::where([
                ['members_only', 1],
                ['only_creator_photos', 0]
            ])
            ->orWhere([
                ['members_only', 1],
                ['user_id', $current_user->id]
            ])
            ->orderBy('title', 'ASC')
            ->get();

        if ($current_user->id == $photo->user_id) {
            return view('photos.edit', compact('current_user','photo','public_albums','member_albums'));
        } else {
            return redirect()->route('photos.show', ['id' => $photo->id]);
        };
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

        if ($request['albumId'] == "none") {
            $request['albumId'] = null;
        };

        $request['membersOnly'] = intval($request['membersOnly']);

        $request->validate([
            'title'          => 'nullable|string|max:250',
            'photographer'   => 'nullable|string|max:250',
            'caption'        => 'nullable|string|max:1000',
            'monthOfPhoto'   => 'nullable|integer|max:12|min:1',
            'dayOfPhoto'     => 'nullable|integer|max:31|min:1',
            'yearOfPhoto'    => 'nullable|integer|min:1830',
            'membersOnly'    => 'required|integer',
            'albumId'        => 'nullable|integer',
        ]);

        $photo = Photo::find($id);
        if ($current_user->id == $photo->user_id) {
            $photo->title = $request['title'];
            $photo->photographer = $request['photographer'];
            $photo->caption = $request['caption'];
            $photo->month_of_photo = $request['monthOfPhoto'];
            $photo->day_of_photo = $request['dayOfPhoto'];
            $photo->year_of_photo = $request['yearOfPhoto'];
            $photo->members_only = $request['membersOnly'];
            $photo->album_id = $request['albumId'];

            $photo->save();
        };
          
        return redirect()->route('photos.show', ['id' => $photo->id]);
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
