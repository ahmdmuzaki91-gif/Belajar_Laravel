<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class ReviewPortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::with('user')->latest()->get();

        return view('review.index', compact('portofolios'));
    }

    public function approve($id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $portofolio->update([
            'status' => 'approved'
        ]);

        return redirect()->back()->with('success', 'Portofolio berhasil disetujui.');
    }

    public function reject($id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $portofolio->update([
            'status' => 'rejected'
        ]);

        return redirect()->back()->with('success', 'Portofolio berhasil ditolak.');
    }
}