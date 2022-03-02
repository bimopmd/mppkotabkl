<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;


//frontEnd
Route::get('/', [FrontEndController::class, 'indexFrontEnd'])->middleware('guest');
Route::get('frontend/instansi/{id}', [FrontEndController::class, 'showInstansi']);

// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


//login end Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//dashboard
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
// });

//middleware Admin
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::resource('/dashboard/pegawai', PegawaiController::class);
    Route::resource('/dashboard/instansi', InstansiController::class);
});

//middleware Pegawai
Route::group(['middleware' => 'isPegawai'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('/dashboard/pegawaiIndex', [PegawaiController::class, 'indexPegawai']);
    Route::get('/dashboard/pegawaiShow/{id}', [PegawaiController::class, 'showPegawai']);
    Route::get('/dashboard/instansiIndex', [InstansiController::class, 'indexInstansi']);
});

Route::group(['middleware' => 'isRakyat'], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
});

//error
Route::view('/error403', 'errors.403V2')->middleware('auth');
