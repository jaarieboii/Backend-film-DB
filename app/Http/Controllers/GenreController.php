<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $genres = Genre::all();
        return view('genres.index')->with('genres', $genres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('genres.create');
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
        $this->validate($request, [ 
            'naam' => 'required',
            
        ]);
            

           

        $genre = new Genre;
        $genre->naam = $request->input('naam');
        $genre->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show($genre)
    {
        //
        $genre = Genre::find($genre);
        return view('genres.edit', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit($genre)
    {
        //
        $genre = Genre::find($genre);
        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $genre)
    {
        //
        $this->validate($request, [ 
            'naam' => 'required',
            
        ]);
            

           

        $genre = Genre::find($genre);
        $genre->naam = $request->input('naam');
        $genre->save();

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($genres)
    {
        //
        $genre = Genre::find($genres);
        $genre->delete();
        return redirect('genres/index');
    }
}
