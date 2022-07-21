<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
// use App\Models\Book;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();
        return view("hotels.index",["data"=>$hotel]);
    }

    public function index2()
    {
        $hotel = Hotel::all();
        return view("hotels.curd",["data"=>$hotel]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel= Hotel::all();
        return view ("hotels.create");
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = new Hotel ;
    $hotel->name = request("name");
    $hotel->price = request("price");
    $hotel->description = request("description");
    $hotel->location = request("location");
    $hotel->name_img = request("name_img");
    $hotel->name_img2 = request("name_img2");
    $hotel->name_img3 = request("name_img3");
    // $hotels->user_id = request("user_id");
    $hotel->save();
    return redirect("hotel");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
    return view("hotels.details",["data"=>$hotel]);

    }

    // public function show(Hotel $hotel)
    // {
    //     // dd($hotel);
    // return view("books.show",["data"=>$hotel]);

    // }




// findorfail($id);


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
      return view('hotels.edit',["data"=>$hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
       
        $hotel->name = request("name");
        $hotel->price = request("price");
        $hotel->description = request("description");
        $hotel->location = request("location");
        $hotel->name_img = request("name_img");
        // $hotel->name_img2 = request("name_img2");
        // $hotel->name_img3 = request("name_img3");
        // $hotels->user_id = request("user_id");
        $hotel->save();
        return redirect("hotel");  
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return view("hotels.create");

    }
    public function search2(Request $request)
    {
    
    
        $hotels= Hotel::where('name','like','%'.$request->input('ttt').'%')->get();
    
    return view("user.search",["data"=>$hotels]);
    
    }
}
