<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Models\Tour;

// Main routes with modern Tailwind templates
Route::get('/', [HomeController::class, 'modernIndex'])->name('home');

Route::get('/about', function () {
    return view('modern-about');
})->name('about');

Route::get('/contact', function () {
    return view('modern-contact');
})->name('contact');

Route::get('/packages', [HomeController::class, 'modernPackages'])->name('packages');

Route::get('/privacy-policy', function () {
    return view('modern-privacy-policy');
})->name('privacy.policy');

Route::get('/terms-conditions', function () {
    return view('modern-terms-conditions');
})->name('terms.conditions');

// Dynamic tour routes
Route::get('/tours/{slug}', [TourController::class, 'modernShow'])->name('tours.show');

// Legacy routes for backward compatibility (redirects to modern versions)
Route::get('/tours/tropical-shores', [TourController::class, 'showByRoute'])->name('tours.tropical-shores')->defaults('routeName', 'tropical-shores');
Route::get('/tours/emerald-isle', [TourController::class, 'showByRoute'])->name('tours.emerald-isle')->defaults('routeName', 'emerald-isle');
Route::get('/tours/ramayana', [TourController::class, 'showByRoute'])->name('tours.ramayana')->defaults('routeName', 'ramayana');

// Style guide (kept for reference)
Route::get('/style-guide', function () {
    return view('stle');
})->name('style.guide');

