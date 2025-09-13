@extends('layout.app')
@section('content')
    @push('styles')
        <style>
            body {
                font-family: "Roboto", sans-serif;
            }

            .swiper-pagination {
                position: relative !important;
                /* jangan absolute di tengah */
                margin-top: 20px;
                /* kasih jarak dari slider */
                text-align: center;
                /* biar dot rata tengah */
            }

            /* Warna dot default & aktif */
            .swiper-pagination-bullet {
                background: #ccc;
                opacity: 1;
            }

            .swiper-pagination-bullet-active {
                background: #facc15;
                /* kuning sesuai tema */
            }
        </style>
    @endpush
    <!-- Hero Section -->
    <section class="relative">
        <div class="container mx-auto text-center py-24">
            <div class="relative inline-block">
                <img src="Asset/Group 13.png" alt="Illustration of a camera with a yellow background" class="mx-auto"
                    width="600" height="400" />
                <div class="absolute inset-0 flex flex-col justify-center items-center">
                    <h3 class="text-2xl font-bold mb-4">
                        Temukan Video Yang Kamu Impikan
                    </h3>
                    <div class="flex h-12">
                        <input type="text" placeholder="Temukan Design Yang Kamu Impikan"
                            class="px-4 py-2 rounded-l-lg bg-white text-black focus:outline-none" />
                        <button class="bg-yellow-500 text-black px-4 py-2 rounded-r-lg hover:bg-yellow-600">
                            Cari
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" py-16 bg-gray-800">
        <h2 class="text-white text-2xl font-bold mb-6">
            Projek Terakhir
        </h2>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Card -->
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="Asset/Videografi1.png" alt="Projek 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-white text-lg font-semibold">Judul Projek 1</h3>
                    <p class="text-gray-300 text-sm mt-2">Deskripsi singkat projek ini untuk testing.</p>
                </div>
            </div>

            <!-- Card -->
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="Asset/Videografi1.png" alt="Projek 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-white text-lg font-semibold">Judul Projek 2</h3>
                    <p class="text-gray-300 text-sm mt-2">Deskripsi singkat projek ini untuk testing.</p>
                </div>
            </div>

            <!-- Card -->
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="Asset/Videografi1.png" alt="Projek 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-white text-lg font-semibold">Judul Projek 3</h3>
                    <p class="text-gray-300 text-sm mt-2">Deskripsi singkat projek ini untuk testing.</p>
                </div>
            </div>

            <!-- Card -->
            <div class="bg-gray-700 rounded-lg overflow-hidden shadow-lg hover:scale-105 transform transition duration-300">
                <img src="Asset/Videografi1.png" alt="Projek 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-white text-lg font-semibold">Judul Projek 4</h3>
                    <p class="text-gray-300 text-sm mt-2">Deskripsi singkat projek ini untuk testing.</p>
                </div>
            </div>

        </div>
    </section>

    @push('scripts')
        <script>
            var swiper = new Swiper(".swiper-container", {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true, // biar dot bisa diklik
                },
            });
        </script>
    @endpush
@endsection
