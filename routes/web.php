<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


//frontEnd
Route::get('/', [FrontEndController::class, 'indexFrontEnd']);
Route::get('frontend/instansi/{id}', [FrontEndController::class, 'showInstansi']);


//login end Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//middleware Admin
Route::group(['middleware' =>'isAdmin'], function () {
    Route::resource('/dashboard/instansi', InstansiController::class);
    Route::resource('/dashboard/pegawai', PegawaiController::class);
});

//middleware Pegawai
Route::group(['middleware' =>'isPegawai'], function () {
    Route::resource('/dashboard/instansi', InstansiController::class);
    Route::resource('/dashboard/pegawai', PegawaiController::class);
});

//error
Route::view('/error403', 'errors.403')->middleware('auth');
