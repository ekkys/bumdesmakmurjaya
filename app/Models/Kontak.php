<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontaks';
    protected $fillable = [
        'alamat',
        'telpon',
        'maps',
        'email',
        'youtube',
        'whatsapp',
        'instagram',
        'facebook',
        'tiktok',
    ];
}