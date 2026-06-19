@extends('layouts.dashboard')

@section('title', 'Portofolio Saya')

@section('menu')
<a href="{{ route('portofolio.index') }}"
   class="flex items-center gap-3 p-3 rounded-lg bg-blue-700 text-white">

    <i class="fas fa-folder"></i>
    Portofolio
</a>
@endsection

@section('content')

<div class="bg-white rounded-2xl shadow-lg p-8">

    <h1 class="text-3xl font-bold text-gray-800 mb-2">
        Portofolio Saya
    </h1>

    <p class="text-gray-500 mb-6">
        Kelola portofolio dan karya yang ingin ditampilkan.
    </p>

    <a href="#"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
        + Tambah Portofolio
    </a>

</div>

@endsection