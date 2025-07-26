<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/our-concept', function () {
    return view('our-concept'); // Ganti dengan view yang sesuai jika ada
})->name('our-concept');

Route::get('/room', function () {
    return view('welcome'); // Ganti dengan view yang sesuai jika ada
})->name('room');

Route::get('/gallery', function () {
    return view('gallery'); // Ganti dengan view yang sesuai jika ada
})->name('gallery');

Route::get('/contact-us', function () {
    return view('contact-us'); // Ganti dengan view yang sesuai jika ada
})->name('contact-us');

