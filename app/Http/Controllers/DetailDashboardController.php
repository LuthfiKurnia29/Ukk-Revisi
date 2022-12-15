<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailDashboardController extends Controller
{
    public function index(){
        return view('admin.servis.detail');
    }

    public function store(Request $request){
        
    }
}
