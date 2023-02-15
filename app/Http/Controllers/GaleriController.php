<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        return view('front.galeri.index',[
            'title' => 'Galeri Kegiatan'
        ]);
    }

    
}
