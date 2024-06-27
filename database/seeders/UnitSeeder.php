<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'nama' => 'TPS 3R - Tempat Pengolahan Sampah - Reduce, Reuse, Recycle',
                'gambar' => 'unit/CPd5cUCnPyXvKvpdx3iTtdcqvbtQRkVyrbh50Ycm.jpg',
                'link' => 'http://127.0.0.1:8000/tps3r-detail',
                'deskripsi' => 'TPS 3R (Tempat Pengolahan Sampah - Reduce, Reuse, Recycle) adalah fasilitas pengolahan sampah yang bertujuan untuk mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir (TPA) melalui pendekatan pengurangan, penggunaan kembali, dan daur ulang. Berikut adalah penjelasan dari setiap elemen TPS 3R',
                'ringkasan' => 'TPS 3R (Tempat Pengolahan Sampah - Reduce, Reuse, Recycle) adalah fasilitas pengolahan sampah yang bertujuan untuk mengurangi jumlah sampah.',
            ],
            [
                'nama' => 'Unit Simpan Pinjam',
                'gambar' => 'unit/6XTHuh7WPiSVTOFXdRgzyz8ohC2JjHwymgjrqwb2.jpg',
                'link' => 'http://127.0.0.1:8000/toko-detail',
                'deskripsi' => 'Unit Simpan Pinjam (USP) adalah bagian dari lembaga keuangan mikro yang menyediakan layanan keuangan seperti simpanan dan pinjaman kepada anggotanya.',
                'ringkasan' => 'Unit Simpan Pinjam (USP) adalah bagian dari lembaga keuangan mikro yang menyediakan layanan keuangan seperti simpanan dan pinjaman kepada anggotanya.',

            ],
            [
                'nama' => 'Persewaan Toko Pasar Desa',
                'gambar' => 'unit/RbEgmVL71kDKmz54mObaWtENHVEBpQhDA3NeOLXy.png',
                'link' => 'http://127.0.0.1:8000/toko-detail',
                'deskripsi' => 'Fungsi dan Peran: Pusat Ekonomi: Pasar desa adalah tempat utama bagi warga desa untuk melakukan kegiatan jual beli. Ini termasuk hasil pertanian, produk peternakan, kerajinan tangan, dan barang kebutuhan sehari-hari. Sosial dan Budaya: Selain fungsi ekonominya, pasar desa juga berfungsi sebagai tempat bertemunya warga desa, memperkuat ikatan sosial, dan melestarikan budaya lokal melalui transaksi yang sering kali dilakukan dengan cara tradisional.',
                'ringkasan' => 'Pasar desa merupakan pasar tradisional yang terletak di wilayah pedesaan. Pasar ini berfungsi sebagai pusat ekonomi lokal di mana warga desa dapat menjual dan membeli berbagai barang dan jasa',
            ],
        ]);
    }
}
