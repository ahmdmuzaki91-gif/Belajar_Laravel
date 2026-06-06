@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')

<div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-8 mt-10">

    <div class="text-center">
        <div class="w-24 h-24 mx-auto bg-blue-500 rounded-full flex items-center justify-center text-white text-4xl font-bold">
            A
        </div>

        <h1 class="text-3xl font-bold mt-4 text-gray-800">
            Annisa Nurul Aulia
        </h1>

        <p class="text-gray-500">
            Mahasiswa Teknik Informatika
        </p>
    </div>

    <div class="mt-8 space-y-4">
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Nama</span>
            <span>Annisa Nurul Aulia</span>
        </div>

        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">NIM</span>
            <span>F1A250018</span>
        </div>

        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Program Studi</span>
            <span>Teknik Informatika</span>
        </div>
    </div>

</div>

@endsection