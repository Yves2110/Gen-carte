<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EtudiantController;

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
Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Route::resource('admin',AdminController::class)->middleware('auth');
Route::get('gestion',[AdminController::class,'gestion'])->name('admin');
Route::get('espace',[AdminController::class,'espace'])->name('Space');
Route::get('ajout',[AdminController::class,'ajout'])->name('Student');
Route::get('list',[AdminController::class,'list'])->name('Secretary_list');
Route::get('listeSecretaire',[AdminController::class,'listeSecretaire'])->name('Secretaire');
Route::get('etugestion',[AdminController::class,'etugestion'])->name('Student_gestion');
Route::post('login',[AuthController::class,'authenticate'])->name('login');
Route::get('/authentificate',[AuthController::class,'index'])->name('login_index');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::resource("etudiants", EtudiantController::class)->middleware('kernel');
