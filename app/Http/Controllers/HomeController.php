<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lyrics;

class HomeController extends Controller
{
  public function index()
  {
    $lyrics = Lyrics::orderBy('song_name', 'asc')->paginate(10);
    return view('home', compact('lyrics'));
  }

  public function search(Request $request)
  {
    $query = Lyrics::query();

    $search = $request->input('search');
    if ($search) {
      $query
        ->where('song_name', 'like', '%' . $search . '%')
        ->orWhere('artist_name', 'like', '%' . $search . '%');
    }

    $lyrics = $query->orderBy('song_name', 'asc')->paginate(10)->withQueryString();

    return view('home', compact('lyrics'));
  }
}
