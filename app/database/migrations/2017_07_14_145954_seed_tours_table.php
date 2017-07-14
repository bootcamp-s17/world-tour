<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// when it says fatal error class 'carbon' not found
use Carbon\Carbon;

class SeedToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tours')->insert([
        'name' => 'Barcelona',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
        DB::table('tours')->insert([
        'name' => 'Lexington',
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
