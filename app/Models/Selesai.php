<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selesai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function servis(){
        return $this->belongsTo('App\Models\DetailServis', '$detail_id');
    }
}
