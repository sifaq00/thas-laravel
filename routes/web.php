<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController; 
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route untuk halaman About
Route::get('/about', function () {
    return view('landing.about');
})->name('about');

// Route untuk halaman Perhotelan
Route::get('/perhotelan', function () {
    return view('landing.perhotelan');
})->name('perhotelan');

// Route untuk halaman Short Course
Route::get('/shortcourse', function () {
    return view('landing.shortcourse');
})->name('shortcourse');

// Route untuk halaman Contact
Route::get('/contact', function () {
    return view('landing.contact');
})->name('contact');




// Routes for articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

