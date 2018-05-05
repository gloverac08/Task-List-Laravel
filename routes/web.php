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

Route::get('/taskList', function () {
  return view('task_list');
});

Route::post('/addTask', function () {

});

Route::delete('/deleteTask', function () {

});

Route::patch('/editTask', function () {

});

