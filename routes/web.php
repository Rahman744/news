<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'home']);
Route::get('/latest', [NewsController::class, 'latest_stories'])->name('news.latest');
Route::get('/watch', [NewsController::class, 'watch_now']);

Route::post('/check', [NewsController::class, 'check']);

Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');

Route::post('/news', [NewsController::class, 'store'])->name('news.store');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
