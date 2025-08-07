<?php

namespace App\Http\Controllers;

use App\Models\Lyrics;

class LyricsController extends Controller
{
    public function show(Lyrics $lyrics)
    {
        return view('lyrics', compact('lyrics'));
    }
}
