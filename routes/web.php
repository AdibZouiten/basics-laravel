<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaticController;
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

Route::get('/' , [StaticController::class,'index'])->name('index');
Route::get('/about' , [StaticController::class,'about'])->name('about');
Route::get('/contact' , [StaticController::class,'contact'])->name('contact');

Route::resource('/computers', ComputersController::class);




