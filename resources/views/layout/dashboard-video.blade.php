<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pico Studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <style>
      body {
        font-family: "Roboto", sans-serif;
      }
      .swiper-pagination {
    position: relative !important; /* jangan absolute di tengah */
    margin-top: 20px;              /* kasih jarak dari slider */
    text-align: center;            /* biar dot rata tengah */
  }

  /* Warna dot default & aktif */
  .swiper-pagination-bullet {
    background: #ccc;
    opacity: 1;
  }
  .swiper-pagination-bullet-active {
    background: #facc15; /* kuning sesuai tema */
  }
    </style>
  </head>

  <body class="bg-gray-900 text-white">
    <!-- Header -->
    <header class=" py-4">
      <nav class="bg-black bg-opacity-50 w-full py-4 fixed top-0 z-20">
        <div class="container mx-auto flex justify-between items-center px-6">
          <div class="flex items-center">
            <img
              alt="Pico logo"
              class="h-12"
              src="Asset/Pico.Studio_logo.svg"
              width="100"
              height="50"
            />
          </div>
          <div class="flex space-x-6 text-white">
          <a class="hover:text-yellow-500" href="index.html"> Beranda </a>
          <a class="hover:text-yellow-500" href="index.html#layanan"> Layanan </a>
          <a class="hover:text-yellow-500" href="index.html#blog"> Blog </a>
          <a class="hover:text-yellow-500" href="index.html#kontak"> Kontak </a>
          </div>
          <div class="flex space-x-4">
            <a
              class="bg-yellow-500 text-white font-bold py-2 px-4 rounded hover:bg-yellow-600"
              href="daftar.html"
            >
              Daftar
            </a>
            <a
              class="text-white font-bold py-2 px-4 rounded hover:bg-yellow-600"
              href="masuk.html"
            >
              Masuk
            </a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Hero Section -->
     <section class="relative">
      <div class="container mx-auto text-center py-24">
        <div class="relative inline-block">
          <img
            src="Asset/Group 13.png"
            alt="Illustration of a camera with a yellow background"
            class="mx-auto"
            width="600"
            height="400"
          />
          <div
            class="absolute inset-0 flex flex-col justify-center items-center"
          >
            <h3 class="text-2xl font-bold mb-4">
              Temukan Video Yang Kamu Impikan
            </h3>
            <div class="flex h-12">
              <input
                type="text"
                placeholder="Temukan Design Yang Kamu Impikan"
                class="px-4 py-2 rounded-l-lg bg-white text-black focus:outline-none"
              />
              <button
                class="bg-yellow-500 text-black px-4 py-2 rounded-r-lg hover:bg-yellow-600"
              >
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

    <!-- Footer -->
    <footer class="bg-black py-8">
      <div class="container mx-auto text-center">
        <div class="text-2xl font-bold mb-4">
          Pico <span class="text-yellow-500"> . </span>
        </div>
        <nav class="space-x-4 mb-4">
          <a class="hover:text-yellow-500" href="#"> Beranda </a>
          <a class="hover:text-yellow-500" href="#"> Layanan </a>
          <a class="hover:text-yellow-500" href="#"> Blog </a>
          <a class="hover:text-yellow-500" href="#"> Kontak </a>
        </nav>
        <div class="space-x-4 mb-4">
          <a class="hover:text-yellow-500" href="#">
            <i class="fab fa-facebook-f"> </i>
          </a>
          <a class="hover:text-yellow-500" href="#">
            <i class="fab fa-twitter"> </i>
          </a>
          <a class="hover:text-yellow-500" href="#">
            <i class="fab fa-instagram"> </i>
          </a>
        </div>
        <p class="text-gray-500">© 2024, All Rights Reserved, by Pico.Studio</p>
      </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
  </body>
</html>
