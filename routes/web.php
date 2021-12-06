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

Route::get('/'  , [\App\Http\Controllers\toDoController::class,'index']);
Route::get('/create',[\App\Http\Controllers\toDoController::class,'create']);
Route::get('/store',[\App\Http\Controllers\toDoController::class,'store'])->name('store');


Route::get('/test',[\App\Http\Controllers\testController::class,'test']);

