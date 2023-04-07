<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\MoviesController;




// DECLARACION DE LA RUTA PRINCIPAL (CATALOGO DE PREVISUALIZACIÓN)
Route::get('/', function () {
    return view('welcome');
});

// AQUÍ ESTAMOS ALMACENANDO TODAS LAS RUTAS QUE TIENE QUE VER CON EL TEMA DE LA AUTENTICACION
Auth::routes();
// Route::get('/home', [App\Http\Controllers\MoviesController::class, 'index'])->name('home.index');

Route::get('/home', 'App\Http\Controllers\MoviesController@index')->name('movies.home');
// Route::get('/movies{movie}', 'MoviesController@show')->name('movies.show');
