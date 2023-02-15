<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function index(){
        $kotas = Kota::with(['kecamatan'])->get();
        // dd($kotas);
        return view('admin.wilayah.index', [
            'title' => 'Data Wilayah Jangkauan',
            'kotas' => $kotas
        ]);
    }

    public function tmbhkecamatan($id){
        $kota = Kota::find($id);
        return view('admin.wilayah.tambahkecamatan', [
            'title' => 'Tambah Kecamatan',
            'kota' => $kota
        ]);
    }

    public function hapuskota($id){
        $kota = Kota::find($id);
        $kota->delete();
        return back();
    }
}
