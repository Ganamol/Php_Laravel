<?php

use App\Http\Controllers\FrontEndController;
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

Route::get('/',[FrontEndController::class,'homepage'])->name('welcome');
Route::get('/register',[FrontEndController::class,'registration'])->name('register');
Route::get('/aboutus',[FrontEndController::class,'aboutus'])->name('aboutus');

