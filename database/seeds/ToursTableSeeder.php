<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
		    'name' => 'Midwest',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('tours')->insert([
		    'name' => 'Alaska',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('tours')->insert([
		    'name' => 'New England',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('tours')->insert([
		    'name' => 'England',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('tours')->insert([
		    'name' => 'Italy',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
    }
}
