<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Tumbuh Hospitality & Arts School')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sekolah perhotelan, kuliner, dan seni vokasi di Yogyakarta.">

    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/tumbuh/favicon-tumbuh.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Rubik', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Nunito', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="antialiased text-gray-600 bg-white flex flex-col min-h-screen">

    <div x-data="{ mobileMenu: false, scrolled: false }"
         @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
         class="fixed top-0 left-0 right-0 z-50 w-full transition-all duration-300">

        <div class="bg-[#112958] text-white transition-all duration-300 overflow-hidden hidden md:block"
             :class="scrolled ? 'h-0 py-0 opacity-0' : 'h-auto py-2 opacity-100'">
            <div class="container mx-auto px-4 lg:px-8 flex justify-between items-center text-xs lg:text-sm font-medium">
                <div class="flex space-x-4 lg:space-x-6">
                    <a href="mailto:hospitality.arts@sekolahtumbuh.sch.id" class="hover:text-[#FA8E00] transition duration-300 flex items-center">
                        <i class="fa-solid fa-envelope mr-2"></i>hospitality.arts@sekolahtumbuh.sch.id
                    </a>
                    <span class="flex items-center">
                        <i class="fa-solid fa-phone mr-2"></i>0822–2324-3036
                    </span>
                </div>
                <div>
                    <a href="https://wa.me/682223243036" target="_blank" class="hover:text-[#FA8E00] transition duration-300 font-semibold flex items-center">
                        <i class="fa-brands fa-whatsapp mr-1"></i> Daftar Sekarang!
                    </a>
                </div>
            </div>
        </div>

        <header class="bg-white/95 backdrop-blur-md border-b border-gray-100 transition-all duration-300 shadow-sm"
                :class="scrolled ? 'py-2 shadow-lg' : 'py-3 lg:py-4'">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="flex justify-between items-center">

                    <a href="{{ route('landingpage') }}" class="flex-shrink-0">
                        <img src="{{ asset('images/thas/menu.png') }}" alt="Logo THAS" class="h-10 md:h-12 lg:h-14 w-auto transition-all duration-300">
                    </a>

                    <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                        <a href="{{ route('landingpage') }}" class="font-semibold text-sm xl:text-base transition py-1 {{ request()->routeIs('landingpage') ? 'text-[#FA8E00] border-b-2 border-[#FA8E00]' : 'text-[#112958] hover:text-[#FA8E00]' }}">Home</a>
                        <a href="{{ route('about') }}" class="font-semibold text-sm xl:text-base transition py-1 {{ request()->routeIs('about') ? 'text-[#FA8E00] border-b-2 border-[#FA8E00]' : 'text-[#112958] hover:text-[#FA8E00]' }}">About</a>

                        <div class="relative group" x-data="{ open: false }">
                            <button @mouseenter="open = true" @mouseleave="open = false" class="flex items-center font-semibold text-sm xl:text-base transition py-4 {{ request()->is('perhotelan') || request()->is('shortcourse') ? 'text-[#FA8E00]' : 'text-[#112958] hover:text-[#FA8E00]' }}">
                                Program <i class="fa-solid fa-chevron-down ml-1 text-[10px] transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="open"
                                 @mouseenter="open = true"
                                 @mouseleave="open = false"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 translate-y-2"
                                 class="absolute left-0 mt-0 w-56 bg-white rounded-lg shadow-xl border border-gray-100 overflow-hidden z-50"
                                 x-cloak>
                                <a href="{{ route('perhotelan') }}" class="block px-6 py-3 text-sm text-gray-700 hover:bg-[#FA8E00] hover:text-white transition">Program Perhotelan</a>
                                <a href="{{ route('shortcourse') }}" class="block px-6 py-3 text-sm text-gray-700 hover:bg-[#FA8E00] hover:text-white transition">Program Short Course</a>
                            </div>
                        </div>

                        <a href="{{ route('articles.index') }}" class="font-semibold text-sm xl:text-base transition py-1 {{ request()->routeIs('articles.*') ? 'text-[#FA8E00] border-b-2 border-[#FA8E00]' : 'text-[#112958] hover:text-[#FA8E00]' }}">Info & Berita</a>
                        <a href="{{ route('contact') }}" class="font-semibold text-sm xl:text-base transition py-1 {{ request()->routeIs('contact') ? 'text-[#FA8E00] border-b-2 border-[#FA8E00]' : 'text-[#112958] hover:text-[#FA8E00]' }}">Kontak</a>
                    </nav>

                    <div class="hidden lg:block">
                        <a href="https://wa.me/6282223243036" target="_blank" class="bg-[#FA8E00] hover:bg-[#d67900] text-white px-5 py-2.5 rounded-full font-bold shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition duration-300 text-sm">
                            Daftar Sekarang
                        </a>
                    </div>

                    <button @click="mobileMenu = !mobileMenu" class="lg:hidden text-[#112958] focus:outline-none p-2 rounded hover:bg-gray-100 transition">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <div x-show="mobileMenu"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-2"
                 class="lg:hidden bg-white border-t border-gray-100 absolute top-full left-0 w-full shadow-xl max-h-[85vh] overflow-y-auto"
                 @click.outside="mobileMenu = false"
                 x-cloak>
                <div class="px-4 py-6 space-y-3">
                    <a href="{{ route('landingpage') }}" class="block px-4 py-3 font-bold rounded-lg transition {{ request()->routeIs('landingpage') ? 'text-[#FA8E00] bg-orange-50' : 'text-gray-700 hover:bg-gray-50' }}">Home</a>
                    <a href="{{ route('about') }}" class="block px-4 py-3 font-medium rounded-lg transition {{ request()->routeIs('about') ? 'text-[#FA8E00] bg-orange-50' : 'text-gray-700 hover:bg-gray-50' }}">About</a>

                    <div x-data="{ subOpen: false }">
                        <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center px-4 py-3 text-gray-700 font-medium hover:bg-gray-50 rounded-lg transition">
                            <span>Program</span>
                            <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="subOpen ? 'rotate-180' : ''"></i>
                        </button>
                        <div x-show="subOpen" class="pl-4 mt-1 space-y-1 bg-gray-50 rounded-lg">
                            <a href="{{ route('perhotelan') }}" class="block px-4 py-3 text-sm text-gray-600 hover:text-[#FA8E00] border-l-2 border-transparent hover:border-[#FA8E00]">Perhotelan</a>
                            <a href="{{ route('shortcourse') }}" class="block px-4 py-3 text-sm text-gray-600 hover:text-[#FA8E00] border-l-2 border-transparent hover:border-[#FA8E00]">Short Course</a>
                        </div>
                    </div>

                    <a href="{{ route('articles.index') }}" class="block px-4 py-3 font-medium rounded-lg transition {{ request()->routeIs('articles.*') ? 'text-[#FA8E00] bg-orange-50' : 'text-gray-700 hover:bg-gray-50' }}">Info & Berita</a>
                    <a href="{{ route('contact') }}" class="block px-4 py-3 font-medium rounded-lg transition {{ request()->routeIs('contact') ? 'text-[#FA8E00] bg-orange-50' : 'text-gray-700 hover:bg-gray-50' }}">Kontak</a>

                    <div class="pt-4 border-t border-gray-100 mt-2">
                        <a href="https://wa.me/6282223243036" class="block w-full text-center bg-[#FA8E00] text-white px-4 py-3 rounded-lg font-bold shadow-md hover:bg-[#d67900] transition">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-[#1a1a1a] text-gray-300 pt-16 md:pt-20 pb-10 mt-auto">
        <div class="container mx-auto px-4 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 md:gap-12 mb-16 text-center md:text-left">

                <div class="lg:col-span-1">
                    <a href="{{ route('landingpage') }}" class="block mb-6 flex justify-center md:justify-start">
                        <img src="{{ asset('images/thas/white.png') }}" alt="Logo Footer" class="h-16 w-auto">
                    </a>
                    <p class="text-sm leading-relaxed mb-6 px-4 md:px-0">
                        Mencetak profesional muda yang kompeten, berkarakter, dan siap bersaing di industri global.
                    </p>
                    <div class="flex justify-center md:justify-start space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#FA8E00] hover:text-white transition">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#FA8E00] hover:text-white transition">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-[#FA8E00] hover:text-white transition">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-6 inline-block md:block border-b-2 md:border-b-0 md:border-l-4 border-[#FA8E00] pb-2 md:pb-0 md:pl-3">
                        Program Studi
                    </h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('perhotelan') }}" class="hover:text-[#FA8E00] transition">Program Perhotelan</a></li>
                        <li><a href="{{ route('shortcourse') }}" class="hover:text-[#FA8E00] transition">Short Course</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-6 inline-block md:block border-b-2 md:border-b-0 md:border-l-4 border-[#FA8E00] pb-2 md:pb-0 md:pl-3">
                        Short Course
                    </h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="{{ route('shortcourse') }}" class="hover:text-[#FA8E00] transition">Short Course Kuliner</a></li>
                        <li><a href="{{ route('shortcourse') }}" class="hover:text-[#FA8E00] transition">Short Course Eksplorasi Seni</a></li>
                        <li><a href="#" class="hover:text-[#FA8E00] transition">Paket Edukasi Cooking Class</a></li>
                        <li><a href="#" class="hover:text-[#FA8E00] transition">Galeri Kegiatan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-6 inline-block md:block border-b-2 md:border-b-0 md:border-l-4 border-[#FA8E00] pb-2 md:pb-0 md:pl-3">
                        Kemitraan
                    </h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:text-[#FA8E00] transition">Artotel Hotel</a></li>
                        <li><a href="#" class="hover:text-[#FA8E00] transition">Grup Mesa</a></li>
                        <li><a href="#" class="hover:text-[#FA8E00] transition">Colours Street Food</a></li>
                        <li><a href="#" class="hover:text-[#FA8E00] transition">Grup Casa</a></li>
                        <li><a href="#" class="hover:text-[#FA8E00] transition">JNM Bloc</a></li>
                        <li><a href="#" class="hover:text-[#FA8E00] transition">Kopi Mlaku</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold text-lg mb-6 inline-block md:block border-b-2 md:border-b-0 md:border-l-4 border-[#FA8E00] pb-2 md:pb-0 md:pl-3">
                        Hubungi Kami
                    </h4>
                    <ul class="space-y-4 text-sm px-4 md:px-0">
                        <li class="flex items-start justify-center md:justify-start">
                            <i class="fa-solid fa-location-dot mt-1 mr-3 text-[#FA8E00]"></i>
                            <span>Jl. KH. Ali Maksum, Panggungharjo, Sewon, Bantul, D.I Yogyakarta</span>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <i class="fa-solid fa-phone mr-3 text-[#FA8E00]"></i>
                            <a href="tel:+6282223243036" class="hover:text-[#FA8E00]">0822-2324-3036</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <i class="fa-solid fa-envelope mr-3 text-[#FA8E00]"></i>
                            <a href="mailto:hospitality.arts@sekolahtumbuh.sch.id" class="hover:text-[#FA8E00]">hospitality.arts@sekolahtumbuh.sch.id</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-sm text-gray-500">
                <p>
                    &copy; 2024 Developed By
                    <a href="https://sekolahtumbuh.sch.id" target="_blank" class="text-gray-400 hover:text-[#FA8E00] font-bold">
                        Sekolah Tumbuh
                    </a>. All rights reserved.
                </p>
            </div>

        </div>
    </footer>

    <button x-data="{ show: false }"
            @scroll.window="show = (window.pageYOffset > 300) ? true : false"
            @click="window.scrollTo({top: 0, behavior: 'smooth'})"
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-4"
            class="fixed bottom-6 right-6 md:bottom-8 md:right-8 bg-[#FA8E00] text-white w-10 h-10 md:w-12 md:h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-[#e07b00] transition duration-300 z-50 focus:outline-none"
            x-cloak>
        <i class="fa-solid fa-arrow-up text-sm md:text-base"></i>
    </button>

</body>
</html>
