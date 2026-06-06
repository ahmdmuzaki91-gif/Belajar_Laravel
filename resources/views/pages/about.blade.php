@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')

<div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-8 mt-10">

    <div class="text-center">
        <div class="w-24 h-24 mx-auto bg-green-500 rounded-full flex items-center justify-center text-white text-4xl font-bold">
            R
        </div>

        <h1 class="text-3xl font-bold mt-4 text-gray-800">
            Ria Adriani
        </h1>

        <p class="text-gray-500">
            Mahasiswa Teknik Informatika
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-semibold text-green-600 mb-4">
            Data Mahasiswa
        </h2>

        <div class="space-y-4">

            <div class="flex justify-between border-b pb-2">
                <span class="font-semibold">Nama</span>
                <span>Ria Adriani</span>
            </div>

            <div class="flex justify-between border-b pb-2">
                <span class="font-semibold">NIM</span>
                <span>F1A250008</span>
            </div>

            <div class="flex justify-between border-b pb-2">
                <span class="font-semibold">Program Studi</span>
                <span>Teknik Informatika</span>
            </div>

            <div class="flex justify-between border-b pb-2">
                <span class="font-semibold">Universitas</span>
                <span>Universitas Al-Ghifari</span>
            </div>

        </div>
    </div>

    <div class="mt-8 bg-green-50 p-4 rounded-lg">
        <h2 class="text-lg font-semibold text-green-700 mb-2">
            Tentang Saya
        </h2>

        <p class="text-gray-700">
            Saya adalah mahasiswa Program Studi Teknik Informatika Universitas Al-Ghifari.
            Saat ini saya sedang mempelajari pemprograman web , alasan saya mempelajari pemprograman web karena ingin membuuat web sendiri dan untuk meningkatkan karier di masa depan.
    .
        </p>
    </div>

</div>

@endsection