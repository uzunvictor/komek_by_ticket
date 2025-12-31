<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScreeningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('screenings')->insert([
            ['hall_id' => 1, 'price' => 1233, 'time' => '17:00', 'type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['hall_id' => 2, 'price' => 2050, 'time' => '21:00', 'type_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['hall_id' => 3, 'price' => 1540, 'time' => '21:10', 'type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['hall_id' => 4, 'price' => 1890, 'time' => '18:00', 'type_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['hall_id' => 5, 'price' => 1233, 'time' => '18:30', 'type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['hall_id' => 6, 'price' => 2200, 'time' => '15:30', 'type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['hall_id' => 1, 'price' => 2200, 'time' => '18:00', 'type_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['hall_id' => 3, 'price' => 1640, 'time' => '20:10', 'type_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
