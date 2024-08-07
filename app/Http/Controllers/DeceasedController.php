<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\stdClass;

use App\Models\User;
use App\Models\Conflict;
use App\Models\Link;

class DeceasedController extends Controller
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

        $all_parameters = [
          ['deceased','=',1],
          ['expiration_date','!=',null]
        ];

        $search_first_name = null;
        if (isset($_GET['first_name'])) {
          $all_parameters[] = ['first_name','LIKE','%'.$_GET['first_name'].'%'];
          $search_first_name = $_GET['first_name'];
        };

        $search_last_name = null;
        if (isset($_GET['last_name'])) {
          $all_parameters[] = ['last_name','LIKE','%'.$_GET['last_name'].'%'];
          $search_last_name = $_GET['last_name'];
        };

        $all_deceased = User::where($all_parameters)
          ->orderBy('last_name','asc')
          ->orderBy('first_name','asc')
          ->get()
          ->all();

        $possible_conflicts = Conflict::where('member_participated',1)->orderBy('start_year','ASC')->get();

        $search_conflict_id = null;
        $new_all_deceased = $all_deceased;
        if (isset($_GET['conflict_id'])) {
          $search_conflict_id = intval($_GET['conflict_id']);
          $new_all_deceased = [];

          for ($i = 0; count($all_deceased) > $i; $i++) {
            $all_deceased[$i]->all_conflicts = $all_deceased[$i]->all_user_conflicts()->get();
            $part_of_conflict = false;
            foreach ($all_deceased[$i]->all_conflicts as $check_conflict) {
              if ($check_conflict->id == $search_conflict_id) {
                $part_of_conflict = true;
              };
            };
            if ($part_of_conflict == true) {
              $new_all_deceased[] = $all_deceased[$i];
            };
          };
        };

        $deceased_count = count($new_all_deceased);

        // Pagination of the arrays (18 rows per page)
        $names_per_page = 18;
        if (!isset($_GET['page'])) {
          $page_number = 1;
        } else {
          $page_number = intval($_GET['page']);
        };
        if ($deceased_count / $names_per_page > 1) {
          $how_many_pages = floor($deceased_count / $names_per_page);
          if (is_int($deceased_count / $names_per_page) == false) {
            $how_many_pages++;
          };
          $first_index = $page_number * $names_per_page - $names_per_page;
          $new_all_deceased = array_slice($new_all_deceased,$first_index,$names_per_page);
        } else {
          $how_many_pages = 1;
        };

        return view('deceased.deceased',[
          'js' => '/js/my_custom/memorials/deceased.js',
          'content' => 'deceased_content',
          'page_title' => "Deceased",
          'all_deceased_basics' => $new_all_deceased,
          'deceased_count' => $deceased_count,
          'cart_count' => $cart_count,
          'possible_conflicts' => $possible_conflicts,
          'search_first' => $search_first_name,
          'search_last' => $search_last_name,
          'search_conflict' => $search_conflict_id,
          'how_many_pages' => $how_many_pages,
          'current_page' => $page_number
        ]);
    }

    public function search(Request $request)
    {
        // The 'get_cart_count' function is in 'app\helper.php'
        $cart_count = get_cart_count($request)->cart_count;

        $request->validate([
          'firstName'   => 'nullable|string',
          'lastName'    => 'nullable|string',
          'conflictId'  => 'nullable|integer'
        ]);

        return redirect()->route('deceased.all',[
          'first_name' => $request['firstName'],
          'last_name' => $request['lastName'],
          'conflict_id' => $request['conflictId']
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
    public function show(Request $request,$id)
    {
        // The 'get_cart_count' function is in 'app\helper.php'
        $cart_count = get_cart_count($request)->cart_count;

        $member = User::find($id);
        $name = $member->first_name." ".$member->last_name;

        $all_links = Link::where('user_id',$id)->get();

        $all_conflicts = $member->all_user_conflicts;

        return view('deceased.selected_deceased',[
          'js' => '/js/my_custom/memorials/deceased.js',
          'content' => 'deceased_selected',
          'page_title' => $name,
          'member' => $member,
          'all_links' => $all_links,
          'all_conflicts' => $all_conflicts,
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
