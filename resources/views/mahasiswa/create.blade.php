@extends('layouts.app')

@section('content')

<form action="{{ route('mahasiswa.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <input
        type="text"
        name="nama"
        placeholder="Nama"
        class="border p-2 block mb-3">

    <input
        type="text"
        name="nim"
        placeholder="NIM"
        class="border p-2 block mb-3">

    <input
        type="text"
        name="prodi"
        placeholder="Prodi"
        class="border p-2 block mb-3">

    <textarea
        name="tentang"
        placeholder="Tentang Mahasiswa"
        class="border p-2 block mb-3 w-full">
    </textarea>

    <input
        type="text"
        name="instagram"
        placeholder="Link Instagram"
        class="border p-2 block mb-3 w-full">

    <input
        type="text"
        name="github"
        placeholder="Link Github"
        class="border p-2 block mb-3 w-full">

    <input
        type="text"
        name="linkedin"
        placeholder="Link Linkedin"
        class="border p-2 block mb-3 w-full">
    <div class="mb-3">
    <label class="block mb-1">
        Foto Mahasiswa
    </label>

    <input
        type="file"
        name="foto"
        class="border p-2 w-full">
    </div>
    <button
        class="bg-blue-600 text-white px-4 py-2">
        Simpan
    </button>

</form>

@endsection