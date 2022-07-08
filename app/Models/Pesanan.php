<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function pupuks(){
        return $this->belongsTo(Pupuk::class,'pupuk_id');
    }

    public function pembayarans(){
        return $this->hasMany(Pembayaran::class,'pesanan_id');
    }
}
