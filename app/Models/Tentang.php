<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;
    protected $table = 'tentang';
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar1',
        'gambar2',
        'gambar3',
        'nomor_telpon',
        'kategori'
    ];
}
