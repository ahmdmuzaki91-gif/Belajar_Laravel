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
        body {
            background-color: #0b0f19; /* Dark Minimalist Background */
            color: #f1f5f9;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .code-font {
            font-family: 'JetBrains Mono', monospace;
        }
        .minimal-card {
            background: rgba(22, 30, 49, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .minimal-card:hover {
            border-color: #06b6d4;
            transform: translateY(-4px);
            box-shadow: 0 10px 30px -10px rgba(6, 182, 212, 0.2);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between">

    <nav class="border-b border-white/5 px-8 py-5 flex justify-between items-center backdrop-blur-md sticky top-0 z-50">
    <a href="/" class="text-sm font-bold tracking-widest code-font text-cyan-400">
        IF_PORTAL//
    </a>
    <div class="space-x-6 text-xs uppercase tracking-wider text-gray-400">
        <a href="/" class="hover:text-white transition-colors {{ Request::is('/') ? 'text-cyan-400 font-bold' : '' }}">Home</a>
    </div>
</nav>

    <main class="container mx-auto px-6 py-12 flex-grow">
        @yield('content')
    </main>

    <footer class="border-t border-white/5 py-6 text-center text-xs text-gray-500 code-font">
        &copy; 2026 / TEKNIK INFORMATIKA / KELOMPOK_LARAVEL
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ once: true });</script>
</body>
</html>