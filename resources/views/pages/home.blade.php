@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="text-center py-16">
    <h1 class="text-5xl font-bold text-blue-600 mb-4">
        Selamat Datang
    </h1>

    <p class="text-gray-600 text-lg mb-8">
        Website sederhana menggunakan Laravel 12 dan Tailwind CSS.
    </p>

    <a href="/about"
       class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
        Pelajari Lebih Lanjut
    </a>
</div>

<div class="grid md:grid-cols-3 gap-6 mt-12">

    <div class="bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-xl font-semibold mb-3 text-blue-600">
            Laravel
        </h2>
        <p class="text-gray-600">
            Framework PHP modern yang memudahkan pengembangan web.
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-xl font-semibold mb-3 text-green-600">
            Tailwind CSS
        </h2>
        <p class="text-gray-600">
            Framework CSS utility-first untuk membuat tampilan modern.
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-xl font-semibold mb-3 text-purple-600">
            GitHub
        </h2>
        <p class="text-gray-600">
            Memudahkan kolaborasi dan manajemen versi project.
        </p>
    </div>

</div>

@endsection