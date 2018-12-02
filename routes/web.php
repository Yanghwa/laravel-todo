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
Route::get('/users', 'PublicController@userlist');
Route::get('/todo', 'ToDoController@show');
Route::post('/todo', 'ToDoController@create');
Route::put('/todo/{id}', 'ToDoController@update');
Route::delete('/todo/{id}', 'ToDoController@delete');
