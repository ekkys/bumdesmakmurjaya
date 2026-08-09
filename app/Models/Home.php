<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{
    use HasFactory;

    protected $table = 'home';

    protected $fillable = [
        'gambar',
        'hero_background',
        'judul',
        'quote',
        'hashtag',
        'link',
    ];

    /**
     * Get URL for Hero Background Image with fallback
     */
    public function getHeroBgUrlAttribute(): string
    {
        if (!empty($this->hero_background) && Storage::disk('public')->exists($this->hero_background)) {
            return Storage::url($this->hero_background);
        }
        return asset('assets/img/hero-bg-light.webp');
    }
}
