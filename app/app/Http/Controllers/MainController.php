<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = \App\Tour::all();
        $stops = \App\Stop::all();
        foreach ($stops as $stop) {
            $stop['date'] = date('M d', strtotime($stop['when']));
        }
        return view('main.index', compact('tours','stops'));
    }
}
