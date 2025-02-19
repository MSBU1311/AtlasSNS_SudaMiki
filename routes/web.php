<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



require __DIR__ . '/auth.php';

Route::get('top', [PostsController::class, 'index']);

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('search', [UsersController::class, 'index']);

Route::get('follow-list', [PostsController::class, 'index']);
Route::get('follower-list', [PostsController::class, 'index']);

// 新規登録フォーム送信
Route::post('/user/create', [RegisteredUserController::class, 'store']);

// ログイン機能
Route::post('/posts/index', [AuthenticatedSessionController::class, 'store']);

// ログイン画面表示
Route::get('/auth/login', [AuthenticatedSessionController::class, 'create']);

// 新規登録
Route::get('/register', [RegisteredUserController::class, 'create']);

// 新規登録完了画面表示
Route::get('/added', [RegisteredUserController::class, 'added']);
