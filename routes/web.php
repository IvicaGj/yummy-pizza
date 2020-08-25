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

Route::get('/', 'MainController@home')->name('home');

Route::get('/about', 'MainController@about')->name('about');

Route::get('/menu', 'MenuController@index')->name('menu');

Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/add', 'CartController@add')->name('addToCart');

Route::get('/checkout', 'OrderController@checkout')->name('checkout');

Route::post('/create', 'OrderController@create')->name('create');

Route::get('/confirm', 'OrderController@confirm')->name('confirm');

Route::get('/history', 'OrderController@history')->name('history');

Auth::routes();
