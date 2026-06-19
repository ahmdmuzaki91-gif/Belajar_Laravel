<?php

namespace App\Http\Controllers;

use App\Models\User;

class DosenController extends Controller
{
    public function index()
    {
        $mahasiswa = User::where('role', 'mahasiswa')->get();

        $totalMahasiswa = $mahasiswa->count();

        return view('dashboard.dosen', compact(
            'mahasiswa',
            'totalMahasiswa'
        ));
    }
}