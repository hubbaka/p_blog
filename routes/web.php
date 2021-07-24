<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

Route::get('/', [PostController::class, 'about']);
Route::resource('posts', PostController::class);

Route::get('/admin', [AdminController::class, 'index']);
