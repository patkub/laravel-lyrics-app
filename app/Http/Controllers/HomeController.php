<?php

namespace App\Http\Controllers;

use App\Models\Lyrics;

class HomeController extends Controller
{
  public function index()
  {
    $lyrics = Lyrics::all();
    return view('home', compact('lyrics'));
  }
}
