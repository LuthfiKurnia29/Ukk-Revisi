<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi', 'transaksi_id');
    }

    public function bank(){
        return $this->belongsTo('App\Models\Bank');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
