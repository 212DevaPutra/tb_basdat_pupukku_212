<?php

namespace Database\Seeders;

use App\Models\Pupuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PupukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pupuk::create([
            [
                'id' => "1",
                'nama_pupuk' => "Urea",
                'harga_pupuk' => "2500",
            ], [
                'id' => "2", 'nama_pupuk' => "ZA",
                'harga_pupuk' => "1700",
            ], [
                'id' => "3", 'nama_pupuk' => "SP-36",
                'harga_pupuk' => "2400",
            ], [
                'id' => "4", 'nama_pupuk' => "Phonska",
                'harga_pupuk' => "2300",
            ], [
                'id' => "5", 'nama_pupuk' => "Petragonik",
                'harga_pupuk' => "800",
            ],
        ]);
    }
}
