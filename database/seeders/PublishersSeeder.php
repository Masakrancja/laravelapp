<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->truncate();

        DB::table('publishers')->insert([
            [
                'id' => 1,
                'name' => 'EA Games',
                'country' => 'United States',
                'created_at' => Date(DATE_ISO8601),
                'updated_at' => Date(DATE_ISO8601),
            ],
            [
                'id' => 2,
                'name' => 'UbiSoft',
                'country' => 'United Kingtom',
                'created_at' => Date(DATE_ISO8601),
                'updated_at' => Date(DATE_ISO8601),
            ],
            [
                'id' => 3,
                'name' => 'CD Project',
                'country' => 'Poland',
                'created_at' => Date(DATE_ISO8601),
                'updated_at' => Date(DATE_ISO8601),
            ],
            [
                'id' => 4,
                'name' => 'Rockstar',
                'country' => 'Germany',
                'created_at' => Date(DATE_ISO8601),
                'updated_at' => Date(DATE_ISO8601),
            ],
            [
                'id' => 5,
                'name' => 'Monolith',
                'country' => 'France',
                'created_at' => Date(DATE_ISO8601),
                'updated_at' => Date(DATE_ISO8601),
            ],
        ]);
    }
}
