<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function servis(){
        return $this->belongsTo('App\Models\DetailServis', 'detail_id');
    }

    public function pembayaran(){
        return $this->hasOne('App\Models\Pembayaran');
    }
}
