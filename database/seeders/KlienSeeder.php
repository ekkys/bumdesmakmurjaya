<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kliens')->insert([
            [
                'nama' => 'Perum Tas 7',
                'gambar' => 'klien/grf0samvj4sYadgQ0FkLCMWP2JSlYwi4Z0A67spJ.png',
            ],
            [
                'nama' => 'KSA',
                'gambar' => 'klien/vAemaHyEMzCUAHOvJbYdSw2I8tbbdcxZ4B1Zro3C.jpg',
            ],
            [
                'nama' => 'BPS',
                'gambar' => 'klien/sewiONedMfiI8xyoE3Y72XmxwmiGJHwsY5FeDobS.png',
            ],
            [
                'nama' => 'BIG',
                'gambar' => 'klien/Ru3lfAX8X1ZQpOaqmEDNZR0sCTz6tS5WgpBN403y.jpg',
            ],
            [
                'nama' => 'QGR',
                'gambar' => 'klien/PL1HeHoIwusgCNm1OKW8iWKX5ewdcdmp7Pv5IyO0.png',
            ],
        ]);
    }
}
