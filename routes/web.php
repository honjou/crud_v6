<?php
/**
 * CRUD View Template
 */

Route::group(['prefix' => 'student'], function () {

    /**
     * 一覧
     */
    Route::get('list', 'CrudController@getIndex');

    /**
     * 登録
     */
    Route::get('new', 'CrudController@new_index');    // 入力
    Route::patch('new','CrudController@new_confirm'); // 確認
    Route::post('new', 'CrudController@new_finish');  // 完了

    /**
     * 編集
     */
    Route::get('edit/{id}/', 'CrudController@edit_index');    // 編集
    Route::patch('edit/{id}/','CrudController@edit_confirm'); // 確認
    Route::post('edit/{id}/', 'CrudController@edit_finish');  // 完了

    /**
     * 詳細
     */
    Route::get('detail/{id}/', 'CrudController@detail_index'); // 詳細

    /**
     * 削除
     */
    Route::post('delete/{id}/', 'CrudController@us_delete'); // 削除

});
