<?php

namespace App\Http\Controllers;

use App\Models\Lyrics;

class HomeController extends Controller
{
  public function index()
  {
    $lyrics = Lyrics::paginate(5);
    return view('home', compact('lyrics'));
  }
}
