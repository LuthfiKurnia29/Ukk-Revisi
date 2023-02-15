<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pembayaran;
use App\Models\DetailServis;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;
use App\Http\Controllers\Controller;
use App\Models\Transaksi;

class TampilServisController extends Controller
{
    public function dikerjakan(){
        // $bookings = Booking::with(['user', 'kendalas', 'merks', 'kota', 'kecamatan', 'detail'])->get();
        $details = DetailServis::with(['booking', 'teknisi', 'sparepart'])->where('status', '=', 'Sedang Dikerjakan')->get();
        $details = $details->map(function ($detail) {
            $total = @$detail->harga;
            $spareparts = BeliSparePart::where('booking_id', $detail->booking->id)->get();
            foreach($spareparts as $sparepart){
                $total += $sparepart->total;
            }
            $detail->total_harga = $total;
            return $detail;
        });
        // dd($details);
        return view('admin.servis.dikerjakan',[
            'title' => 'Servis Dikerjakan',
            'details' => $details
        ]);

    }

    public function nunggu(){
        $details = DetailServis::with(['booking', 'teknisi'])->where('status', '=', 'Menunggu Pembayaran')->get();
        $details = $details->map(function ($detail) {
            $total = @$detail->harga;
            $spareparts = BeliSparePart::where('booking_id', $detail->booking->id)->get();
            foreach($spareparts as $sparepart){
                $total += $sparepart->total;
            }
            $detail->total_harga = $total;
            return $detail;
        });
        // $transaksi = Transaksi::with(['servis', 'pembayaran'])->whereHas('pembayaran')->get();
        // dd($transaksi);
        // dd($details);
        // $pembayaran = Pembayaran::get();
        return view('admin.servis.menunggu',[
            'title' => 'Servis Menunggu Pembayaran',
            'details' => $details,
            
        ]);
    }

    public function pembayaran($id){
        $transaksi = Transaksi::with(['servis', 'pembayaran'])->where('detail_id', $id)->whereHas('pembayaran')->first();
        $sparepart = BeliSparePart::where('booking_id', @$transaksi->servis->booking->id)->sum('total');
        // dd($sparepart);
        $last_digit = substr(@$transaksi->servis->booking->user->no_telepon, -3);
        // dd($transaksi);
        return view('admin.servis.tampil-bayar',[
            'title' => 'Bukti',
            'transaksi' => $transaksi,
            'last_digit' => $last_digit,
            'spareparts' => $sparepart
        ]);
    }
}
