<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\Auth\LoginController;
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
})->middleware('guest')->name('welcome');




// Route::get('register',[AdminController::class,'index'])->middleware('auth')->name('register');

Route::group(['prefix' => 'admins'], function () {
    Route::get('index',[AdminController::class,'index'])->middleware('auth')->name('admins/index');
    Route::get('user',[AdminController::class,'user'])->middleware('auth');

    Route::get('sells',[AdminController::class,'sells'])->middleware('auth');

    Route::get('settings',[AdminController::class,'settings'])->middleware('auth');
    Route::post('update_user',[AdminController::class,'update_user']);
    Route::get('delete/{id}',[AdminController::class,'delete']);



});




Route::group(['prefix' => 'user'], function () {
    Route::get('index',[UsersController::class,'index'])->middleware('auth')->name('user/index');
    // Route::get('createbill',[UsersController::class,'createbill'])->middleware('auth')->name('user/createbill');
    // Route::get('savebill',[BillsController::class,'savebill'])->middleware('auth')->name('savebill');
    Route::post('newbill',[BillsController::class,'newbill'])->middleware('auth')->name('newbill');

});



Route::get('imeidetail',[BillsController::class,'imeidetail'])->middleware('auth')->name('imeidetail');
// Route::get('/register',[UsersController::class,'register']);
// Route::post('/register',[UsersController::class,'adduser']);

// Route::get('/user/dashboard',[UsersController::class,'dashboard']);

// Route::post('/login',[UsersController::class,'login']);
// Route::any('/logout',[UsersController::class,'logout']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
