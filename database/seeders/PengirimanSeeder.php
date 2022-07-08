<?php

namespace Database\Seeders;

use App\Models\Pengiriman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengirimans')->insert([
            'status' => "Ambil",
            'ongkir' => "0",
        ]);
    }
}
