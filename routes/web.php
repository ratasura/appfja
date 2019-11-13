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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::resource('/ubicaciones', 'UbicacionController');
Route::resource('/computadoras', 'ComputadorController');
Route::resource('/monitores', 'MonitorController');
Route::resource('/teclados', 'TecladoController');
Route::resource('/mouses', 'MouseController');
Route::resource('/perifericos', 'PerifericoController');
Route::get('monitor/getdata','MonitorController@listarMonitores')->name('monitor/getdata');
//Route::get('impresoras','PerifericoController@impresorasList');
// Route::get('scanners','PerifericoController@scannersList');
// Route::get('telefonos','PerifericoController@telefonosList');

