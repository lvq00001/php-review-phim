<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->truncate();

        $faker = Faker::create();
        $sentence = ['Phim hay 10 điểm', 'Diễn viên, hình ảnh tạm ổn', 'phim hay đáng tiền đáng xem ',
            'Phim hay, đáng xem', 'Cực phẩm!', 'Phim hơi nhạt', 'Hay lắm. Nên xem nhé mn', 'Phim như ***. Rất chán'];

        foreach (range(1, 20) as $index) {
            Comment::create([
                'user_id' => $faker->numberBetween(1, 5),
                'movie_id' => $faker->numberBetween(1, 20),
                'description' => $sentence[rand(0, count($sentence) - 1)],
            ]);
        }
    }
}