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
    return view('welcome');
});

Route::get('/inicio', 'EmpleadoController@inicio')->name('inicio');
Route::get('/acerca', 'EmpleadoController@acerca')->name('acerca');
Route::get('/blog', 'EmpleadoController@blog')->name('blog');
Route::get('/contacto', 'EmpleadoController@contacto')->name('contacto');
Route::get('/clases', 'EmpleadoController@clases')->name('clases');

Route::resource('empleado', 'EmpleadoController');