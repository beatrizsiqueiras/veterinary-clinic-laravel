<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('breeds')->upsert([
            'id' => 1,
            'name' => 'Yorkshire Terrier',
        ], 'id');

        DB::table('breeds')->upsert([
            'id' => 2,
            'name' => 'Golden Retriever',
        ], 'id');

        DB::table('breeds')->upsert([
            'id' => 3,
            'name' => 'German Shepherd',
        ], 'id');

        DB::table('breeds')->upsert([
            'id' => 4,
            'name' => 'SDR',
        ], 'id');

        DB::table('breeds')->upsert([
            'id' => 5,
            'name' => 'Chiahuahua',
        ], 'id');
    }
}
