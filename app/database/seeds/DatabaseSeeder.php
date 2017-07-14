<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StopsTableSeeder::class);
        $this->call(ToursTableSeeder::class);
    }
}
