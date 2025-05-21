<?php

use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/task/store', [TaskController::class, 'store']);
