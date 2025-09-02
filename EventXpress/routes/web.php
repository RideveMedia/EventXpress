<?php

use Illuminate\Support\Facades\Route;


//Website Routes
Route::get('/', function () {
    return view('Website_views.home'); 
})->name('home');

// Events
Route::get('/checkout', function () {
    return view('Website_views.checkout'); 
})->name('checkout');

// // Bookings
// Route::get('/bookings', function () {
//     return view('bookings.index'); 
// })->name('bookings');

// // Shop
// Route::get('/shop', function () {
//     return view('shop.index'); // resources/views/shop/index.blade.php
// })->name('shop');

// Blog
Route::get('/blog', function () {
    return view('blog.index'); // resources/views/blog/index.blade.php
})->name('blog');