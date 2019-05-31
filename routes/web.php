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

Route::get('/paginaProfesor/loginProfesor','ProfesorController@login')->middleware('guest')->name('loginShow');
Route::Post('login','Auth\LoginController@login')->name('login');
Route::resource('seccions','SeccionController');
Route::resource('programas','ProgramaController');
Route::resource('users','UserController');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group([ 'middleware' => 'auth'], function()
{
    Route::get('/paginaProfesor','ProfesorController@index')->name("indexProfesor");
    Route::get('/paginaProfesor/crearSeccion','ProfesorController@crearSeccion');
    Route::get('/paginaProfesor/Seccion/{id}','ProfesorController@Seccion');
    Route::get('/paginaProfesor/Seccion/{id}/crearArchivo','ProfesorController@crearArchivo');
    Route::get('/paginaProfesor/modificarSeccion/{id}','ProfesorController@modificarSeccion')->name("modificarSeccion");
    Route::get('/paginaProfesor/modificarArchivo/{id}','ProfesorController@modificarArchivo');
    Route::get('/paginaProfesor/crearProfesor','ProfesorController@crearProfesor');
    Route::get('/paginaProfesor/verProfesores','ProfesorController@verProfesores');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


