<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function pesanans(){
        return $this->belongsTo(Pesanan::class,'pesanan_id');
    }
    public function pembelis(){
        return $this->belongsTo(Pembeli::class,'pembeli_id');
    }
    public function pengirimans(){
        return $this->belongsTo(Pengiriman::class,'pengiriman_id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
