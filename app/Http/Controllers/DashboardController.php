<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Selesai;
use App\Models\Teknisi;
use App\Models\DetailServis;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;
use App\Models\Pembayaran;

class DashboardController extends Controller
{
    public function index(){
        $detail = DetailServis::with(['booking', 'sparepart'])->where('status', '!=', 'Selesai')->get();
        $bookings = Booking::with(['user', 'kendalas', 'merks', 'kota', 'kecamatan'])->get();
        $servis = Booking::count();
        $pendapatan = Pembayaran::sum('total_bayar');
        $pengeluaran = BeliSparePart::sum('total');
        $selesai = DetailServis::where('status' , 'Selesai')->count();
        $teknisi = Teknisi::count();
        return view('admin.index',[
            'title' => 'Dashboard Page Admin | 2-Cool',
            'details' => $detail,
            'pendapatan' => $pendapatan,
            'servis' => $servis,
            'selesai' => $selesai,
            'teknisi' => $teknisi,
            'bookings' => $bookings,
            'pengeluaran' => $pengeluaran
        ]);
    }
}
