<?php

use App\Http\Controllers\FuncionController;
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

Route::view('/', 'home')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/salas', 'SalasController@index')->name('salas.index');
Route::get('/salas/crear', 'SalasController@create')->name('salas.create');
Route::post('/salas', 'SalasController@store')->name('salas.store');
Route::get('/salas/{sala}', 'SalasController@show')->name('salas.show');
Route::get('/salas/{sala}/integrantes', 'SalasController@integrantes')->name('salas.integrantes');
// Route::get('/salas/{sala}/calculo', 'SalasController@calculadora')->name('salas.calculadora');
Route::delete('/salas/{sala}', 'SalasController@destroy')->name('salas.destroy');



Route::get('/funcion', 'FuncionController@index')->name('funciones.index');





Auth::routes();

 Route::get('/', 'HomeController@index')->name('home');
