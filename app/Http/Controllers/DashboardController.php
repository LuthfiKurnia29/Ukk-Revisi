<?php

namespace App\Http\Controllers;

use App\Models\DetailServis;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $detail = DetailServis::get();
        return view('admin.index',[
            'title' => 'Dashboard Page Admin | 2-Cool',
            'details' => $detail
        ]);
    }
}
