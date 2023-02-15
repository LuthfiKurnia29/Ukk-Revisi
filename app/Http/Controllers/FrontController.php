<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\Teknisi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $teknisi = Teknisi::get();
        $komentar = Komentar::get();
        return view('front.index',[
            'title' => '2-Cool | Servis Terbaik Se-Surabaya',
            'teknisis' => $teknisi,
            'komentars' => $komentar
        ]);
    }
}
