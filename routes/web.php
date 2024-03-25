<?php

use App\Http\Controllers\CheckStatusController;
use App\Http\Controllers\formReservasi;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\RequestController;
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
    return view('reservasi.index');
})->name('home');

Route::resource('petitions', PetitionController::class);
Route::get('success/{slug}', [PetitionController::class, 'success'])->name('success');
Route::get('cek-status', [CheckStatusController::class, 'cekStatus'])->name('reservasi.cekstatus');
Route::get('cek-status/result', [CheckStatusController::class, 'resultCheck'])->name('reservasi.result');
Route::get('cek-status/detail/{token}', [CheckStatusController::class, 'resultToken'])->name('reservasi.result.token');
