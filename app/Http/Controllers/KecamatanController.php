<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function get($kota_id){
        $kecamatans = Kecamatan::where('kota_id', $kota_id)->get();
        return response()->json($kecamatans);
    }
}
