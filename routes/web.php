<?php

use App\Exceptions\Handler;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



//Route::get('/', 'WelcomeController@index');

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/movie/{id}', [MoviesController::class, 'index']);

Route::get('/search-movies', [MoviesController::class, 'search_movie']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/store-comment', [CommentController::class, 'store_comment']);

Route::post('/update-comment', [CommentController::class, 'update_comment']);

Route::post('/delete-comment', [CommentController::class, 'delete_comment']);

Route::get('/policies', [WelcomeController::class, 'policies']);

Route::get('/intro', [WelcomeController::class, 'intro']);

Route::get('/delete-user/{id}', [UserController::class, 'destroy']);