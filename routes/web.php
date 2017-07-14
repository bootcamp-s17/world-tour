<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

   $tours = App\Tour::all();
   $stops = App\Stop::all();
   return view('index', compact('tours', 'stops'));
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::resource('tours', 'TourController');
Route::resource('stops', 'StopController');






