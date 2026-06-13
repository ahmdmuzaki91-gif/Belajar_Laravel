@extends('layouts.app')

@section('title', 'Profil - Ahmad Muzaki')

@section('content')
<div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-duration="800">
    <a href="/" class="text-xs code-font text-gray-500 hover:text-cyan-400 transition-colors mb-8 inline-block">
        &larr; KEMBALI KE DIREKTORI
    </a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mt-4">
        
        <div class="profile-frame minimal-card aspect-square rounded-2xl border border-white/5 overflow-hidden relative shadow-lg">
    <img
    id="profile-photo"
    src="{{ asset('image/ahmad muzaki.jpeg') }}" alt="Foto Ahmad Muzaki" class="w-full h-full object-cover">
    </div>

        <div class="md:col-span-2 space-y-6">
            <div>
                <h1 class="text-3xl font-extrabold text-white tracking-tight">Ahmad Muzaki</h1>
                <p class="text-sm code-font text-cyan-400 mt-1">NIM. 20261029384 — Teknik Informatika</p>
            </div>

            <div class="border-t border-b border-white/5 py-4">
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-2 font-bold">// Tentang Mahasiswa</p>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Fokus pada arsitektur perangkat lunak, optimasi database MySQL, serta pembuatan RESTful API menggunakan Laravel. Gemar mengeksplorasi logika backend yang bersih dan efisien.
                </p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-3 font-bold">// Kompetensi Teknologi</p>
                <div class="flex flex-wrap gap-2 text-xs code-font">
                    <span class="tech-item px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">PHP 8.x</span>
                    <span class="tech-item px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">Laravel 12</span>
                    <span class="tech-item px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">MySQL</span>
                    <span class="tech-item px-3 py-1.5 bg-white/5 rounded-lg border border-white/5 text-gray-300">TailwindCSS</span>
                </div>
            </div>

            <div class="pt-4">
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-3 font-bold">// Media Sosial</p>
                <div class="flex space-x-3">
                    <a href="https://instagram.com/zack061107" target="_blank" class="social-btn w-9 h-9 rounded-xl border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-cyan-400 transition-all">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="https://github.com/ahmdmuzaki91-gif" target="_blank" class="social-btn w-9 h-9 rounded-xl border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-cyan-400 transition-all">
                        <i class="fab fa-github text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ahmad-muzaki-770abb315" target="_blank" class="social-btn w-9 h-9 rounded-xl border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-cyan-400 transition-all">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

    <script>
    document.addEventListener('DOMContentLoaded',()=>{

    anime({
    targets:'#profile-photo',
    scale:[0.8,1],
    opacity:[0,1],
    duration:1500,
    easing:'easeOutElastic'
    });

    anime({
    targets:'.tech-item',
    translateY:[20,0],
    opacity:[0,1],
    delay:anime.stagger(100),
    duration:800
    });

    });
    </script>
@endsection