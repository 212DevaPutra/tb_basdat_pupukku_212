<?php

namespace Database\Seeders;

use App\Models\Pembeli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembeli::create([
            'nama_pembeli'=>"Syarifudin",
            'alamat'=>"Jl. Muamar",
            'no_pembeli'=>"812348271",
            'nas'=>"03415151",
        ]);
    }
}
