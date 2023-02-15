<?php

namespace App\Http\Controllers;

use App\Models\BeliSparePart;
use App\Models\Booking;
use Illuminate\Http\Request;

class BeliSparePartController extends Controller
{
    public function index($id){
        $booking = Booking::find($id);
        // dd($booking);
        $sparepart = BeliSparePart::where('booking_id', $id)->get();
        return view('admin.servis.sparepart.tampil',[
            'title' => 'Beli SparePart',
            'booking' => $booking,
            'sparepart' => $sparepart
        ]);
    }

    public function create($id){
        $booking = Booking::find($id);
        return view('admin.servis.sparepart.tambah',[
            'title' => 'Tambah SparePart | 2-Cool',
            'booking' => $booking
        ]);
    }

    public function store(Request $request, $booking_id){
        $data = $request->validate([
            'nm_sparepart' => 'required',
            'kuantitas' => 'required',
            'harga' => 'required'
        ]);
        $data['total'] = $request->harga * $request->kuantitas;
        // $sparepart = BeliSparePart::where('booking_id', $booking_id)->first();
        
        $data['booking_id'] = $booking_id;
        BeliSparePart::create($data);
        // dd($data);
        return redirect('/servis-dashboard/'.$booking_id.'/sparepart');
    }

    public function rekap(){
        $rekap = BeliSparePart::all();
        return view('admin.servis.sparepart.rekap',[
            'title' => 'Rekap Pembelian SparePart',
            'rekaps' => $rekap
        ]);
    }
}
