<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class HistoryController extends Controller
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

      return view('history.timeline',[
        'js' => '/'.env('APP_URL_EXTENSION').'js/my_custom/history/history.js',
        'content' => 'timeline_content',
        'page_title' => "Timeline",
        'cart_count' => $cart_count
      ]);

    }

    public function origin(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      return view('history.origin',[
        'js' => '/'.env('APP_URL_EXTENSION').'js/my_custom/history/history.js',
        'content' => 'origin_and_traditions_content',
        'page_title' => "Origin & Tradition",
        'cart_count' => $cart_count
      ]);

    }

    // public function vietnam_preface(Request $request)
    // {
    //   // The 'get_cart_count' function is in 'app\helper.php'
    //   $cart_count = get_cart_count($request)->cart_count;
    //
    //   return view('vietnam_glossary',[
    //     'year_casualties' => [],
    //     'style' => 'history_style',
    //     'js' => '/js/my_custom/history/history.js',
    //     'content' => 'vietnam_preface_content',
    //     'page_title' => "Preface"
    //   ]);
    //
    // }
    //
    // public function vietnam_1966()
    // {
    //   $year_casualties = DB::table('casualties')
    //     ->select('id','rank','first_name','middle_name','last_name','month_of_death')
    //     ->where('year_of_death',1966)
    //     ->get();
    //
    //   // The 'get_cart_count' function is in 'app\helper.php'
    //   $cart_count = get_cart_count($request)->cart_count;
    //
    //   return view('vietnam_log',[
    //     'year_casualties' => $year_casualties,
    //     'style' => 'history_style',
    //     'js' => '/js/my_custom/history/history.js',
    //     'content' => 'vietnam_1966_content',
    //     'page_title' => "1966"
    //   ]);
    //
    // }
    //
    // public function vietnam_1967()
    // {
    //   $year_casualties = DB::table('casualties')
    //     ->select('id','rank','first_name','middle_name','last_name','month_of_death')
    //     ->where('year_of_death',1967)
    //     ->get();
    //
    //   // The 'get_cart_count' function is in 'app\helper.php'
    //   $cart_count = get_cart_count($request)->cart_count;
    //
    //   return view('vietnam_log',[
    //     'year_casualties' => $year_casualties,
    //     'style' => 'history_style',
    //     'js' => '/js/my_custom/history/history.js',
    //     'content' => 'vietnam_1967_content',
    //     'page_title' => "1967"
    //   ]);
    //
    // }
    //
    // public function vietnam_1968()
    // {
    //   $year_casualties = DB::table('casualties')
    //     ->select('id','rank','first_name','middle_name','last_name','month_of_death')
    //     ->where('year_of_death',1968)
    //     ->get();
    //
    //   // The 'get_cart_count' function is in 'app\helper.php'
    //   $cart_count = get_cart_count($request)->cart_count;
    //
    //   return view('vietnam_log',[
    //     'year_casualties' => $year_casualties,
    //     'style' => 'history_style',
    //     'js' => '/js/my_custom/history/history.js',
    //     'content' => 'vietnam_1968_content',
    //     'page_title' => "1968"
    //   ]);
    //
    // }
    //
    // public function vietnam_1969()
    // {
    //   $year_casualties = DB::table('casualties')
    //     ->select('id','rank','first_name','middle_name','last_name','month_of_death')
    //     ->where('year_of_death',1969)
    //     ->get();
    //
    //   // The 'get_cart_count' function is in 'app\helper.php'
    //   $cart_count = get_cart_count($request)->cart_count;
    //
    //   return view('vietnam_log',[
    //     'year_casualties' => $year_casualties,
    //     'style' => 'history_style',
    //     'js' => '/js/my_custom/history/history.js',
    //     'content' => 'vietnam_1969_content',
    //     'page_title' => "1969"
    //   ]);
    //
    // }
    //
    // public function vietnam_1970()
    // {
    //   $year_casualties = DB::table('casualties')
    //     ->select('id','rank','first_name','middle_name','last_name','month_of_death')
    //     ->where('year_of_death',1970)
    //     ->get();
    //
    //   // The 'get_cart_count' function is in 'app\helper.php'
    //   $cart_count = get_cart_count($request)->cart_count;
    //
    //   return view('vietnam_log',[
    //     'year_casualties' => $year_casualties,
    //     'style' => 'history_style',
    //     'js' => '/js/my_custom/history/history.js',
    //     'content' => 'vietnam_1970_content',
    //     'page_title' => "1970"
    //   ]);
    //
    // }
    //
    // public function vietnam_1971()
    // {
    //   $year_casualties = DB::table('casualties')
    //     ->select('id','rank','first_name','middle_name','last_name','month_of_death')
    //     ->where('year_of_death',1971)
    //     ->get();
    //
    //   // The 'get_cart_count' function is in 'app\helper.php'
    //   $cart_count = get_cart_count($request)->cart_count;
    //
    //   return view('vietnam_log',[
    //     'year_casualties'=>$year_casualties,
    //     'style' => 'history_style',
    //     'js' => '/js/my_custom/history/history.js',
    //     'content' => 'vietnam_1971_content',
    //     'page_title' => "1971"
    //   ]);
    //
    // }

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
