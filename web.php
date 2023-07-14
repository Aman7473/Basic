<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// // 
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index']);
Route::post('/insert',[HomeController::class,'add']);
Route::get('/show',[HomeController::class,'show']);
Route::get('/edit/{id}',[HomeController::class,'edit']);
Route::post('/update/{id}',[HomeController::class,'update']);

Route::delete('/delete/{id}',[HomeController::class,'destroy']);
Route::get('/login',[HomeController::class,'login']);
Route::post('/login',[HomeController::class,'login']);