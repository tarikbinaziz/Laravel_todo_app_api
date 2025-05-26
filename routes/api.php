<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/task/store', [TaskController::class, 'store']);
Route::delete('/task/{id}', [TaskController::class, 'destroy']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);

Route::post('/categories', [CategoryController::class, 'index']);


