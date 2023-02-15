<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Transaksi;
use Illuminate\Support\Str;
use App\Models\DetailServis;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index($id){
        $detail = DetailServis::where('id', $id)->with(['booking', 'teknisi'])->find($id);
        $banks = Bank::get();
        return view('front.servis.pilihbank',[
            'title' => 'Pilih Bank | Pembayaran',
            'banks' => $banks,
            'detail' => $detail
        ]);
    }

    public function store(Request $request, $detail_id){
        $transaksi = Transaksi::with(['servis'])->where('detail_id', $detail_id)->first();
        // dd($transaksi);
        $data['detail_id'] = $detail_id;
        if (isset($transaksi)) {  
            $transaksi->update($data);
        } else {
            Transaksi::create($data);
        }

        $detail = DetailServis::with(['booking', 'teknisi'])->where('id', $detail_id)->find($detail_id);

       return redirect( $detail->id . "/pilih-bank");
    }
}
