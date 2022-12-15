<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function booking(){
        return $this->hasMany('App\Models\Booking');
    }

    public function kota(){
        return $this->belongsTo('App\Models\Kota');
    }
}
