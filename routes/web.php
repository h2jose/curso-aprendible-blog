<?php

Route::get('/', 'PagesController@home')->name('home');

Route::get('saludos/{nombre?}', 'PagesController@saludo')->where('nombre', "[a-zA-Z]+")->name('saludos');

Route::get('contactame', 'PagesController@contact')->name('contactos');
