<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;
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

Route::get('login',[WelcomeController::class,'index'])->name('login');
Route::resource('admin',AdminController::class);
Route::post('login',[AuthController::class,'authenticate'])->name('login');
Route::get('/',[AuthController::class,'index'])->name('login_index');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
