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


Route::get('libro/create','LibroController@create')->name('libro.create');
Route::post('libro/alta','LibroController@store')->name('libro.alta');

Route::get('libros/','LibroController@index')->name('libro.index');

Route::delete('libro/eliminar/{libro}','LibroController@destroy')->name('libro.delete');

Route::get('libro/edit/{libro}','LibroController@edit')->name('libro.edit');
Route::put('libro/update/{libro}','LibroController@update')->name('libro.update');

Route::get('detalles','LibroController@detalles')->name('detalles.prestamos');

