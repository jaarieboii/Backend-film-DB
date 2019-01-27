<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->where('user_id', '1' )->get();
        //dd($id);
        return view('home')->with('test',$id);
    }
    public function myFavorites()
    {
    $myFavorites = Auth::user()->favorites;

    return view('users.my_favorites', compact('myFavorites'));
    }
}
