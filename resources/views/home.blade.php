@extends('layouts.app')

@section('content')
<section class="hero-bg rounded-3xl p-16 text-center text-white">

    <p class="uppercase tracking-[5px] text-white/70 text-sm mb-4">
        PORTAL PORTOFOLIO
    </p>

    <h1 class="text-6xl font-extrabold text-white leading-tight">
        Pengumpulan Tugas
        <br>
        Portofolio Mahasiswa
    </h1>

    <p class="text-xl text-white/80 max-w-3xl mx-auto mt-8 leading-relaxed">
        Portal pengumpulan dan publikasi tugas portofolio mahasiswa
        Teknik Informatika. Setiap mahasiswa dapat mengelola profil,
        menampilkan kompetensi, serta mendokumentasikan hasil tugas
        dan pengalaman proyek secara terstruktur.
    </p>

    <div class="flex justify-center gap-12 mt-10">

        <div class="text-center">
        <h3 class="text-3xl font-bold text-white">
            {{ $mahasiswa->count() }}
        </h3>
        <p class="text-white/80">Mahasiswa</p>
        </div>
        <div>
            <h3 class="text-3xl font-bold">Laravel</h3>
            <p>Framework</p>
        </div>

        <div>
            <h3 class="text-3xl font-bold">2026</h3>
            <p>Tahun</p>
        </div>

    </div>

</section>
    <div class="flex justify-center gap-4 mt-8">

    <a
        href="{{ route('mahasiswa.create') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium">

        <i class="fas fa-plus mr-2"></i>
        Tambah Mahasiswa

    </a>

    <a
        href="{{ route('mahasiswa.index') }}"
        class="bg-slate-600 hover:bg-slate-700 text-white px-6 py-3 rounded-lg font-medium">

        <i class="fas fa-table mr-2"></i>
        Kelola Data

    </a>

</div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">

    @forelse($mahasiswa as $mhs)

    <div class="minimal-card p-8 text-center">

        <div
            class="w-20 h-20 rounded-full bg-blue-100 mx-auto mb-4 flex items-center justify-center">

            @if($mhs->foto)

            <img
            src="{{ asset('storage/'.$mhs->foto) }}"
            class="w-20 h-20 rounded-full object-cover">

            @else

            <i class="fas fa-user text-blue-700 text-2xl"></i>

            @endif

        </div>

        <h3 class="text-xl font-bold text-slate-800">
            {{ $mhs->nama }}
        </h3>

        <p class="text-gray-500">
            {{ $mhs->nim }}
        </p>

        <p class="text-blue-600 mt-2">
            {{ $mhs->prodi }}
        </p>

        <a
            href="{{ route('mahasiswa.show', $mhs->id) }}"
            class="inline-block mt-5 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">

            Lihat Profil

        </a>

    </div>

    @empty

    <div class="col-span-3 text-center">

        <p class="text-gray-500">
            Belum ada data mahasiswa
        </p>

    </div>

    @endforelse

    </div>


<script>
document.addEventListener('DOMContentLoaded',()=>{

anime({
targets:'#hero-title',
translateY:[50,0],
opacity:[0,1],
duration:1500,
easing:'easeOutExpo'
});

anime({
targets:'.profile-card',
translateY:[100,0],
opacity:[0,1],
delay:anime.stagger(200),
duration:1200,
easing:'easeOutExpo'
});

});
</script>
@endsection