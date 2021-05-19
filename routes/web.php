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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
require __DIR__ . '/auth.php';

Route::get('reset', '\App\Http\Controllers\ResetController@reset')->name('reset');

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');
//laravel-ui auth разделить редирект для админа и обычных пользователей
Route::get('redirects', 'App\Http\Controllers\MainController@redirectTo');
Route::middleware('auth')->group(
    function () {
        Route::group(
            [
                'namespace' => 'App\Http\Controllers\Person',
                'prefix' => 'person',
                'as' => 'person.'
            ],
            function () {
                Route::get('/orders', 'OrderController@index')->name('orders.index');
                Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
            }
        );

        Route::group(
            [
                'namespace' => 'App\Http\Controllers\Admin',
                'prefix' => 'admin',
            ],
            function () {
                Route::group(
                    ['middleware' => 'is_admin'],
                    function () {
                        Route::get('/orders', 'OrderController@index')->name('home');
                        Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
                    }
                );

                Route::resource('categories', 'CategoryController');
                Route::resource('products', 'ProductController');
            }
        );
    }
);

Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::group(
    ['prefix' => 'basket'],
    function () {
        //Route::post('/add/{id}', '\App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
        //lesson 22 injection
        Route::post('/add/{product}', '\App\Http\Controllers\BasketController@basketAdd')->name('basket-add');

        Route::group(
            ['middleware' => 'basket_not_empty'],
            function () {
                Route::get('/', 'App\Http\Controllers\BasketController@basket')->name('basket');
                Route::get('/place', 'App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
                Route::post('/remove/{id}', '\App\Http\Controllers\BasketController@basketremove')->name(
                    'basket-remove'
                );
                Route::post('/place', 'App\Http\Controllers\BasketController@basketConfirm')->name('basket-confirm');
            }
        );
    }
);

Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');

Route::resource('reviews', 'App\Http\Controllers\ReviewController');
