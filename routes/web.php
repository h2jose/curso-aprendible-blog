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
    echo "<a href=". route('contacto') .">Contacto</a>";
    echo "<a href=". route('contacto') .">Contacto</a>";
    echo "<a href=". route('contacto') .">Contacto</a>";
    echo "<a href=". route('contacto') .">Contacto</a>";
});

// Route::get('contactenos', ['as' => 'contacto', function () {
//     return '<h2>Sección de Contactos</h2>';
// }]);

Route::get('contactame', function () {
    return '<h2>Sección de Contactos</h2>';
})->name('contacto');

Route::get('saludos/{nombre?}', function ($nombre = 'Invitado') {
    return "Saludos $nombre";
})->where('nombre', "[a-zA-Z]+");
