@extends('layouts.app')

@section('title', $mahasiswa->nama)

@section('content')

<div class="max-w-5xl mx-auto">

    <a href="/"
       class="text-blue-600 hover:text-blue-800 font-medium">
        ← Kembali ke Home
    </a>

    <div class="grid md:grid-cols-3 gap-8 mt-6">

        {{-- FOTO --}}
        <div class="minimal-card p-4">

            @if($mahasiswa->foto)

                <img
                    src="{{ asset('storage/' . $mahasiswa->foto) }}"
                    class="w-full rounded-xl">

            @else

                <div class="h-72 flex items-center justify-center bg-slate-100 rounded-xl">

                    <i class="fas fa-user text-6xl text-slate-400"></i>

                </div>

            @endif

        </div>

        {{-- DATA --}}
        <div class="md:col-span-2">

            <h1 class="text-4xl font-bold text-blue-900">
                {{ $mahasiswa->nama }}
            </h1>

            <p class="text-slate-500 mt-2">
                NIM : {{ $mahasiswa->nim }}
            </p>

            <p class="text-blue-600 font-medium">
                {{ $mahasiswa->prodi }}
            </p>

            {{-- TENTANG --}}
            <div class="minimal-card p-6 mt-6">

                <h2 class="text-xl font-semibold text-blue-900 mb-3">
                    Tentang Mahasiswa
                </h2>

                <p class="text-slate-700">
                    {{ $mahasiswa->tentang }}
                </p>

            </div>

            {{-- SOSIAL MEDIA --}}
            <div class="minimal-card p-6 mt-6">

                <h2 class="text-xl font-semibold text-blue-900 mb-3">
                    Media Sosial
                </h2>

                <div class="flex gap-3">

                    @if($mahasiswa->instagram)
                    <a href="{{ $mahasiswa->instagram }}"
                       target="_blank"
                       class="w-10 h-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif

                    @if($mahasiswa->github)
                    <a href="{{ $mahasiswa->github }}"
                       target="_blank"
                       class="w-10 h-10 rounded-full bg-slate-100 text-slate-700 flex items-center justify-center">
                        <i class="fab fa-github"></i>
                    </a>
                    @endif

                    @if($mahasiswa->linkedin)
                    <a href="{{ $mahasiswa->linkedin }}"
                       target="_blank"
                       class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

@endsection