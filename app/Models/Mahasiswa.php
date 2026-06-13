<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'tentang',
        'foto',
        'instagram',
        'github',
        'linkedin',
    ];
}
