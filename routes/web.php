<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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


Route::get('/',[DashboardController::class,'dashboarduser']);

Route::group(['middleware' => ['guest']], function(){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});
Route::group(['middleware' => ['auth']], function(){
    Route::get('/logout', [AuthController::class, 'logout']);
    });


Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){
    Route::get('/dashboard',[AlumniController::class,'index']);
    Route::get('/semuauser',[AlumniController::class,'show']);
    Route::get('/useraktif',[AlumniController::class,'useraktif']);
    Route::get('/usernonaktif',[AlumniController::class,'usernonaktif']);
    Route::get('/tambahuser',[AlumniController::class,'add']);
    Route::post('/tambahuser',[AlumniController::class,'store']);
    Route::get('/edituser/{users}',[AlumniController::class,'edit']);
    Route::put('/edituser/{users}',[AlumniController::class,'update']);
    Route::delete('/hapususer/{users}', [AlumniController::class, 'delete'])->name('delete');
    Route::get('/statususer/{users:id}/accept', [AlumniController::class, "accept"]);
});  

Route::group(['middleware' => ['auth', 'CheckRole:user']], function(){
    Route::get('/profile', [AlumniController::class, 'profile']);
});