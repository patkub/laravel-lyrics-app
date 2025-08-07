<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddLyricsController;
use App\Http\Controllers\LyricsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');


// display form to add lyrics
Route::get('/add-lyrics', function () {
    return view('add-lyrics');
})->middleware(['auth', 'verified'])->name('add-lyrics');

// process add lyrics form
Route::post('/add-lyrics-create', [AddLyricsController::class, 'processForm'])->middleware(['auth', 'verified'])->name('add-lyrics.create');

// display lyrics
Route::get('/lyrics/{lyrics}', [LyricsController::class, 'show'])->middleware(['auth', 'verified'])->name('lyrics.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
