<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatics Portal - @yield('title')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body{
        background-color:#F8FAFC;
        color:#1E293B;
        font-family:'Plus Jakarta Sans',sans-serif;
        }
            .code-font{
        font-family:'Plus Jakarta Sans',sans-serif;
        }
     .minimal-card{
    background:white;
    border:1px solid #E2E8F0;
    box-shadow: 0 2px 10px rgba(0,0,0,.05);
    }
        
     .minimal-card:hover{
     border-color:#2563EB;
    box-shadow:0 10px 25px rgba(37,99,235,.15);
    transform:translateY(-5px);
    }
        .profile-frame{
        position:relative;
    }

    .profile-frame::before{
        content:'';
        position:absolute;
        inset:-3px;

        background:linear-gradient(
            45deg,
            #06b6d4,
            #10b981
        );

        border-radius:18px;
        z-index:-1;

        filter:blur(15px);
        opacity:.35;
    }

    .social-btn{
        transition:all .3s ease;
    }

    .social-btn:hover{
        transform:translateY(-5px);
    }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between">

    <nav class="bg-blue-900 shadow-lg">
    <div class="flex items-center gap-3">
    <i class="fas fa-laptop-code text-cyan-400 text-xl"></i>

    <div>
    <h1 class="font-bold text-xl text-white">
        PORTAL MAHASISWA
    </h1>

    <p class="text-xs text-blue-200">
        Teknik Informatika
    </p>
</div>
</div>
    <div class="space-x-6 text-xs uppercase tracking-wider text-gray-400">
        <a href="/" class="hover:text-white transition-colors {{ Request::is('/') ? 'text-cyan-400 font-bold' : '' }}">Home</a>
    </div>
</nav>

    <main class="container mx-auto px-6 py-12 flex-grow">
        @yield('content')
    </main>

    <footer class="border-t border-white/5 py-6 text-center text-xs text-gray-500 code-font">
        &copy; © 2026 Program Studi Teknik Informatika

                Universitas Al-Ghifari
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ once: true });</script>

    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.2/lib/anime.min.js"></script>

</body>
</html>