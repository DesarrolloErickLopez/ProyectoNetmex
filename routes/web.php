<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
// DECLARACION DE LA RUTA PRINCIPAL (CATALOGO DE PREVISUALIZACIÓN)
Route::get('/', function () {
    return view('welcome');
});
// AQUÍ ESTAMOS ALMACENANDO TODAS LAS RUTAS QUE TIENE QUE VER CON EL TEMA DE LA AUTENTICACION
Auth::routes();
// EL PRIMER PATAMETRO ES LA VISTA HOME CREADA, SEGUNDO PARAMETRO INDICA DONDE SE ENCUENTRA Y EL TERCER PAREMETRO ES EL METODO INDEX (ESTA EN EL CONTROLADOR INDICADO) NAME: ES EL NOMBRE QUE LE DAS A LA VISTA
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
