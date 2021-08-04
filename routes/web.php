<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [ProfileController::class, 'showProfile']);
Route::get('/', [PostController::class, 'index']);
Route::get('/about', [AboutController::class, 'showAbout']);
Route::get('/{slug}', [PostController::class, 'show']);