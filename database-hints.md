For tours:

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

For stops:

