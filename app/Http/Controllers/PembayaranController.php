<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use App\Models\DetailServis;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;

class PembayaranController extends Controller
{
    public function index($id){
        // $detail = DetailServis::with(['booking', 'teknisi'])->where('id', $id)->find($id);
        $pembayaran = Pembayaran::with(['transaksi', 'bank', 'user'])->where('id', $id)->find($id);
        $hrg_sparepart = BeliSparePart::with(['booking'])->where('booking_id', $pembayaran->transaksi->servis->booking->id)->sum('total');
        // dd($pembayaran);
        $last_digit = substr(auth()->user()->no_telepon, -3);
        return view('front.servis.detail-bayar',[
            'title' => 'Detail Pembayaran | 2-Cool',
            'pembayaran' => $pembayaran,
            'last_digit' => $last_digit,
            'hrg_sparepart' => $hrg_sparepart
        ]);
    }

    public function store(Request $request, $id){
        $bank = Bank::find($request->bank_id);
        $transaksi = Transaksi::create([
            'detail_id' => $id
        ]);

        $hrg_sparepart = BeliSparePart::with(['booking'])->where('booking_id', $transaksi->servis->booking->id)->sum('total');
        $total_harga = $transaksi->servis->harga + $transaksi->servis->booking->kecamatan->hrg_ongkir + substr(auth()->user()->no_telepon, -3) + $hrg_sparepart;
      
            $pembayaran = Pembayaran::create([
                'no_invoice' => 'INV' . rand(10000, 99999) . date('dmYhms') . auth()->user()->id,
                'user_id' => auth()->user()->id,
                'transaksi_id' => $transaksi->id,
                'bank_id' => $bank->id,
                'bukti_pembayaran' => $request->file('bukti_pembayaran'),
                'total_bayar' => $total_harga
               ]);
            if($request->file(['bukti_pembayaran'])){
                $pembayaran['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
            }
           return redirect('/detail-pembayaran/' . $pembayaran->id);
    }

    public function update(Request $request, $id){
        $data['bukti_pembayaran'] = $request->file('bukti_pembayaran');
        if($request->file(['bukti_pembayaran'])){
            $data['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        }

            Pembayaran::where('id', $id)->update($data);
        // $pembayaran = Pembayaran::where('id', $id)->find($id);

        return redirect('/riwayat-servis');
    }

    // public function show(){
    //     $pembayarans = Pembayaran::with(['transaksi', 'user', 'bank'])->where('user_id', auth()->user()->id)->get();
    //     return view('front.pembayaran.index',[
    //         'title' => 'Pembayaran',
    //         'pembayarans' => $pembayarans
    //     ]);
    // }

    public function lihat($id){
        $bayar = Pembayaran::with(['transaksi', 'user', 'bank'])->where('id', $id)->find($id);
        return view('front.servis.bayar',[
            'title' => 'Invoice | 2-Cool Servis',
            'bayar' => $bayar
        ]);
    }

    public function cetak($id){
        $invoice = Pembayaran::with(['transaksi', 'user', 'bank'])->where('id', $id)->find($id); 
    }

    public function tampil(){
        $pembayarans = Pembayaran::with(['transaksi', 'user', 'bank'])->where('bukti_pembayaran', '!=', NULL)->get();
        $pembayarans = $pembayarans->map(function ($pembayaran) {
            $total = $pembayaran->transaksi->servis->harga;
            $spareparts = BeliSparePart::where('booking_id', $pembayaran->transaksi->servis->booking->id)->get();
            foreach($spareparts as $sparepart){
                $total += $sparepart->total;
            }
            $pembayaran->total_harga = $total;
            return $pembayaran;
         });
        return view('admin.pembayaran.index',[
            'title' => 'Pembayaran Servis | 2-Cool',
            'pembayarans' => $pembayarans
        ]);
    }
}
