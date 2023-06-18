<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::get('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'show']);
    Route::post('/projects', [App\Http\Controllers\ProjectController::class, 'store']);
    Route::put('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'update']);
    Route::delete('/projects/{project}', [App\Http\Controllers\ProjectController::class, 'destroy']);
});
