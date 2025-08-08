<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lyrics>
 */
class LyricsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'song_name' => fake()->name(),
            'artist_name' => fake()->name(),
            'youtube_link' => fake()->url(),
            'foreign_lyrics' => fake()->text(),
            'english_lyrics' => fake()->text()
        ];
    }
}
