@extends('layouts.dashboard')

@section('content')

<div class="bg-gradient-to-r from-blue-700 to-blue-500 text-white rounded-3xl p-10 shadow-lg">

    <p class="uppercase tracking-widest text-blue-100">
        Portal Mahasiswa
    </p>

    <h1 class="text-5xl font-bold mt-2">
        Selamat Datang,
        {{ Auth::user()->name }}
    </h1>

    <p class="mt-4 text-lg text-blue-100">
        Sistem Pengumpulan Portofolio Mahasiswa Teknik Informatika
    </p>

</div>

<div class="grid md:grid-cols-3 gap-6 mt-8">

    <div class="bg-white rounded-2xl shadow p-6">

        <h3 class="text-gray-500">
            Total Portofolio
        </h3>

        <p class="text-4xl font-bold text-blue-600 mt-2">
            {{ $portofolio->count() }}
        </p>

    </div>

    <div class="bg-white rounded-2xl shadow p-6">

        <h3 class="text-gray-500">
            Status Akun
        </h3>

        <p class="text-2xl font-bold text-green-600 mt-2">
            Aktif
        </p>

    </div>

    <div class="bg-white rounded-2xl shadow p-6">

        <h3 class="text-gray-500">
            Role
        </h3>

        <p class="text-2xl font-bold text-slate-700 mt-2">
            Mahasiswa
        </p>

    </div>

</div>

@endsection