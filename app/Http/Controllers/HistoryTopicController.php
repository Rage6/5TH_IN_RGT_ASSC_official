<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Conflict;

class HistoryTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function korea_citation(Request $request)
     {
        // The 'get_cart_count' function is in 'app\helper.php'
        $cart_count = get_cart_count($request)->cart_count;
 
        return view('history.korea.history_topic',[
          'style' => 'history_style',
          'js' => '/js/my_custom/history/history.js',
          'content' => 'distinguished_unit_citation_content',
          'page_title' => "Distinguished Unit Citation",
          'cart_count' => $cart_count
        ]);
     }
    
     public function vietnam_preface(Request $request)
    {
       // The 'get_cart_count' function is in 'app\helper.php'
       $cart_count = get_cart_count($request)->cart_count;

       return view('history.vietnam.vietnam_log',[
         'year_casualties' => [],
         'style' => 'history_style',
         'js' => '/js/my_custom/history/history.js',
         'content' => 'vietnam_preface_content',
         'page_title' => "Preface",
         'cart_count' => $cart_count
       ]);
    }

    public function vietnam_1966(Request $request)
    {
       // The 'get_cart_count' function is in 'app\helper.php'
       $cart_count = get_cart_count($request)->cart_count;

       $year_casualties = User::where('year_of_death',1966)->get();

       return view('history.vietnam.vietnam_log',[
         'year_casualties' => $year_casualties,
         'style' => 'history_style',
         'js' => '/js/my_custom/history/history.js',
         'content' => 'vietnam_1966_content',
         'page_title' => "1966",
         'cart_count' => $cart_count
       ]);
    }

    public function vietnam_1967(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $year_casualties = User::where('year_of_death',1967)->orderBy('month_of_death','asc')->orderBy('last_name','asc')->get();

      return view('history.vietnam.vietnam_log',[
        'year_casualties' => $year_casualties,
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'vietnam_1967_content',
        'page_title' => "1967",
        'cart_count' => $cart_count
      ]);
    }

    public function vietnam_1968(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $year_casualties = User::where('year_of_death',1968)->orderBy('month_of_death','asc')->orderBy('last_name','asc')->get();

      return view('history.vietnam.vietnam_log',[
        'year_casualties' => $year_casualties,
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'vietnam_1968_content',
        'page_title' => "1968",
        'cart_count' => $cart_count
      ]);
    }

    public function vietnam_1969(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $year_casualties = User::where('year_of_death',1969)->orderBy('month_of_death','asc')->orderBy('last_name','asc')->get();

      return view('history.vietnam.vietnam_log',[
        'year_casualties' => $year_casualties,
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'vietnam_1969_content',
        'page_title' => "1969",
        'cart_count' => $cart_count
      ]);
    }

    public function vietnam_1970(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $year_casualties = User::where('year_of_death',1970)->orderBy('month_of_death','asc')->orderBy('last_name','asc')->get();

      return view('history.vietnam.vietnam_log',[
        'year_casualties' => $year_casualties,
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'vietnam_1970_content',
        'page_title' => "1970",
        'cart_count' => $cart_count
      ]);
    }

    public function vietnam_1971(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $year_casualties = User::where('year_of_death',1971)->orderBy('month_of_death','asc')->orderBy('last_name','asc')->get();

      return view('history.vietnam.vietnam_log',[
        'year_casualties' => $year_casualties,
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'vietnam_1971_content',
        'page_title' => "1971",
        'cart_count' => $cart_count
      ]);
    }

    public function ben_cui_battle(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $ben_cui = Conflict::where('name','like','%Ben Cui%')->first();

      $ben_cui_casualties = User::where('casualty_conflict_id',$ben_cui->id)->get();

      foreach ($ben_cui_casualties as $one_casualty) {
        if ($one_casualty->first_name == "Marvin" && $one_casualty->last_name == "Young") {
          $moh_id = $one_casualty->id;
        };
      };

      return view('history.vietnam.ben_cui_battle',[
        // 'style' => 'history_style',
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'ben_cui_battle_content',
        'page_title' => "Battle of Ben Cui",
        'all_casualties' => $ben_cui_casualties,
        'cart_count' => $cart_count,
        'moh_id' => $moh_id
      ]);
    }

    public function presidential_citation(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      return view('history.vietnam.history_topic',[
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'presidential_citation_content',
        'page_title' => "Presidential Citation",
        'cart_count' => $cart_count
      ]);
    }

    public function michelin_rubber_plant_battle(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      return view('history.vietnam.history_topic',[
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'michelin_rubber_plant_battle_content',
        'page_title' => "Rubber Plant Battle",
        'cart_count' => $cart_count,
      ]);
    }

    public function the_rifle_and_the_myth(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      return view('history.vietnam.history_topic',[
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'the_rifle_and_the_myth_content',
        'page_title' => "The Rifle And The Myth",
        'cart_count' => $cart_count
      ]);
    }

    public function ben_cui_forum(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      return view('history.vietnam.history_topic',[
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'ben_cui_forum_content',
        'page_title' => "Ben Cui Forum",
        'cart_count' => $cart_count
      ]);
    }

    public function vietnam_glossary(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      return view('history.vietnam.history_topic',[
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'vietnam_glossary',
        'page_title' => "Glossary",
        'cart_count' => $cart_count
      ]);
    }

    public function after_action_reports(Request $request)
    {
      // The 'get_cart_count' function is in 'app\helper.php'
      $cart_count = get_cart_count($request)->cart_count;

      $all_casualties = DB::table('users')
        ->select('id','rank','first_name','last_name')
        ->where([
          ['day_of_death','>','21'],
          ['day_of_death','<','25'],
          ['month_of_death','=','2'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','13'],
          ['day_of_death','<','20'],
          ['month_of_death','=','3'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','28'],
          ['month_of_death','=','3'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','<','7'],
          ['month_of_death','=','4'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','12'],
          ['day_of_death','<','15'],
          ['month_of_death','=','4'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','14'],
          ['day_of_death','<','28'],
          ['month_of_death','=','5'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','14'],
          ['day_of_death','<','24'],
          ['month_of_death','=','7'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','23'],
          ['day_of_death','<','32'],
          ['month_of_death','=','7'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','0'],
          ['day_of_death','<','7'],
          ['month_of_death','=','8'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','13'],
          ['day_of_death','<','32'],
          ['month_of_death','=','8'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','2'],
          ['day_of_death','<','13'],
          ['month_of_death','=','9'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','19'],
          ['day_of_death','<','31'],
          ['month_of_death','=','9'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','0'],
          ['day_of_death','<','12'],
          ['month_of_death','=','10'],
          ['year_of_death','=','1966']
        ])
        ->orWhere([
          ['day_of_death','>','5'],
          ['day_of_death','<','26'],
          ['month_of_death','=','11'],
          ['year_of_death','=','1966']
        ])
        ->get();
      return view('history.vietnam.vietnam_aar',[
       'style' => 'history_style',
       'js' => '/js/my_custom/history/history.js',
       'content' => 'after_action_reports_content',
       'page_title' => "After Action Reports",
       'all_casualties' => $all_casualties,
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
