<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Portofolio Mahasiswa</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-slate-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-72 bg-gradient-to-b from-blue-900 to-blue-700 text-white shadow-xl">

        <!-- PROFILE -->
        <div class="p-6 border-b border-blue-600">

            <div class="flex items-center gap-4">

            @if(Auth::user()->photo)

            <img
                src="{{ asset('storage/'.Auth::user()->photo) }}"
                class="w-14 h-14 rounded-full object-cover">

            @else

            <div class="w-14 h-14 rounded-full bg-white text-blue-900 flex items-center justify-center font-bold">

                {{ strtoupper(substr(Auth::user()->name,0,1)) }}

            </div>

            @endif

                <div>
                    <h3 class="font-bold text-lg">
                        {{ Auth::user()->name }}
                    </h3>

                    <p class="text-sm text-blue-200 capitalize">
                        {{ Auth::user()->role }}
                    </p>
                </div>

            </div>

        </div>

        <!-- MENU -->
        <nav class="p-4 space-y-2">

            <a href="{{ route('dashboard') }}"
               class="block p-3 rounded-lg hover:bg-blue-800 transition">

                <i class="fa-solid fa-house mr-2"></i>
                Dashboard

            </a>

            @if(auth()->user()->role == 'dosen')

                <a href="{{ route('dosen.mahasiswa') }}" class="block p-3 rounded-lg hover:bg-blue-800 transition flex items-center space-x-2 text-white">
    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
    </svg>
    <span>Data Mahasiswa</span>
</a>

            @endif

            <a href="{{ route('portofolio.index') }}"
            class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-700">
                <i class="fas fa-folder"></i>
                Portofolio
            </a>

            @yield('menu')

            <form action="{{ route('logout') }}"
                  method="POST">

                @csrf
            <a href="{{ route('profile.edit') }}"
            class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-700">
                <i class="fa-solid fa-user"></i>
                Profil Saya</a>
            
                <button
                    class="w-full text-left p-3 rounded-lg hover:bg-red-600 transition">

                    <i class="fa-solid fa-right-from-bracket mr-2"></i>
                    Logout

                </button>

            </form>

        </nav>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1">

        <!-- TOPBAR -->
        <div class="bg-white shadow-sm px-8 py-4 flex justify-between items-center">

            <h1 class="font-bold text-xl text-slate-700">
                Portal Portofolio Mahasiswa
            </h1>

            <div class="text-slate-600">
                {{ Auth::user()->name }}
            </div>

        </div>

        <!-- PAGE CONTENT -->
        <div class="p-8">

            @yield('content')

        </div>

    </main>

</div>

</body>
</html>