<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('admin.teknisi.tambah',[
            'title' => 'Tambah Teknisi | 2-Cool'
        ]);
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'foto' => 'image',
            'nama_teknisi' => 'required',
            'no_telepon' => 'required|numeric',
            'alamat' => 'required'
        ]);
        // dd('tes');
 
        if($request->file(['foto'])){
            $data['foto'] = $request->file('foto')->store('foto_teknisi', 'public');
        }

        Teknisi::create($data);
        Alert::success('Success', 'Berhasil Menambah Teknisi');
        // dd($data);
        
        return redirect('/teknisi')->with('success', 'Berhasil Menambah Teknisi');
    }

    public function destroy($id){
        $teknisi = Teknisi::find($id);
        $teknisi->delete();
        return back();
    }
}
