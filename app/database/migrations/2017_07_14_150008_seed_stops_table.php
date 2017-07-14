<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// when it says fatal error class 'carbon' not found
use Carbon\Carbon;

class SeedStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Store id for Barcelona in $barcelona_id
    $barcelona_id = DB::table('tours')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Barcelona')
       ->get();

    // Store id for Lexington in $lexington_id
    $lexington_id = DB::table('tours')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Lexington')
       ->get();

    DB::table('stops')->insert([
        'tour_id' => $barcelona_id[0]->id,
        'when' => '2017-12-01',
        'where' => 'Sagrada Familia',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('stops')->insert([
        'tour_id' => $barcelona_id[0]->id,
        'when' => '2017-12-02',
        'where' => 'Park Guell',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('stops')->insert([
        'tour_id' => $barcelona_id[0]->id,
        'when' => '2017-12-03',
        'where' => 'Olympic Park',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('stops')->insert([
        'tour_id' => $lexington_id[0]->id,
        'when' => '2018-01-01',
        'where' => 'Rupp Arena',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('stops')->insert([
        'tour_id' => $lexington_id[0]->id,
        'when' => '2018-01-02',
        'where' => 'The Pavillion',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    DB::table('stops')->insert([
        'tour_id' => $lexington_id[0]->id,
        'when' => '2018-01-03',
        'where' => 'Firebrook',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
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
