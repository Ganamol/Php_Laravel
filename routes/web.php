<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
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
//     return view('reg');
// });
Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/do-login',[LoginController::class,'dologin'])->name('do.login');


Route::get('/welcome',[FrontEndController::class,'homepage'])->name('welcome');
Route::get('/new-user',[FrontEndController::class,'create'])->name('create.user');
Route::get('/register',[FrontEndController::class,'registration'])->name('register');
Route::get('/aboutus',[FrontEndController::class,'aboutus'])->name('aboutus');
Route::post('/save-user',[FrontEndController::class,'save'])->name('save.user');
Route::get('/edit-user/{userId}',[FrontEndController::class,'edit'])->name('edit.user');

Route::post('/update-user',[FrontEndController::class,'update'])->name('update.user');
Route::get('/delete-user/{userId}',[FrontEndController::class,'delete'])->name('delete.user');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');