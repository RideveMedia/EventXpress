<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

// Home / Welcome Page
Route::get('/', function () {
    return view('layouts.welcome'); // <-- welcome page inside layouts
})->name('Home');

// Bookings
Route::get('/bookings', function () {
    return view('layouts.bookings'); // Make sure this file exists
})->name('bookings');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.submit');
Route::get('/bookings/{id}/confirm', [BookingController::class, 'confirm'])->name('bookings.confirm');

// Shop
Route::get('/shop', function () {
    return view('shop'); // Make sure resources/views/shop.blade.php exists
})->name('shop');

// Contact
Route::get('/contact', function () {
    return view('contact'); // Make sure resources/views/contact.blade.php exists
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Blog
Route::get('/blog', function () {
    return view('blog.index'); // Make sure resources/views/blog/index.blade.php exists
})->name('blog');

// Gallery
Route::view('/gallery', 'gallery')->name('gallery'); // Make sure resources/views/gallery.blade.php exists

// Checkout
Route::get('/checkout', function () {
    return view('Website_views.checkout'); // Make sure this file exists
})->name('checkout');
