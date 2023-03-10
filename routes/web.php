<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\balanceController;
use App\Http\Controllers\storeController;
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
Route::post('/loginadmin', [authController::class, 'loginAdmin'])->name('login.admin');
Route::post('/register', [authController::class, 'register'])->name('register.post');
Route::post('/logout', [authController::class, 'logout'])->name('logout.post');
Route::put('/profileupdate', [authController::class, 'updateProfile'])->name('profile.update');
// ========================== AUTH ==========================

// ========================== USER ==========================
Route::get('/profileview', [authController::class, 'profile'])->name('profileview');
Route::post('/balance', [balanceController::class, 'topup'])->name('topup.post');
Route::get('/historytr', [balanceController::class, 'getbalance'])->name('historytr');

// ========================== Store ==========================
Route::post('/store', [storeController::class, 'registerStore'])->name('store.post');
Route::post('/login-store', [storeController::class, 'loginStore'])->name('login.store');


// ========================== ADMIN ==========================
Route::get('/admindash', [adminController::class, 'dashboard'])->name('admindash');
Route::post('/category', [adminController::class, 'createCategory'])->name('category.post');
Route::delete('/category/{id}', [adminController::class, 'deleteCategory'])->name('category.delete');
Route::get('/category', [adminController::class, 'showAllCategories'])->name('category');
Route::get('/storeview', [adminController::class, 'showAllStores'])->name('storeview');

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/profileview', function () {
//     return view('profileview');
// });

Route::get('/profileupdate', function () {
    return view('profileupdate');
});

Route::get('/topup', function () {
    return view('topup');
});

// Route::get('/historytr', function () {
//     return view('historytr');
// });

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

Route::get('/addtoko', function () {
    return view('addtoko');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/productview', function () {
    return view('productview');
});

Route::get('/logintoko', function () {
    return view('logintoko');
});

Route::get('/orderuser', function () {
    return view('orderuser');
});


// admin

// Route::get('/admindash', function () {
//     return view('admindash');
// });

// Route::get('/storeview', function () {
//     return view('storeview');
// });

// Route::get('/category', function () {
//     return view('category');
// });

Route::get('/settings', function () {
    return view('settings');
});
