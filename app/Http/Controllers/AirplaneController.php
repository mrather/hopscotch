<?php

namespace App\Http\Controllers;

use App\Airplane;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Airplane::all();
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
        $airplane = new Airplane();
        $airplane->fill($request->all());
        if($airplane->validate() !== TRUE)
        {
            return $airplane->validate();
        }

        return $airplane->save();        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function show(Airplane $airplane)
    {
        return Airplane::find($airplane->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function edit(Airplane $airplane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airplane $airplane)
    {
        $airplane->fill($request->all());
        if($airplane->validate() !== TRUE)
        {
            return $airplane->validate();
        }

        return $airplane->save();          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airplane $airplane)
    {
        return Airplane::delete($airplane->id);
    }
}
