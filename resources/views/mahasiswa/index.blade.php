@extends('layouts.app')

@section('content')

<div class="mb-6">
    <a href="{{ route('mahasiswa.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
       Tambah Mahasiswa
    </a>
</div>

<table class="w-full border">

    <tr class="bg-gray-100">
        <th class="p-2">Nama</th>
        <th class="p-2">NIM</th>
        <th class="p-2">Aksi</th>
    </tr>

    @foreach($mahasiswa as $mhs)

    <tr>
        <td class="p-2">{{ $mhs->nama }}</td>
        <td class="p-2">{{ $mhs->nim }}</td>

        <td class="p-2">

            <a href="{{ route('mahasiswa.show',$mhs->id) }}">
                Detail
            </a>

            |

            <a href="{{ route('mahasiswa.edit',$mhs->id) }}">
                Edit
            </a>

            |

            <form
                action="{{ route('mahasiswa.destroy',$mhs->id) }}"
                method="POST"
                style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

@endsection