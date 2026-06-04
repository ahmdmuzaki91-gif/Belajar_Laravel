<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<nav class="bg-blue-600 text-white">
    <div class="container mx-auto px-6 py-4 flex gap-6">
        <a href="/" class="hover:text-yellow-300">Home</a>
        <a href="/about" class="hover:text-yellow-300">About</a>
        <a href="/contact" class="hover:text-yellow-300">Contact</a>
    </div>
</nav>

<div class="container mx-auto p-6">
    @yield('content')
</div>

</body>
</html>