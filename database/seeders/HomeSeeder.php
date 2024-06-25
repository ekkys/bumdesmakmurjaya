<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('legalitas')->insert([
            [
                'nama' => 'NIB - Nomor Ijin Berusaha',
                'gambar' => 'leglitas/FxMHirYpxKgexPG8thUYUvE4pKkWWiqdbssHMA2Z.png',
                'link' => 'https://drive.google.com/file/d/1XxNfUbGlYaDq1Mx1Pw3Zu1O-8LyKPQmP/view',
                'deskripsi' => 'NIB - Nomor Ijin Berusaha',
            ],
        ]);
    }
}
