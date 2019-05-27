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
Route::get('/index',function(){
    return 'hola';
});
Route::get('/inicio','Controller@index');
Route::get('/programasVarios','Controller@prueba');
Route::get('/paginaProfesor','Controller@indexProfesor');
Route::get('/crearSeccion','SeccionController@crearSeccion');
Route::resource('seccions','SeccionController');
