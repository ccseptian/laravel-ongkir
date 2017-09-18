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

Route::get('province', 'tian\larajaongkir\LarajaongkirController@province');
Route::get('city', 'tian\larajaongkir\LarajaongkirController@city');
Route::get('cost', 'tian\larajaongkir\LarajaongkirController@cost');
