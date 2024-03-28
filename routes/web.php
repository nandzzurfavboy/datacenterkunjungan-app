<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PermohonanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CheckStatusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\formReservasi;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('reservasi.index');
})->name('home');

Route::resource('petitions', PetitionController::class);
Route::get('success/{slug}', [PetitionController::class, 'success'])->name('success');
Route::get('cek-status', [CheckStatusController::class, 'cekStatus'])->name('reservasi.cekstatus');
Route::get('cek-status/result', [CheckStatusController::class, 'resultCheck'])->name('reservasi.result');
Route::get('cek-status/detail/{token}', [CheckStatusController::class, 'resultToken'])->name('reservasi.result.token');


// route Admin
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('dashboard/permohonan', [PermohonanController::class, 'permohonanAdmin'])->name('dashboard.permohonan');
Route::get('dashboard/permohonan/{slug}/edit', [PermohonanController::class, 'edit'])->name('dashboard.permohonan.edit');
Route::put('dashboard/permohonan/{slug}', [PermohonanController::class, 'update'])->name('dashboard.permohonan.update');
Route::get('dashboard/permohonan/delete/{slug}', [PermohonanController::class, 'destroy'])->name('dashboard.permohonan.delete');
Route::get('dashboard/riwayat-permohonan', [PermohonanController::class, 'riwayatPermohonan'])->name('dashboard.riwayat');
Route::get('dashboard/opd-su', [PermohonanController::class, 'resultDinas'])->name('dashboard.opd');
Route::resource('dashboard/users', UserController::class);

// route Login
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
// Route::post('/login', 'LoginController@login')->name('login.submit');
