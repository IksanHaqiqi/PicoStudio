<header class="bg-black py-4">
      <nav class="bg-black bg-opacity-50 w-full py-4 fixed top-0 z-20">
        <div class="container mx-auto flex justify-between items-center px-6">
          <div class="flex items-center">
            <img
              alt="Pico logo"
              class="h-12"
              height="50"
              src="{{ asset('PicoStudio/Asset/Pico.Studio_logo.svg')}}"
              width="100"
            />
          </div>
          <div class="flex space-x-6 text-white" id="navbar-links">
            <a class="hover:text-yellow-500" href="{{ route('home') }}" > Beranda </a>
            <a class="hover:text-yellow-500" href="{{ route('desain') }}"> Desain </a>
            <a class="hover:text-yellow-500" href="{{ route('video') }}"> Video </a>
            <a class="hover:text-yellow-500" href="{{ route('blog') }}"> Blog </a>
            <a class="hover:text-yellow-500" href="{{ url('/#kontak') }}"> Kontak </a>
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

    <script>
  // ambil semua link di navbar
  const links = document.querySelectorAll('#navbar-links a');

  links.forEach(link => {
    link.addEventListener('click', function () {
      // hapus active dari semua link
      links.forEach(l => l.classList.remove('text-yellow-500', 'font-bold'));

      // tambahkan active ke link yang diklik
      this.classList.add('text-yellow-500', 'font-bold');
    });
  });
</script>