<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biayas')->insert([
            [
                'nama' => 'Retribusi Rumah Tangga',
                'kategori' => 'tps',
                'nominal' => '30.000',
                'item_layanan' => '<ul><li><font color="#6a9955" face="Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">&lt;i class="bi bi-check"&gt;&lt;/i&gt;</span></font>Pengambilan sampah rumah tangga</li><li><font color="#6a9955" face="Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">&lt;i class="bi bi-check"&gt;&lt;/i&gt;</span></font>3&nbsp; Kali Per Minggu</li><li><font color="#6a9955" face="Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">&lt;i class="bi bi-check"&gt;&lt;/i&gt;</span></font>Pembayaran Setiap bulan</li><li><font color="#6a9955" face="Fira Code, Consolas, Courier New, monospace, Consolas, Courier New, monospace"><span style="font-size: 14px; white-space: pre;">&lt;i class="bi bi-check"&gt;&lt;/i&gt;</span></font>Alat Angkut : Tossa</li></ul>',
                'satuan' => 'Per Rumah',
                'keterangan' => 'Direkomendasikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Retribusi Perusahaan',
                'kategori' => 'tps',
                'nominal' => '150.000',
                'item_layanan' => '<p></p><p></p><ul></ul><p></p><ul><li>&lt;i class="bi bi-check"&gt;&lt;/i&gt;Motor roda 3 : Start 150K per pengangkutan</li><li>&lt;i class="bi bi-check"&gt;&lt;/i&gt;Pick Up : Start 500K perpengangkutan</li><li>&lt;i class="bi bi-check"&gt;&lt;/i&gt;Truck : Start 800K per pengangkutan</li></ul>',
                'satuan' => 'Per Angkutan',
                'keterangan' => '-',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Retribusi Sampah B3',
                'kategori' => 'tps',
                'nominal' => '100.000',
                'item_layanan' => '<p><font color="#000000"><span style="background-color: rgb(255, 255, 0);"></span></font></p><p><font color="#000000"><span style="background-color: rgb(255, 255, 0);"></span></font></p><ul></ul><p></p><ul><li><span style="text-align: var(--bs-body-text-align);">&lt;i class="bi bi-check"&gt;&lt;/i&gt;<span style="font-weight: var(--bs-body-font-weight);">TRANSPORTER</span></span></li><li>&lt;i class="bi bi-check"&gt;&lt;/i&gt;PENYIMPANAN B3</li><li>&lt;i class="bi bi-check"&gt;&lt;/i&gt;P<span style="font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">ENGOLAHAN B3</span></li><li>&lt;i class="bi bi-check"&gt;&lt;/i&gt;PEMANFAATAN</li></ul>',
                'satuan' => 'Harga menyesuaikan jenis B3 dan Jarak',
                'keterangan' => '-',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
