<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';

    protected $fillable = [
        'judul',
        'slug',
        'ringkasan',
        'isi',
        'gambar',
        'kategori',
        'penulis',
        'status',
        'views',
        'tanggal_publikasi',
    ];

    protected $casts = [
        'tanggal_publikasi' => 'date',
    ];

    /**
     * Scope for published news
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'publish');
    }

    /**
     * Helper to get short snippet
     */
    public function getExcerptAttribute(): string
    {
        if (!empty($this->ringkasan)) {
            return $this->ringkasan;
        }
        return Str::limit(strip_tags($this->isi), 120);
    }
}
