<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function get($kota_id){
        $kecamatans = Kecamatan::where('kota_id', $kota_id)->get();
        return response()->json($kecamatans);
    }

    public function index(){
        $kecamatans = Kecamatan::paginate(10);
        return view('admin.kecamatan.index',[
            'title' => 'Daftar Kecamatan',
            'kecamatans' => $kecamatans
        ]);
    }

    public function tambah(){
        $kotas = Kota::get();
        return view('admin.kecamatan.tambah',[
            'title' => 'Tambah Kecamatan',
            'kotas' => $kotas
        ]);
    }

    public function store(Request $request, $id){
        $data = $request->validate([
            'nm_kecamatan' => 'required',
            'kota_id' => 'required',
            'hrg_ongkir' => 'required'
        ]);
        Kecamatan::create($data);
        return redirect('/data-wilayah');
    }

    public function destroy($id){
        $kecamatan = Kecamatan::find($id);
        $kecamatan->delete();
        return back();
    }
}
