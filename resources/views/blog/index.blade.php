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
                        Temukan Blog Yang Kamu Impikan
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
    <section class="py-40 bg-gray-800" id="blog">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-yellow-500 mb-8">
                Semua tentang Multimedia
            </h2>
            <div class="flex justify-center space-x-8">
                <div class="bg-gray-700 p-4 rounded-lg w-1/3">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-yellow-500 text-black px-2 py-1 rounded">
                            Kamera
                        </span>
                        <span class="text-gray-400"> 12 Juni 2024 </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        11 Jenis Kamera Berdasarkan karakteristik dan fungsinya
                        pemakainnya
                    </h3>
                    <p class="text-gray-400 mb-4">
                        lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum
                        dolor sit amet......
                    </p>
                    <a class="bg-yellow-500 text-black px-4 py-2 rounded" href="blog.html">
                        Lihat
                    </a>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg w-1/3">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-yellow-500 text-black px-2 py-1 rounded">
                            Desain Grafis
                        </span>
                        <span class="text-gray-400"> 12 Juni 2024 </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        10 Jenis Design Berdasarkan karakteristik dan fungsinya
                        pemakainnya
                    </h3>
                    <p class="text-gray-400 mb-4">
                        lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum
                        dolor sit amet......
                    </p>
                    <a class="bg-yellow-500 text-black px-4 py-2 rounded" href="blog.html">
                        Lihat
                    </a>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg w-1/3">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-yellow-500 text-black px-2 py-1 rounded">
                            Kamera
                        </span>
                        <span class="text-gray-400"> 12 Juni 2024 </span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        15 Jenis Kamera Berdasarkan karakteristik dan fungsinya
                        pemakainnya
                    </h3>
                    <p class="text-gray-400 mb-4">
                        lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum
                        dolor sit amet......
                    </p>
                    <a class="bg-yellow-500 text-black px-4 py-2 rounded" href="blog.html">
                        Lihat
                    </a>
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
