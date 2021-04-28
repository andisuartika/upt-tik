<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\FakultasController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', [AlumniController::class,'index'])->name('dashboard');
    
    Route::get('/alumni/syncalumni', [AlumniController::class,'syncAlumni'])->name('syncAlumni');
    
    Route::get('/fakultas/{id}', [AlumniController::class,'alumniFakultas'])->name('alumni');

    Route::get('/sync', [AlumniController::class,'sync'])->name('sync');

    Route::get('/dashboard', [AlumniController::class,'alumni'])->name('dashboard');
});



// Route::get('/fakultas/fip', [AlumniController::class, 'alumniFip'])->name('alumniFIP');

