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

Route::get('/', 'ViewsController@welcome');

Route::get('/task-list', 'ViewsController@task_list');

Route::post('/add-task', function () {

});

Route::delete('/delete-task', function () {

});

Route::patch('/edit-task', function () {

});
