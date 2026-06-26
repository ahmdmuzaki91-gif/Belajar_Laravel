<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::latest()->get();

        return view('portofolio.index', compact('portofolios'));
    }

    public function create()
    {
        return view('portofolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'nullable|image',
            'file_portofolio' => 'nullable|mimes:pdf,doc,docx,ppt,pptx,zip'
        ]);

        $thumbnail = null;
        $file = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')
                ->store('thumbnail', 'public');
        }

        if ($request->hasFile('file_portofolio')) {
            $file = $request->file('file_portofolio')
                ->store('portfolio_files', 'public');
        }

        Portofolio::create([
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'thumbnail' => $thumbnail,
            'file_portofolio' => $file,
            'github' => $request->github,
            'demo' => $request->demo,
        ]);

        return redirect()
            ->route('portofolio.index')
            ->with('success', 'Portofolio berhasil ditambahkan');
    }

    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);

        return view('portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $thumbnail = $portofolio->thumbnail;
        $file = $portofolio->file_portofolio;

        if ($request->hasFile('thumbnail')) {

            if ($thumbnail) {
                Storage::disk('public')->delete($thumbnail);
            }

            $thumbnail = $request->file('thumbnail')
                ->store('thumbnail', 'public');
        }

        if ($request->hasFile('file_portofolio')) {

            if ($file) {
                Storage::disk('public')->delete($file);
            }

            $file = $request->file('file_portofolio')
                ->store('portfolio_files', 'public');
        }

        $portofolio->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'thumbnail' => $thumbnail,
            'file_portofolio' => $file,
            'github' => $request->github,
            'demo' => $request->demo,
        ]);

        return redirect()
            ->route('portofolio.index')
            ->with('success', 'Portofolio berhasil diperbarui');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::findOrFail($id);

        if ($portofolio->thumbnail) {
            Storage::disk('public')
                ->delete($portofolio->thumbnail);
        }

        if ($portofolio->file_portofolio) {
            Storage::disk('public')
                ->delete($portofolio->file_portofolio);
        }

        $portofolio->delete();

        return redirect()
            ->route('portofolio.index')
            ->with('success', 'Portofolio berhasil dihapus');
    }
}