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
    return view('welcome');
});

Route::get('/product',function () {
    return view('templates/product');
})->name('product-list');

Route::get('/login',function () {
    return view('auth/login');
});

Route::get('/product/{id}/edit', function () {
    return view('templates/editProduct');
});

Route::get('product/create', function () {
    return view('templates/addProduct');
});




