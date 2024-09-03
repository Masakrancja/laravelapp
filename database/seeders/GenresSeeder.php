<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->truncate();

        DB::table('genres')->insert(
            [
                ['id' => 1, 'name' => 'RPG', 'created_at' => Date(DATE_ISO8601), 'updated_at' => Date(DATE_ISO8601)],
                ['id' => 2, 'name' => 'Adventure', 'created_at' => Date(DATE_ISO8601), 'updated_at' => Date(DATE_ISO8601)],
                ['id' => 3, 'name' => 'FPP', 'created_at' => Date(DATE_ISO8601), 'updated_at' => Date(DATE_ISO8601)],
                ['id' => 4, 'name' => 'Sport', 'created_at' => Date(DATE_ISO8601), 'updated_at' => Date(DATE_ISO8601)],
                ['id' => 5, 'name' => 'TPP', 'created_at' => Date(DATE_ISO8601), 'updated_at' => Date(DATE_ISO8601)],
                ['id' => 6, 'name' => 'Simulator', 'created_at' => Date(DATE_ISO8601), 'updated_at' => Date(DATE_ISO8601)],
            ]
        );

    }
}
