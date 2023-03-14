<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('home.home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/home', [HomeController::class, 'index']);

Route::middleware(['auth', 'user-role:admin'])->group(function(){
    Route::prefix('/admin')->group(function() {
        Route::get('/', [AdminController::class, 'index']);
        Route::resource('/post', PostsController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/tag', TagsController::class);
        Route::resource('/profile', ProfileController::class);
        Route::resource('/user', UsersController::class);
    });
});
