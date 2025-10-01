<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;
// use 宣言しないとcontrollerが反映されない
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
Route::post('post', [PostsController::class, 'post']);
// index.blade　（※blade）の　method　と同じにしないといけない

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('search', [UsersController::class, 'search']);

Route::get('follow-list', [FollowsController::class, 'followList']);
Route::get('follower-list', [FollowsController::class, 'followerList']);
// 左でURL（住所）、controllerが行先※どこのコントローラーか、右側が詳しい道の名前※何をしたいのか
