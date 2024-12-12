<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert([
            ['name' => 'Pop'],
            ['name' => 'Rock'],
            ['name' => 'Alternative'],
            ['name' => 'Indie'],
            ['name' => 'House'],
            ['name' => 'R&B'],
            ['name' => 'Rap'],
            ['name' => 'Techno'],
            ['name' => 'Soul'],
            ['name' => 'Jazz'],
            ['name' => 'Classical'],
            ['name' => 'Folk'],
            ['name' => 'Country'],
            ['name' => 'Punk rock'],
            ['name' => 'Hip Hop'],
            ['name' => 'Electronic'],
            ['name' => 'Funk'],
            ['name' => 'Reggae'],
            
        ]);
    }
}
