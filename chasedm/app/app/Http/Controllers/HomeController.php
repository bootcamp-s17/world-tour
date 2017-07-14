<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = \App\Tour::all();
        foreach ($tours as $tour){
            $tour['action'] = '/tours/'. $tour['id'];
        }

        $stops = \App\Stop::all();
        foreach ($stops as $stop){
            $stop['action'] = '/stops/'. $stop['id'];
        }

        return view('welcome', compact('tours','stops'));
    }
}
