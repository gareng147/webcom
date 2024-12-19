<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-green-600 font-bold text-xl">
                <img src="{{ asset('images/profile.webp') }}" alt="Logo" class="h-10">
            </a>
            <ul class="hidden md:flex space-x-6 text-sm font-semibold">
                <li><a href="{{ url('/home') }}" class="text-gray-700 hover:text-green-600">HOME</a></li>
                <li><a href="{{ url('/profile') }}" class="text-gray-700 hover:text-green-600">PROFILE</a></li>
                <li><a href="{{ url('/kontak') }}" class="text-gray-700 hover:text-green-600">KONTAK</a></li>
                <li><a href="{{ url('/testimoni') }}" class="text-gray-700 hover:text-green-600">TESTIMONI</a></li>
            </ul>
            <div class="hidden md:flex space-x-4">
                <a href="{{ url('/marketplace') }}" class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700">MARKETPLACE</a>
            </div>
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <ul id="mobile-menu" class="hidden flex flex-col space-y-4 px-4 pb-4 md:hidden">
            <li><a href="{{ url('/home') }}" class="text-gray-700 hover:text-green-600">HOME</a></li>
            <li><a href="{{ url('/profile') }}" class="text-gray-700 hover:text-green-600">PROFILE</a></li>
            <li><a href="{{ url('/kontak') }}" class="text-gray-700 hover:text-green-600">KONTAK</a></li>
            <li><a href="{{ url('/testimoni') }}" class="text-gray-700 hover:text-green-600">TESTIMONI</a></li>
            <li><a href="{{ url('/marketplace') }}" class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700">MARKETPLACE</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
<script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
</html>
