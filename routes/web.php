<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
	return view('home');
});

Route::get('/login1', function () {
	return view('login');
});

Auth::routes();