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


Route::view('/', 'welcome')->name('Bienvenido');
Route::view('/nosotros', 'about')->name('Nosotros');
Route::view('/contacto', 'contact')->name('Contacto');
Route::view('/productos', 'product')->name('Productos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('Inicio');

