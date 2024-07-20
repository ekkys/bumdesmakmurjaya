<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeris')->insert([
            [
                'gambar' => 'galeri/1.png',
                'nama' => 'Penyerahan Dana Pembangunan Kafetaria PLN',
                'keterangan' => 'Penyerahan Dana Pembangunan Kafetaria PLN',
                'tanggal' => '2024-02-21',
            ],
        ]);
    }
}
