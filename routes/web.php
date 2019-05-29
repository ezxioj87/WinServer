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
Route::get('/inicio','VisitanteController@indexUsuario');
Route::get('/programasVarios','VisitanteController@prueba');
Route::get('/paginaProfesor','ProfesorController@index')->name("indexProfesor");
Route::get('/paginaProfesor/crearSeccion','ProfesorController@crearSeccion');
Route::get('/paginaProfesor/Seccion/{id}','ProfesorController@Seccion');
Route::get('/paginaProfesor/modificarSeccion/{id}','ProfesorController@modificarSeccion')->name("modificarSeccion");
Route::resource('seccions','SeccionController');
