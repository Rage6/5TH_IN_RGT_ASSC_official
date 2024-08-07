<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\App;

use App\Models\Bulletin;
use App\Models\Role;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $user = Auth::user();

      if ($user == null) {
        $member_status = "not a member";
      } elseif ($user->expiration_date < date('Y-m-d h:m:s') && $user->expiration_date != '1970-01-01 00:00:00') {
        $member_status = "expired member";
      } else {
        $member_status = "member";
      };

      $all_bulletins = Bulletin::orderBy('post_year','desc')->orderBy('season_order','desc')->get();
      $most_recent = Bulletin::orderBy('post_year','desc')->orderBy('season_order','desc')->first();
      $oldest_bulletin = Bulletin::orderBy('post_year','asc')->orderBy('season_order','asc')->first();

      $all_editors = Role::where('slug','=','newsletter-editor')->first()->all_role_users;
      $editors = [];

      foreach ($all_editors as $one_user) {
        $editors[] = $one_user;
      };

      return view('newsletter.newsletter',[
        'js' => config('app.url_ext').'/js/my_custom/registration/registration.js',
        'content' => 'newsletter_content',
        'page_title' => "Newsletters",
        'cart_count' => $cart_count,
        'all_bulletins' => $all_bulletins,
        'most_recent' => $most_recent,
        'oldest_bulletin' => $oldest_bulletin,
        'member_status' => $member_status,
        'editors' => $editors
      ]);
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
}
