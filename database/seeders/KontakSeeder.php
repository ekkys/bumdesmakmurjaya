<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kontaks')->insert([
            [
                'alamat' => 'Jl. Dusun Tundungan, Tundungan, Sidomojo, Kec. Krian 35151 Kabupaten Sidoarjo, Jawa Timur',
                'telpon' => '+62 815-1111-9337',
                'email' => 'admin@bumdesmakmurjaya.com',
                'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8013057203636!2d112.583538!3d-7.3945369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780985bd56483b:0x5ea5850216f1457a!2sBUMDes%20MAKMUR%20JAYA%20Desa%20Sidomojo!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"',
                'youtube' => 'https://www.youtube.com/',
                'facebook' => 'https://id-id.facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'tiktok' => 'https://www.tiktok.com/id-ID/',
                'whatsapp' => 'https://wa.me/62895632210577',
            ],
        ]);
    }
}
