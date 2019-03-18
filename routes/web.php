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

Route::resource('/admin/products','Admin\ProductController');
/**
 *
 */


Route::get('/', "HomeController@index")->name('home.index');


/**
 *
 */
Route::get('/product/{id}', 'ProductController@getProduct')->name('product.getProduct');

/**
 *
 */
Route::get('/produits', 'ProductController@showAll');

Route::get('/produitsCat', 'ProductController@showByCat');

Route::get('/produitsCountry', 'ProductController@showByCountry');



/**
 *
 *
 *      BASKET
 *
 *
 *
 */



/**
 *
 *
 */
Route::get('/panier', 'BasketController@index')->name('panier.recapitulatif');

Route::get('/panier/identification', 'BasketController@identification')->name('panier.identification');

Route::get('/panier/createAccount', 'BasketController@createAccount')->name('panier.account');

Route::get('/panier/adresse1', 'BasketController@adresse1')->name('panier.adresse1');

Route::get('/panier/adresse2', 'BasketController@adresse2')->name('panier.adresse2');


Route::get('/panier/fraisdeport', 'BasketController@fraisDePort')->name('panier.fraisdeport');

Route::get('/panier/paiement', 'BasketController@paiement')->name('panier.paiement');


/**
 *
 *
 */
Route::get('/newsLetter', 'NewLetterController@show');

/**
 *
 *
 */
Route::get('/order', 'OrderController@show');


