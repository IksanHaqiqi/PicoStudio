@extends('layout.app')
@section('content')
    @push('styles')
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
    @endpush
    <main class="container mx-auto px-4 py-12">
        <div class="mb-4">
            <span class="bg-yellow-500 text-gray-900 px-2 py-1 rounded">Kamera</span>
        </div>
        <h1 id="animated-text" class="text-4xl font-bold text-white mb-4 drop-animation">11 Jenis Kamera Berdasarkan
            karakteristik dan fungsinya pemakainnya</h1>
        <div class="flex items-center text-gray-400 mb-6">
            <i class="fas fa-user-circle text-2xl mr-2"></i>
            <span>Rhifan Ahmad</span>
            <span class="mx-2">•</span>
            <span>August 31, 2026</span>
        </div>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.</p>
        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.</p>
    </main>
    @push('styles')
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
    @endpush
@endsection
