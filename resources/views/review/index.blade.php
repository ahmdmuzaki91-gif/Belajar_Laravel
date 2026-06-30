@extends('layouts.dashboard')

@section('content')

<div class="bg-white rounded-2xl shadow-lg p-8">

    <h1 class="text-3xl font-bold text-gray-800 mb-6">
        Review Portofolio Mahasiswa
    </h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-5">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">

        <table class="w-full border-collapse">

            <thead>
                <tr class="bg-blue-600 text-white">
                    <th class="p-4">Mahasiswa</th>
                    <th class="p-4">Judul</th>
                    <th class="p-4">Kategori</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Aksi</th>
                </tr>
            </thead>

            <tbody>

            @foreach($portofolios as $item)

                <tr class="border-b">

                    <td class="p-4">
                        {{ $item->user->name }}
                    </td>

                    <td class="p-4">
                        {{ $item->judul }}
                    </td>

                    <td class="p-4">
                        {{ $item->kategori }}
                    </td>

                    <td class="p-4">

                        @if($item->status == 'pending')
                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                Menunggu Review
                            </span>

                        @elseif($item->status == 'approved')
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                Disetujui
                            </span>

                        @else
                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                                Ditolak
                            </span>
                        @endif

                    </td>

                    <td class="p-4">

    @if($item->status == 'pending')

        <div class="flex gap-2">

            <form action="{{ route('review.approve',$item->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <button class="bg-green-600 hover:bg-green-700 text-white px-3 py-2 rounded">
                    Approve
                </button>
            </form>

            <form action="{{ route('review.reject',$item->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded">
                    Tolak
                </button>
            </form>

        </div>

    @else

        <span class="text-gray-500 italic">
            Sudah direview
        </span>

    @endif

</td>
                </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection