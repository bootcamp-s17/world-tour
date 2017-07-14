<?php

namespace App\Http\Controllers;

use App\Stop;
use App\Tour;
use Illuminate\Http\Request;

class StopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
        $stops = Stop::orderBy('date', 'asc')->get();
        return view('stops.index', compact('stops', 'tours'));
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
        //
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
