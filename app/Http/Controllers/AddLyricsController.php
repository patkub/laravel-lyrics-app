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

        // Validate form data
        $validated = $request->validate([
            'song_name' => 'required|string|max:255',
            'artist_name' => 'required|string|max:255',
            'youtube_link' => 'required|url:http,https',
            'foreign_lyrics' => 'required|string',
            'english_lyrics' => 'required|string'
        ]);

        Log::debug('Song: ' . $validated['song_name'] . ', Artist: ' . $validated['artist_name']);
        
        Lyrics::create($validated);

        // Redirect or return a view
        return redirect()->back()->with('success', 'Lyrics added successfully!');
    }
}
