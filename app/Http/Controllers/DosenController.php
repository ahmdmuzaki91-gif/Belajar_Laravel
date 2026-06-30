<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mahasiswa; 
use App\Models\Portofolio;

class DosenController extends Controller
{
   public function dataMahasiswa()
{
    $mahasiswaSelesai = Portofolio::with('user')->get();

    return view('dashboard.data-mahasiswa', compact('mahasiswaSelesai'));
}
}