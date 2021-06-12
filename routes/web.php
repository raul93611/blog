<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function () {
  Route::get('/', [HomeController::class, 'index']);
  Route::get('/user/messages', [HomeController::class, 'userMessages']);
  Route::get('/user/messages/create', [CommentController::class, 'createUserMessage']);
  Route::get('/comments', [CommentController::class, 'store'])-> name('comments.store');
  Route::resource('posts', PostController::class);
  Route::resource('users', UserController::class);
});
Auth::routes();
