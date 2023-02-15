<?php

namespace App\Http\Controllers;

use App\Models\BalasKomentar;
use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'komentar' => 'required'
        ]);
        $data['user_id'] = auth()->user()->id;
        Komentar::create($data);
        return back();
    }

    public function index(){
        $komentars = Komentar::get();
        $balasan = BalasKomentar::first();
        return view('admin.komentar.index',[
            'title' => 'Komentar Pelanggan 2-Cool',
            'komentars' => $komentars,
            'balasan' => $balasan
        ]);
    }

    public function balaskomen($id){
        $komentar = Komentar::findOrFail($id);
        return view('admin.komentar.balaskomen', [
            'title' => 'Balas Komentar',
            'komentar' => $komentar
        ]);
    }

    public function balas(Request $request, $id){
        $data = $request->validate([
            'balas_komentar' => 'required',
        ]);
        $data['komentar_id'] = $id;
        BalasKomentar::create($data);
        return redirect('/komentar-admin');
    }

    public function hapus($id){
        $komentar = Komentar::find($id);
        $komentar->delete();
        return back();
    }
}
