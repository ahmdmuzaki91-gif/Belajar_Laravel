<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Portofolio Mahasiswa</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-slate-100" x-data="{ sidebarOpen: false }">

<div class="flex min-h-screen relative">

    <!-- Overlay Mobile -->
    <div
        x-show="sidebarOpen"
        @click="sidebarOpen = false"
        x-transition
        class="fixed inset-0 bg-black/50 z-40 lg:hidden">
    </div>

    <!-- SIDEBAR -->
    <aside
        class="fixed lg:static inset-y-0 left-0 z-50
               w-72 bg-gradient-to-b from-blue-900 to-blue-700 text-white shadow-xl
               transform transition-transform duration-300 ease-in-out
               lg:translate-x-0"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">

        <!-- PROFILE -->
        <div class="p-6 border-b border-blue-600">

            <div class="flex items-center gap-4">

                @if(Auth::user()->photo)

                    <img
                        src="{{ asset('storage/'.Auth::user()->photo) }}"
                        class="w-14 h-14 rounded-full object-cover">

                @else

                    <div class="w-14 h-14 rounded-full bg-white text-blue-900 flex items-center justify-center font-bold text-xl">

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
               class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-800 transition">

                <i class="fa-solid fa-house"></i>
                Dashboard

            </a>

            @if(auth()->user()->role == 'dosen')

                <a href="{{ route('dosen.mahasiswa') }}"
                   class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-800 transition">

                    <i class="fa-solid fa-users"></i>
                    Data Mahasiswa

                </a>

                <a href="{{ route('review.index') }}"
                   class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-800 transition">

                    <i class="fa-solid fa-file-circle-check"></i>
                    Review Portofolio

                </a>

            @endif

            <a href="{{ route('portofolio.index') }}"
               class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-800 transition">

                <i class="fas fa-folder"></i>
                Portofolio

            </a>

            @yield('menu')

            <a href="{{ route('profile.edit') }}"
               class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-800 transition">

                <i class="fa-solid fa-user"></i>
                Profil Saya

            </a>

            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button
                    type="submit"
                    class="w-full text-left flex items-center gap-3 p-3 rounded-lg hover:bg-red-600 transition">

                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout

                </button>

            </form>

        </nav>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 min-w-0">

        <!-- TOPBAR -->
        <div class="bg-white shadow-sm px-4 md:px-8 py-4 flex justify-between items-center">

            <div class="flex items-center gap-4">

                <!-- Hamburger -->
                <button
                    @click="sidebarOpen = !sidebarOpen"
                    class="lg:hidden text-2xl text-slate-700">

                    <i class="fa-solid fa-bars"></i>

                </button>

                <h1 class="font-bold text-lg md:text-2xl text-slate-700">
                    Portal Portofolio Mahasiswa
                </h1>

            </div>

            <div class="text-slate-600 hidden md:block">
                {{ Auth::user()->name }}
            </div>

        </div>

        <!-- PAGE CONTENT -->
        <div class="p-4 md:p-8">

            @yield('content')

        </div>

    </main>

</div>

</body>
</html>