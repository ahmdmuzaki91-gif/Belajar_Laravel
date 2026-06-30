<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Portofolio;

class DashboardController extends Controller
{
    public function index()
    {
        // Dashboard Dosen
        if (auth()->user()->role == 'dosen') {

            $totalMahasiswa = User::where(
                'role',
                'mahasiswa'
            )->count();

            return view(
                'dashboard.dosen',
                compact('totalMahasiswa')
            );
        }

        // Dashboard Mahasiswa
        $totalPortofolio = Portofolio::where(
            'user_id',
            auth()->id()
        )->count();

        return view(
            'dashboard.mahasiswa',
            compact('totalPortofolio')
        );
    }
}