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
Route::get('bootstrap-tmp-v5/', 'BootTempController@getIndex5');

/**
 * CRUD View Template
 */

Route::group(['prefix' => 'student'], function () {
    Route::get('list', 'CrudController@getIndex');    // 一覧
    Route::get('new', 'CrudController@new_index');    // 入力
    Route::patch('new','CrudController@new_confirm'); // 確認
    Route::post('new', 'CrudController@new_finish');  // 完了
});
