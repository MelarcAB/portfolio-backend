<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'show']);
    Route::post('/projects', [App\Http\Controllers\ProjectController::class, 'store']);
    Route::put('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'update']);
    Route::delete('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'destroy']);
});
