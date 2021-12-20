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

Route::get('/'  , [\App\Http\Controllers\toDoController::class,'index'])->name('index');

Route::get('/create',[\App\Http\Controllers\toDoController::class,'getCreatePage'])->name('getCreatePage');
Route::post('/create',[\App\Http\Controllers\toDoController::class,'storeCreateData'])->name('storeCreateData');

Route::get('/delete',[\App\Http\Controllers\toDoController::class,'deleteData'])->name('deleteData');

Route::get('/edit',[\App\Http\Controllers\toDoController::class,'getEditPage'])->name('getEditPage');
Route::post('/edit',[\App\Http\Controllers\toDoController::class,'storeEditData'])->name('storeEditData');

Route::get('/test',[\App\Http\Controllers\testController::class,'test']);

