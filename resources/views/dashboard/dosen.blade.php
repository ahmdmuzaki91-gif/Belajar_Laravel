@extends('layouts.dashboard')

@section('content')

<div class="bg-gradient-to-r from-indigo-700 to-blue-600 text-white rounded-3xl p-10 shadow-lg">

    <p class="uppercase tracking-widest text-blue-100">
        Dashboard Dosen
    </p>

    <h1 class="text-5xl font-bold mt-2">
        Selamat Datang,
        {{ Auth::user()->name }}
    </h1>

</div>

<div class="grid md:grid-cols-4 gap-6 mt-8">

    <div class="bg-white rounded-2xl shadow p-6">

        <h3 class="text-gray-500">
            Total Mahasiswa
        </h3>

        <p class="text-4xl font-bold text-blue-600 mt-2">
            {{ $totalMahasiswa }}
        </p>

    </div>

    <div class="bg-white rounded-2xl shadow p-6">

        <h3 class="text-gray-500">
            Portofolio
        </h3>

        <p class="text-4xl font-bold text-green-600 mt-2">
            {{ $totalPortofolio }}
        </p>

    </div>

    <div class="bg-white rounded-2xl shadow p-6">

        <h3 class="text-gray-500">
            Disetujui
        </h3>

        <p class="text-4xl font-bold text-indigo-600 mt-2">
        {{ $totalDisetujui }}
        </p>
    </div>

    <div class="bg-white rounded-2xl shadow p-6">

        <h3 class="text-gray-500">
            Menunggu Review
        </h3>

        <p class="text-4xl font-bold text-orange-500 mt-2">
        {{ $totalPending }}
        </p>

    </div>

</div>

@endsection