@extends('layouts.dashboard')

@section('content')
<div class="bg-gradient-to-r from-indigo-700 to-blue-600 text-white rounded-3xl p-10 shadow-lg mb-8">
    <p class="uppercase tracking-widest text-blue-100">
        Dashboard Dosen
    </p>
    <h1 class="text-4xl font-bold mt-2">
        Data Mahasiswa (Sudah Kirim Portofolio)
    </h1>
</div>

<div class="bg-white rounded-2xl shadow overflow-hidden">
    <div class="p-6 border-b border-gray-100 bg-gray-50">
        <h3 class="font-bold text-gray-700 text-lg">Daftar Mahasiswa Aktif</h3>
    </div>
    
    <div class="overflow-x-auto p-6">
        <table class="w-full text-left border-collapse text-sm">
            <thead>
                <tr class="bg-gray-100 text-gray-600 uppercase text-xs font-semibold border-b">
                    <th class="p-4">No</th>
                    <th class="p-4">Nama Lengkap</th>
                    <th class="p-4">Email</th>
                    <th class="p-4 text-center">Status Portofolio</th>
                </tr>
            </thead>
     <tbody class="text-gray-700">
        @forelse($mahasiswaSelesai as $index => $mhs)
        <tr class="border-b hover:bg-gray-50 transition duration-150">
            <td class="p-4">{{ $index + 1 }}</td>
            <td class="p-4 font-semibold text-gray-900">{{ $mhs->nama }}</td>
            <td class="p-4">{{ $mhs->nim }}</td>
            <td class="p-4">{{ $mhs->prodi }}</td>
            <td class="p-4 text-center">
                <span class="bg-green-100 text-green-800 py-1 px-3 rounded-full text-xs font-bold shadow-sm">
                    Sudah Dikirim
                </span>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="p-10 text-center text-gray-400 font-medium">
                Belum ada data mahasiswa.
            </td>
        </tr>
    @endforelse
</tbody>
        </table>
    </div>
</div>
@endsection