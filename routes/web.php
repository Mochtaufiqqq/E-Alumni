<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\KelolaBeritaController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\KelolaKerjaController;
use App\Http\Controllers\CarouselController;




// this route guest for user
Route::get('/',[AlumniController::class,'dashboarduser']);
//organisasi
Route::get('/organisasi', [OrganisasiController::class, 'index']);
Route::get('/organisasi/detail/{slug}', [OrganisasiController::class, 'details']);
//endorganisasi
Route::get('/tentangkami', [OtherController::class, 'tentangkami']);
Route::get('/kesanpesan',[UserController::class,'kesanpesan']);
//berita
Route::get('/tampilberita', [UserController::class, 'tampil']);
Route::get('/detail_berita/{berita}', [KelolaBeritaController::class, 'detailberita']);
//kontak
Route::get('/kontak', [MailController::class, 'email']);
Route::post('/kontak', [MailController::class, 'send'])->name('send');


//loker 
Route::get('/publikasiloker',[KelolaKerjaController::class,'publikasiloker']);
Route::get('/lowonganpekerjaan',[KelolaKerjaController::class,'semualoker']);
Route::get('/detaillowonganpekerjaan/{loker}',[KelolaKerjaController::class,'detailloker']);


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


    // this route for admin
Route::group(['middleware' => ['auth', 'OnlyAdmin']], function(){
    Route::get('/dashboard',[AlumniController::class,'index']);

    //
    Route::get('/dataalumni',[AlumniController::class,'showdtalumni']);
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
    // Route::post('/tambahberita',[KelolaBeritaController::class,'fotoPosting']);
    Route::get('/editberita/{beritas}',[KelolaBeritaController::class,'edit']);
    Route::put('/editberita/{beritas}',[KelolaBeritaController::class,'update']);
    Route::delete('/hapusberita/{beritas}', [KelolaBeritaController::class, 'delete'])->name('delete');

    // Lowongan Kerja admin
    Route::get('/lowongankerja',[KelolaKerjaController::class,'show']);
    Route::get('/addlowongankerja',[KelolaKerjaController::class,'add']);
    Route::post('/addlowongankerja',[KelolaKerjaController::class,'store']);
    Route::get('/editlowongankerja/{kerjas}',[KelolaKerjaController::class,'edit']);
    Route::put('/editlowongankerja/{kerjas}',[KelolaKerjaController::class,'update']);
    Route::delete('/hapuslowongankerja/{kerjas}', [KelolaKerjaController::class, 'delete'])->name('delete');
    Route::get('/detaillowongankerja/{kerjas}', [KelolaKerjaController::class, "detaillowongankerja"]);
    Route::get('/reportpdflowongankerja', [KelolaKerjaController::class, 'reportpdflowongankerja']);

    //organisasi admin

    Route::get('/organisasi/show', [OrganisasiController::class, 'show']);
    Route::get('/organisasi/edit', [OrganisasiController::class, 'edit']);
    Route::get('/organisasi/add', [OrganisasiController::class, 'tambah']);
    Route::post('/organisasi/store', [OrganisasiController::class, 'store']);

    // loker
    Route::get('/lokershow',[LokerController::class,'showloker']);
    Route::get('/addloker',[LokerController::class,'addloker']);
    Route::post('/addloker',[LokerController::class,'storeloker']);

    // kesan & pesan
    Route::post('/addkesanpesan',[UserController::class,'addkesanpesan']);

    // tentang kami
    Route::get('/showttgkami',[OtherController::class,'showttgkami']);
    Route::get('/editttgkami/{ttgkami}',[OtherController::class,'editttgkami']);
    Route::post('/updatettgkami/{ttgkami}',[OtherController::class,'updatettgkami']);

    // favicon & logo
    Route::get('/faviconlogo',[OtherController::class,'index']);
    Route::get('/editfavicon/{fvicon}',[OtherController::class,'editfavicon']);
    Route::post('/updatefavicon/{fvicon}',[OtherController::class,'updatefavicon']);
    Route::get('/editlogo/{logo}',[OtherController::class,'editlogo']);
    Route::post('/updatelogo/{logo}',[OtherController::class,'updatelogo']);

    // carousell
    Route::get('/showcarousel',[CarouselController::class,'showcarousel']);
    Route::get('/addcarousel',[CarouselController::class,'addcarousel']);
    Route::post('/addcarousel',[CarouselController::class,'storecarousel']);
    Route::get('/editcarousel/{carousel}',[CarouselController::class,'editcarousel']);
    Route::put('/carousel/update/{carousel}',[CarouselController::class,'updatecarousel']);
    

    Route::prefix('organisasi')->group(function(){ 
        Route::get('/show', [OrganisasiController::class, 'show']);
        Route::get('/edit', [OrganisasiController::class, 'edit']);
        Route::get('/add', [OrganisasiController::class, 'tambah']);
        Route::post('/store', [OrganisasiController::class, 'store']);
        Route::post('/update/{id}', [OrganisasiController::class, 'update']);
    });

});

// this route for user
Route::group(['middleware' => ['auth', 'OnlyAlumni']], function(){

    Route::get('/semuaalumni', [UserController::class, 'semuaalumni'])->name('semuaalumni');
    Route::get('/semuaalumni/angkatan1', [UserController::class, 'angkatan1'])->name('angkatan1');
    Route::get('/semuaalumni/angkatan2', [UserController::class, 'angkatan2'])->name('angkatan2');
    Route::get('/semuaalumni/angkatan3', [UserController::class, 'angkatan3'])->name('angkatan3');
    Route::get('/semuaalumni/angkatan4', [UserController::class, 'angkatan4'])->name('angkatan4');
    Route::get('/detailalumni/{user}', [UserController::class, "detailalumni"]);

    // for manage profile alumni personal
    Route::get('/profile', [UserController::class, 'profile']);
    Route::put('/updateprofile/{user}',[UserController::class,'settingprofileuser']);
    Route::put('/addnamapanggilan/{user}',[UserController::class,'addnamapanggilan']);
    Route::put('/addkarya/{user}',[UserController::class,'addkarya']);
    Route::put('/addsosmed',[UserController::class,'addsosmed']);
    Route::put('/addorganisasi',[UserController::class,'addorganisasi']);
    Route::put('/editsosmed',[UserController::class,'editsosmed']);
    Route::put('/addpendidikan',[UserController::class,'addpendidikan']);
    Route::put('/editpendidikan',[UserController::class,'editpendidikan']);
    Route::put('/addpekerjaan/{user}',[UserController::class,'addpekerjaan']);


     // kesan & pesan
    Route::post('/addkesanpesan',[UserController::class,'addkesanpesan']);
    Route::put('/editkesanpesan/{kesanpesan}',[UserController::class,'editkesanpesan']);

    Route::put('/addsosmed/{user}',[UserController::class,'addsosmed']);
    Route::post('/addsosmed',[UserController::class,'addsosmed']);
   
    
});


