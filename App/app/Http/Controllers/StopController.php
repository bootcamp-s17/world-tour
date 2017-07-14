<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Stop;

class StopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stops = Stop::all();
        return ($stops);
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
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function show(Stop $stop)
    {
        $stop['tour'] = $stop->tour()->get(); 
        return($stop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function edit(Stop $stop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stop $stop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stop $stop)
    {
        //
    }
}
