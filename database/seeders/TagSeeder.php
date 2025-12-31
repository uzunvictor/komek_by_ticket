<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            ['title' => 'анимационное приключение', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'боевик', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'комедия', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'мелодрама', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'мультфильм', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'триллер', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'фэнтези', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'экшен', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
