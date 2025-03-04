<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->upsert([
            'id' => 1,
            'name' => 'Nina',
            'age' => random_int(1, 12),
            'breed_id' => random_int(1, 5),
        ], 'id');

        DB::table('pets')->upsert([
            'id' => 2,
            'name' => 'Magimoki',
            'age' => random_int(1, 12),
            'breed_id' => random_int(1, 5),
        ], 'id');

        DB::table('pets')->upsert([
            'id' => 3,
            'name' => 'Jola',
            'age' => random_int(1, 12),
            'breed_id' => random_int(1, 5),
        ], 'id');

        DB::table('pets')->upsert([
            'id' => 4,
            'name' => 'Will',
            'age' => random_int(1, 12),
            'breed_id' => random_int(1, 5),
        ], 'id');

        DB::table('pets')->upsert([
            'id' => 5,
            'name' => 'Bathuco',
            'age' => random_int(1, 12),
            'breed_id' => random_int(1, 5),
        ], 'id');

        DB::table('pets')->upsert([
            'id' => 6,
            'name' => 'Masmain',
            'age' => random_int(1, 12),
            'breed_id' => random_int(1, 5),
        ], 'id');
    }
}
