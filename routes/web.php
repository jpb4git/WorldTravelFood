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
Route::get('/product/{id}', 'ProductController@getProduct');

/**
 *
 */
Route::get('/produits', 'ProductController@showAll');




/**
 *
 *
 */
Route::get('/panier', 'BasketController@index');


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


