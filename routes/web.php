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
Route::prefix('/horario')->group(function(){
  
    Route::get('/','HorarioController@horario');
    Route::get('/novo','HorarioController@novoHorario');
    Route::post('/add','HorarioController@addhorario');
    Route::get('/remover/{id}','HorarioController@remove');
    Route::get('/novo/hora','HorarioController@novahora');
    Route::post('/add/hora','HorarioController@addhora');
    Route::get('/remover/hora/{id}','HorarioController@removeHora');
    Route::get('/editar/hora/{id}','HorarioController@editaHora');
    Route::post('/atualizar','HorarioController@atualizarhorario');
    Route::post('/atualizar/hora','HorarioController@atualizarhora');
    Route::get('/editar/{id}','HorarioController@editarhorario');
});

Route::prefix('/agenda')->group(function(){
    
    Route::get('/','AgendaController@agenda');
    Route::post('/add','AgendaController@addagenda');
    Route::get('/novo','AgendaController@novaagenda');
    Route::get('/remover/{id}','AgendaController@removeagenda');
    Route::get('/agenda/{id}','AgendaController@editarAgenda');
    Route::post('/atualizar/agenda','AgendaController@atualizarAgenda');

});
Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
