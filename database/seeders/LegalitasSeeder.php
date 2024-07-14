<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('legalitas')->insert([
            [
                'nama' => 'NIB - Nomor Ijin Berusaha',
                'gambar' => '-',
                'link' => '-',
                'deskripsi' => '-',
            ],
            [
                'nama' => 'NIB - Nomor Ijin Berusaha',
                'gambar' => '-',
                'link' => '',
                'deskripsi' => '-',
            ],
            [
                'nama' => 'NIB - Nomor Ijin Berusaha',
                'gambar' => '-',
                'link' => '-',
                'deskripsi' => '-',
            ],
        ]);
    }
}
