@extends('layouts.app')

@section('title', 'Profil - Mahasiswa Tiga')

@section('content')
<div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-duration="800">
    <a href="/" class="text-xs code-font text-gray-500 hover:text-amber-400 transition-colors mb-8 inline-block">
        &larr; KEMBALI KE DIREKTORI
    </a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mt-4">
        
         <div class="minimal-card aspect-square rounded-2xl border border-white/5 overflow-hidden relative shadow-lg">
    <img src="{{ asset('image/annisa nurul aulia.jpeg') }}" alt="Foto Ahmad Muzaki" class="w-full h-full object-cover">
    </div>

        <div class="md:col-span-2 space-y-6">
            <div>
                <h1 class="text-3xl font-extrabold text-white tracking-tight">Annisa Nurul Aulia</h1>
                <p class="text-sm code-font text-amber-400 mt-1">NIM. F1A250018 — Teknik Informatika</p>
            </div>

            <div class="border-t border-b border-white/5 py-4">
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-2 font-bold">// TENTANG_SAYA</p>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Tertarik mendalami arsitektur infrastruktur jaringan komputer dan administrasi server. Memiliki minat besar pada otomatisasi sistem Linux, manajemen Cloud Virtual Private Server (VPS), serta pengelolaan deployment aplikasi berbasis Laravel.
                </p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-3 font-bold">// TECH_STACK</p>
                <div class="flex flex-wrap gap-2 text-xs code-font">
                    <span class="px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">PHP.8x</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">Laravel 12</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">MySQL</span>
                    <span class="px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">TailwindCSS</span>
                </div>
            </div>

            <div class="pt-4">
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-3 font-bold">// SOCIAL_NETWORKS</p>
                <div class="flex space-x-3">
                    <a href="https://instagram.com/chycxaa" target="_blank" class="w-9 h-9 rounded-xl border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-amber-400 transition-all">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="https://github.com/anisanaa14-cloud" target="_blank" class="w-9 h-9 rounded-xl border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-amber-400 transition-all">
                        <i class="fab fa-github text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/anisa-na-7194633b1?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="w-9 h-9 rounded-xl border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-amber-400 transition-all">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection