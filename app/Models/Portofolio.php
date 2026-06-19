<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas'; 

    protected $fillable = [
        'user_id', 
        'nama',   
        'nim',
        'prodi', 
        'foto',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}