<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
    }
}
