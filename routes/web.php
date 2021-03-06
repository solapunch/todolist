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
//test

Route::get('todo', 'TodoController@index');
Route::post('todo', 'TodoController@store');
Route::delete('todo/{td}', 'TodoController@destroy');

Route::get('todo/{id}/edit', 'TodoController@edit')->name('todo.edit');
Route::post('todo/edit', 'TodoController@update')->name('todo.update');
Auth::routes();

Route::get('/home', 'HomeController@index');
