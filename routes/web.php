<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\KelolaBeritaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganisasiController;


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


Route::get('/',[AlumniController::class,'dashboarduser']);
//organisasi
Route::get('/organisasi', [OrganisasiController::class, 'index']);
//endorganisasi
Route::get('/tentangkami', [AlumniController::class, 'tentangkami']);
Route::get('/semuaalumni', [UserController::class, 'semuaalumni']);
Route::get('/detailalumni/{user}', [UserController::class, "detailalumni"]);
Route::get('/kesanpesan',[UserController::class,'kesanpesan']);
//berita
Route::get('/tampilberita', [KelolaBeritaController::class, 'tampil']);
Route::get('/detail_berita/{berita}', [KelolaBeritaController::class, 'detail_berita']);


Route::group(['middleware' => ['guest']], function(){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
    Route::get('/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm']);
    Route::post('/forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm']);
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm']);
    });
    Route::group(['middleware' => ['auth']], function(){
    Route::get('/logout', [AuthController::class, 'logout']);
    });


Route::group(['middleware' => ['auth', 'OnlyAdmin']], function(){
    Route::get('/dashboard',[AlumniController::class,'index']);

    // for manage user
    Route::get('/semuauser',[AlumniController::class,'show']);
    Route::get('/useraktif',[AlumniController::class,'useraktif']);
    Route::get('/usernonaktif',[AlumniController::class,'usernonaktif']);
    Route::get('/tambahuser',[AlumniController::class,'add']);
    Route::post('/tambahuser',[AlumniController::class,'store']);
    Route::get('/edituser/{user}',[AlumniController::class,'edit']);
    Route::put('/edituser/{user}',[AlumniController::class,'update']);
    Route::delete('/hapususer/{users}', [AlumniController::class, 'delete'])->name('delete');
    Route::delete('/tolakuser/{users}', [AlumniController::class, 'tolak'])->name('tolak');
    Route::get('/statususer/{users:id}/accept', [AlumniController::class, "accept"]);
    Route::get('/detailuser/{users}', [AlumniController::class, "detailuser"]);
    Route::get('/reportpdfuser', [AlumniController::class, 'reportpdfuser']);

    Route::get('image-upload2', [ImageController::class, 'index']);
    Route::post('image-upload', [ImageController::class, 'store'])->name('image.store');

    // Berita admin
    Route::get('/semuaberita',[KelolaBeritaController::class,'show']);
    Route::get('/tambahberita',[KelolaBeritaController::class,'add']);
    Route::post('/tambahberita',[KelolaBeritaController::class,'store']);
    Route::get('/editberita/{beritas}',[KelolaBeritaController::class,'edit']);
    Route::put('/editberita/{beritas}',[KelolaBeritaController::class,'update']);
    Route::delete('/hapusberita/{beritas}', [KelolaBeritaController::class, 'delete'])->name('delete');

    //organisasi admin
    Route::get('/organisasi/show', [OrganisasiController::class, 'show']);
    Route::get('/organisasi/edit', [OrganisasiController::class, 'edit']);
    Route::get('/organisasi/add', [OrganisasiController::class, 'tambah']);
    Route::post('/organisasi/store', [OrganisasiController::class, 'store']);
});

Route::group(['middleware' => ['auth', 'OnlyAlumni']], function(){

    // for manage profile alumni personal
    Route::get('/profile', [UserController::class, 'profile']);
    Route::put('/updateprofile/{user}',[UserController::class,'settingprofileuser']);
    Route::put('/addpekerjaan/{user}',[UserController::class,'addpekerjaan']);
    
});

