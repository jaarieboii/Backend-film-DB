<?php

namespace App\Http\Controllers;

use App\Zaal;
use Illuminate\Http\Request;

class ZaalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $zaal = Zaal::all();
        return view('zalen/index', compact('zaal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('zalen.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $this->validate($request, [ 
            'naam' => 'required',
            'plekken'=> 'required'            
        ]);
            

           

        $zaal = new Zaal;
        $zaal->naam = $request->input('naam');
        $zaal->plekken = $request->input('plekken');
        $zaal->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\zaal  $zaal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $zaal = Zaal::all();
        return view('zalen.show', compact('zaal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\zaal  $zaal
     * @return \Illuminate\Http\Response
     */
    public function edit($zaal)
    {
        //
        $zaal = Zaal::find($zaal);
        //dd($zaal);
        return view('zalen.edit', compact('zaal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\zaal  $zaal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $zaal)
    {
        //dd($request);
        $this->validate($request, [ 
            'naam' => 'required',
            'plekken'=> 'required'
        ]);
            

          

        $zaal = Zaal::find($zaal);
        $zaal->naam = $request->input('naam');
        $zaal->plekken = $request->input('plekken');
        $zaal->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\zaal  $zaal
     * @return \Illuminate\Http\Response
     */
    public function destroy($zaal)
    {
        //
        $zaal = Zaal::find($zaal);
        $zaal->delete();
        return redirect('zalen/show');
    }
}
