<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\MoviesController;




// DECLARACION DE LA RUTA PRINCIPAL (CATALOGO DE PREVISUALIZACIÓN)
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/busqueda','busqueda')->name('busqueda');
Route::view('/','welcome')->name('welcome');
Route::view('/contact','contact')->name('contact');
Route::post('/contact',[MessagesController::class, 'store']);
Route::view('/about','about')->name('about');
Route::view('/mycount','mycount')->name('mycount');

Route::get('/mycount', [UserController::class, 'index'])->name('mycount.index');
Route::get('/mycount/{id}/editar', [UserController::class, 'edit'])->name('mycount.edit');
Route::patch('/mycount/{user}', [UserController::class, 'update'])->name('mycount.update');




Route::get('/home', 'App\Http\Controllers\MoviesController@index')->name('movies.home');
Route::get('/movies/{movie}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');


// Route::get('/mycount/{movie}', 'App\Http\Controllers\HomeController@show')->name('mycount.show');

// AQUÍ ESTAMOS ALMACENANDO TODAS LAS RUTAS QUE TIENE QUE VER CON EL TEMA DE LA AUTENTICACION

Auth::routes();
