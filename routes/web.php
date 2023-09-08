<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Show todo Dashboard
Route::get('/', 'TodoController@index');

// show create todo form
Route::get('/todos/create', 'TodoController@create');

// Add Todo
Route::post('/todos','TodoController@store');

// Show edit todo
Route::get('/todos/{todo}/edit', 'TodoController@edit');

// update todo
Route::put('/todos/{todo}', 'TodoController@update');

// delete todo
Route::get('/todos/{todo}/delete', 'TodoController@delete');