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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
Route::get('/basket/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
Route::post('/basket/add/{id}', '\App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', '\App\Http\Controllers\BasketController@basketremove')->name('basket-remove');
Route::post('/basket/place', 'App\Http\Controllers\BasketController@basketConfirm')->name('basket-confirm');


Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
