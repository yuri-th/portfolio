<?php

use App\Http\Controllers\WorksController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WorksController::class, 'index']);
Route::get('/upload/media', [MediaController::class, 'upload']);
Route::post('/upload/media', [MediaController::class, 'upload_image']);