<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function kendalas(){
        return $this->belongsToMany('App\Models\Kendala', 'booking_kendalas');
    }

    public function merks(){
        return $this->belongsToMany('App\Models\Merk', 'booking_merks');
    }

    public function kota(){
        return $this->belongsTo('App\Models\Kota');
    }

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function detail(){
        return $this->hasOne('App\Models\DetailServis');
    }
}
