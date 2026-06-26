@extends('layouts.dashboard')

@section('content')

<div class="bg-white rounded-2xl shadow-lg p-8">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Portofolio Saya
            </h1>
            <p class="text-gray-500 mt-1">
                Kelola seluruh proyek dan karya yang pernah Anda buat.
            </p>
        </div>

        <a href="{{ route('portofolio.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">
            + Tambah Portofolio
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($portofolios->count())

    <div class="overflow-x-auto">
        <table class="w-full border-collapse">

            <thead>
                <tr class="bg-blue-600 text-white">
                    <th class="p-4 text-left">Thumbnail</th>
                    <th class="p-4 text-left">Judul</th>
                    <th class="p-4 text-left">Kategori</th>
                    <th class="p-4 text-left">Github</th>
                    <th class="p-4 text-left">Demo</th>
                    <th class="p-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>

            @foreach($portofolios as $portofolio)

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-4">
                        @if($portofolio->thumbnail)
                            <img src="{{ asset('storage/'.$portofolio->thumbnail) }}"
                                 alt="thumbnail"
                                 class="w-24 h-16 object-cover rounded-lg shadow">
                        @else
                            <span class="text-gray-400">
                                Tidak ada gambar
                            </span>
                        @endif
                    </td>

                    <td class="p-4">
                        <div class="font-semibold text-gray-800">
                            {{ $portofolio->judul }}
                        </div>

                        <div class="text-sm text-gray-500">
                            {{ Str::limit($portofolio->deskripsi, 60) }}
                        </div>
                    </td>

                    <td class="p-4">
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                            {{ $portofolio->kategori }}
                        </span>
                    </td>

                    <td class="p-4">
                        @if($portofolio->github)
                            <a href="{{ $portofolio->github }}"
                               target="_blank"
                               class="text-blue-600 hover:underline">
                                Github
                            </a>
                        @else
                            -
                        @endif
                    </td>

                    <td class="p-4">
                        @if($portofolio->demo)
                            <a href="{{ $portofolio->demo }}"
                               target="_blank"
                               class="text-green-600 hover:underline">
                                Demo
                            </a>
                        @else
                            -
                        @endif
                    </td>

                    <td class="p-4">
                        <div class="flex justify-center gap-2">

                            <a href="{{ route('portofolio.edit', $portofolio->id) }}"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">
                                Edit
                            </a>

                            <form action="{{ route('portofolio.destroy', $portofolio->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus portofolio ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded">
                                    Hapus
                                </button>

                            </form>

                        </div>
                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>
    </div>

    @else

    <div class="text-center py-20">

        <div class="text-6xl mb-4">
            📁
        </div>

        <h2 class="text-2xl font-semibold text-gray-700">
            Belum Ada Portofolio
        </h2>

        <p class="text-gray-500 mt-2 mb-6">
            Tambahkan proyek pertama Anda untuk ditampilkan di portal.
        </p>

        <a href="{{ route('portofolio.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
            Tambah Portofolio
        </a>

    </div>

    @endif

</div>

@endsection