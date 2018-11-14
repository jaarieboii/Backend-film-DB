<?php

namespace App\Http\Controllers;

use App\Reservering;
use Illuminate\Http\Request;

class ReserveringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('reserveringen.index');
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
     * @param  \App\Reservering  $reservering
     * @return \Illuminate\Http\Response
     */
    public function show(Reservering $reservering)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservering  $reservering
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservering $reservering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservering  $reservering
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservering $reservering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservering  $reservering
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservering $reservering)
    {
        //
    }
}
