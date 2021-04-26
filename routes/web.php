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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('main');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/samsung/samsung-galaxy-a01-core-2020', function () {
    return view('product');
});
*/

Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');
Route::get('/basket', 'App\Http\Controllers\MainController@basket')->name('basket');
Route::get('/basket/place', 'App\Http\Controllers\MainController@basketPlace')->name('basket-place');
