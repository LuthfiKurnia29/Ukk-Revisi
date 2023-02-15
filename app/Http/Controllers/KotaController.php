<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

use function Termwind\render;

class KotaController extends Controller
{
    public function index(){
        $kotas = Kota::get();
        return view('admin.kota.index',[
            'title' => 'Daftar Kota',
            'kotas' => $kotas
        ]);
    }

    public function tambah(){
        return view('admin.kota.tambah-kota',[
            'title' => 'Tambah Kota',
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'nm_kota' => 'required',
        ]);
        Kota::create($data);
        return redirect('/data-wilayah');
    }
}
