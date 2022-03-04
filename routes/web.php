<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
// use App\Http\Middleware;


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
    return view('welcome');
});

Route::group(['prefix' => 'admins'], function () {

    Route::get('index',[AdminController::class,'index']);
});


// Route::get('/register',[UsersController::class,'register']);
// Route::post('/register',[UsersController::class,'adduser']);

// Route::get('/user/dashboard',[UsersController::class,'dashboard']);

// Route::post('/login',[UsersController::class,'login']);
// Route::any('/logout',[UsersController::class,'logout']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
