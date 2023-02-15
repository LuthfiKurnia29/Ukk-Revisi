<?php

namespace App\Http\Controllers;

use App\Models\Booking;

use App\Models\Transaksi;
use App\Models\Pembayaran;
use App\Models\DetailServis;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;
use App\Models\BookingKendala;
use RealRashid\SweetAlert\Facades\Alert;

class UserBookingController extends Controller
{
    public function index(){
        $bookings = Booking::with(['user', 'kendalas', 'merks', 'kota', 'kecamatan', 'detail'])->where('user_id', auth()->user()->id)->get();
        return view('front.servis.list', [
            'title' => 'List Servis | 2-Cool',
            'bookings' => $bookings
        ]);
    }

    public function show($id){
       $detail = DetailServis::with(['booking', 'teknisi', 'sparepart'])->where('booking_id', $id)->first();
       $sparepart = BeliSparePart::with(['booking'])->where('booking_id', $id)->get();
    //    dd($detail);

    $cek = Transaksi::with(['servis', 'pembayaran'])->where('detail_id', $detail->booking->id)->whereHas('pembayaran')->first();
    // dd($cek);

       return view('front.servis.detail',[
        'title' => 'Detail | 2-Cool',
        'detail' => $detail,
        'sparepart' => $sparepart,
        'cek' => $cek
       ]);
    }

    public function destroy($id)
    {
        $booking = Booking::with(['user','kendalas', 'merks', 'kota', 'kecamatan'])->find($id);
        $booking->delete();
        return back();
    }
}
