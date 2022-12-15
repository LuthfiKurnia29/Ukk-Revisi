<?php

namespace App\Http\Controllers;

use App\Models\Kendala;
use App\Models\Kota;
use Illuminate\Http\Request;
use App\Models\Merk;
use App\Models\Kecamatan;
use App\Models\Booking;
use App\Models\BookingKendala;
use App\Models\BookingMerk;

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
            'kendala_id' => 'array',
            'tanggal_booking' => 'required',
            'jumlah_barang' => 'required',
            'merk_id' => 'array',
            'kota_id' => 'required',
            'kecamatan_id' => 'required',
            'alamat_lengkap' => 'required'
        ]);

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

        return redirect('/list-servis'); 
    }

    public function show($id){
        $book = Booking::where('user_id', auth()->user()->id)->get();
        return view('front.servis.list', compact($book));
    }

    
}
