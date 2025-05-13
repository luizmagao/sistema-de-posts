<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return redirect()->route('categories.index', 302);
});

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
