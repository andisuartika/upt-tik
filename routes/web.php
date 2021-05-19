<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\KeuanganController;

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


// login
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', [HomeController::class,'index'])->name('dashboard');
        
    Route::get('/alumni/syncalumni', [AlumniController::class,'syncAlumni'])->name('syncAlumni');

    Route::get('/alumniFakultas/{id}', [AlumniController::class,'alumniFakultas'])->name('alumniFakultas');

    Route::get('/sync', [AlumniController::class,'sync'])->name('sync');

    Route::get('/alumni', [AlumniController::class,'alumni'])->name('alumni');

    Route::get('/keuangan', [KeuanganController::class,'index'])->name('keuangan');

    Route::get('/keuangan/realisasi/akun', [KeuanganController::class,'realisasiAkun'])->name('realisasiAkun');

    Route::get('/keuangan/realisasi/unit', [KeuanganController::class,'realisasiUnit'])->name('realisasiUnit');
});
