<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'judul' => 'Optimalisasi Pengolahan Sampah Terpadu TPS 3R BUMDes Makmur Jaya',
                'ringkasan' => 'BUMDes Makmur Jaya terus berinovasi dalam mengolah sampah organik dan anorganik untuk mewujudkan lingkungan Desa Sidomojo yang bersih, sehat, dan bernilai ekonomis.',
                'isi' => '<p>Unit usaha Tempat Pengolahan Sampah Reduce, Reuse, Recycle (TPS 3R) BUMDes Makmur Jaya terus meningkatkan kapasitas pengolahan sampah harian warga. Dengan dukungan armada pengangkutan dan mesin pemilah modern, sampah rumah tangga kini diproses secara mandiri.</p><p>Hasil pemilahan sampah organik diolah menjadi pupuk kompos yang dapat dimanfaatkan langsung oleh petani desa, sedangkan sampah anorganik seperti plastik dan kardus dipadatkan untuk didistribusikan ke pabrik daur ulang mitra.</p><p>Direktur BUMDes Makmur Jaya menyampaikan bahwa partisipasi aktif warga dalam memilah sampah dari rumah menjadi kunci utama kesuksesan program ramah lingkungan ini.</p>',
                'gambar' => null,
                'kategori' => 'Lingkungan',
                'penulis' => 'Humas BUMDes',
                'status' => 'publish',
                'tanggal_publikasi' => now()->subDays(3)->format('Y-m-d'),
                'views' => 125,
            ],
            [
                'judul' => 'Pengembangan Unit Usaha Ketahanan Pangan Desa Sidomojo',
                'ringkasan' => 'BUMDes Makmur Jaya meresmikan program ketahanan pangan desa guna menyediakan pasokan sembako terjangkau dan berkualitas bagi masyarakat.',
                'isi' => '<p>Dalam rangka mendukung ketahanan pangan lokal, BUMDes Makmur Jaya meluncurkan unit distribusi pangan yang menyediakan beras kualitas super, minyak goreng, gula, dan telur dengan harga stabil dan terjangkau.</p><p>Program ini bekerja sama langsung dengan kelompok tani dan produsen lokal sehingga mampu memotong rantai pasok dan memberikan harga terbaik bagi warga desa Sidomojo dan sekitarnya.</p>',
                'gambar' => null,
                'kategori' => 'Ekonomi Desa',
                'penulis' => 'Admin BUMDes',
                'status' => 'publish',
                'tanggal_publikasi' => now()->subDays(7)->format('Y-m-d'),
                'views' => 84,
            ],
            [
                'judul' => 'Sosialisasi Program Simpan Pinjam Modal Usaha UMKM Desa',
                'ringkasan' => 'BUMDes Makmur Jaya memberikan fasilitas permodalan lunak bagi para pelaku usaha mikro kecil guna mendorong pertumbuhan ekonomi warga desa.',
                'isi' => '<p>Guna mendorong kemandirian ekonomi masyarakat, BUMDes Makmur Jaya menggelar sosialisasi kemudahan akses pinjaman modal usaha tanpa agunan yang memberatkan bagi pedagang dan pelaku UMKM desa.</p><p>Diharapkan melalui program ini, usaha rumahan warga dapat berkembang lebih pesat dan menciptakan lapangan kerja baru di lingkungan desa.</p>',
                'gambar' => null,
                'kategori' => 'Pemberdayaan',
                'penulis' => 'Pengelola Unit Simpan Pinjam',
                'status' => 'publish',
                'tanggal_publikasi' => now()->subDays(14)->format('Y-m-d'),
                'views' => 210,
            ],
        ];

        foreach ($articles as $art) {
            $slug = Str::slug($art['judul']);
            Berita::firstOrCreate(
                ['slug' => $slug],
                array_merge($art, ['slug' => $slug])
            );
        }
    }
}
