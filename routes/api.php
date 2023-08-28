<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user/projects', [App\Http\Controllers\ProjectController::class, 'index']);
    Route::get('/user/projects/{project}', [App\Http\Controllers\ProjectController::class, 'show']);
    Route::post('/user/projects', [App\Http\Controllers\ProjectController::class, 'store']);
    Route::put('/user/projects/{project}', [App\Http\Controllers\ProjectController::class, 'update']);
    Route::delete('/user/projects/{project}', [App\Http\Controllers\ProjectController::class, 'destroy']);
});

//portfoliocontroller
Route::middleware('auth:api')->group(function () {
    Route::get('/user/portfolios', [App\Http\Controllers\PortfolioController::class, 'index']);
    Route::get('/user/portfolios/{portfolio}', [App\Http\Controllers\PortfolioController::class, 'show']);
    Route::post('/user/portfolios', [App\Http\Controllers\PortfolioController::class, 'store']);
    Route::put('/user/portfolios/{portfolio}', [App\Http\Controllers\PortfolioController::class, 'update']);
    Route::delete('/user/portfolios/{id}', [App\Http\Controllers\PortfolioController::class, 'destroy']);
});


//public api controller
Route::get('/portfolio', [App\Http\Controllers\PublicApiController::class, 'profile']);
Route::get('/projects', [App\Http\Controllers\PublicApiController::class, 'projects']);

//SkillTypesController Resource
Route::resource('skilltypes', App\Http\Controllers\SkillTypesController::class);
//SkillsController Resource
Route::resource('skills', App\Http\Controllers\SkillsController::class);


Route::post('/contact', [App\Http\Controllers\ContactMailController::class, 'send'])->middleware('throttle:3,1');
