@extends('layouts.app')

@section('content')

<div class="max-w-2xl mx-auto">

    <h1 class="text-3xl font-bold text-blue-900 mb-6">
        Edit Mahasiswa
    </h1>

    <form
        action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
        method="POST"
        enctype="multipart/form-data"
        class="minimal-card p-6 space-y-4">

        @csrf
        @method('PUT')

        <div>
            <label class="block mb-2 font-medium">
                Nama
            </label>

            <input
                type="text"
                name="nama"
                value="{{ old('nama', $mahasiswa->nama) }}"
                class="w-full border rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                NIM
            </label>

            <input
                type="text"
                name="nim"
                value="{{ old('nim', $mahasiswa->nim) }}"
                class="w-full border rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Program Studi
            </label>

            <input
                type="text"
                name="prodi"
                value="{{ old('prodi', $mahasiswa->prodi) }}"
                class="w-full border rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Tentang Mahasiswa
            </label>

            <textarea
                name="tentang"
                rows="5"
                class="w-full border rounded-lg p-3">{{ old('tentang', $mahasiswa->tentang) }}</textarea>
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Instagram
            </label>

            <input
                type="text"
                name="instagram"
                value="{{ old('instagram', $mahasiswa->instagram) }}"
                class="w-full border rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                GitHub
            </label>

            <input
                type="text"
                name="github"
                value="{{ old('github', $mahasiswa->github) }}"
                class="w-full border rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                LinkedIn
            </label>

            <input
                type="text"
                name="linkedin"
                value="{{ old('linkedin', $mahasiswa->linkedin) }}"
                class="w-full border rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Foto Mahasiswa
            </label>

            @if($mahasiswa->foto)
                <img
                    src="{{ asset('storage/'.$mahasiswa->foto) }}"
                    alt="Foto Mahasiswa"
                    class="w-40 rounded-lg mb-3">
            @endif

            <input
                type="file"
                name="foto"
                class="w-full border rounded-lg p-3">
        </div>

        <div class="flex gap-3 pt-4">

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">

                Update Data

            </button>

            <a
                href="{{ route('mahasiswa.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg">

                Batal

            </a>

        </div>

    </form>

</div>

@endsection