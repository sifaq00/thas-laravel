@extends('layouts.app')

@section('title', 'Short Course - Tumbuh Hospitality & Arts School')

@section('content')

@php
    $arts = [
        ['title' => 'Wahana Ekspresi', 'desc' => 'Menyuarakan jiwa dan emosi melalui beragam media seni.', 'icon' => 'fa-palette'],
        ['title' => 'Kreativitas', 'desc' => 'Merangsang imajinasi tanpa batas dan menginspirasi inovasi.', 'icon' => 'fa-lightbulb'],
        ['title' => 'Pengembangan Bakat', 'desc' => 'Mengasah bakat dan minat untuk membantu anak-anak bersinar.', 'icon' => 'fa-star'],
        ['title' => 'Keterampilan', 'desc' => 'Melatih keterampilan dan ketekunan melalui proses kreatif.', 'icon' => 'fa-tools'],
        ['title' => 'Kepribadian', 'desc' => 'Membentuk karakter yang kuat dan autentik lewat seni.', 'icon' => 'fa-user-check'],
        ['title' => 'Estetika', 'desc' => 'Menumbuhkan apresiasi terhadap keindahan dan estetika.', 'icon' => 'fa-eye'],
    ];
@endphp

    <div class="pt-28 md:pt-42 lg:pt-44 pb-6 bg-white">
        <div class="container mx-auto px-4 lg:px-8 text-center border-b border-gray-100 pb-8">

            <nav class="flex justify-center items-center text-gray-500 text-xs md:text-sm font-medium space-x-2 mb-4">
                <a href="{{ route('landingpage') }}" class="hover:text-[#FA8E00] transition">Home</a>
                <span class="text-gray-300">/</span>
                <span class="text-[#FA8E00] font-bold">Short Course</span>
            </nav>

            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#112958] leading-tight animate-fade-in-up">
                Program Short Course
            </h1>
        </div>
    </div>

    <section class="pt-3 pb-16 md:pt-12 lg:pt-12 md:pb-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">

                <div class="relative rounded-3xl overflow-hidden shadow-2xl order-2 lg:order-1">
                    <div class="aspect-video">
                        <iframe class="w-full h-full"
                                src="https://www.youtube.com/embed/Pz16x5L9TMM"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <span class="inline-block text-[#FA8E00] font-bold uppercase tracking-widest text-sm mb-3">
                        Program Unggulan
                    </span>

                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#112958] mb-6">
                        Short Course Kuliner
                    </h2>

                    <div class="text-gray-600 text-lg leading-relaxed space-y-5">
                        <p class="italic text-[#FA8E00] font-semibold">
                            Salam pencinta dan penikmat kuliner,
                        </p>

                        <p>
                            Program ini dirancang untuk membekali peserta dengan keterampilan,
                            kepercayaan diri, dan kecakapan hidup untuk terjun di dunia kuliner
                            profesional maupun wirausaha.
                        </p>

                        <div class="bg-orange-50 border-l-4 border-[#FA8E00] p-6 rounded-xl">
                            <h5 class="font-bold text-[#112958] mb-4">Kelas Tersedia</h5>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-utensils text-[#FA8E00]"></i>
                                    <span><strong>Program Intensif</strong> (Remaja & Dewasa)</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <i class="fa-solid fa-child text-[#FA8E00]"></i>
                                    <span><strong>Program Liburan</strong> (TK & SD)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-[#0f1e3a] relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('{{ asset('images/bg/pattern1.png') }}')]"></div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6">
                    Short Course Eksplorasi Seni
                </h2>

                <blockquote class="bg-white/10 p-8 rounded-2xl backdrop-blur border border-white/20">
                    <p class="text-[#FA8E00] text-xl italic mb-4">
                        “Setiap anak adalah artis. Masalahnya bagaimana agar tetap menjadi artis saat dewasa.”
                    </p>
                    <span class="text-white font-bold">— Pablo Picasso</span>
                </blockquote>

                <p class="text-gray-300 mt-8 text-lg">
                    Pembelajaran seni 2D, 3D, fine arts, applied arts, dan seni kontemporer,
                    disertai pameran karya.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($arts as $art)
                <div class="group bg-white/5 p-6 rounded-2xl border border-white/10
                            hover:bg-[#FA8E00] transition duration-300">
                    <div class="w-14 h-14 rounded-full bg-white/10 flex items-center justify-center mb-5
                                text-[#FA8E00] group-hover:text-white transition">
                        <i class="fa-solid {{ $art['icon'] }} text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">{{ $art['title'] }}</h3>
                    <p class="text-gray-400 group-hover:text-white transition text-sm">
                        {{ $art['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="bg-[#112958] rounded-3xl p-10 md:p-14 text-center text-white relative overflow-hidden shadow-2xl">
                <h3 class="text-2xl md:text-3xl font-extrabold mb-4 relative z-10">
                    Tertarik Mendaftar?
                </h3>
                <p class="text-gray-300 mb-8 relative z-10">
                    Hubungi admin kami untuk koordinasi program & jadwal.
                </p>

                <a href="https://wa.me/6282223243036"
                   class="inline-flex items-center gap-3 px-8 py-4
                          bg-[#FA8E00] text-white font-bold rounded-full
                          hover:bg-white hover:text-[#FA8E00]
                          transition duration-300 relative z-10">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    Hubungi Admin
                </a>

                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-[#FA8E00]/30 rounded-full blur-2xl"></div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <h2 class="text-center text-3xl font-extrabold text-[#112958] mb-12">
                Galeri Kegiatan
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach(['lkp1.png','lkp2.png','lkp3.png','lkp4.png'] as $i => $img)
                <div class="group relative h-40 md:h-64 rounded-2xl overflow-hidden shadow-lg cursor-pointer">
                    <img src="{{ asset('images/thas/'.$img) }}"
                         class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0
                                group-hover:opacity-100 transition
                                flex items-center justify-center">
                        <span class="text-white font-bold border border-white
                                     px-4 py-2 rounded-full text-sm">
                            Kegiatan {{ $i + 1 }}
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
