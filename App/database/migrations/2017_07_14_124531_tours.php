<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tours extends Migration
{

  DB::table('tours')->insert([
    'name' => 'Tokyo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
  ]);

  DB::table('tours')->insert([
    'name' => 'New York',
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
