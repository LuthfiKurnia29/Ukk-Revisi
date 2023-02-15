<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
    public function index(){
        $banks = Bank::get();
        return view('admin.bank.index',[
            'title' => 'Data Bank | 2-Cool',
            'banks' => $banks
        ]);
    }

    public function create(){
        return view('admin.bank.tambah',[
            'title' => 'Tambah Bank | 2-Cool',
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'nm_bank' => 'required',
            'logo' => 'image|file|max:2056',
            'kd_bank' => 'required',
            'no_rekening' => 'required',
            'nama_pemilik' => 'required'
        ]);

        if($request->file(['logo'])){
            $data['logo'] = $request->file('logo')->store('logo_bank', 'public');
        }

        Bank::create($data);

        return redirect('/data-bank');
    }

    public function edit($id){
        $bank = Bank::find($id);
        return view('admin.bank.edit',[
            'title' => 'Edit Data Bank',
            'bank' => $bank
        ]);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'logo' => 'image|max:2056',
            'nm_bank' => 'string',
            'kd_bank' => 'string',
            'no_rekening' => 'string',
            'nama_pemilik' => 'string'
        ]);

        if($request->file(['logo'])){
            $data['logo'] = $request->file(['logo'])->store('logo', 'public');
        }

        Bank::where('id', $id)->update($data);
        return redirect('/data-bank');
    }
}
