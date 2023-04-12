<?php

use App\Http\Controllers\Media1Controller;
use App\Http\Controllers\pageController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/posts',[PostsController::class,'index']);
// Route::get('/posts/{id}',[PostsController::class,'show'])->where('id','[0-9]+');


Route::get('/', [pageController::class,'index']);
Route::get('/about', [pageController::class,'about']);
Route::get('/features', [pageController::class,'features']);
Route::resource('posts', PostsController::class);

Route::get('/media', [Media1Controller::class,'index']);
Route::post('/media', [Media1Controller::class,'store']);
Route::delete('/media/{id}', [Media1Controller::class,'destroy']);
Route::get('/media/upload', [Media1Controller::class,'create']);
Route::get('/media/{id}', [Media1Controller::class,'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
