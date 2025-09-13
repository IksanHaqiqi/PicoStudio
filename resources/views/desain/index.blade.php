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
    <!-- Header -->
    <!-- Hero Section -->
    <section class="relative">
        <div class="container mx-auto text-center py-24">
            <div class="relative inline-block">
                <img src="{{ asset('PicoStudio/Asset/Group 13.png') }}" alt="Illustration of a camera with a yellow background" class="mx-auto"
                    width="600" height="400" />
                <div class="absolute inset-0 flex flex-col justify-center items-center">
                    <h3 class="text-2xl font-bold mb-4">
                        Temukan Design Yang Kamu Impikan
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

    <!-- Produk Section -->
    <section class="py-16 bg-gray-800" id="produk">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-yellow-500 mb-8 text-center">
                Produk Desain Kami
            </h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div
                        class="swiper-slide bg-gray-200 p-4 rounded transform transition-transform duration-300 hover:-translate-y-2">
                        <img src="{{ asset('PicoStudio/Asset/Desaingrafis1.png') }}" alt="Workshop Broadcast poster" class="w-full h-auto rounded"
                            width="300" height="300" />
                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-800">
                                Workshop Broadcast
                            </h3>
                            <p class="text-gray-600">
                                Pelajari teknik broadcast profesional dalam workshop ini.
                            </p>
                            <button class="bg-yellow-500 text-black px-4 py-2 rounded mt-2 hover:bg-yellow-600">
                                Beli
                            </button>
                        </div>
                    </div>
                    <!-- Duplikat item sesuai kebutuhan -->
                    <div
                        class="swiper-slide bg-gray-200 p-4 rounded transform transition-transform duration-300 hover:-translate-y-2">
                        <img src="Asset/Desaingrafis1.png" alt="Workshop Broadcast poster" class="w-full h-auto rounded" />
                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-800">
                                Workshop Broadcast
                            </h3>
                            <p class="text-gray-600">
                                Pelajari teknik broadcast profesional dalam workshop ini.
                            </p>
                            <button class="bg-yellow-500 text-black px-4 py-2 rounded mt-2 hover:bg-yellow-600">
                                Beli
                            </button>
                        </div>
                    </div>
                    <div
                        class="swiper-slide bg-gray-200 p-4 rounded transform transition-transform duration-300 hover:-translate-y-2">
                        <img src="Asset/Desaingrafis1.png" alt="Workshop Broadcast poster" class="w-full h-auto rounded" />
                        <div class="mt-4"F>
                            <h3 class="text-lg font-bold text-gray-800">
                                Workshop Broadcast
                            </h3>
                            <p class="text-gray-600">
                                Pelajari teknik broadcast profesional dalam workshop ini.
                            </p>
                            <button class="bg-yellow-500 text-black px-4 py-2 rounded mt-2 hover:bg-yellow-600">
                                Beli
                            </button>
                        </div>
                    </div>
                    <div
                        class="swiper-slide bg-gray-200 p-4 rounded transform transition-transform duration-300 hover:-translate-y-2">
                        <img src="Asset/Desaingrafis1.png" alt="Workshop Broadcast poster" class="w-full h-auto rounded" />
                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-800">
                                Workshop Broadcast
                            </h3>
                            <p class="text-gray-600">
                                Pelajari teknik broadcast profesional dalam workshop ini.
                            </p>
                            <button class="bg-yellow-500 text-black px-4 py-2 rounded mt-2 hover:bg-yellow-600">
                                Beli
                            </button>
                        </div>
                    </div>
                    <div
                        class="swiper-slide bg-gray-200 p-4 rounded transform transition-transform duration-300 hover:-translate-y-2">
                        <img src="Asset/Desaingrafis1.png" alt="Workshop Broadcast poster" class="w-full h-auto rounded" />
                        <div class="mt-4">
                            <h3 class="text-lg font-bold text-gray-800">
                                Workshop Broadcast
                            </h3>
                            <p class="text-gray-600">
                                Pelajari teknik broadcast profesional dalam workshop ini.
                            </p>
                            <button class="bg-yellow-500 text-black px-4 py-2 rounded mt-2 hover:bg-yellow-600">
                                Beli
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Swiper Pagination & Navigation -->
                <div class="swiper-pagination"></div>
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
