<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
	return view('home');
});

Route::get('/login1', [LoginController::class, 'login']);
Route::post('/loginProccess', [LoginController::class, 'loginProccess']);

Auth::routes();