@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="bg-white p-8 rounded-lg shadow">
    <h1 class="text-4xl font-bold text-red-600 mb-4">
        Hubungi Kami
    </h1>

    <form>
        <div class="mb-4">
            <input
                type="text"
                placeholder="Nama"
                class="w-full border p-3 rounded"
            >
        </div>

        <div class="mb-4">
            <input
                type="email"
                placeholder="Email"
                class="w-full border p-3 rounded"
            >
        </div>

        <div class="mb-4">
            <textarea
                class="w-full border p-3 rounded"
                rows="5"
                placeholder="Pesan"
            ></textarea>
        </div>

        <button
            class="bg-blue-600 text-white px-5 py-2 rounded"
        >
            Kirim
        </button>
    </form>
</div>
@endsection