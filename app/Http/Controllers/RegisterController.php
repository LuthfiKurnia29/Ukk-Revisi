<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'no_telepon' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'is_admin' => 'default'
        ]);
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/sign-in')->with('Berhasil Registrasi!');
       
    }
}
