<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Movie_StarTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('movie_star')->truncate();
        $faker = Faker::create();
        foreach(range(1, 20) as $index) {
            foreach(range(1, 3) as $i) {
                DB::table('movie_star')->insert([
                    'movie_id' => $index,
                    'star_id' => $faker->numberBetween(1, 30),
                ]);
            }
        }
    }
}