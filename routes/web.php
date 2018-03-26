<?php

Route::get('/', 'Pages\PagesController@inicio')->name('inicio');

Route::resource('messages', 'Messages\MessagesController');

Auth::routes();
