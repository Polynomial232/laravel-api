<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactsController;

Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{id}', [UsersController::class, 'findById']);

Route::get('/contacts', [ContactsController::class, 'index'])->middleware(['auth:sanctum']);
Route::post('/contacts', [ContactsController::class, 'createContact']);
Route::get('/contacts/{id}', [ContactsController::class, 'findById']);
Route::delete('/contacts/{id}', [ContactsController::class, 'deleteContact']);

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum']);
Route::get('/me', [AuthController::class, 'me'])->middleware(['auth:sanctum']);