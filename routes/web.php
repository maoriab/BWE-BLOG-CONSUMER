<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/en/posts/{slug}', [PostController::class, 'showEnglish']);