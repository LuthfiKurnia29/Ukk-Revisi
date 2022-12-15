<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;

class TeknisiController extends Controller
{
    public function index(){
    $teknisi = Teknisi::get();
        return view('admin.teknisi.index',[
            'title' => 'Daftar Teknisi | 2-Cool',
            'teknisis' => $teknisi
        ]);
    }

    public function create(){
        return view('admin.servis.tambah',[
            'title' => 'Tambah Teknisi | 2-Cool'
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'foto' => 'image|file|max:2056',
            'nama_teknisi' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required'
        ]);

        if($request->file(['foto'])){
            $data['foto'] = $request->file('foto')->store('foto_teknisi', 'public');
        }

        Teknisi::create($data);
        return redirect('/teknisi')->with('success', 'Berhasil Menambah Teknisi');
    }
}
