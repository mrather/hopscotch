<?php

namespace App\Http\Controllers;

use App\Models\AircraftType;
use Illuminate\Http\Request;

class AircraftTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AircraftType::all();
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
        $aircraftType = new AircraftType();
        $aircraftType->fill($request->all());

        $errors = $aircraftType->validate();

        if(!empty($errors)){
            return $errors;
        }

        return $aircraftType->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function show(AircraftType $aircraftType)
    {
        return AircraftType::find($aircraftType->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function edit(AircraftType $aircraftType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AircraftType $aircraftType)
    {
        $udata = $request->all();
        foreach($udata as $u=>$data){
            $aircraftType->$u = $data;
        }

        $result =$this->validate($aircraftType);
        if( $result !== TRUE){
            return $errors;
        }

        return $aircraftType->save();
    }

    private function validate(AircraftType $aircraftType)
    {
        $errors = $aircraftType->validate();

        if(!empty($errors)){
            return $errors;
        }

        return true;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AircraftType  $aircraftType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AircraftType $aircraftType)
    {
        return AircraftType::delete($aircraftType->id);
    }
}
