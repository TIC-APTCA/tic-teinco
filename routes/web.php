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

// Rutas de Autenticación
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Auth::routes();

// Ruta Inicio - Escritorio
Route::get('/home', 'HomeController@index')->name('home');

// Rutas en Modulo Archivos
Route::view('archivos/home', 'archivos.home')->name('archivos.home');

// Rutas en Modulo Archivos / Inventarios
Route::get('archivos/inventarios', 'Archivos\InventariosController@show')->name('inventarios.inicio');




