<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;
use Carbon\Carbon;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Album::insert([
            [
                'title' => 'BRAT',
                'albumID' => 1,
                'artist' => 'Charli xcx',
                // 'genreID' => 3, // Assuming genreID 1 exists in genres table
                'tracklist' => '1. 360, 2. Club classics, 3. Sympathy is a knife, 4. I might say something stupid, 5. Talk talk, 6. Von Dutch, 7.Everything is romantic, 8. Rewind, 9. So I, 10. Girl, so confusing, 11. Apple, 12. B2b, 13. Mean girls, 14. I think about it all the time, 15. 365',
                'duration' => '41min', // Total duration in minutes or seconds
                'image' => 'brat.png',
                'release_date' => Carbon::parse('2024-06-07'),
                'listen_link' => 'https://open.spotify.com/album/2lIZef4lzdvZkiiCzvPKj7?si=nBC5U83STs6EF0VSayo05A',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'My 21st Century Blues',
                'albumID' => 2,
                'artist' => 'RAYE',
                // 'genreID' => 2, // Assuming genreID 1 exists in genres table
                'tracklist' => '1. Introduction. , 2. Oscar Winning Tears. , 3. Hard Out Here. , 4. Black Mascara. , 5. Escapism. , 6. Mary Jane. , 7. The Thrill Is Gone. , 8. Ice Cream Man. , 9. Flip A Switch. , 10. Body Dysmorphia. , 11. Enviromental Anxiety. , 12. Five Star Hotels. (feat. Malahia) , 13. Worth It. , 14. Buss It Down. , 15. Fin.',
                'duration' => '46min', // Total duration in minutes or seconds
                'image' => 'public\images\My_21st_Century_Blues.png',
                'release_date' => Carbon::parse('2023-02-03'),
                'listen_link' => 'https://open.spotify.com/album/3U8n8LzBx2o9gYXvvNq4uH?si=9SVcHUdFTOOxnCY3BdPQeQ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'HIT ME HARD AND SOFT',
                'albumID' => 3,
                'artist' => 'Billie Eilish',
                // 'genreID' => 1, // Assuming genreID 1 exists in genres table
                'tracklist' => '1. SKINNY , 2. LUNCH , 3. CHIHIRO , 4. BIRDS OF A FEATHER , 5. WILDFLOWER , 6. THE GREATEST , 7. LAMOUR DE MA VIE , 8. THE DINER , 9. BITTERSUITE , 10. BLUE',
                'duration' => '43min', // Total duration in minutes or seconds
                'image' => 'https://upload.wikimedia.org/wikipedia/en/a/aa/Billie_Eilish_-_Hit_Me_Hard_and_Soft.png',
                'release_date' => Carbon::parse('2024-05-17'),
                'listen_link' => 'https://open.spotify.com/album/7aJuG4TFXa2hmE4z1yxc3n?si=OqialkJJRhqDZM96OzDlhw',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'Endless Summer Vacation',
                'albumID' => 4,
                'artist' => 'Miley Cyrus',
                // 'genreID' => 1, // Assuming genreID 1 exists in genres table
                'tracklist' => '1. Flowers, 2. Jaded, 3. Rose Coloured Lenses, 4. Thousand Miles (feat. Brandi Carlile), 5. You, 6. Handstand, 7. River, 8. Violet Chemistry, 9. Muddy (feat. Sia), 10. Wildcard, 11. Island, 12. Wonder Woman, 13. Flowers (Demo)',
                'duration' => '43min', // Total duration in minutes or seconds
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/5/54/Miley_Cyrus_-_Endless_Summer_Vacation.png/220px-Miley_Cyrus_-_Endless_Summer_Vacation.png',
                'release_date' => Carbon::parse('2023-03-10'),
                'listen_link' => 'https://open.spotify.com/album/5DvJgsMLbaR1HmAI6VhfcQ?si=VmxezEhfQFef4s6N2R-XHg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
