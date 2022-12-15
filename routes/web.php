<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\ServisDashboardController;
use App\Http\Controllers\UserBookingController;
use App\Http\Controllers\TeknisiController;
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
    return view('front.index',[
        'title' => '2-Cool | Servis Terbaik Se-Surabaya'
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['admin']);

Route::get('/sign-in', [LoginController::class, 'index'])->name('login');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//servis
Route::get('/servis', [BookingController::class, 'index'])->middleware(['auth']);
Route::post('/booking', [BookingController::class, 'store'])->middleware(['auth']);
Route::get('/list-servis', [UserBookingController::class, 'index'])->middleware(['auth']);
Route::get('/list-servis/{booking:id}', [UserBookingController::class, 'show'])->middleware(['auth']);

//teknisi
Route::get('/teknisi',[TeknisiController::class, 'index'])->middleware(['admin']);
Route::get('/tambah-teknisi',[TeknisiController::class, 'create'])->middleware(['admin']);
Route::post('/teknisi', [TeknisiController::class, 'store'])->middleware(['admin']);

//adminservis
Route::resource('/servis-dashboard', ServisDashboardController::class)->middleware(['admin']);
// Route::get('/servis-dashboard/{id}', [DetailDashboardController::class, 'index'])->middleware(['admin']);

//bank
Route::get('/data-bank', [BankController::class, 'index'])->middleware(['admin']);
Route::get('/tambah-bank', [BankController::class, 'create'])->middleware(['admin']);
Route::post('/tambah-bank', [BankController::class, 'store'])->middleware(['admin']);

Route::get('/sign-up', [RegisterController::class, 'index']);
Route::post('/sign-up', [RegisterController::class, 'store']);

Route::get('/kecamatan/{kota_id}', [KecamatanController::class, 'get']);
