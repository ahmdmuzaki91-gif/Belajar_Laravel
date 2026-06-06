@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')

<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-10">

    <div class="text-center">
        <div class="w-32 h-32 mx-auto bg-blue-100 rounded-full flex items-center justify-center text-5xl font-bold text-blue-600">
            A
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mt-4">
            Annisa Nurul Aulia
        </h1>

        <p class="text-gray-500">
            Mahasiswa Teknik Informatika
        </p>
    </div>

    <div class="mt-8">
        <h2 class="text-xl font-semibold text-blue-600 mb-4">
            Data Mahasiswa
        </h2>

        <div class="space-y-3">

            <div class="flex justify-between border-b pb-2">
                <span class="font-medium">Nama</span>
                <span>Annisa Nurul Aulia</span>
            </div>

            <div class="flex justify-between border-b pb-2">
                <span class="font-medium">NIM</span>
                <span>F1A250018</span>
            </div>

            <div class="flex justify-between border-b pb-2">
                <span class="font-medium">Program Studi</span>
                <span>Teknik Informatika</span>
            </div>

        </div>
    </div>

    <div class="mt-8 bg-blue-50 p-4 rounded-lg">
        <h2 class="text-lg font-semibold text-blue-700 mb-2">
            Tentang Saya
        </h2>

        <p class="text-gray-700">
            Saya adalah mahasiswa Teknik Informatika yang sedang mempelajari
            pengembangan web.
            Saya tertarik untuk mengembangkan aplikasi web yang modern dan mudah digunakan.
        </p>
    </div>

</div>

@endsection