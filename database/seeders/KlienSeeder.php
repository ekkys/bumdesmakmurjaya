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
        DB::table('legalitas')->insert([
            [
                'nama' => 'Perum Tas 7',
                'gambar' => 'klien/grf0samvj4sYadgQ0FkLCMWP2JSlYwi4Z0A67spJ.png',
            ],
            [
                'nama' => 'KSA',
                'gambar' => 'klien/vAemaHyEMzCUAHOvJbYdSw2I8tbbdcxZ4B1Zro3C.jpg',
            ],
        ]);
    }
}
