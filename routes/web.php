<?php

use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('categories.index', 302);
});

Route::resource('categories', CategoryController::class)->middleware(Autenticador::class);
Route::resource('posts', PostController::class)->middleware(Autenticador::class);
Route::resource('comments', CommentController::class)->middleware(Autenticador::class);

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('logar', [LoginController::class, 'logar'])->name('logar');
