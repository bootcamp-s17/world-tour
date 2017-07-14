<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $stops = \App\stops::all();
        foreach ($stops as $stop) {
            $stop['action'] = '/stops/' . $stop['id'];
        }
        $tours = \App\tours::all();
        foreach ($tours as $tour) {
            $tour['action'] = '/tours/' . $tour['id'];
        }
        return view('stops.index', compact('stops','tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = \App\tours::all();
        return view('stops.create', compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stops = new \App\stops;
        $stops['where'] = $request->where;
        $stops['when'] = $request->when;
        $stops['tours_id'] = $request->tours_id;
        $stops->save();

        return redirect('/stops');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stops = \App\stops::find($id);
        return view('stops.show', compact('stops'));
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
    }
}
