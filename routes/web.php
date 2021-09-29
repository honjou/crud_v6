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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Sass compile
 */
Route::get('bootstrap-tmp-v2/', 'BootTempController@getIndex2');

/**
 * CRUD View Template
 */
Route::get('bootstrap-tmp-v5/', 'BootTempController@getIndex5');
Route::get('crud/', 'CrudController@getIndex');
