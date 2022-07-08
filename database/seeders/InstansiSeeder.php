<?php

namespace Database\Seeders;

use App\Models\Instansi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instansi::create([[
            'instansi' => "Koperasi BAIK",
            'alamat_instansi' => "Jl. Kertangera",
            'tlp_instansi' => "03415151",
        ],[
            'instansi' => "Koperasi Makmur Abadi",
            'alamat_instansi' => "Jl. Imam Bonjol",
            'tlp_instansi' => "03415232",
        ]]);
    }
}
