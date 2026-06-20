@extends('layouts.dashboard')

@section('content')

<div class="bg-white rounded-2xl shadow-lg p-8">
    <h1 class="text-3xl font-bold mb-6">
        Tambah Portofolio
    </h1>

    <form>
        <input type="text"
               placeholder="Judul Portofolio"
               class="border p-2 w-full mb-4">

        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>
</div>

@endsection