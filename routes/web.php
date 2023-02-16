<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MemberController;


Route::get('/demo', [DemoController::class, 'demo'])->name('demo');

Route::get('/', [FilmController::class,'index']);
Route::get('/film', [FilmController::class,'index']);
Route::get('/film/{id}', [FilmController::class,'show']);
Route::get('/film/populer', [FilmController::class,'populer']);
Route::get('/film/nowplaying', [FilmController::class,'nowplaying']);
Route::get('/film/upcoming', [FilmController::class,'upcoming']);
Route::get('/film/toprating', [FilmController::class,'toprating']);

Route::get('/member', [MemberController::class,'index']);
Route::post('/signin', [MemberController::class, 'signin']);



Route::get('/post/create', [PostController::class,'create']);
