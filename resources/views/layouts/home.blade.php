<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      e-Kudeta PA Waingapu
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    @include('includes.home.style')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            <div style="display: inline-block">
              <div class="inline-block">
                <img src="{{ asset('frontend/e-kudeta-notext.png') }}" style="width: 40px; height: 40px;"/>
              </div>
              <div class="inline-block">
                E-KUDETA
              </div>
            </div>
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#tentang_app">Tentang Aplikasi</a>
            </li>
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#input_data">Pendaftaran</a>
            </li>
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    {{ $slot }}
    
    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                <div style="display: inline-block">
                    <div class="inline-block">
                      <img src="{{ asset('frontend/e-kudeta-notext.png') }}" style="width: 40px; height: 40px;"/>
                    </div>
                    <div class="inline-block">
                      E-KUDETA
                    </div>
                </div>
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Link</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#tentang_app" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Tentang</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Sosial Media</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.facebook.com/pengadilanagama.waingapu.16" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.instagram.com/pengadilanagamawaingapu/" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Instagram</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.youtube.com/channel/UCl8atMuWy8v-cmCwuHeNSSw" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Youtube</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Satuan Kerja</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.pa-waingapu.go.id/" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Website Resmi</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#kontak" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  @include('includes.home.script')
  </body>
</html>
