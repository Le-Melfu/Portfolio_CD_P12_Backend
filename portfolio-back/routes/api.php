<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\SlideController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MusicController;

Route::get('/slides', [SlideController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/music', [MusicController::class, 'getAllMusic']);
Route::get('/audio/{filename}', [MusicController::class, 'serveAudio']);
