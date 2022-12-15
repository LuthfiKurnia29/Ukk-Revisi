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

    public function teknisi(){
        return $this->belongsTo('App\Models\Teknisi');
    }
}
