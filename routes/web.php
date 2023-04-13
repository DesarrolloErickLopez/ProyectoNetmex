<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessagesController;
// use App\Http\Controllers\MoviesController;




// DECLARACION DE LA RUTA PRINCIPAL (CATALOGO DE PREVISUALIZACIÓN)
Route::get('/', function () {
    return view('welcome');
});


Route::view('/contact','contact')->name('contact');
Route::post('/contact',[MessagesController::class, 'store']);
Route::view('/about','about')->name('about');
Route::view('/mycount','mycount')->name('mycount');

// AQUÍ ESTAMOS ALMACENANDO TODAS LAS RUTAS QUE TIENE QUE VER CON EL TEMA DE LA AUTENTICACION
Auth::routes();
// Route::get('/home', [App\Http\Controllers\MoviesController::class, 'index'])->name('home.index');
Route::get('/home', 'App\Http\Controllers\MoviesController@index')->name('movies.home');
Route::get('/movies/{movie}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');

