<?php

use App\Http\Controllers\AuthSSOController;
use App\Livewire\Auth\Login;
use App\Livewire\Booking;
use Illuminate\Support\Facades\Route;
use App\Livewire\Hotel;
use App\Livewire\Landing;
use App\Livewire\Room;
use App\Livewire\Transaction;

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
Route::get('/laravel/login', function (Request $request) {
    return redirect('portal/login');
})->name('login');
Route::get('/login-user', Login::class)->name('login-user'); //login user
Route::get('/', Landing::class)->name('home'); // choose hotel
Route::get('/hotel/{id}', Hotel::class)->name('hotel'); // book room
Route::get('/room/{id}', Room::class)->name('room')->middleware('authuser'); // room detail
Route::get('/booking/{id}', Booking::class)->name('booking')->middleware('authuser'); //booking detail
Route::get('/transaction/{id}', Transaction::class)->name('transaction')->middleware('authuser'); //
//Route::post('/room/{id}/book', Room::class)->name('room.book'); // room book
//Route::get('/booking/payment/{id}', Booking::class)->name('booking'); // booking details
//Route::get('/booking/payment/{id}/process', Payment::class)->name('booking'); // booking process
//Route::get('/booking/payment/{id}', Payment::class)->name('payment'); // payment details


Route::get('portal/login/google', [AuthSSOController::class, 'redirectToGoogle'])->name('login.google');
Route::get('portal/login/google/callback', [AuthSSOController::class, 'handleGoogleCallback']);

Route::get('/login-user/google', [AuthSSOController::class, 'redirectUserToGoogle'])->name('login-user.google');
Route::get('/login-user/google/callback', [AuthSSOController::class, 'handleUserGoogleCallback']);

Route::get('portal/login/azure', [AuthSSOController::class, 'redirectToAzure'])->name('login.azure');
Route::get('portal/login/azure/callback', [AuthSSOController::class, 'handleAzureCallback']);