<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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


Route::resource('projects', ProjectController::class);
Route::post('/projects', [ProjectController::class, 'index']);
Route::post('/projects/create', [ProjectController::class, 'store']);
Route::put('/projects/{project}/edit', [ProjectController::class, 'update']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
