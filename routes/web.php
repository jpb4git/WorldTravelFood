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

Route::get('/', function () {
    $name = 'jpb';
    return view('index', ['name' => $name]);
});

/**
 *
 */
Route::get('/about', function () {
    $arr = [
        'name' => 'jp',
        'surname' => 'b'
    ];
    return view('pages.about',$arr);
});

/**
 *
 */
Route::get('/produit', function () {
    $arr = [
        'name' => 'jp',
        'surname' => 'b'
    ];
    return view('pages.produit',compact('arr'));
});



/**
 *
 */
Route::get('/produits', function () {
    $arr = [
        'name' => 'jp',
        'surname' => 'b'
    ];
    return view('pages.produits',compact('arr'));
});

/**
 *
 *
 */
Route::get('/panier', function () {
    return view('pages.panier');
});
