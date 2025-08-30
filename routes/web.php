<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

// Removed blog routes

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/style-guide', function () {
    return view('stle');
})->name('style.guide');
