<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Lyrics;


class AddLyricsController extends Controller
{
    public function processForm(Request $request)
    {
        Log::debug("attempting to process form");

        // Access form data
        $song_name = $request->input('song-name');
        $artist_name = $request->input('artist-name');
        $youtube_link = $request->input('youtube-link');
        $foreign_lyrics = $request->input('foreign');
        $english_lyrics = $request->input('english');

        // Assert not null
        if (is_null($song_name) || is_null($artist_name) || is_null($youtube_link) || is_null($foreign_lyrics) || is_null($english_lyrics)) {
            Log::error('Form data is incomplete');
            return redirect()->back()->withErrors('All fields are required.');
        }

        // Perform validation, save to database, etc.
        // ...
        Log::debug('Song: ' . $song_name . ', Artist: ' . $artist_name);

        new Lyrics([
            'song_name' => $song_name,
            'artist_name' => $artist_name,
            'youtube_link' => $youtube_link,
            'foreign_lyrics' => $foreign_lyrics,
            'english_lyrics' => $english_lyrics,
        ])->save();

        // Redirect or return a view
        return redirect()->back()->with('success', 'Lyrics added successfully!');
    }
}
