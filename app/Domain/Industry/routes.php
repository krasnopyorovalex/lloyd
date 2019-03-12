<?php

Route::group(['prefix' => 'industries', 'as' => 'industries.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'IndustryController@index')->name('index');
    Route::get('create', 'IndustryController@create')->name('create');
    Route::post('', 'IndustryController@store')->name('store');
    Route::get('{id}/edit', 'IndustryController@edit')->name('edit');
    Route::put('{id}', 'IndustryController@update')->name('update');
    Route::delete('{id}', 'IndustryController@destroy')->name('destroy');

});
