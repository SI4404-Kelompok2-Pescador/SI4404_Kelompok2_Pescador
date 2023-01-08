<?php

use App\Http\Controllers\authController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// ========================== AUTH ==========================
Route::post('/login', [authController::class, 'login'])->name('login.post');
Route::post('/register', [authController::class, 'register'])->name('register.post');
Route::post('/logout', [authController::class, 'logout'])->name('logout.post');
// ========================== AUTH ==========================

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profileview', function () {
    return view('profileview');
});

Route::get('/profileupdate', function () {
    return view('profileupdate');
});

Route::get('/topup', function () {
    return view('topup');
});

Route::get('/historytr', function () {
    return view('historytr');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/toko', function () {
    return view('toko');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/contact', function () {
    return view('contact');
});