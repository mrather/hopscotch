<?php

namespace App\Http\Controllers;

use App\Models\AppConfig;
use Illuminate\Http\Request;

class AppConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AppConfig::all();
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
        $appConfig = new AppConfig();

        $appConfig->fill($request->all());

        if($appConfig->validate() !== TRUE){
            return $appConfig->validate();
        }

        return $appConfig->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AppConfig  $appConfig
     * @return \Illuminate\Http\Response
     */
    public function show(AppConfig $appConfig)
    {
        return AppConfig::find($appConfig->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AppConfig  $appConfig
     * @return \Illuminate\Http\Response
     */
    public function edit(AppConfig $appConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppConfig  $appConfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppConfig $appConfig)
    {
        $appConfig->fill($request->all());

        if($appConfig->validate() !== TRUE){
            return $appConfig->validate();
        }

        $appConfig->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppConfig  $appConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppConfig $appConfig)
    {
        return AppConfig::delete($appConfig->id);
    }
}
