<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lyrics extends Model
{
    /** @use HasFactory<\Database\Factories\LyricsFactory> */
    use HasFactory, Notifiable;

    //
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'song_name',
        'artist_name',
        'youtube_link',
        'foreign_lyrics',
        'english_lyrics',
    ];

}
