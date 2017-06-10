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


Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/farm/login', 'FarmsController@login');

Route::get('/farm/dashboard', 'FarmsController@dashboard');

Route::get('/farm/addfarm', 'FarmsController@addfarm');

Route::get('/farm/register', 'AccountsController@create');

Route::post('/farm', 'AccountsController@store')->name('farm');