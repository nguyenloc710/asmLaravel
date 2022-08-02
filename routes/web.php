<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login_register', function () {
    return view('login_register');
})->name('login_register');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
