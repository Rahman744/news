<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'home']);

Route::get('/latest', [NewsController::class, 'latest_stories']);

Route::get('/watch', [NewsController::class, 'watch_now']);
