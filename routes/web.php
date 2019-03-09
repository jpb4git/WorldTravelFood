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
Route::get('/panier', 'BasketController@index')->name('panier.index');

Route::get('/panier/identification', 'BasketController@identification');

Route::get('/panier/createAccount', 'BasketController@createAccount');

Route::get('/panier/adresse1', 'BasketController@adresse1');

Route::get('/panier/adresse2', 'BasketController@adresse2');

Route::get('/panier/adresseChoix', 'BasketController@adresseChoix');

Route::get('/panier/fraisDePort', 'BasketController@fraisDePort');

Route::get('/panier/paiement', 'BasketController@paiement');


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
Route::get('/admin/cats', 'Backoffice\CategoryController@index')->name('cat.index');
Route::get('/admin/cat/create', 'Backoffice\CategoryController@create')->name('cat.create');
Route::post('/admin/cat/store', 'Backoffice\CategoryController@store')->name('cat.store');
Route::get('/admin/cat/destroy/{id}', 'Backoffice\CategoryController@destroy')->name('cat.destroy');
Route::get('/admin/cat/update/{id}', 'Backoffice\CategoryController@update')->name('cat.update');


/*Route::namespace('Backoffice')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('', 'AdminController@index')->name('index');
    Route::resource('categories', 'CategoryController');
});
*/

