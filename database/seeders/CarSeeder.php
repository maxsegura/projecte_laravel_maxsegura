<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            ['brand' => 'Tesla', 'model' => 'Model S', 'year' => 2021, 'price' => 79999.99, 'description' => 'prova', 'is_electric' => true],
            ['brand' => 'BMW', 'model' => 'X5', 'year' => 2020, 'price' => 60999.99, 'description' => 'prova', 'is_electric' => false],
            ['brand' => 'Toyota', 'model' => 'Corolla', 'year' => 2019, 'price' => 19999.99, 'description' => 'prova', 'is_electric' => false],
        ]);
    }
}
