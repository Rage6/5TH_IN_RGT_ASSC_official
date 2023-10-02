<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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

        $all_deceased = User::where([
            ['deceased','=',1],
            ['expiration_date','!=',null]
          ])->get();

        $deceased_count = count($all_deceased);

        return view('deceased',[
          'style' => 'deceased_style',
          'js' => '/js/my_custom/memorials/recipients.js',
          'content' => 'deceased_content',
          'all_deceased_basics' => $all_deceased,
          // 'all_conflicts' => $all_conflicts,
          'deceased_count' => $deceased_count,
          // 'recipient_data' => $recipient_data,
          'cart_count' => $cart_count,
          // 'image_path' => $imagePath
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
        return view('selected_deceased');
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
