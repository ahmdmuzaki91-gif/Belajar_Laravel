@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<section class="hero-bg rounded-3xl p-16 text-center text-white">

    <p class="uppercase tracking-widest text-blue-200">
        Portal Mahasiswa
    </p>

    <h1 class="text-5xl font-bold mt-4">
        Program Studi Teknik Informatika
    </h1>

    <p class="mt-6 text-lg text-blue-100 max-w-2xl mx-auto">
        Direktori profil mahasiswa kelompok Laravel.
        Klik salah satu mahasiswa untuk melihat
        biodata, kompetensi dan media sosial.
    </p>

    <div class="flex justify-center gap-12 mt-10">

        <div>
            <h3 class="text-3xl font-bold">3</h3>
            <p>Mahasiswa</p>
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

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto mt-16">
    
    <div class="minimal-card profile-card p-6 rounded-2xl flex flex-col justify-between">
        <div>
            <div class="minimal-card p-8 text-center">

    <div
        class="w-20 h-20 rounded-full bg-blue-100 mx-auto mb-4 flex items-center justify-center">

        <i class="fas fa-user text-blue-700 text-2xl"></i>

    </div>
    <h3 class="text-xl font-bold text-slate-800"> Ahmad Muzaki</h3>
    <p class="text-gray-500 mt-1">F1A250002</p>
    <p class="text-blue-600 mt-2 font-medium">Admin</p>
    <a href="/profile/ahmad-muzaki"class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl"> Lihat Profil</a>

</div>

   <div class="minimal-card profile-card p-6 rounded-2xl flex flex-col justify-between">
        <div>
 <h3 class="text-xl font-bold text-slate-800">Ria Adriani</h3>
    <p class="text-gray-500 mt-1">F1A250008</p>
    <p class="text-blue-600 mt-2 font-medium">Kontributor</p>
    <a href="/profile/ahmad-muzaki"class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl"> Lihat Profil</a>
    </div>

    <div class="minimal-card profile-card p-6 rounded-2xl flex flex-col justify-between">
        <div>
           <h3 class="text-xl font-bold text-slate-800"> Annisa Nurul Aulia</h3>
    <p class="text-gray-500 mt-1">F1A250018</p>
    <p class="text-blue-600 mt-2 font-medium">Kontributor</p>
    <a href="/profile/ahmad-muzaki"class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl"> Lihat Profil</a>
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