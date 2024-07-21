<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class WelcomeController extends Controller
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

      $casualty_count = User::where('kia_or_mia','=',1)->count();
      $moh_count = User::where('moh_recipient','=',1)->count();

      return view('welcome.welcome',[
        'cart_count' => $cart_count,
        'style' => 'welcome_style',
        'js' => config('app.url_ext').'/js/my_custom/welcome/welcome.js',
        'content' => 'welcome_content',
        'casualty_count' => $casualty_count,
        'moh_count' => $moh_count
      ]);

    }

    public function maintenance() {
      return view('welcome.maintenance',[
        'style' => 'welcome_style',
        'js' => config('app.url_ext').'/js/my_custom/welcome/welcome.js',
      ]);
    }

    public function error(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      return view('welcome.error',[
        'cart_count' => $cart_count,
        'style' => 'error_style',
        'js' => config('app.url_ext').'/js/my_custom/welcome/welcome.js',
        'content' => 'error_content'
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
