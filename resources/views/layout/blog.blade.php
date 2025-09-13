<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        @keyframes drop {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .drop-animation {
            animation: drop 1s ease-out;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-300">
    <header class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div>
                <span>      <img alt="Pico logo" class="h-12" height="50" src="Asset/Pico.Studio_logo.svg" width="100"/>
                </span>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="index.html" class="text-gray-400 hover:text-yellow-500">Beranda</a>
                <a href="#" class="text-gray-400 hover:text-yellow-500">Layanan</a>
                <a href="blog.html" class="text-gray-400 hover:text-yellow-500">Blog</a>
                <a href="contact.html" class="text-gray-400 hover:text-yellow-500">Kontak</a>
            </nav>
            <div class="hidden md:flex space-x-4 items-center">
                <a href="daftar.html" class="text-gray-400 hover:text-yellow-500">Daftar</a>
                <a href="masuk.html" class="bg-yellow-500 text-gray-900 px-4 py-2 rounded hover:bg-yellow-600">Masuk</a>
            </div>
            <div class="md:hidden flex items-center">
                <button id="nav-toggle" class="text-gray-400 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <div id="nav-menu" class="hidden md:hidden">
            <nav class="px-4 pt-4 pb-2 space-y-2">
                <a href="index.html" class="block text-white font-semibold hover:text-yellow-500">Beranda</a>
                <a href="index.html" class="block text-gray-400 hover:text-yellow-500">Layanan</a>
                <a href="blog.html" class="block text-gray-400 hover:text-yellow-500">Blog</a>
                <a href="contact.html" class="block text-gray-400 hover:text-yellow-500">Kontak</a>
                <a href="daftar.html" class="block text-gray-400 hover:text-yellow-500">Daftar</a>
                <a href="masuk.html" class="block bg-yellow-500 text-gray-900 px-4 py-2 rounded hover:bg-yellow-600">Masuk</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto px-4 py-12">
        <div class="mb-4">
            <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded">Kamera</span>
        </div>
        <h1 id="animated-text" class="text-4xl font-bold text-white mb-4 drop-animation">11 Jenis Kamera Berdasarkan karakteristik dan fungsinya pemakainnya</h1>
        <div class="flex items-center text-gray-400 mb-6">
            <i class="fas fa-user-circle text-2xl mr-2"></i>
            <span>Rhifan Ahmad</span>
            <span class="mx-2">•</span>
            <span>August 31, 2026</span>
        </div>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </main>
    <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            var navMenu = document.getElementById('nav-menu');
            if (navMenu.classList.contains('hidden')) {
                navMenu.classList.remove('hidden');
            } else {
                navMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>