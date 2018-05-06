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

// serves landing page
Route::get('/', 'ViewsController@welcome');

// serves tasks list page
Route::get('/tasks', 'TasksController@index');

// handles new task creation
Route::post('/create', 'TasksController@store');

// handles task editing
Route::patch('/edit/{id}', 'TasksController@update');

// handles deleting a task
Route::delete('/tasks/{task}', 'TasksController@destroy');

