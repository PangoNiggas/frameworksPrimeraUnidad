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

//Ruta para la pagina de inicio si te haz o no loggeado
Route::view('/', 'welcome');
//Ruta para ver la pantalla de quienes somos
Route::view('/quienes_somos', 'quienes-somos');
//Ruta para ver la pantalla de contactos
Route::view('/contactos', 'contacto');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
