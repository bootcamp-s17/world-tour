<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //
   
    public function index() {
    	return view('/userAuth');
    }
}
