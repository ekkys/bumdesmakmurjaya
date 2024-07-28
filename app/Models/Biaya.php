<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;
    protected $tabel = 'biayas';
    protected $fillable = [
        'nama',
        'kategori',
        'nominal',
        'item_layanan',
        'satuan',
        'keterangan',
    ];
}
