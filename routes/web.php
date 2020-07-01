<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

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


Route::get('/','EstudianteController@index')->name('estudiantes.listar');
Route::get('estudiantes','EstudianteController@create')->name('estudiantes.crear');
Route::post('estudiantes','EstudianteController@store')->name('estudiantes.grabar');
Route::get('estudiantes/editar/{estudiante}','EstudianteController@edit')->name('estudiantes.editar');
Route::patch('estudiantes/editar/{estudiante}','EstudianteController@update')->name('estudiantes.actualizar');
Route::delete('estudiantes/{estudiante}','EstudianteController@destroy')->name('estudiantes.eliminar');
Route::get('estudiantes/{estudiante}','EstudianteController@show')->name('estudiantes.mostrar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
