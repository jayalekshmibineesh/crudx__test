<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppartmentController;
use App\Http\Controllers\FlattController;




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

Route::get('/',[AppartmentController::class,'index1'])->name('index1');
Route::get('/add_appartment',[AppartmentController::class,'add_appartment'])->name('add_appartment');
Route::post('/add_apmt',[AppartmentController::class,'add_apmt'])->name('add_apmt');
Route::get('/view_appartment',[AppartmentController::class,'view_appartment'])->name('view_appartment');
Route::get('/delete/{id}',[AppartmentController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[AppartmentController::class,'edit'])->name('edit');