<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<nav class="bg-blue-600 shadow-lg">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-white font-bold text-xl">
            Laravel Project
        </h1>

        <div class="space-x-4">
            <a href="/" class="text-white hover:text-yellow-300">Annisa</a>
            <a href="/about" class="text-white hover:text-yellow-300">Ria</a>
            <a href="/contact" class="text-white hover:text-yellow-300">Zaki</a>
        </div>

    </div>
</nav>

<div class="container mx-auto p-6">
    @yield('content')
</div>

</body>
</html>