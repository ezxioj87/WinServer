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


Route::get('/','VisitanteController@index');
Route::get('/Seccion/{seccionNombre}','VisitanteController@seccion');


Route::resource('seccions','SeccionController');
Route::resource('programas','ProgramaController');
Route::resource('users','UserController');

Route::get('/Administracion/loginProfesor','ProfesorController@login')->middleware('guest')->name('loginShow');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::Post('login','Auth\LoginController@login')->name('Login');
Route::group([ 'middleware' => 'auth'], function()
{
    Route::get('/Administracion','ProfesorController@index')->name("indexProfesor");
    Route::get('/Administracion/crearSeccion','ProfesorController@crearSeccion');
    Route::get('/Administracion/Seccion/{nombre}','ProfesorController@seccion');
    Route::get('/Administracion/Seccion/{nombre}/crearArchivo','ProfesorController@crearArchivo');
    Route::get('/Administracion/modificarSeccion/{nombre}','ProfesorController@modificarSeccion')->name("modificarSeccion");
    Route::get('/Administracion/modificarArchivo/{nombre}','ProfesorController@modificarArchivo');
    Route::get('/Administracion/crearProfesor','ProfesorController@crearProfesor');
    Route::get('/Administracion/verProfesores','ProfesorController@verProfesores');
    Route::get('/Administracion/modificarProfesor/{nombre}','ProfesorController@modificarProfesor');
});
Auth::routes();



