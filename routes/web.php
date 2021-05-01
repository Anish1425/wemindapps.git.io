<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/index', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/upload', [TodoController::class, 'upload']);
Route::get('/{id}/edit', [TodoController::class, 'edit']);
Route::get('/{id}/sub_task', [TodoController::class, 'subedit']);
Route::post('/subupload', [TodoController::class, 'subupload']);
Route::post('/subupdate', [TodoController::class, 'subupdate']);

Route::get('/{id}/sub_view', [TodoController::class, 'sub_view']);



Route::patch('/update', [TodoController::class, 'update']);
Route::get('/{id}/completed', [TodoController::class, 'completed']);
Route::get('/{id}/delete', [TodoController::class, 'delete']);
Route::get('/{id}/sub_delete', [TodoController::class, 'sub_delete']);