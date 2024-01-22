<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Star;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class StarTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('stars')->truncate();
        $faker = Faker::create();
        foreach(range(1, 30) as $index) {
            DB::table('stars')->insert([
                'name' => $faker->name,
            ]);
        }
    }
}