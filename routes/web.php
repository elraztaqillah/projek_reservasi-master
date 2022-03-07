<?php

use App\Http\Controllers\CutiController;
use App\Http\Controllers\KaryawanController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route Karyawan
Route::resource('karyawan', KaryawanController::class);

// Route Cuti
Route::resource('cuti', CutiController::class);
Route::get('get-karyawan', [CutiController::class, 'getKaryawan'])->name('getKaryawan');

// Route Index Cuti 2 kali
Route::get('banyak-cuti', [CutiController::class, 'index2'])->name('index2');

require __DIR__.'/auth.php';
