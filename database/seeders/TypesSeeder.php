<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['title' => '2D', 'created_at' => now(), 'updated_at' => now()],
            ['title' => '3D', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
