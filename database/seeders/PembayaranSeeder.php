<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembayaran::create([
            'dibayar'=>"12000",
            'kembali'=>"750",
            'user_id'=>"1",
            'pembeli_id'=>"1",
            'pesanan_id'=>"1",
            'pengiriman_id'=>"1",
        ]);
    }
}
