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


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::get('/tours/tropical-shores', function () {
    return view('tours.tropical-shores');
})->name('tours.tropical-shores');

Route::get('/tours/emerald-isle', function () {
    return view('tours.emerald-isle');
})->name('tours.emerald-isle');

Route::get('/tours/ramayana', function () {
    return view('tours.ramayana');
})->name('tours.ramayana');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms.conditions');

