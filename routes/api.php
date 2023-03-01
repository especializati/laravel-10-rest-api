<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/users', UserController::class);
// Route::delete('/users/{id}', [UserController::class, 'destroy']);
// Route::patch('/users/{id}', [UserController::class, 'update']);
// Route::get('/users/{id}', [UserController::class, 'show']);
// Route::get('/users', [UserController::class, 'index']);
// Route::post('/users', [UserController::class, 'store']);

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});
