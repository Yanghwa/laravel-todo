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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'PublicController@userlist')->name('users');
Route::get('/todo', 'ToDoController@show')->name('todo_get');
Route::get('/todo_create', 'ToDoController@create');
Route::post('/todo_create', 'ToDoController@createMethod')->name('todo_make');
Route::get('/todo/{id}', 'ToDoController@update');
Route::post('/todo/{id}', 'ToDoController@updateMethod')->name('todo_update');
Route::delete('/todo/{id}', 'ToDoController@delete')->name('todo_remove');
