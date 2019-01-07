<?php

namespace App\Http\Controllers;

use App\film;
use App\Genre;
use Illuminate\Http\Request;
use App\Rules\ValidImage;


class FilmController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     //
    //     $genres = Genre::all();
    //     $films = Film::filter($request)->get();
    //     return view('films/welcome')->with('films', $films)->with('genres', $genres);
    // }

    public function index(Request $request)
    {
        $s = $request->input('s');
        $genres = Genre::all();
        if (request()->has('genres')){
            $films = Film::where('genres', request('genres'))->paginate(10)->appends('genres', request('genres'));
            //dd(request('genres'));
        }
        // if (request()->has('sort')){
            
        // }
        else{
            $films = Film::search($s)->paginate(9);
        }

        return view('films/welcome',compact('films', 'genres', 's'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('films.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [ 
            'naam' => 'required',
            'genres'=> 'required',
            'lengte'=> 'required',
            'cover_image' => ['required', new ValidImage]
        ]);
            

            //handle file upload
            if($request->hasFile('cover_image')){
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'.time().'.'.$extension;
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

        $film = new Film;
        $film->naam = $request->input('naam');
        $film->genres = $request->input('genres');
        $film->lengte = $request->input('lengte');
        $film->cover_image = $fileNameToStore;
        $film->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $films = Film::all();
        return view('films.show', compact('films'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit($film)
    {
        //
        $films = Film::find($film);
        return view('films.edit', compact('films'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $film)
    {
        //dd($request);
        $this->validate($request, [ 
            'naam' => 'required',
            'genres'=> 'required',
            'lengte'=> 'required',
            'cover_image' => new ValidImage
        ]);
            

            //handle file upload
            if($request->hasFile('cover_image')){
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'.time().'.'.$extension;
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            }

        $film = Film::find($film);
        $film->naam = $request->input('naam');
        $film->genres = $request->input('genres');
        $film->lengte = $request->input('lengte');
        if($request->hasFile('cover_image')){
         $film->cover_image = $fileNameToStore;
        }
        $film->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($film)
    {
        //
        $film = Film::find($film);
        $film->delete();
        return redirect('films/show');
    }
}
