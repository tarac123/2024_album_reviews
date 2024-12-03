<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert([
            ['genre_name' => 'Pop'],
            ['genre_name' => 'Rock'],
            ['genre_name' => 'Alternative'],
            ['genre_name' => 'Indie'],
            ['genre_name' => 'House'],
            ['genre_name' => 'R&B'],
            ['genre_name' => 'Rap'],
            ['genre_name' => 'Techno'],
            ['genre_name' => 'Soul'],
            ['genre_name' => 'Jazz'],
            ['genre_name' => 'Classical'],
            ['genre_name' => 'Folk'],
            ['genre_name' => 'Country'],
            ['genre_name' => 'Punk rock'],
            ['genre_name' => 'Hip Hop'],
            ['genre_name' => 'Electronic'],
            ['genre_name' => 'Funk'],
            ['genre_name' => 'Reggae'],
            ['genre_name' => 'Reggae'],
        ]);
    }
}
