<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::get('/posts/create', [PostController::class,'create']);
Route::post('/posts/create', [PostController::class,'store']);
Route::delete('/posts/{id}', [PostController::class,'destroy']);
Route::get('/posts/{id}/edit', [PostController::class, 'show']);