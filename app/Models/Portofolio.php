<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolios';

    protected $fillable = [
        'user_id',
        'judul',
        'deskripsi',
        'kategori',
        'thumbnail',
        'file_portofolio',
        'github',
        'demo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}