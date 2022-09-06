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
    return view('frontview.index');
});

Route::get('/index', function () {
    return view('frontview.index');
});

Route::get('/shop', function () {
    return view('frontview.shop');
});

Route::get('/detail', function () {
    return view('frontview.detail');
});

Route::get('/contact', function () {
    return view('frontview.contact');
});

Route::get('/checkout', function () {
    return view('frontview.checkout');
});

Route::get('/cart', function () {
    return view('frontview.cart');
});

Route::get('/login', function () {
    return view('frontview.login');
});



Route::get('/colegan', function () {
    return view('backview.colegan');
});

Route::get('/dashboard', function () {
    return view('backview.dashboard');
});

Route::get('/kategori', function () {
    return view('backview.kategori');
});

Route::get('/login2', function () {
    return view('backview.login2');
});

Route::get('/product2', function () {
    return view('backview.product2');
});

Route::get('/promo', function () {
    return view('backview.promo');
});

Route::get('/registrasi', function () {
    return view('backview.registrasi');
});

Route::get('/supplier', function () {
    return view('backview.supplier');
});

Route::get('/user', function () {
    return view('backview.user');
});

