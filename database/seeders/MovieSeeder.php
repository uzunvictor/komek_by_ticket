<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            ['title' => 'Праздники', 'image' => 'holidays.png', 'label_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Мег 2: Бездна', 'image' => 'meg2.png', 'label_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Заложники', 'image' => 'hostages.png', 'label_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Леди Баг и Супер-Кот: Пробуждение силы', 'image' => 'ladybag.png', 'label_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Когда не загрузилась афиша', 'image' => null, 'label_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Руслан и Людмила. Больше, чем сказка', 'image' => 'ruslan.png', 'label_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
        DB::table('movie_screening')->insert([
            ['movie_id' => '1', 'screening_id' => '1'],
            ['movie_id' => '1', 'screening_id' => '2'],
            ['movie_id' => '1', 'screening_id' => '3'],
            ['movie_id' => '1', 'screening_id' => '4'],
            ['movie_id' => '1', 'screening_id' => '5'],
            ['movie_id' => '1', 'screening_id' => '6'],
            ['movie_id' => '2', 'screening_id' => '1'],
            ['movie_id' => '2', 'screening_id' => '2'],
            ['movie_id' => '2', 'screening_id' => '3'],
            ['movie_id' => '3', 'screening_id' => '1'],
            ['movie_id' => '3', 'screening_id' => '2'],
            ['movie_id' => '4', 'screening_id' => '1'],
            ['movie_id' => '4', 'screening_id' => '2'],
            ['movie_id' => '5', 'screening_id' => '3'],
            ['movie_id' => '5', 'screening_id' => '4'],
        ]);
        DB::table('movie_tag')->insert([
            ['movie_id' => '1', 'tag_id' => '3'],
            ['movie_id' => '2', 'tag_id' => '8'],
            ['movie_id' => '2', 'tag_id' => '6'],
            ['movie_id' => '3', 'tag_id' => '8'],
            ['movie_id' => '3', 'tag_id' => '6'],
            ['movie_id' => '4', 'tag_id' => '7'],
            ['movie_id' => '4', 'tag_id' => '2'],
            ['movie_id' => '4', 'tag_id' => '4'],
            ['movie_id' => '4', 'tag_id' => '5'],
            ['movie_id' => '4', 'tag_id' => '3'],
            ['movie_id' => '5', 'tag_id' => '3'],
            ['movie_id' => '6', 'tag_id' => '1'],
        ]);
    }
}
