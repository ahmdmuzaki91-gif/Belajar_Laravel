@extends('layouts.dashboard')

@section('content')

<div class="bg-white rounded-2xl shadow-lg p-8">

    <h1 class="text-3xl font-bold mb-6">
        Edit Portofolio
    </h1>

    <form action="{{ route('portofolio.update', $portofolio->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- Judul -->
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Judul Portofolio
            </label>

            <input type="text"
                   name="judul"
                   value="{{ $portofolio->judul }}"
                   class="border p-3 w-full rounded">
        </div>

        <!-- Deskripsi -->
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Deskripsi
            </label>

            <textarea name="deskripsi"
                      rows="5"
                      class="border p-3 w-full rounded">{{ $portofolio->deskripsi }}</textarea>
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Kategori
            </label>

            <select name="kategori"
                    class="border p-3 w-full rounded">

                <option value="Web"
                    {{ $portofolio->kategori == 'Web' ? 'selected' : '' }}>
                    Web Development
                </option>

                <option value="Mobile"
                    {{ $portofolio->kategori == 'Mobile' ? 'selected' : '' }}>
                    Mobile Development
                </option>

                <option value="UI/UX"
                    {{ $portofolio->kategori == 'UI/UX' ? 'selected' : '' }}>
                    UI/UX Design
                </option>

            </select>
        </div>

        <!-- Thumbnail -->
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Thumbnail Baru
            </label>

            <input type="file"
                   name="thumbnail"
                   class="border p-2 w-full rounded">
        </div>

        <!-- Github -->
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Github
            </label>

            <input type="url"
                   name="github"
                   value="{{ $portofolio->github }}"
                   class="border p-3 w-full rounded">
        </div>

        <!-- Demo -->
        <div class="mb-6">
            <label class="block mb-2 font-medium">
                Demo
            </label>

            <input type="url"
                   name="demo"
                   value="{{ $portofolio->demo }}"
                   class="border p-3 w-full rounded">
        </div>

        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
            Update Portofolio
        </button>

    </form>

</div>

@endsection