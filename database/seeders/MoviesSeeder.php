<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        DB::table('movies')->truncate();

        $movies = [];
        for ($i = 0; $i < 50; $i++) {
            $movies[] = [
                'title' => $faker->words($faker->numberBetween(2, 4), true),
                'game_id' => $faker->numberBetween(1, 100),
                'length' => $faker->numberBetween(60, 120),
                'rate' => $faker->numberBetween(0, 10),
                'link' => $faker->url(),
                'created_at' => Date(DATE_ISO8601),
                'updated_at' => Date(DATE_ISO8601),
            ];
        }
        DB::table('movies')->insert($movies);
    }
}
