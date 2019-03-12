<?php

Route::group(['prefix' => 'producers', 'as' => 'producers.'], function () {
    Route::pattern('id', '[0-9]+');

    Route::get('', 'ProducerController@index')->name('index');
    Route::get('create', 'ProducerController@create')->name('create');
    Route::post('', 'ProducerController@store')->name('store');
    Route::get('{id}/edit', 'ProducerController@edit')->name('edit');
    Route::put('{id}', 'ProducerController@update')->name('update');
    Route::delete('{id}', 'ProducerController@destroy')->name('destroy');

});
