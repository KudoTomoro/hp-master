<?php

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

Auth::routes();

Route::view('/', 'home')->name('home');
Route::view('service', 'service')->name('service');
Route::view('products', 'products')->name('products');
Route::view('company', 'company')->name('company');
Route::resource('contact', 'ContactController')->only(['index', 'store']);
Route::view('recruit', 'recruit')->name('recruit');
