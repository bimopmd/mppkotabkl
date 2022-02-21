<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PegawaiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontEndController::class, 'indexFrontEnd']);
Route::get('frontend/instansi/{id}', [App\Http\Controllers\FrontEndController::class, 'showInstansi']);

// Route::resource('/frontend', FrontEndController::class);

Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showFormLogin'])->name('login');
Route::post('login/auth', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'showDashboard']);
    Route::resource('/dashboard/instansi', InstansiController::class);
    Route::resource('/dashboard/pegawai', PegawaiController::class);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');