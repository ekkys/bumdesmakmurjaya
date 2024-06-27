<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([
            [
                'nama' => 'Pengangkutan dan Pengolahan Sampah Non B3',
                'gambar' => 'layanan/CPd5cUCnPyXvKvpdx3iTtdcqvbtQRkVyrbh50Ycm.jpg',
                'link' => 'http://127.0.0.1:8000/pengangkutan-detail',
                'ringkasan' => 'Pengangkutan dan pengolahan sampah non-B3 (non-bahan berbahaya dan beracun) adalah proses penting dalam manajemen limbah yang bertujuan untuk menjaga kebersihan dan kesehatan lingkungan.',
                'deskripsi' => 'Pengangkutan dan pengolahan sampah non-B3 (non-bahan berbahaya dan beracun) adalah proses penting dalam manajemen limbah yang bertujuan untuk menjaga kebersihan dan kesehatan lingkungan.',

            ],
            [
                'nama' => 'Pembelian Anfalan & Barang Bekas',
                'gambar' => 'layanan/6XTHuh7WPiSVTOFXdRgzyz8ohC2JjHwymgjrqwb2.jpg',
                'link' => 'http://127.0.0.1:8000/pembelian-detail',
                'ringkasan' => 'Pembelian anfalan (sisa material yang masih bernilai) dan barang bekas merupakan salah satu cara untuk mendukung pengelolaan sampah dan daur ulang. Berikut adalah langkah-langkah dalam pembelian anfalan dan barang bekas',
                'deskripsi' => 'Pembelian anfalan (sisa material yang masih bernilai) dan barang bekas merupakan salah satu cara untuk mendukung pengelolaan sampah dan daur ulang. Berikut adalah langkah-langkah dalam pembelian anfalan dan barang bekas',
            ],
            [
                'nama' => 'Pemusnahan Dokumen dan Produk Kedaluwarsa',
                'gambar' => 'layanan/RbEgmVL71kDKmz54mObaWtENHVEBpQhDA3NeOLXy.png',
                'link' => 'http://127.0.0.1:8000/pemusnahan-detail',
                'ringkasan' => 'Pemusnahan dokumen dan produk yang telah kedaluwarsa merupakan bagian penting dari manajemen limbah yang aman dan sesuai dengan peraturan',
                'deskripsi' => 'Pemusnahan dokumen dan produk yang telah kedaluwarsa merupakan bagian penting dari manajemen limbah yang aman dan sesuai dengan peraturan',
            ]
        ]);
    }
}
