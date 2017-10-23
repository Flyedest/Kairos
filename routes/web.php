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

Route::get('/','kairosController@index');
Route::get('/menu','kairosController@menu');

Route::get('/horario','kairosController@horario');
Route::get('/horario/novo','kairosController@novoHorario');
Route::post('/horario/add','kairosController@addhorario');
Route::get('/horario/remover/{id}','kairosController@remove');
Route::get('/horario/novo/hora','kairosController@novahora');
Route::post('/horario/add/hora','kairosController@addhora');
Route::post('/horario/atualizar','kairosController@atualizarhorario');
Route::get('/horario/editar/{id}','kairosController@editarhorario');

Route::get('/agenda','kairosController@agenda');
Route::post('/agenda/add','kairosController@addagenda');
Route::get('/agenda/novo','kairosController@novaagenda');
Route::get('/agenda/remover/{id}','kairosController@removeagenda');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
