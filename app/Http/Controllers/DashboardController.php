<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == 'dosen')
        {
            $totalMahasiswa = User::where('role', 'mahasiswa')->count();

            return view('dashboard.dosen', compact('totalMahasiswa'));
        }

        return view('dashboard.mahasiswa');
    }
}