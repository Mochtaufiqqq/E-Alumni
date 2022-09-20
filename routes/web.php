<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

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


Route::get('/dashboard',[AlumniController::class,'index']);
Route::get('/lihatalumni',[AlumniController::class,'show']);
Route::get('/tambahalumni',[AlumniController::class,'add']);
Route::post('/tambahalumni',[AlumniController::class,'store']);
Route::get('/editalumni/{alumnis}',[AlumniController::class,'edit']);
Route::put('/editalumni/{alumnis}',[AlumniController::class,'update']);
