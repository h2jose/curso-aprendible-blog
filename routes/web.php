<?php

Route::get('/', 'PagesController@home')->name('home');

// Route::get('messages', 'MessagesController@index')->name('messages.index');
// Route::get('messages/create', 'MessagesController@create')->name('messages.create');
// Route::post('messages', 'MessagesController@store')->name('messages.store');
// Route::get('messages/{id}', 'MessagesController@show')->name('messages.show');
// Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
// Route::put('messages/{id}', 'MessagesController@update')->name('messages.update');
// Route::delete('messages/{id}', 'MessagesController@destroy')->name('messages.destroy');

Route::resource('messages', 'MessagesController');
