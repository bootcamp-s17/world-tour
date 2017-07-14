<?php

namespace App\Http\Controllers;

use App\Stop;
use Illuminate\Http\Request;

class StopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function show(Stop $stop)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function edit(Stop $stop)
    {
        return 'edit';
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
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stop $stop)
    {
        return 'destroy';
    }
}
