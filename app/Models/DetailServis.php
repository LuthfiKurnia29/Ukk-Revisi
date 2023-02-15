<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailServis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function booking(){
        return $this->belongsTo('App\Models\Booking', 'booking_id');
    }

    public function transaksi(){
        return $this->hasOne('App\Models\Transaksi');
    }

    public function sparepart(){
        return $this->belongsTo('App\Models\BeliSparePart');
    }

    public function selesai(){
        return $this->hasOne('App\Models\Selesai');
    }
    public function teknisi(){
        return $this->belongsTo('App\Models\Teknisi');
    }
}
