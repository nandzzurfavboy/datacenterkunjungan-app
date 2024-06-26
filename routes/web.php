<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PermohonanController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CheckStatusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\DinasController;
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


Route::middleware(['auth'])->group(function () {
    // route Admin
    Route::get('sirekudace', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('sirekudace/permohonan', [PermohonanController::class, 'permohonanAdmin'])->name('dashboard.permohonan');
    Route::get('sirekudace/permohonan/{slug}/edit', [PermohonanController::class, 'edit'])->name('dashboard.permohonan.edit');
    Route::put('sirekudace/permohonan/{slug}', [PermohonanController::class, 'update'])->name('dashboard.permohonan.update');
    Route::get('sirekudace/permohonan/delete/{slug}', [PermohonanController::class, 'destroy'])->name('dashboard.permohonan.delete');
    Route::get('sirekudace/riwayat-permohonan', [PermohonanController::class, 'riwayatPermohonan'])->name('dashboard.riwayat');
    Route::get('sirekudace/laporan', [PermohonanController::class, 'cetakLaporan'])->name('dashboard.laporan');
    // Route::get('sirekudace/opd-su', [PermohonanController::class, 'resultDinas'])->name('dashboard.opd');
    Route::resource('sirekudace/dinas', DinasController::class);
    Route::resource('sirekudace/users', UserController::class);

    // profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    // route Login
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('post.login');
});
