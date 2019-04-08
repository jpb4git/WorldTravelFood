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

Route::get('/', "HomeController@index")->name('home.index');


/**
 *
 */
Route::get('/product/{id}', 'ProductController@show')->name('product.show');

/**
 *
 */
Route::get('/produits', 'ProductController@index')->name('product.index');

Route::get('/produits/boissons', 'ProductController@boissons')->name('product.boissons');
Route::get('/produits/bonbons', 'ProductController@bonbons')->name('product.bonbons');
Route::get('/produits/snacking', 'ProductController@snacking')->name('product.snacking');
Route::get('/produits/aperitif', 'ProductController@aperitif')->name('product.aperitif');
Route::get('/produits/vegan', 'ProductController@vegan')->name('product.vegan');


Route::get('/produits/country', 'ProductController@country')->name('product.country');



/**
 *
 *
 *      CART
 *
 *
 *
 */



/**
 *
 *
 */
Route::get('/panier', 'CartController@index')->name('panier.index');

Route::get('/panier/adresse1', 'CartController@adresse1')->name('panier.adresse1')->middleware('auth');

Route::get('/panier/adresse2', 'CartController@adresse2')->name('panier.adresse2')->middleware('auth');

Route::get('/panier/fraisdeport', 'CartController@shipping')->name('panier.shipping')->middleware('auth');

Route::get('/panier/paiement', 'CartController@payment')->name('panier.payment')->middleware('auth');


/**
 *
 *
 */

/**
 *
 *
 */
Route::get('/order', 'OrderController@index')->name('order.index');




/**
 *BACK OFFICE
 *
 */
Route::namespace('Backoffice')->prefix('/admin')->middleware('is_admin')->name('admin.')->group(function () {
    Route::get('', 'AdminController@index')->name('index');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

