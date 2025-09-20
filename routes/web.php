<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Models\Tour;

Route::get('/', [HomeController::class, 'index'])->name('home');



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



// Dynamic tour routes
Route::get('/tours/{slug}', [TourController::class, 'show'])->name('tours.show');

// Legacy routes for backward compatibility
Route::get('/tours/tropical-shores', [TourController::class, 'showByRoute'])->name('tours.tropical-shores')->defaults('routeName', 'tropical-shores');
Route::get('/tours/emerald-isle', [TourController::class, 'showByRoute'])->name('tours.emerald-isle')->defaults('routeName', 'emerald-isle');
Route::get('/tours/ramayana', [TourController::class, 'showByRoute'])->name('tours.ramayana')->defaults('routeName', 'ramayana');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms.conditions');

