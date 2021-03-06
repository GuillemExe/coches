<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coche;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $coches = Coche::all();

        return view('coche.cocheLista', ['coches' => $coches]);

        // TO POSTMAN
        // return csrf_token();
        // return $coches;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('coche.cocheCreate');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coche = Coche::create($request->all());
        return $coche;

        return view('coche.cocheForm');
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
        $coche = Coche::find($id);

        // TO POSTMAN
        // return $coche;

        // TO VIEW
        return view('coche.cocheView')->with('coche', $coche);
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
        $coche = Coche::find($id);

        // TO POSTMAN
        // return $coche;

        // TO VIEW
        return view('coche.cocheEdit')->with('coche', $coche);
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
        $coche = Coche::findOrFail($id);

        $input = $request->all();

        $coche->fill($input)->save();
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
        Coche::find($id)->delete();

        $coches = Coche::all();

        return view('coche.cocheLista', ['coches' => $coches]);
    }
}
