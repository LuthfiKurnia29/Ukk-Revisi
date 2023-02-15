<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    public function admin(){
        return view('admin.profil.index',[
            'title' => 'Profil Page Admin'
        ]);
    }

    public function user(){
        $tambah = User::where('id', auth()->user()->id)->first();
        return view('front.profil.profil',[
            'title' => 'Profil User',
            'profil' => $tambah
        ]);
    }

    public function update(Request $request)
    {
        $tambah = User::where('id', auth()->user()->id)->first();

        $tambah['avatar'] = $request->avatar;

        if($request->file(['avatar'])){
            $tambah['avatar'] = $request->file('avatar')->store('avatar', 'public');
        }
        if (isset($tambah)) {
            $tambah->update($request->all());
        } else {
            User::create($request->all());
        }

        Alert::info('Berhasil', 'Berhasil membarui data!');

        return redirect('/profil-user')->with('successcreate', 'Create Successfull!');
    }
}
