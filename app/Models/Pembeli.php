<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    public function pembayarans (){
        return $this->hasMany(Pembayaran::class,'pembeli_id');
    }
}
