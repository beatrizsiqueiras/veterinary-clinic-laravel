<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PetOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aux = 1;

        while ($aux <= 10) {
            DB::table('pet_owners')->insert([
                'name' => fake()->name(),
                'age' => rand(18, 70),
                'email' => fake()->email(),
                'cellphone' => fake()->numerify('###########'),
            ]);

            $aux++;
        }
    }
}
