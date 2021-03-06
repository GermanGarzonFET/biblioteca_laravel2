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

use App\inventario;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('login', 'LoginController');

Route::GET('/inventario', 'InventarioController@index')->name('inventario');
Route::POST('/inventario', 'InventarioController@store')->name('store');

Route::resource('inicio', 'InicioController');

Route::GET('/libros/ficcion', 'LibrosController@index');
Route::GET('/libros/novela', 'LibrosController@create');
Route::GET('/libros/novelaliteratura', 'LibrosController@store');
