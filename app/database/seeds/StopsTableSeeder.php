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
        $tour_id = DB::table('tours')
           ->select(DB::raw('id'))
           ->get();

        DB::table('stops')->insert([
            'when' => Carbon::parse('2017-07-24'),
            'where' => 'Lexington KY',
            'tour_id' => $tour_id[0]->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('stops')->insert([
            'when' => Carbon::parse('2017-08-10'),
            'where' => 'Brooklyn NY',
            'tour_id' => $tour_id[0]->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('stops')->insert([
            'when' => Carbon::parse('2017-09-01'),
            'where' => 'Barcelona Spain',
            'tour_id' => $tour_id[0]->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('stops')->insert([
            'when' => Carbon::parse('2017-09-10'),
            'where' => 'St John USVI',
            'tour_id' => $tour_id[0]->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
