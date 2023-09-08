<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
Route::get('/', [TodoController::class, 'index']);
// [CategoryController::class, 'create']

// show create todo form
Route::get('/todos/create', [TodoController::class, 'create']);

// Add Todo
Route::post('/todos',[TodoController::class, 'store']);

// Show edit todo
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);

// update todo
Route::put('/todos/{todo}', [TodoController::class, 'update']);

// delete todo
Route::get('/todos/{todo}/delete', [TodoController::class, 'delete']);