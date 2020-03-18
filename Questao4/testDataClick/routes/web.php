<?php

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

Route::get('/tarefa', 'TarefaController@index')->name("tarefa.index");
Route::get('/tarefa/novo', 'TarefaController@novo')->name("tarefa.novo");
Route::get('/tarefa/edicao/{id}', 'TarefaController@edicao')->name("tarefa.edicao");
Route::post('/tarefa/create', 'TarefaController@create')->name("tarefa.create");
Route::put('/tarefa/update/{id}', 'TarefaController@update')->name("tarefa.update");
Route::get('/tarefa/delete', 'TarefaController@delete')->name("tarefa.delete");