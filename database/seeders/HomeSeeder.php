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
        DB::table('home')->insert([
            [
                'gambar' => 'home/YA6g0dhNS5xjo1NwSTNBpgm2Nw46Bhap6qzqduTH.png',
                'judul' => 'Makmur Jaya',
                'quote' => 'Menjadikan sampah sebagai sumber daya bermanfaat dan solusi ekonomis',
                'hashtag' => '#bersihdesaku',
                'link' => 'https://www.yzoutube.com/watch?v=1X8c8ISRbRA',
            ],
        ]);
    }
}