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
    return view('welcome');
});

Route::get('/', 'ProductsController@index')->name('create-product');

Route::group(['prefix' => 'products'], function(){
    Route::post('save', 'ProductsController@save')->name('save-product');
    Route::get('list', 'ProductsController@list')->name('list-product');
    Route::get('edit/{id}', 'ProductsController@edit')->name('edit-product');
    Route::get('view/{id}', 'ProductsController@view')->name('view-product');
    Route::post('update/{id}', 'ProductsController@update')->name('update-product');
});