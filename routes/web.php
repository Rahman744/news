<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;

Route::get('/', [NewsController::class, 'home']);
Route::get('/latest', [NewsController::class, 'latest_stories'])->name('news.latest');
Route::get('/watch', [NewsController::class, 'watch_now']);

Route::post('/check', [NewsController::class, 'check']);

// 🔐 Только авторизованные пользователи могут добавлять новости
Route::get('/create', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
Route::post('/news', [NewsController::class, 'store'])->name('news.store')->middleware('auth');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// ✅ Маршруты для авторизации
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
