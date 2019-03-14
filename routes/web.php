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




/**
 *BACK OFFICE
 *
 */
Route::get('/admin', 'Backoffice\AdminController@index')->name('index');

/**
 * CATS
 */

/*
Route::get('/admin/cats', 'Backoffice\CategoryController@index')->name('cat.index');
Route::get('/admin/cat/create', 'Backoffice\CategoryController@create')->name('cat.create');
Route::post('/admin/cat/store', 'Backoffice\CategoryController@store')->name('cat.store');
Route::post('/admin/cat/destroy/{id}', 'Backoffice\CategoryController@destroy')->name('cat.destroy');
Route::post('/admin/cat/edit/{id}', 'Backoffice\CategoryController@edit')->name('cat.edit');
Route::post('/admin/cat/update/{id}', 'Backoffice\CategoryController@update')->name('cat.update');
*/

Route::resource('categories', 'Backoffice\CategoryController');

/*Route::namespace('Backoffice')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('', 'AdminController@index')->name('index');


    Route::resource('categories', 'CategoryController');
});
*/

/**
 * PRODUCT
 */
/*
Route::get('/admin/products', 'Backoffice\ProductController@index')->name('product.index');
Route::get('/admin/product/create', 'Backoffice\ProductController@create')->name('product.create');
Route::post('/admin/product/store', 'Backoffice\ProductController@store')->name('product.store');
Route::post('/admin/product/destroy/{id}', 'Backoffice\ProductController@destroy')->name('product.destroy');
Route::post('/admin/product/edit/{id}', 'Backoffice\ProductController@edit')->name('product.edit');
Route::post('/admin/product/update/{id}', 'Backoffice\ProductController@update')->name('product.update');
*/

Route::resource('products', 'Backoffice\ProductController');

