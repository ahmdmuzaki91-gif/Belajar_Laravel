<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa; 

class DosenController extends Controller
{
    public function dataMahasiswa()
    {
        $mahasiswaSelesai = Mahasiswa::all();

        return view('dashboard.data-mahasiswa', compact('mahasiswaSelesai'));
    }
}