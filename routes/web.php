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

Route::get('/', "HomeController@index");

/**
 *
 */
Route::get('/product/{id}', 'Product\ProducController@getProduit');



/**
 *
 */
Route::get('/produits', 'Product\ProductController@showAll');




/**
 *
 *
 */
Route::get('/panier', 'Basket\BasketController@index');



/**
 *
 *
 */
Route::get('/order', 'Order\OrderController@show');


/**
 *
 *
 */
Route::get('/user', 'UserController@login');
