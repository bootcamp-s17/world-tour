<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class stopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lexington_id = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'Lexington')
		   ->get();
		$louisville_id = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'Louisville')
		   ->get();
		$paris_id = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'Paris')
		   ->get();
		$london_id = DB::table('tours')
		   ->select(DB::raw('id'))
		   ->where('name', '=', 'London')
		   ->get();

		DB::table('stops')->insert([
		    'tours_id' => $lexington_id[0]->id,
		    'when' => '2017-07-01',
		    'where' => 'Blakes House',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('stops')->insert([
		    'tours_id' => $louisville_id[0]->id,
		    'when' => '2017-08-01',
		    'where' => 'Yum Center',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('stops')->insert([
		    'tours_id' => $paris_id[0]->id,
		    'when' => '2017-09-01',
		    'where' => 'Bastille',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('stops')->insert([
		    'tours_id' => $london_id[0]->id,
		    'when' => '2018-10-01',
		    'where' => 'Big Ben',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('stops')->insert([
		    'tours_id' => $lexington_id[0]->id,
		    'when' => '2018-01-01',
		    'where' => 'Hooters',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);

		DB::table('stops')->insert([
		    'tours_id' => $paris_id[0]->id,
		    'when' => '2018-02-01',
		    'where' => 'Eiffel Tower',
		    'created_at' => Carbon::now(),
		    'updated_at' => Carbon::now(),
		]);
    }
}
