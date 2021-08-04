<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home', [
		"title" => "Posts",
		"posts" => Post::all()
	]);
});

Route::get('/about', function () {
	return view('about', [
		"title" => "About"
	]);
});

Route::get('/profile', function () {
	return view('profile', [
		"title" => "Profile",
	]);
});

Route::get('/{slug}', function ($slug) {
	return view('post', [
		"title" => "Single Post",
		"post" => Post::find($slug)
	]);
});