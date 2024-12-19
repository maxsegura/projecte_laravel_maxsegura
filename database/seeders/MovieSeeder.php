<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['title' => 'Inception', 'release_year' => 2010, 'genre' => 'Sci-Fi', 'rating' => 8.8, 'description' => 'A mind-bending thriller.'],
            ['title' => 'The Godfather', 'release_year' => 1972, 'genre' => 'Crime', 'rating' => 9.2, 'description' => 'A story of a powerful Italian-American crime family.'],
            ['title' => 'The Dark Knight', 'release_year' => 2008, 'genre' => 'Action', 'rating' => 9.0, 'description' => 'The legendary Batman battles Joker.'],
        ]);
    }
}
