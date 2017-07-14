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
            'name' => 'World Domination Tour',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
    }
}
