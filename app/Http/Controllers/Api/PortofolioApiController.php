<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioApiController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        return response()->json(
            Portofolio::all()
        );
    }

    // Menampilkan satu data
    public function show($id)
    {
        return response()->json(
            Portofolio::findOrFail($id)
        );
    }

    // Menambah data
    public function store(Request $request)
    {
        $portofolio = Portofolio::create($request->all());

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $portofolio
        ]);
    }

    // Update
    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        $portofolio->update($request->all());

        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $portofolio
        ]);
    }

    // Hapus
    public function destroy($id)
    {
        Portofolio::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus'
        ]);
    }
}