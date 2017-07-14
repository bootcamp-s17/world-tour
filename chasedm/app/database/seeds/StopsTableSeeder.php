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
        $tokyo_id = DB::table('tours')
            ->select(DB::raw('id'))
        		->where('name', '=', 'Tokyo')
        		->get();
        $newyork_id = DB::table('tours')
            ->select(DB::raw('id'))
        		->where('name', '=', 'New York')
        		->get();


       	DB::table('stops')->insert([
       		'tour_id'=> $tokyo_id[0]->id,
       		'when'=> '2017-12-01',
       		'where'=>'Tokyo Tower',
       		'created_at'=> Carbon::now(),
       		'updated_at'=> Carbon::now(),
       	]);

       	DB::table('stops')->insert([
       		'tour_id'=> $tokyo_id[0]->id,
       		'when'=> '2017-12-02',
       		'where'=>'Yoyogi Park',
       		'created_at'=> Carbon::now(),
       		'updated_at'=> Carbon::now(),
       	]);


       	DB::table('stops')->insert([
       		'tour_id'=> $tokyo_id[0]->id,
       		'when'=> '2017-12-03',
       		'where'=>'Shinjuku Gyoen Natioanl Garden',
       		'created_at'=> Carbon::now(),
       		'updated_at'=> Carbon::now(),
       	]);


       	DB::table('stops')->insert([
       		'tour_id'=> $newyork_id[0]->id,
       		'when'=> '2018-01-02',
       		'where'=>'Central Park',
       		'created_at'=> Carbon::now(),
       		'updated_at'=> Carbon::now(),
       	]);

       	DB::table('stops')->insert([
       		'tour_id'=> $newyork_id[0]->id,
       		'when'=> '2018-01-03',
       		'where'=>'Grand Central Station',
       		'created_at'=> Carbon::now(),
       		'updated_at'=> Carbon::now(),
       	]);
    }
}
