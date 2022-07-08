<?php

namespace Database\Seeders;

use App\Models\Pesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesanan::create([
            'tanggal_pesan'=>"03/10/2001",
            'total_pesan'=>"5",
            'jumlah_pesan'=>"11250",
            'pupuk_id'=>"1"
        ]);
    }
}
