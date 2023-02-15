<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;
use Barryvdh\DomPDF\Facade\Pdf;

class UserRiwayatController extends Controller
{
    public function index(){
        $riwayats = Pembayaran::with(['transaksi'])->where('bukti_pembayaran', '!=', NULL)->where('user_id', auth()->user()->id)->get();
        $riwayats = $riwayats->map(function ($riwayat) {
            $total = $riwayat->transaksi->servis->harga;
            $spareparts = BeliSparePart::where('booking_id', $riwayat->transaksi->servis->booking->id)->get();
            foreach($spareparts as $sparepart){
                $total += $sparepart->total;
            }
            $riwayat->total_harga = $total;
            return $riwayat;
        });
        $last_digit = substr(auth()->user()->no_telepon, -3);
        return view('front.riwayat.index',[
            'title' => 'Riwayat Servis | 2-Cool',
            'riwayats' => $riwayats,
            'last_digit' => $last_digit
        ]);
    }

    public function cetak($id){
        $laporan = Pembayaran::with(['transaksi', 'user', 'bank'])->find($id);
        $sparepart = BeliSparePart::with(['booking'])->where('booking_id', $laporan->transaksi->servis->booking->id)->get();
        $last_digit = substr(auth()->user()->no_telepon, -3);
        $pdf = PDF::loadview('front.pembayaran.invoice-pdf',[
            'title' => 'Laporan Servis',
            'laporan'=> $laporan,
            'sparepart' => $sparepart,
            'last_digit' => $last_digit
        ]);
    	return $pdf->stream();
    }

    public function detail($id){
        $detail = Pembayaran::with(['transaksi', 'bank'])->where('user_id', auth()->user()->id)->find($id);
        // dd($detail);
        $last_digit = substr(auth()->user()->no_telepon, -3);
        return view('front.riwayat.detail',[
            'title' => 'PPPPP',
            'detail' => $detail,
            'last_digit' => $last_digit
        ]);
    }
}
