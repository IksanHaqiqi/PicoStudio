@extends('layout.app')
@section('content')
@push('styles')
<style>
      body {
        font-family: "Roboto", sans-serif;
      }
    </style>
    
@endpush
<section class="relative">
      <img
        alt="Hero Image"
        class="w-full h-[500px] object-cover"
        height="1080"
        src="{{ asset('PicoStudio/Asset/Beranda1.png') }}"
        width="1920"
      />
      <div
        class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center"
      >
        <h1 class="text-5xl font-bold">Studio Media Center.</h1>
        <a
          class="mt-4 bg-yellow-500 text-black px-6 py-3 rounded"
          href="#layanan"
        >
          Pelajari Lebih Lanjut
        </a>
      </div>
    </section>
    <!-- Services Section -->
    <section class="py-24" id="layanan">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-yellow-500 mb-4">Layanan Kami</h2>
        <p class="text-gray-400 mb-8">
          Media &amp; audio visualisasi yang dinamik siap hadir didekatmu
        </p>
        <div class="flex justify-center space-x-8">
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Desain Grafis"
              class="mb-4 rounded"
              height="200"
              src="Asset/Desaingrafis_Thumbnail.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-4">Desain Grafis</h3>
            <a
              class="bg-yellow-500 text-black px-4 py-2  rounded"
              href="{{ route('desain') }}"
            >
              Lihat
            </a>
          </div>
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Videografis"
              class="mb-4 rounded"
              height="200"
              src="Asset/Videografi_Thumbnail.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-4">Videografis</h3>
            <a
              class="bg-yellow-500 text-black px-4 py-2  rounded"
              href="{{ route('video') }}"
            >
              Lihat
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Search Section -->
    <section class="py-12 bg-gray-800">
      <div class="container mx-auto text-center">
        <div class="relative inline-block">
          <img
            alt="Camera Head"
            class="w-128 h-128 object-cover"
            height="300"
            src="{{ asset('PicoStudio/Asset/Group 13.png')}}"
            width="500"
          />
          <div
            class="absolute inset-0 flex flex-col justify-center items-center"
          >
            <h3 class="text-2xl font-bold mb-4">
              Temukan Design Yang Kamu Impikan
            </h3>
            <div class="flex h-12">
              <input
                class="px-4 py-2 rounded-l-lg bg-white-700 text-black"
                placeholder="Temukan Design Yang Kamu Impikan"
                type="text"
              />
              <button class="bg-yellow-500 text-black px-4 py-2 rounded-r-lg">
                Cari
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Recommendations Section -->
    <section class="py-16">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-yellow-500 mb-8">
          Rekomendasi Design Untuk Kamu
        </h2>
        <div class="grid grid-cols-3 gap-8">
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Design Recommendation"
              class="mb-4 rounded"
              height="300"
              src="Asset/Desaingrafis1.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-2">Design Recommendation</h3>
          </div>
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Design Recommendation"
              class="mb-4 rounded"
              height="300"
              src="Asset/Desaingrafis1.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-2">Design Recommendation</h3>
          </div>
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Design Recommendation"
              class="mb-4 rounded"
              height="300"
              src="Asset/Desaingrafis1.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-2">Design Recommendation</h3>
          </div>
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Design Recommendation"
              class="mb-4 rounded"
              height="300"
              src="Asset/Desaingrafis1.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-2">Design Recommendation</h3>
          </div>
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Design Recommendation"
              class="mb-4 rounded"
              height="300"
              src="Asset/Desaingrafis1.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-2">Design Recommendation</h3>
          </div>
          <div class="bg-gray-800 p-4 rounded-lg">
            <img
              alt="Design Recommendation"
              class="mb-4 rounded"
              height="300"
              src="Asset/Desaingrafis1.png"
              width="300"
            />
            <h3 class="text-xl font-bold mb-2">Design Recommendation</h3>
          </div>
        </div>
        <div class="text-center mt-8">
          <a
            href="berandadesain2.html#produk"
            class="bg-yellow-500 text-black px-6 py-2 rounded hover:bg-yellow-600 inline-block"
          >
            Lihat Semua Produk
          </a>
        </div>
      </div>
    </section>
    <!-- Multimedia Section -->
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
            <a
              class="bg-yellow-500 text-black px-4 py-2 rounded"
              href="blog.html"
            >
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
            <a
              class="bg-yellow-500 text-black px-4 py-2 rounded"
              href="blog.html"
            >
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
            <a
              class="bg-yellow-500 text-black px-4 py-2 rounded"
              href="blog.html"
            >
              Lihat
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-gray-900" id="kontak">
      <div class="container mx-auto">
        <div
          class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row"
        >
          <!-- Left Side: Form -->
          <div class="p-8 md:w-1/2">
            <h2 class="text-3xl font-bold mb-4 text-black">
              Hubungi <span class="text-orange-400">Kami</span>
            </h2>
            <p class="text-gray-600 mb-6">
              Enim tempor eget pharetra facilisis sed maecenas adipiscing. Eu
              leo molestie vel, ornare non id blandit netus.
            </p>

            <form>
              <div class="mb-4">
                <input
                  class="w-full border-b-2 border-gray-300 py-2 focus:outline-none focus:border-orange-400"
                  placeholder="Nama Kontak"
                  type="text"
                />
              </div>
              <div class="mb-4">
                <input
                  class="w-full border-b-2 border-gray-300 py-2 focus:outline-none focus:border-orange-400"
                  placeholder="Jalan"
                  type="text"
                />
              </div>
              <div class="flex mb-4">
                <input
                  class="w-1/2 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-orange-400 mr-2"
                  placeholder="Kota"
                  type="text"
                />
                <input
                  class="w-1/2 border-b-2 border-gray-300 py-2 focus:outline-none focus:border-orange-400 ml-2"
                  placeholder="Kode Pos"
                  type="text"
                />
              </div>
              <div class="mb-4">
                <input
                  class="w-full border-b-2 border-gray-300 py-2 focus:outline-none focus:border-orange-400"
                  placeholder="Nomor Telepon"
                  type="text"
                />
              </div>
              <div class="mb-4">
                <input
                  class="w-full border-b-2 border-gray-300 py-2 focus:outline-none focus:border-orange-400"
                  placeholder="E-mail"
                  type="email"
                />
              </div>
              <div class="mb-4">
                <textarea
                  class="w-full border-b-2 border-gray-300 py-2 focus:outline-none focus:border-orange-400"
                  placeholder="Mari bicarakan ide Anda"
                ></textarea>
              </div>
              <div
                class="mb-4 border-2 border-dashed border-gray-300 p-4 text-center"
              >
                <label class="cursor-pointer">
                  <i class="fas fa-upload text-gray-400 mb-2"></i>
                  <p class="text-gray-400">Unggah File Tambahan</p>
                  <input class="hidden" type="file" />
                </label>
                <p class="text-gray-400 text-xs">
                  Lampirkan file. Ukuran file dokumen Anda tidak boleh melebihi
                  10MB
                </p>
              </div>
              <div class="mb-4 flex items-center">
                <input class="mr-2" id="nda" type="checkbox" />
                <label class="text-gray-600" for="nda">
                  Saya ingin melindungi data saya dengan menandatangani NDA
                </label>
              </div>
              <button
                class="w-full bg-orange-500 text-white py-2 rounded-lg"
                type="submit"
              >
                KIRIM
              </button>
            </form>
          </div>

          <!-- Right Side: Map -->
          <div class="md:w-1/2">
            <iframe
              class="w-full h-full min-h-[500px]"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.610416162073!2d14.40358131571512!3d50.08804097942556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b94e1b0b0b0b0%3A0x0!2zNTAuMDg4MDQwLCAxNC40MDM1ODE!5e0!3m2!1sen!2scz!4v1633021234567!5m2!1sen!2scz"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            >
            </iframe>
          </div>
        </div>
      </div>
    </section>

@endsection
