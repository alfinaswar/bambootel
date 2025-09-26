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
Route::get('/home1', function () {
    return view('home1');
})->name('home1');

Route::get('/home2', function () {
    return view('home2');
})->name('home2');

Route::get('/home3', function () {
    return view('home3');
})->name('home3');

Route::get('/home4', function () {
    return view('home4');
})->name('home4');

Route::get('/home5', function () {
    return view('home5');
})->name('home5');
Route::get('/home6', function () {
    return view('home6');
})->name('home6');

Route::get('/home7', function () {
    return view('home7');
})->name('home7');

Route::get('/home8', function () {
    return view('home8');
})->name('home8');

Route::get('/home9', function () {
    return view('home9');
})->name('home9');

Route::get('/home10', function () {
    return view('home10');
})->name('home10');


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

