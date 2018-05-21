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

// HomeController
Route::get('/', 'HomeController@index')->name('home.index');

// StoreController
Route::get('store/{slug}', 'StoreController@index')
      ->where('slug', '[0-9A-Za-z-]+')
      ->name('store.index');

// ProductController
Route::get('product/{slug}', 'ProductController@index')
      ->where('slug', '[0-9A-Za-z-]+')
      ->name('product.index');
