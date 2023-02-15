<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasKomentar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function komentar(){
        return $this->belongsTo('App\Models\Komentar');
    }
}
