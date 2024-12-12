<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create');
Route::get('/albums/search', [AlbumController::class, 'search'])->name('albums.search');
Route::get('/albums/genres', [GenreController::class, 'index'])->name('albums.genres');
Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('albums.show');

Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/{album}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
Route::put('/albums/{album}', [AlbumController::class, 'update'])->name('albums.update');
Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->name('albums.destroy');

Route::resource('reviews', ReviewController::class);
Route::get('/albums/{album}/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/albums/{album}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');


Route::resource('genres', GenreController::class);
Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genres.show');
// Route::get('/albums', [GenreController::class, 'index'])->name('genres.index');
// Route::get('/albums/{album}/genres/create', [GenreController::class, 'create'])->name('genres.create');
// Route::post('/albums/{album}/genres', [GenreController::class, 'store'])->name('genres.store');
Route::get('/genres/{genre}/edit', [GenreController::class, 'edit'])->name('genres.edit');
Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genres.destroy');

Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

Route::resource('genres', GenreController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
