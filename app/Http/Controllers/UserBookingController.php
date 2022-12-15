<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingKendala;
use App\Models\DetailServis;

class UserBookingController extends Controller
{
    public function index(){
        $bookings = Booking::with(['user', 'kendalas', 'merks', 'kota', 'kecamatan'])->where('user_id', auth()->user()->id)->get();
        return view('front.servis.list', [
            'title' => 'List Servis | 2-Cool',
            'bookings' => $bookings
        ]);
    }

    public function show(Booking $booking){
       $detail = DetailServis::with(['booking', 'teknisi'])->find($booking->id);
       
    }
}
