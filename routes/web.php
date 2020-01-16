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

Route::get('/gestion', 'TrabajadorController@index')->name('trabajador');


Route::get('/editar/{id}', 'TrabajadorController@edit')->name('editar');

Route::put('/update/{id}', 'TrabajadorController@update')->name('update');

Route::post('/agregar', 'TrabajadorController@store')->name('agregar');

Route::delete('/eliminar/{id}','TrabajadorController@destroy')->name('eliminar');



Route::get('/orden', 'OrdenController@index')->name('orden');

Route::get('/editarOrden/{id}', 'OrdenController@edit')->name('editarOrden');

Route::put('/updateOrden/{id}', 'OrdenController@update')->name('updateOrden');

Route::post('/agregarOrden', 'OrdenController@store')->name('agregarOrden');

Route::delete('/eliminarOrden/{id}','OrdenController@destroy')->name('eliminarOrden');



Route::get('/asignacion', 'AsignacionController@index')->name('asignacion');
Route::get('/editarOrdenAsignacion/{id}', 'AsignacionController@edit')->name('editarOrdenAsignacion');
Route::put('/updateOrdenAsignacion/{id}', 'AsignacionController@update')->name('updateOrdenAsignacion');


Route::get('/reporte', 'ReporteController@index')->name('reporte');

Route::get('/formCargarOrdenes', 'ExcelController@index')->name('formCargarOrdenes');
Route::post('/cargarOrdenes', 'ExcelController@importOrdenes')->name('cargarOrdenes');
Route::get('/formCargarTrabajadores', 'ExcelController@trabajadores')->name('formCargarTrabajadores');
Route::post('/cargarTrabajadores', 'ExcelController@importTrabajadores')->name('cargarTrabajadores');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
