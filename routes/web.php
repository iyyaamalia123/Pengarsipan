<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/statistik', [DashboardController::class, 'statistik'])->name('statistik');
    Route::get( '/data_karyawan',[KaryawanController::class, 'index'])->name('data_karyawan');

    Route::get( '/data_karyawan/create', [KaryawanController::class, 'create'])->name('data_karyawan.create');
    Route::post( '/data_karyawan', [KaryawanController::class, 'store'])->name('data_karyawan.store');
    Route::get( '/data_karyawan/edit/{id}', [KaryawanController::class, 'edit'])->name('data_karyawan.edit');
    Route::post( '/data_karyawan/update/{id}', [KaryawanController::class, 'update'])->name('data_karyawan.update'); 
    Route::delete( '/data_karyawan/destroy/{id}', [KaryawanController::class, 'destroy'])->name('data_karyawan.destroy'); 
    Route::get(  '/gaji_karyawan',  [GajiController::class, 'index'])->name('gaji_karyawan');

    Route::get(  '/golongan', [GolonganController::class, 'index'])->name('golongan');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});