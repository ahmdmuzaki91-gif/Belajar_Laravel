@extends('layouts.app')

@section('title', 'Profil - Mahasiswa Dua')

@section('content')
<div class="max-w-4xl mx-auto" data-aos="fade-up" data-aos-duration="800">
    <a href="/" class="text-xs code-font text-gray-500 hover:text-emerald-400 transition-colors mb-8 inline-block">
        &larr; KEMBALI KE DIREKTORI
    </a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mt-4">
        
        <div class="minimal-card p-4">

    <img
        src="{{ asset('image/ria adriani.jpeg') }}"
        class="rounded-xl w-full">

</div>

    <div class="md:col-span-2 space-y-6">
        <div>

        <h1 class="text-4xl font-bold text-blue-900">
            Ria Adriani
        </h1>

        <p class="text-gray-500 mt-2">
            NIM F1A250008
        </p>

        <p class="text-blue-600 font-medium mt-1">
            Program Studi Teknik Informatika
        </p>

        </div>
            <div class="border-t border-b border-white/5 py-4">
                <h2 class="text-xl font-semibold text-blue-900 mb-3">
                    Tentang Mahasiswa
                </h2>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Berfokus pada bidang User Interface (UI) dan User Experience (UX) Desain. Senang menerjemahkan kebutuhan pengguna menjadi wireframe, arsitektur informasi, hingga prototipe desain aplikasi tingkat tinggi yang siap diimplementasikan ke dalam kode front-end.
                </p>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-blue-900 mb-3">
                    Kompetensi Teknologi
                </h2>
                <div class="flex flex-wrap gap-2 text-xs code-font">
                    <span class="px-4 py-2 bg-blue-50 text-blue-700 rounded-lg">PHP 8.x</span>
                    <span class="px-4 py-2 bg-blue-50 text-blue-700 rounded-lg">Laravel 12</span>
                    <span class="px-4 py-2 bg-blue-50 text-blue-700 rounded-lg">MySQL</span>
                    <span class="px-4 py-2 bg-blue-50 text-blue-700 rounded-lg">TailwindCSS</span>
                </div>
            </div>

            <div class="pt-4">
                <h2 class="text-xl font-semibold text-blue-900 mb-3">Media Sosial</h2>
                <div class="flex space-x-3">
                    <a href="https://instagram.com/iiicescreaim" target="_blank" class="w-10h-10rounded-fullbg-blue-50text-blue-700flexitems-centerjustify-centerhover:bg-blue-700hover:text-whitetransition">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="https://github.com/riaa52633-maker" target="_blank" class="w-10h-10rounded-fullbg-blue-50text-blue-700flexitems-centerjustify-centerhover:bg-blue-700hover:text-whitetransition">
                        <i class="fab fa-github text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ria-adriani-5346443b1?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="w-10h-10rounded-fullbg-blue-50text-blue-700flexitems-centerjustify-centerhover:bg-blue-700hover:text-whitetransition">
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