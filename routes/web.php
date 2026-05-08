<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\RekammedisController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin//
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('/admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/delete/{id}', [AdminController::class, 'destroy']);

//pasien//
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/create', [PasienController::class, 'create']);
Route::post('/pasien/store', [PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::post('/pasien/update/{id}', [PasienController::class, 'update']);
Route::get('/pasien/delete/{id}', [PasienController::class, 'destroy']);
Route::get('/register', [PasienController::class, 'register']);
Route::post('/register/store', [PasienController::class, 'registerStore']);
Route::get('/login', [PasienController::class, 'login']);
Route::post('/ceklogin', [PasienController::class, 'ceklogin']);

//dokter
Route::get('/dokter', [DokterController::class, 'index']);
Route::get('/dokter/create', [DokterController::class, 'create']);
Route::post('/dokter/store', [DokterController::class, 'store']);
Route::get('/dokter/edit/{id}', [DokterController::class, 'edit']);
Route::post('/dokter/update/{id}', [DokterController::class, 'update']);
Route::get('/dokter/delete/{id}', [DokterController::class, 'destroy']);

//reservasi
Route::get('/reservasi', [ReservasiController::class, 'index']);
Route::get('/reservasi/create', [ReservasiController::class, 'create']);
Route::post('/reservasi/store', [ReservasiController::class, 'store']);
Route::get('/reservasi/edit/{id}', [ReservasiController::class, 'edit']);
Route::post('/reservasi/update/{id}', [ReservasiController::class, 'update']);
Route::get('/reservasi/delete/{id}', [ReservasiController::class, 'destroy']);


// rekam medis
Route::get('/rekammedis', [RekammedisController::class, 'index']);
Route::get('/rekammedis/create', [RekammedisController::class, 'create']);
Route::post('/rekammedis/store', [RekammedisController::class, 'store']);
Route::get('/rekammedis/edit/{id}', [RekammedisController::class, 'edit']);
Route::post('/rekammedis/update/{id}', [RekammedisController::class, 'update']);
Route::get('/rekammedis/delete/{id}', [RekammedisController::class, 'destroy']);


// laporan
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/laporan/create', [LaporanController::class, 'create']);
Route::post('/laporan/store', [LaporanController::class, 'store']);
Route::get('/laporan/edit/{id}', [LaporanController::class, 'edit']);
Route::post('/laporan/update/{id}', [LaporanController::class, 'update']);
Route::get('/laporan/delete/{id}', [LaporanController::class, 'destroy']);