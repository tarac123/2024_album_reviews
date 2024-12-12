<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Genre;
use Carbon\Carbon;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        $albums = 
        [
            [
                'title' => 'BRAT',
                'artist' => 'Charli xcx',
                'tracklist' => '360, Club classics, Sympathy is a knife, I might say something stupid, Talk talk, Von Dutch, Everything is romantic, Rewind, So I, Girl so confusing, Apple, B2b, Mean girls, I think about it all the time, 365',
                'duration' => '41', 
                'image' => 'brat.png',
                'release_date' => Carbon::parse('2024-06-07'),
                'listen_link' => 'https://open.spotify.com/album/2lIZef4lzdvZkiiCzvPKj7?si=nBC5U83STs6EF0VSayo05A',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'My 21st Century Blues',
                'artist' => 'RAYE',
                'tracklist' => 'Introduction. , Oscar Winning Tears. , Hard Out Here. , Black Mascara. , Escapism. , Mary Jane. , The Thrill Is Gone. , Ice Cream Man. , Flip A Switch., Body Dysmorphia., Enviromental Anxiety., Five Star Hotels. (feat. Malahia) , Worth It. , Buss It Down. , Fin.',
                'duration' => '46', 
                'image' => 'My_21st_Century_Blues.png',
                'release_date' => Carbon::parse('2023-02-03'),
                'listen_link' => 'https://open.spotify.com/album/3U8n8LzBx2o9gYXvvNq4uH?si=9SVcHUdFTOOxnCY3BdPQeQ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'HIT ME HARD AND SOFT',
                'artist' => 'Billie Eilish',
                'tracklist' => 'SKINNY , LUNCH , CHIHIRO , BIRDS OF A FEATHER , WILDFLOWER , THE GREATEST , LAMOUR DE MA VIE , THE DINER , BITTERSUITE , BLUE',
                'duration' => '43', 
                'image' => 'HIT_ME_HARD_AND_SOFT.png',
                'release_date' => Carbon::parse('2024-05-17'),
                'listen_link' => 'https://open.spotify.com/album/7aJuG4TFXa2hmE4z1yxc3n?si=OqialkJJRhqDZM96OzDlhw',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'Endless Summer Vacation',
                'artist' => 'Miley Cyrus',
                'tracklist' => 'Flowers, Jaded , Rose Coloured Lenses, Thousand Miles (feat. Brandi Carlile), You, Handstand, River, Violet Chemistry, Muddy (feat. Sia), Wildcard, Island, Wonder Woman, Flowers (Demo)',
                'duration' => '43', 
                'image' => 'endless_summer_vacation.png',
                'release_date' => Carbon::parse('2023-03-10'),
                'listen_link' => 'https://open.spotify.com/album/5DvJgsMLbaR1HmAI6VhfcQ?si=VmxezEhfQFef4s6N2R-XHg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'title' => 'Kansas Anymore',
                'artist' => 'Role Model',
                'tracklist' => 'Writings On The Wall, Look At That Woman , Scumbag, Oh Gemini, Frances, Superglue, The Dinner, Deeply Still In Love, Slut Era Interlude, So Far Gone (feat. Lizzy McAlpine), Slipfast, Compromise, Something Somehow Someday',
                'duration' => '41', 
                'image' => 'kansas_anymore.webp',
                'release_date' => Carbon::parse('2024-07-19'),
                'listen_link' => 'https://open.spotify.com/album/4OZ6nCbn8w0cHr1m0qiD2s?si=eBTtzdRQR5uVvj8uLEFrpQ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        [
            'title' => 'Melophobia',
            'artist' => 'Cage The Elephant',
            'tracklist' => 'Spiderhead, Come a Little Closer , Telescope, Its Just Forever (featuring Alison Mosshart), Take It or Leave It, Halo, Black Widow, Hypocrite, Teeth, Cigarette Daydreams',
            'duration' => '38', 
            'image' => 'melophobia.jpeg',
            'release_date' => Carbon::parse('2013-10-08'),
            'listen_link' => 'https://open.spotify.com/album/4EK8gtQfdVsmDTji7gBFlz?si=_gEd63IlTomv90JCw_awtw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'title' => 'Folklore',
            'artist' => 'Taylor Swift',
            'tracklist' => 'the 1, cardigan, the last great american dynasty, exile (feat. Bon Iver), my tears ricochet, mirrorball, seven, august, this is me trying, illicit affairs, invisible string,  mad woman, epiphany, betty, peace, hoax',
            'duration' => '63', 
            'image' => 'folklore.png',
            'release_date' => Carbon::parse('2020-08-24'),
            'listen_link' => 'https://open.spotify.com/album/2fenSS68JI1h4Fo296JfGr?si=VJv7Hw7fQq-DwbovSFgiiA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 

        [
        'title' => 'Abbey Road',
        'artist' => 'The Beatles',
        'tracklist' => 'Come Together, Something, Maxwells Silver Hammer, Oh! Darling, Octopus`s Garden, I Want You (Shes So Heavy), Here Comes The Sun, Because, You Never Give Me Your Money, Sun King, Mean Mr. Mustard, Polythene Pam, She Came In Through The Bathroom Window, Golden Slumbers, Carry That Weight, The End, Her Majesty',
        'duration' => '47', 
        'image' => 'abbey_road.jpg',
        'release_date' => Carbon::parse('1969-09-26'),
        'listen_link' => 'https://open.spotify.com/album/0ETFjACtuP2ADo6LFhL6HN?si=9cMYk6g8Rf-P8-VwAL1Leg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ],

        [
        'title' => 'Rumours',
        'artist' => 'Fleetwood Mac',
        'tracklist' => 'Second Hand News, Dreams, Never Going Back Again, Dont Stop, Go Your Own Way, Songbird, The Chain, You Make Loving Fun, I Dont Want to Know, Oh Daddy, Gold Dust Woman ',
        'duration' => '39', 
        'image' => 'rumours.png',
        'release_date' => Carbon::parse('1977-02-04'),
        'listen_link' => 'https://open.spotify.com/album/1bt6q2SruMsBtcerNVtpZB?si=UNumjILFQceOVeL8a95Hrg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
         ],

        ];

        foreach ($albums as $albumData)
        {
            // insert the album into the album table
            $album = Album::create(array_merge($albumData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));

            // randomly select two genres 
            // so GenreSeeder must be excecuted before AlbumSeeder
            $genres = Genre::inRandomOrder()->take(2)->pluck('id');

            // attach genres to albums
            // laravels attach() function inserts a row in the pivot table indicating that this album is in this genre
            $album->genres()->attach($genres);
        }
    }
}
