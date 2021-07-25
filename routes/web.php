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

// lesson 26
Route::get('locale/{locale}', 'MainController@changeLocale')->name('locale');
// lesson 28
Route::get('currency/{currency}', 'MainController@changeCurrency')->name('currency');

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

//laravel-ui auth разделить редирект для админа и обычных пользователей
Route::get('redirects', 'MainController@redirectTo');

// lesson 26
Route::middleware(['set_locale'])->group(
function () {
    Route::get('reset', '\ResetController@reset')->name('reset');

    Route::middleware('auth')->group(
            function () {
                Route::group(
                    [
                        'namespace' => 'Person',
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
                        'namespace' => 'Admin',
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
                        Route::resource('products/{product}/skus', 'SkuController');
                        Route::resource('properties', 'PropertyController');
                        Route::resource('properties/{property}/property-options', 'PropertyOptionController');
                        Route::resource('coupons', 'CouponController');
                    }
                );
            }
        );

        Route::get('/', 'MainController@index')->name('main');

        Route::group(
            ['prefix' => 'basket'],
            function () {
                //Route::post('/add/{id}', 'BasketController@basketAdd')->name('basket-add');
                //lesson 22 injection
                // lesson 35
                // Route::post('/add/{product}', 'BasketController@basketAdd')->name('basket-add');
                Route::post('/add/{skus}', 'BasketController@basketAdd')->name('basket-add');

                Route::group(
                    ['middleware' => 'basket_not_empty'],
                    function () {
                        Route::get('/', 'BasketController@basket')->name('basket');
                        Route::get('/place', 'BasketController@basketPlace')->name('basket-place');
                        // lesson 35 {skus} во множественном числе
                        // Route::post('/remove/{product}', 'BasketController@basketremove')->name(
                        Route::post('/remove/{skus}', 'BasketController@basketremove')->name(
                            'basket-remove'
                        );
                        Route::post('/place', 'BasketController@basketConfirm')->name(
                            'basket-confirm'
                        );
                        // lesson 39
                        Route::post('coupon', 'BasketController@setCoupon')->name('set-coupon');
                    }
                );
            }
        );

        Route::get('/categories', 'MainController@categories')->name('categories');
        Route::get('/{category}', 'MainController@category')->name('category');
        // Route::get('/{category}/{product?}', 'MainController@product')->name('product');
        // lesson 35
        Route::get('/{category}/{product}/{skus}', 'MainController@sku')->name('sku');
        // lesson 35
        // Route::post('subscription/{product}', 'MainController@subscribe')->name('subscription');
        Route::post('subscription/{skus}', 'MainController@subscribe')->name('subscription');

        Route::resource('reviews', 'ReviewController');
    }
);
