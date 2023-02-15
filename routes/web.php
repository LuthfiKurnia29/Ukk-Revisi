<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UserBookingController;
use App\Http\Controllers\UserRiwayatController;
use App\Http\Controllers\TampilServisController;
use App\Http\Controllers\BeliSparePartController;
use App\Http\Controllers\DetailDashboardController;
use App\Http\Controllers\ServisDashboardController;

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

Route::get('/', [FrontController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['admin']);

Route::get('/sign-in', [LoginController::class, 'index'])->name('login');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//adminservis
Route::resource('/servis-dashboard', ServisDashboardController::class)->middleware(['admin']);
Route::get('/servis-dikerjakan', [TampilServisController::class, 'dikerjakan'])->middleware(['admin']);
Route::get('/servis-menunggubayar', [TampilServisController::class, 'nunggu'])->middleware(['admin']);
Route::get('/servis-menunggubayar/{id}', [TampilServisController::class, 'pembayaran'])->middleware(['admin']);
Route::post('/servis-dashboard/{id}', [ServisDashboardController::class, 'store'])->middleware(['admin']);
Route::get('/servis-dashboard/{id}/sparepart', [BeliSparePartController::class, 'index'])->middleware(['admin']);
Route::get('/servis-dashboard/{id}/sparepart/tambah', [BeliSparePartController::class, 'create'])->middleware(['admin']);
Route::post('/servis-dashboard/{id}/sparepart', [BeliSparePartController::class, 'store'])->middleware(['admin']);
Route::post('/servis-dashboard/{id}/sparepart/update', [BeliSparePartController::class, 'update'])->middleware(['admin']);
Route::get('/rekap-sparepart', [BeliSparePartController::class, 'rekap'])->middleware(['admin']);
Route::post('/selesai/{id}', [DetailDashboardController::class, 'selesai'])->middleware(['admin']);
Route::get('/tampil-selesai', [DetailDashboardController::class, 'tampil'])->middleware(['admin']);

//status
Route::post('/status-menunggu/{id}', [StatusController::class, 'tunggu'])->middleware('admin');
Route::post('/status-selesai/{id}', [StatusController::class, 'selesai'])->middleware('admin');

//teknisi
Route::get('/teknisi',[TeknisiController::class, 'index'])->middleware(['admin']);
Route::delete('/teknisi/{id}',[TeknisiController::class, 'destroy'])->middleware(['admin']);
Route::get('/tambah-teknisi',[TeknisiController::class, 'create'])->middleware(['admin']);
Route::post('/teknisi', [TeknisiController::class, 'store'])->middleware(['admin']);

//servis
Route::get('/servis', [BookingController::class, 'index'])->middleware(['auth']);
Route::post('/booking', [BookingController::class, 'store'])->middleware(['auth']);
Route::get('/list-servis', [UserBookingController::class, 'index'])->middleware(['auth']);
// Route::post('/list-servis/{id}',[UserBookingController::class, 'destroy'])->middleware(['auth']);
Route::get('/list-servis/{id}', [UserBookingController::class, 'show'])->middleware(['auth']);
Route::post('/list-servis/{id}/pilih-bank', [TransaksiController::class, 'store'])->middleware(['auth']);
Route::delete('/batal-pesan/{id}',[UserBookingController::class, 'destroy'])->middleware(['auth']);


//pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'tampil'])->middleware(['admin']);
Route::get('/{id}/pilih-bank',[TransaksiController::class, 'index'])->middleware(['auth']);
Route::post('/konfirmasi-bayar/{id}/', [PembayaranController::class, 'store'])->middleware(['auth']);
Route::get('/detail-pembayaran/{id}',[PembayaranController::class, 'index'])->middleware(['auth']);
Route::post('/detail-pembayaran/{id}/upload-bukti',[PembayaranController::class, 'update'])->middleware(['auth']);
Route::get('/hasil-bayar/{id}',[PembayaranController::class, 'lihat'])->middleware(['auth']);
// Route::get('/cetak-invoice/{id}', [PembayaranController::class, 'cetak'])->middleware(['auth']);

//bank
Route::get('/data-bank', [BankController::class, 'index'])->middleware(['admin']);
Route::get('/data-bank/{id}/edit', [BankController::class, 'edit'])->middleware(['admin']);
Route::post('/data-bank/{id}/edit', [BankController::class, 'update'])->middleware(['admin']);
Route::get('/tambah-bank', [BankController::class, 'create'])->middleware(['admin']);
Route::post('/tambah-bank', [BankController::class, 'store'])->middleware(['admin']);

//Riwayat
Route::get('/riwayat-servis', [UserRiwayatController::class, 'index'])->middleware(['auth']);
Route::get('/riwayat-servis/{id}/detail', [UserRiwayatController::class, 'detail'])->middleware(['auth']);
Route::get('/riwayat-servis/{id}/cetak-pdf', [UserRiwayatController::class, 'cetak'])->middleware(['auth']);

//Laporan
Route::get('/laporan/{id}/cetak', [LaporanController::class, 'cetak'])->middleware(['admin']);

Route::get('/sign-up', [RegisterController::class, 'index']);
Route::post('/sign-up', [RegisterController::class, 'store']);

//whatsapp
Route::get('/form-send', [FormController::class, 'index']);
Route::post('form-send', [FormController::class, 'store'])->name('form-send');

//Profil
Route::get('/profil', [ProfilController::class, 'admin'])->middleware(['admin']);
Route::get('/profil-user', [ProfilController::class, 'user'])->middleware(['auth']);
Route::post('/profil-user', [ProfilController::class, 'update'])->middleware(['auth']);

//Komentar
Route::post('/komentar', [KomentarController::class, 'store'])->middleware(['auth']);
Route::get('/komentar-admin', [KomentarController::class, 'index'])->middleware(['admin']);
Route::get('/komentar-admin/{id}', [KomentarController::class, 'balaskomen'])->middleware(['admin']);
Route::post('/komentar-admin/{id}', [KomentarController::class, 'balas'])->middleware(['admin']);
Route::delete('/komentar-adminn/{id}', [KomentarController::class, 'hapus'])->middleware(['admin']);

//Kota
Route::get('/daftar-kota', [KotaController::class, 'index'])->middleware(['admin']);
Route::post('/daftar-kota', [KotaController::class, 'store'])->middleware(['admin']);
Route::get('/tambah-kota', [KotaController::class, 'tambah'])->middleware(['admin']);

//Kecamatan
Route::get('/daftar-kecamatan', [KecamatanController::class, 'index'])->middleware(['admin']);
Route::get('/tambah-kecamatan', [KecamatanController::class, 'tambah'])->middleware(['admin']);
Route::post('/tambah-kecamatan/{id}', [KecamatanController::class, 'store'])->middleware(['admin']);
Route::delete('/daftar-kecamatan/{id}', [KecamatanController::class, 'destroy'])->middleware(['admin']);

//wilayah
Route::get('/data-wilayah', [WilayahController::class, 'index'])->middleware(['admin']);
Route::delete('/data-wilayah/kota/{id}', [WilayahController::class, 'hapuskota'])->middleware(['admin']);
Route::get('/data-wilayah/tambah-kecamatan/{id}', [WilayahController::class, 'tmbhkecamatan'])->middleware(['admin']);

//galeri
Route::get('/galeri', [GaleriController::class, 'index'])->middleware(['auth']);
Route::get('/galeri-admin',[GaleriController::class, 'indexadmin'])->middleware(['admin']);

Route::get('/kecamatan/{kota_id}', [KecamatanController::class, 'get']);