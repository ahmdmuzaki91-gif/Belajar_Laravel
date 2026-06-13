<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Portofolio Mahasiswa</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
    body{
    background:#F8FAFC;
    color:#1E293B;
    font-family:'Poppins',sans-serif;
    }

    .minimal-card{
        background:white;
        border-radius:20px;
        border:1px solid #E2E8F0;

        transition:.3s;

        box-shadow:
            0 4px 20px rgba(0,0,0,.05);
    }

    .minimal-card:hover{
        transform:translateY(-6px);

        box-shadow:
            0 10px 25px rgba(37,99,235,.15);
    }

    .hero-bg{
        background:
        linear-gradient(
            135deg,
            #1E3A8A,
            #2563EB
        );
    }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between">

    <nav class="bg-blue-900 shadow-lg">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <div>
            <h1 class="text-2xl font-bold text-white">
                PORTAL MAHASISWA
            </h1>

            <p class="text-sm text-blue-200">
                Teknik Informatika
            </p>
        </div>

        <a href="/"
           class="text-white font-medium hover:text-blue-200">
            Home
        </a>

    </div>
</nav>
</nav>

    <main class="container mx-auto px-6 py-12 flex-grow">
        @yield('content')
    </main>

   <footer class="bg-blue-900 text-white mt-20">

    <div class="container mx-auto py-6 text-center">

        <h3 class="font-semibold">
            Program Studi Teknik Informatika
        </h3>

        <p class="text-sm text-blue-200 mt-2">
            Direktori Mahasiswa Kelompok Laravel
        </p>

    </div>

</footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ once: true });</script>

    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.2/lib/anime.min.js"></script>

</body>
</html>