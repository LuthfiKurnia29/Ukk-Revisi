<?php

namespace App\Http\Controllers;

use App\Traits\WablasTrait;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('front.whatsapp.index',[
            'title' => 'Whatsapp'
         ]);
    }

    public function store()
    {
        $kumpulan_data = [];

        $data['phone'] = request('no_wa');
        $data['message'] = request('pesan');
        $data['secret'] = false;
        $data['retry'] = false;
        $data['isGroup'] = false;
        array_push($kumpulan_data, $data);

        WablasTrait::sendText($kumpulan_data);

        return redirect()->back();
    }
}