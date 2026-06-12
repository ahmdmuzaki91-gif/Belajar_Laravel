@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<div class="text-center max-w-2xl mx-auto my-12" data-aos="fade-up">
    <span class="text-xs font-bold tracking-widest text-cyan-500 uppercase code-font">PORTAL MAHASISWA</span>
    <h1 id="hero-title"
class="text-4xl md:text-5xl font-extrabold tracking-tight text-white mt-3 mb-4">
        Direktori Mahasiswa <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-700 to-sky-500">Program Studi Teknik Informatika</span>
    </h1>
    <p class="text-gray-400 text-sm md:text-base leading-relaxed">
        Selamat datang di platform repositori profil kelompok kami. Pilih salah satu entitas di bawah untuk melihat detail keahlian, riwayat, dan kontak medsos secara spesifik.
    </p>
        <div class="flex justify-center gap-10 mt-8">

        <div class="text-center">
            <h3 class="text-cyan-400 text-2xl font-bold">3</h3>
            <p class="text-xs text-gray-500">Mahasiswa</p>
        </div>

        <div class="text-center">
            <h3 class="text-blue-700 text-2xl font-bold">Laravel</h3>
            <p class="text-xs text-gray-500">Framework</p>
        </div>

        <div class="text-center">
            <h3 class="text-cyan-400 text-2xl font-bold">2026</h3>
            <p class="text-xs text-gray-500">Tugas Akhir</p>
        </div>

    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto mt-16">
    
    <div class="minimal-card profile-card p-6 rounded-2xl flex flex-col justify-between">
        <div>
            <div class="text-xs code-font text-gray-500 mb-2">NIM. F1A250002</div>
            <h3 class="text-lg font-bold text-white mb-1">Ahmad Muzaki</h3>
            <p class="text-xs text-cyan-400 code-font mb-4">Admin</p>
        </div>
        <a href="/profile/ahmad-muzaki" class="w-full text-center py-2.5 bg-white/5 hover:bg-cyan-500 hover:text-slate-950 rounded-xl text-xs font-semibold tracking-wider uppercase transition-all duration-300">
            Lihat Profil &rarr;
        </a>
    </div>

   <div class="minimal-card profile-card p-6 rounded-2xl flex flex-col justify-between">
        <div>
            <div class="text-xs code-font text-gray-500 mb-2">NIM. F1A250008</div>
            <h3 class="text-lg font-bold text-white mb-1">Ria Adriani</h3>
            <p class="text-xs text-emerald-400 code-font mb-4">Kontributor</p>
        </div>
        <a href="/profile/mahasiswa-dua" class="w-full text-center py-2.5 bg-white/5 hover:bg-emerald-400 hover:text-slate-950 rounded-xl text-xs font-semibold tracking-wider uppercase transition-all duration-300">
            Lihat Profil &rarr;
        </a>
    </div>

    <div class="minimal-card profile-card p-6 rounded-2xl flex flex-col justify-between">
        <div>
            <div class="text-xs code-font text-gray-500 mb-2">NIM. F1A250018</div>
            <h3 class="text-lg font-bold text-white mb-1">Annisa Nurul Aulia</h3>
            <p class="text-xs text-amber-400 code-font mb-4">Kontributor</p>
        </div>
        <a href="/profile/mahasiswa-tiga" class="w-full text-center py-2.5 bg-white/5 hover:bg-amber-400 hover:text-slate-950 rounded-xl text-xs font-semibold tracking-wider uppercase transition-all duration-300">
            Lihat Profil &rarr;
        </a>
    </div>

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