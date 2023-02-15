<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Kota;
use App\Models\Merk;
use App\Models\Booking;
use App\Models\Kendala;
use App\Models\Teknisi;
use App\Models\Kecamatan;
use App\Models\BookingMerk;
use Illuminate\Http\Request;
use App\Models\BookingKendala;

class BookingController extends Controller
{
    public function index(){
        $merks = Merk::get();
        $kendalas = Kendala::get();
        $kotas = Kota::get();
        $kecamatans = Kecamatan::get();
        return view('front.servis.index',[
            'title' => 'Pesan Layanan Servis AC | 2-Cool',
            'merks' => $merks,
            'kendalas' => $kendalas,
            'kotas' => $kotas,
            'kecamatans' => $kecamatans
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'tanggal_booking' => 'required',
            'kota_id' => 'required',
            'catatan' => 'nullable',
            'kecamatan_id' => 'required',
            'alamat_lengkap' => 'required',
            'sudah_dibaca' => 'nullable'
        ]);

        if (Booking::where('tanggal_booking', $data['tanggal_booking'])->first()){
            alert()->warning('Tidak Bisa','Pesanan di Hari dan jam ini sudah ada');
            return redirect()->back();
        }

        $data['user_id'] = auth()->user()->id;
        $booking = Booking::create($data);

        if (isset($request->kendala_id)) {
            foreach ($request->kendala_id as $kendala_id) {
                BookingKendala::create([
                    'booking_id' => $booking->id,
                    'kendala_id' => $kendala_id
                ]);
            }
        }

        if (isset($request->merk_id)) {
            foreach ($request->merk_id as $merk_id) {
                BookingMerk::create([
                    'booking_id' => $booking->id,
                    'merk_id' => $merk_id
                ]);
            }
        }
        Alert::success('Success', 'Berhasil Menambah pesanan');
        return redirect('/list-servis'); 
    }
    
}
