<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Place;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book= Book::all();
        
        return view("books.index",["data"=>$book]);

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
        $book = new Book ;
        $book->name = request("name");
        $book->price = request("price");
        $book->name_img = request("name_img");
        $book->days = request("days");
        $book->total = request("total");

      
        // $hotels->user_id = request("user_id");
        $book->save();
        return redirect ("book");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $book = Hotel::findorfail($id);
        return view("books.booking",["data"=>$book] );

    }
      

    public function show2( $id){
        $book = Place::findorfail($id);
        return view("books.placeb", ["data"=>$book] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',["data"=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book = new Book ;
        $book->name = request("name");
        $book->price = request("price");
        $book->name_img = request("name_img");

        $book->days = request("days");
        $book->total = request("total");

      
        // $hotels->user_id = request("user_id");
        $book->save();
        return redirect ("book");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route("book.index");
        
    }
}
