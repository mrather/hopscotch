<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Airport::all();
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
        $airport = new Airport();
        $airport->fill($request->all());
        if($airport->validate() !== TRUE)
        {
            return $airport->validate();
        }

        return $airport->save();        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        return Airport::find($airport->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(Airport $airport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport)
    {
        $airport->fill($request->all());
        if($aorport->validate() !== TRUE)
        {
            return $airport->validate();
        }

        return $airport->save();          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Airport  $airplane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airport $airport)
    {
        return Airport::delete($airport->id);
    }
}