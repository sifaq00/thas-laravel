@extends('layouts.app')

@section('title', 'Tumbuh Hospitality & Arts School - Home')

@section('content')

    <section class="relative min-h-[500px] md:min-h-[600px] lg:min-h-[750px] flex items-center bg-gray-900 overflow-hidden pt-28 md:pt-32 lg:pt-48">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/thas/cooking3.png') }}" alt="Hero Background" class="w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-transparent"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10 pb-12 md:pb-0">
            <div class="max-w-3xl -mt-0 md:-mt-10 lg:-mt-16">
                <div class="inline-block px-3 py-1 md:px-4 md:py-1.5 mb-4 md:mb-6 border border-[#FA8E00] rounded-full bg-[#FA8E00]/20 backdrop-blur-md">
                    <span class="text-[#FA8E00] font-bold text-xs md:text-sm tracking-wide uppercase">Good Food, Good Life</span>
                </div>

                <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-4 md:mb-6">
                    Cooking Start Learning <br> <span class="text-[#FA8E00]">Recipes to Cook</span> Today
                </h1>

                <p class="text-base md:text-xl text-gray-200 mb-8 md:mb-10 leading-relaxed max-w-xl md:max-w-2xl">
                    Kembangkan bakat kuliner dan perhotelan Anda bersama para ahli.
                    Bergabunglah dengan komunitas kreatif kami untuk masa depan yang cemerlang.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/6282223243036" target="_blank" class="px-6 py-3 md:px-8 md:py-4 bg-[#FA8E00] hover:bg-[#d67900] text-white font-bold rounded-lg shadow-lg transition transform hover:-translate-y-1 text-center text-sm md:text-base">
                        Mulai Sekarang
                    </a>
                    <a href="{{ route('about') }}" class="px-6 py-3 md:px-8 md:py-4 bg-white/10 hover:bg-white text-white hover:text-[#112958] border border-white font-bold rounded-lg backdrop-blur-sm transition transform hover:-translate-y-1 text-center text-sm md:text-base">
                        Tentang Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center">

                <div class="relative group order-2 lg:order-1 mt-6 lg:mt-0
                            max-w-md md:max-w-lg lg:max-w-xl mx-auto lg:mx-0">
                    <div class="absolute -inset-2 md:-inset-4 bg-[#FA8E00]/20 rounded-2xl transform rotate-2 group-hover:rotate-1 transition duration-500"></div>
                    <img src="{{ asset('images/thas/lkp4-3.png') }}" alt="Tentang THAS" class="relative rounded-2xl shadow-2xl w-full object-cover transform transition duration-500 group-hover:-translate-y-2">
                </div>

                <div class="order-1 lg:order-2">
                    <h4 class="text-[#FA8E00] font-bold text-sm md:text-lg mb-2 uppercase tracking-wider">Tentang Kami</h4>
                    <h2 class="text-2xl md:text-4xl font-extrabold text-[#112958] mb-4 md:mb-6 leading-tight">
                        Tumbuh Hospitality & <br> Arts School
                    </h2>
                    <p class="text-gray-600 text-sm md:text-lg leading-relaxed mb-6 md:mb-8 text-justify">
                        Tumbuh Hospitality & Arts School merupakan satuan pendidikan non formal berbentuk
                        Lembaga Kursus dan Pelatihan (LKP) di bawah naungan Yayasan Edukasi Anak Nusantara
                        yang mengusung pendidikan inklusi dan menyelenggarakan program pendidikan vokasi di
                        bidang operasional perhotelan, kuliner, dan seni.
                    </p>
                    <a href="{{ route('about') }}" class="inline-flex items-center text-[#FA8E00] font-bold text-base md:text-lg hover:text-[#112958] transition group">
                        Baca Selengkapnya
                        <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-2 transition"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/bg/home-8-bg.jpg') }}');">
        <div class="absolute inset-0 bg-[#112958]/70"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center">
            <h2 class="text-[#FA8E00] font-bold text-lg md:text-xl mb-3 uppercase tracking-wider">Pendaftaran Mahasiswa Baru</h2>
            <h1 class="text-2xl md:text-5xl font-extrabold text-white mb-6">Tahun Ajaran 2025/2026</h1>
            <p class="text-gray-200 text-sm md:text-lg mb-8 md:mb-10 max-w-2xl mx-auto">
                Kami membuka pendaftaran mahasiswa baru untuk periode tahun ajaran 2025-2026.
                Dapatkan info syarat dan ketentuan serta detail informasi melalui admin kami.
            </p>
            <a href="https://wa.me/6282223243036" target="_blank" class="inline-block px-8 py-3 md:px-10 md:py-4 bg-[#FA8E00] hover:bg-white hover:text-[#FA8E00] text-white font-bold rounded-full shadow-lg transition-all duration-300 transform hover:scale-105 text-sm md:text-base">
                Daftar Sekarang
            </a>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-10 md:mb-16">
                <span class="text-[#FA8E00] font-bold text-sm md:text-lg uppercase tracking-wider block mb-2">Program Studi</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-[#112958]">Berbagai Program Unggulan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">
                    <div class="relative h-56 md:h-60 overflow-hidden">
                        <img src="{{ asset('images/courses/hotel.png') }}" alt="Perhotelan" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-[#112958] mb-4 group-hover:text-[#FA8E00] transition">
                            <a href="{{ route('perhotelan') }}">Program Perhotelan</a>
                        </h3>
                        <div class="flex items-center text-gray-500 text-xs md:text-sm space-x-4 border-t pt-4">
                            <span><i class="fa-solid fa-users mr-2 text-[#FA8E00]"></i> 1 Tahun</span>
                            <span><i class="fa-solid fa-certificate mr-2 text-[#FA8E00]"></i> Sertifikat</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">
                    <div class="relative h-56 md:h-60 overflow-hidden">
                        <img src="{{ asset('images/courses/kuliner.png') }}" alt="Kuliner" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-[#112958] mb-4 group-hover:text-[#FA8E00] transition">
                            <a href="{{ route('shortcourse') }}">Short Course Kuliner</a>
                        </h3>
                        <div class="flex items-center text-gray-500 text-xs md:text-sm space-x-4 border-t pt-4">
                            <span><i class="fa-solid fa-clock mr-2 text-[#FA8E00]"></i> Intensif</span>
                            <span><i class="fa-solid fa-utensils mr-2 text-[#FA8E00]"></i> Praktek Langsung</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">
                    <div class="relative h-56 md:h-60 overflow-hidden">
                        <img src="{{ asset('images/courses/seni.png') }}" alt="Seni" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg md:text-xl font-bold text-[#112958] mb-4 group-hover:text-[#FA8E00] transition">
                            <a href="{{ route('shortcourse') }}">Eksplorasi Seni</a>
                        </h3>
                        <div class="flex items-center text-gray-500 text-xs md:text-sm space-x-4 border-t pt-4">
                            <span><i class="fa-solid fa-palette mr-2 text-[#FA8E00]"></i> Kreativitas</span>
                            <span><i class="fa-solid fa-user-graduate mr-2 text-[#FA8E00]"></i> Profesional</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-10 md:mb-14">
            <span class="inline-block text-[#FA8E00] font-bold text-xs md:text-sm uppercase tracking-widest mb-3">
                Berita Terbaru
            </span>
            <h2 class="text-2xl md:text-4xl font-extrabold text-[#112958] leading-tight">
                Aktivitas & Informasi
            </h2>
        </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach($articles as $article)
                <article class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col h-full">
                    <div class="relative h-48 md:h-56 overflow-hidden">
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition duration-500 hover:scale-105">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">
                                <i class="fa-solid fa-image text-4xl"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4 bg-[#FA8E00] text-white text-[10px] md:text-xs font-bold px-3 py-1 rounded shadow">
                            {{ $article->created_at->format('d M Y') }}
                        </div>
                    </div>
                    <div class="p-5 md:p-6 flex flex-col flex-grow">
                        <div class="flex items-center text-[10px] md:text-xs text-gray-500 mb-3 space-x-3">
                            <span class="flex items-center"><i class="fa-regular fa-user mr-1.5"></i> {{ $article->author ?? 'Admin' }}</span>
                            <span class="flex items-center"><i class="fa-regular fa-clock mr-1.5"></i> {{ $article->created_at->format('H:i') }} WIB</span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-[#112958] mb-3 line-clamp-2 hover:text-[#FA8E00] transition">
                            <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3 mb-4 flex-grow">
                            {{ Str::limit(strip_tags($article->content), 100) }}
                        </p>
                        <a href="{{ route('articles.show', $article->id) }}" class="inline-block text-[#FA8E00] font-bold text-sm hover:underline mt-auto">
                            Baca Selengkapnya
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

            <div class="flex justify-center mt-10">
                <a href="{{ route('articles.index') }}"
                class="inline-flex items-center gap-2 px-6 py-3 rounded-full
                        bg-[#112958] text-white font-bold text-sm
                        hover:bg-[#FA8E00] hover:text-white
                        shadow-md hover:shadow-lg
                        transition-all duration-300 group">
                    Lihat Semua Berita
                    <i class="fa-solid fa-arrow-right transform group-hover:translate-x-1 transition"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-center">

                <div class="relative group order-2 lg:order-1">
                    <img src="{{ asset('images/about/profile.png') }}" alt="Video Profile" class="w-full rounded-2xl shadow-xl">
                    <a href="https://www.youtube.com/watch?v=3RPQDj9s4u4" target="_blank" class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition duration-300">
                        <div class="w-16 h-16 md:w-20 md:h-20 bg-[#FA8E00] rounded-full flex items-center justify-center shadow-lg animate-pulse group-hover:animate-none">
                            <i class="fa-solid fa-play text-white text-xl md:text-2xl ml-1"></i>
                        </div>
                    </a>
                </div>

                <div class="order-1 lg:order-2">
                    <span class="text-[#FA8E00] font-bold text-sm md:text-lg uppercase tracking-wider block mb-2">Video Profile</span>
                    <h2 class="text-2xl md:text-4xl font-extrabold text-[#112958] mb-4 md:mb-6">
                        Tumbuh Hospitality & <br> Arts School Profile
                    </h2>
                    <p class="text-gray-600 text-sm md:text-lg leading-relaxed text-justify">
                        Saksikan video profil kami untuk melihat fasilitas unggulan, suasana belajar yang dinamis,
                        serta testimoni dari mahasiswa kami. Kami berkomitmen menciptakan lingkungan belajar
                        yang mendorong pertumbuhan skill dan karakter profesional.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
