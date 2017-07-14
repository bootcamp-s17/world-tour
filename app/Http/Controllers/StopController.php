<?php

namespace App\Http\Controllers;

use App\Stop;
use App\Tour;
use Illuminate\Http\Request;

class StopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        return view('stops.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tour = Tour::find(request('id'));
        return view('stops/create', compact('tour'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stop = new Stop;
        $stop->where = request('where');
        $stop->when = request('when');
        $stop->tour_id = request('tour_id');
        $stop->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function show(Stop $stop)
    {
        $stop['action'] = "/stops/" . $stop->id;
        return view('stops.show', compact('stop'));
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
        $stop->when = request('when');
        $stop->where = request('where');
        $stop->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stop  $stop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Stop::find($id)->delete();
        return back();
    }
}
