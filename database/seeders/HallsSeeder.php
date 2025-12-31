<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('halls')->insert([
            ['title' => 'Зал 1', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Зал 2 Aura', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Зал 3', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Зал 4', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Зал 5', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Зал 6 VIP', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
