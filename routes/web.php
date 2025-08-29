<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

// Blog routes
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/details', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.details');
Route::get('/blog/category/{slug}', [App\Http\Controllers\BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/tag/{slug}', [App\Http\Controllers\BlogController::class, 'tag'])->name('blog.tag');
Route::get('/blog/search', [App\Http\Controllers\BlogController::class, 'search'])->name('blog.search');

// Blog actions
Route::post('/blog/comment', [App\Http\Controllers\BlogController::class, 'storeComment'])->name('blog.comment.store');
Route::post('/blog/newsletter', [App\Http\Controllers\BlogController::class, 'subscribeNewsletter'])->name('blog.newsletter.subscribe');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/style-guide', function () {
    return view('stle');
})->name('style.guide');
