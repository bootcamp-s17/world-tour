<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StopsTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usa_id = DB::table('tours')
       ->select(DB::raw('id'))
       ->where('name', '=', 'USA')
       ->get();

        $europe_id = DB::table('tours')
       ->select(DB::raw('id'))
       ->where('name', '=', 'Europe')
       ->get();

        DB::table('stops')->insert([
        'tour_id' => $usa_id[0]->id,
        'when' => '2017-05-02',
        'where' => 'New York',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ]);

        DB::table('stops')->insert([
        'tour_id' => $usa_id[0]->id,
        'when' => '2017-6-02',
        'where' => 'Chicago',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ]);

        DB::table('stops')->insert([
        'tour_id' => $usa_id[0]->id,
        'when' => '2017-7-02',
        'where' => 'Miami',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ]);

        DB::table('stops')->insert([
        'tour_id' => $europe_id[0]->id,
        'when' => '2017-08-02',
        'where' => 'Paris',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ]);

        DB::table('stops')->insert([
        'tour_id' => $europe_id[0]->id,
        'when' => '2017-09-02',
        'where' => 'London',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

    ]);

        DB::table('stops')->insert([
        'tour_id' => $europe_id[0]->id,
        'when' => '2017-10-02',
        'where' => 'Madrid',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    }
}
