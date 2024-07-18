<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tentang')->insert([
            [
                'judul' => 'BUMDesa Makmur Jaya SIDOMOJO',
                'deskripsi' => '"<p class="fst-italic" style="margin-bottom: 1rem; color: rgb(61, 67, 72); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;"><b>Bumdes Makmur Jaya Sidomojo adalah sebuah badan usaha milik desa yang bergerak dalam berbagai sektor ekonomi untuk meningkatkan kesejahteraan masyarakat desa. Dibentuk dengan tujuan utama untuk menciptakan lapangan kerja dan mengoptimalkan potensi lokal, Bumdes Makmur Jaya Sidomojo berhasil menjalankan berbagai program unggulan.Program tersebut meliputi :</b></p><ul style="padding: 0px; margin-bottom: 1rem; list-style: none;"><li style="color: rgb(61, 67, 72); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; padding-bottom: 10px;"><b><i class="bi bi-check-circle" style="font-size: 1.25rem; margin-right: 4px; color: var(--accent-color);"></i><span style="font-family: &quot;Comic Sans MS&quot;;">&nbsp;Pengelolaan sampah.</span></b></li><li style="color: rgb(61, 67, 72); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; padding-bottom: 10px;"><b><i class="bi bi-check-circle" style="font-size: 1.25rem; margin-right: 4px; color: var(--accent-color);"></i>&nbsp;Persewaan toko.</b></li><li style="padding-bottom: 10px;"><b><font color="rgba(0, 0, 0, 0)" face="Roboto, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji"><span style="font-size: 1.25rem;"><i class="bi bi-check-circle" style="font-size: 1.25rem; margin-right: 4px; color: var(--accent-color);"></i></span></font><font color="#3d4348" face="Roboto, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji"><span style="font-size: 16px;">&nbsp;Penyediaan layanan keuangan mikro.</span></font><br></b><br><br></li></ul>",',
                'gambar1' => 'tentang/about-company-1.jpg',
                'gambar2' => 'tentang/about-company-2.jpg',
                'gambar3' => 'tentang/about-company-3.jpg',
                'kategori' => 'tentang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}