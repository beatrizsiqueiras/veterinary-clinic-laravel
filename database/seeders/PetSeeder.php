<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);

        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);

        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);

        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);

        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);

        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);

        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);

        DB::table('pets')->insert([
            'name' => fake()->name(),
            'age' => random_int(1, 12),
        ]);
    }
}
