<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Teknisi;
use App\Models\DetailServis;
use Illuminate\Http\Request;
use App\Models\BeliSparePart;
use RealRashid\SweetAlert\Facades\Alert;

class ServisDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with(['user', 'kendalas', 'merks', 'kota', 'kecamatan', 'detail'])->whereDoesntHave('detail')->get();
        $details = DetailServis::with(['booking', 'teknisi'])->where('status', '!=', 'Selesai')->get();

        $bookings = $bookings->map(function ($booking) {
            $total = @$booking->detail->harga;
            $spareparts = BeliSparePart::where('booking_id', $booking->id)->get();
            foreach($spareparts as $sparepart){
                $total += $sparepart->total;
            }
            $booking->total_harga = $total;
            return $booking;
        });
        // $teknisis = Teknisi::get();
        // dd($sparepart);
        return view('admin.servis.index',[
            'title' => 'Servis Masuk | 2-Cool',
            'bookings' => $bookings,
            'details' => $details,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $booking_id)
    {
        $data = $request->validate([
            'sparepart_id' => 'nullable',
            'keterangan_teknisi' => 'required',
            'harga' => 'nullable',
            'status' => 'nullable',
            'teknisi_id' => 'required'
        ]);
        
        $detail = DetailServis::where('booking_id', $booking_id)->first();
        if (isset($detail->id)) {
            $detail->update($data);
        } else {
            $data['booking_id'] = $booking_id;
            DetailServis::create($data);
        }
            Alert::success('Success', 'Berhasil Menambah pesanan');
            return redirect('/servis-dikerjakan');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::with(['user', 'kendalas', 'merks', 'kota', 'kecamatan'])->find($id);
        $teknisis = Teknisi::get();
        $sparepart = BeliSparePart::with(['booking'])->where('booking_id', $id)->get();
        return view('admin.servis.detail',[
            'title' => 'Detail',
            'booking' => $booking,
            'teknisis' => $teknisis,
            'sparepart' => $sparepart
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
