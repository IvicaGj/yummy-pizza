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

Route::get('/', function() {
    return view('home');
});

Route::get('/menu', 'MenuController@index');

Route::get('/cart', 'CartController@cart');

Route::get('/add/{$item}', 'CartController@addToCart');

Route::get('/checkout', 'OrderController@checkout');

Route::get('/confimation', 'OrderController@confirmation');

Auth::routes(['register' => false]);
