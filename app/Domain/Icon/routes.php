<?php

Route::group(['prefix' => 'icons', 'as' => 'icons.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'IconController@index')->name('index');
    Route::get('create', 'IconController@create')->name('create');
    Route::post('', 'IconController@store')->name('store');
    Route::get('{id}/edit', 'IconController@edit')->name('edit');
    Route::put('{id}', 'IconController@update')->name('update');
    Route::delete('{id}', 'IconController@destroy')->name('destroy');

});
