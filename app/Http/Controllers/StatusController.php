<?php

namespace App\Http\Controllers;

use App\Models\DetailServis;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StatusController extends Controller
{
    public function tunggu(Request $request, $id){
       $validatedData = $request->validate([
        'status' => 'required'
       ]);
       DetailServis::where('id', $id)->update($validatedData);
       Alert::success('Success', 'Berhasil Menambah pesanan');
       return redirect('/servis-menunggubayar');
    }

    public function selesai(Request $request, $id){
        $validatedData = $request->validate([
            'status' => 'required'
           ]);
           DetailServis::where('id', $id)->update($validatedData);
           Alert::success('Success', 'Berhasil Menambah pesanan');
           return redirect('/tampil-selesai');
    }
}
