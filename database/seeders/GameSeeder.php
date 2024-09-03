<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        DB::table('games')->truncate();

        $games = [];
        for ($i = 0; $i < 100; $i++) {
            $games[] = [
                'title' => $faker->words($faker->numberBetween(1, 3), true),
                'description' => $faker->sentence(),
                'publisher_id' => $faker->numberBetween(1, 5),
                'genres_id' => $faker->numberBetween(1, 6),
                'publication_date' => $faker->dateTimeBetween(),
                'rate' => $faker->numberBetween(0, 10),
                'created_at' => Date(DATE_ISO8601),
                'updated_at' => Date(DATE_ISO8601),
            ];
        }
        DB::table('games')->insert($games);

    }
}
