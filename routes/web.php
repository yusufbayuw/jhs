<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBulananCabangController;
use App\Http\Controllers\PenilaianController;
use App\Livewire\Hotel;
use App\Livewire\Landing;

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
Route::get('/laravel/login', function () {
    return redirect('portal/login');
})->name('login');
Route::get('/', Landing::class)->name('home');
Route::get('/hotel/{id}', Hotel::class)->name('hotel');
//Route::get('angka-kredit-laporan/export/', [PenilaianController::class, 'export']);