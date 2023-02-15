<?php

namespace App\Http\Controllers;

use App\Models\Selesai;
use App\Models\DetailServis;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;

class DetailDashboardController extends Controller
{
    public function selesai(Request $request, $detail_id){
        $data['detail_id'] = $detail_id;
        Selesai::create($data);

        return redirect('/tampil-selesai');
    }

    public function tampil(){
        $tampils = DetailServis::with(['booking'])->where('status', '=', 'Selesai')->get();
        $tampils = $tampils->map(function ($tampil) {
            $total = @$tampil->harga;
            $ongkir = $tampil->booking->kecamatan->hrg_ongkir;
            $last_digit = substr($tampil->booking->user->no_telepon, -3);
            $spareparts = BeliSparePart::where('booking_id', $tampil->booking->id)->get();
            foreach($spareparts as $sparepart){
                $total += $sparepart->total += $ongkir += $last_digit;
            }
            $tampil->total_harga = $total;
            return $tampil;
        });
        // dd($tampil);
        return view('admin.servis.selesai',[
            'title' => 'Servis Yang Selesai | 2-Cool ',
            'tampils' => $tampils
        ]);
    }
}
