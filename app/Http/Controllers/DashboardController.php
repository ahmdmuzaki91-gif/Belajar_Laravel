<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Portofolio;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'dosen') {

    $totalMahasiswa = User::where('role', 'mahasiswa')->count();

    $totalPortofolio = Portofolio::count();

    $totalDisetujui = Portofolio::where('status', 'approved')->count();

    $totalPending = Portofolio::where('status', 'pending')->count();

    return view('dashboard.dosen', compact(
        'totalMahasiswa',
        'totalPortofolio',
        'totalDisetujui',
        'totalPending'
    ));
}

        $portofolio = Portofolio::where('user_id', auth()->id())->get();

        return view('dashboard.mahasiswa', compact('portofolio'));
    }
}