<?php

namespace App\Http\Controllers;

use App\Models\AviationTax;
use Illuminate\Http\Request;

class AviationTaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AviationTax::all();
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
        $aviationTax = new AviationTax();

        $aviationTax->fill($request->all());

        if($aviationTax->validate() !== TRUE){
            return $aviationTax->validate();
        }

        $aviationTax->save();    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AviationTax  $aviationTax
     * @return \Illuminate\Http\Response
     */
    public function show(AviationTax $aviationTax)
    {
        return AviationTax::find($aviationTax->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AviationTax  $aviationTax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AviationTax $aviationTax)
    {
        $aviationTax->fill($request->all());

        if($aviationTaxg->validate() !== TRUE){
            return $aviationTax->validate();
        }

        $aviationTax->save();    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AviationTax  $aviationTax
     * @return \Illuminate\Http\Response
     */
    public function destroy(AviationTax $aviationTax)
    {
        AviationTax::delete($aviationTax->id);
    }
}
