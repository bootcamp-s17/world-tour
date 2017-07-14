<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Store id for Midwest 
		$midwest = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'Midwest')
		   ->get();

        // Store id for Alaska
		$alaska = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'Alaska')
		   ->get();

        // Store id for New England
		$newEngland = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'New England')
		   ->get();

        // Store id for England
		$england = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'England')
		   ->get();

        // Store id for Italy
		$italy = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'Italy')
		   ->get();


		DB::table('stops')->insert([
		    'tour_id' => $midwest[0]->id,
		    'date' => '2017-12-01',
		    'location' => 'Grand Canyon',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('stops')->insert([
		    'tour_id' => $alaska[0]->id,
		    'date' => '2017-05-02',
		    'location' => 'Kenai Fjords National Park',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $alaska[0]->id,
		    'date' => '2018-5-01',
		    'location' => 'Turnagain Arm, Mt. Alyeska & Talkeetna ',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $midwest[0]->id,
		    'date' => '2017-12-03',
		    'location' => 'Las Vegas',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $newEngland[0]->id,
		    'date' => '2017-08-15',
		    'location' => 'Boston',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $newEngland[0]->id,
		    'date' => '2017-08-16',
		    'location' => 'Cape Cod',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $england[0]->id,
		    'date' => '2017-09-30',
		    'location' => 'London',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $england[0]->id,
		    'date' => '2017-10-01',
		    'location' => 'Edinburgh',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $italy[0]->id,
		    'date' => '2018-04-15',
		    'location' => 'Vatican City',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
		DB::table('stops')->insert([
		    'tour_id' => $italy[0]->id,
		    'date' => '2018-04-16',
		    'location' => 'Pisa and Lucca',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
    }
}
