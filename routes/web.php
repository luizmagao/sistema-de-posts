<?php

use App\Http\Middleware\Autenticar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('categories.index', 302);
});

Route::resource('categories', CategoryController::class)->middleware(Autenticar::class);
Route::resource('posts', PostController::class)->middleware(Autenticar::class);
Route::resource('comments', CommentController::class)->middleware(Autenticar::class);

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login_access'])->name('login_access');
