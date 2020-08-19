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

// Route::get('/', 'MainController@index');
Route::get('/', function() {
    return view('home');
});

Route::get('/login', 'MainController@login');

Route::get('/menu', 'MainController@menu');

Route::get('/cart', 'MainController@cart');

Route::get('/checkout', 'MainController@checkout');

Route::get('/confimation', 'MainController@confirmation');