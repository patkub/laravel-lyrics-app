<?php

namespace Database\Seeders;

use App\Models\Lyrics;
use Illuminate\Database\Seeder;

class LyricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Lyrics::factory()->create([
            'song_name' => 'Test Song',
            'artist_name' => 'Test Artist',
            'youtube_link' => 'https://example.com/',
            'foreign_lyrics' => 'Foreign lyrics',
            'english_lyrics' => 'English lyrics',
        ]);
    }
}
