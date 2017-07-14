<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stops extends Migration
{
  // Store id for Tokyo in $tokyo_id
$tokyo_id = DB::table('tours')
  ->select(DB::raw('id'))
  ->where('name', '=', 'Tokyo')
  ->get();

// Store id for New York in $newyork_id
$newyork_id = DB::table('tours')
  ->select(DB::raw('id'))
  ->where('name', '=', 'New York')
  ->get();

DB::table('stops')->insert([
   'tour_id' => $tokyo_id[0]->id,
   'when' => '2017-12-01',
   'where' => 'Tokyo Tower',
   'created_at' => Carbon::now(),
   'updated_at' => Carbon::now(),
]);

DB::table('stops')->insert([
   'tour_id' => $tokyo_id[0]->id,
   'when' => '2017-12-02',
   'where' => 'Yoyogi Park',
   'created_at' => Carbon::now(),
   'updated_at' => Carbon::now(),
]);

DB::table('stops')->insert([
   'tour_id' => $tokyo_id[0]->id,
   'when' => '2017-12-03',
   'where' => 'Shinjuku Gyoen National Garden',
   'created_at' => Carbon::now(),
   'updated_at' => Carbon::now(),
]);

DB::table('stops')->insert([
   'tour_id' => $newyork_id[0]->id,
   'when' => '2018-01-01',
   'where' => 'Times Square',
   'created_at' => Carbon::now(),
   'updated_at' => Carbon::now(),
]);

DB::table('stops')->insert([
   'tour_id' => $newyork_id[0]->id,
   'when' => '2018-01-02',
   'where' => 'Central Park',
   'created_at' => Carbon::now(),
   'updated_at' => Carbon::now(),
]);

DB::table('stops')->insert([
   'tour_id' => $newyork_id[0]->id,
   'when' => '2018-01-03',
   'where' => 'Grand Central Station',
   'created_at' => Carbon::now(),
   'updated_at' => Carbon::now(),
]);
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
