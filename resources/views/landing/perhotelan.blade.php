@extends('layouts.app')

@section('title', 'Program Perhotelan - Tumbuh Hospitality & Arts School')

@section('content')

    <div class="pt-28 md:pt-42 lg:pt-44 pb-6 bg-white">
        <div class="container mx-auto px-4 lg:px-8 text-center border-b border-gray-100 pb-8">

            <nav class="flex justify-center items-center text-gray-500 text-xs md:text-sm font-medium space-x-2 mb-4">
                <a href="{{ route('landingpage') }}" class="hover:text-[#FA8E00] transition">Home</a>
                <span class="text-gray-300">/</span>
                <span class="text-[#FA8E00] font-bold">Program Perhotelan</span>
            </nav>

            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#112958] leading-tight animate-fade-in-up">
                Program Perhotelan
            </h1>
        </div>
    </div>

    <section class="pt-3 pb-16 md:pt-12 lg:pt-12 md:pb-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div class="relative group order-2 lg:order-last">
                    <div class="absolute -inset-4 bg-[#FA8E00]/10 rounded-2xl transform -rotate-2 transition duration-500"></div>
                    <img src="{{ asset('images/thas/profile-perhotelan.png') }}" alt="Profil Perhotelan" class="relative rounded-2xl shadow-xl w-full object-cover">
                </div>

                <div class="order-1 lg:order-first">
                    <span class="text-[#FA8E00] font-bold text-sm tracking-wide uppercase mb-2 block">Tentang Program</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#112958] mb-6">Profil Lulusan Program Studi Perhotelan</h2>

                    <div class="text-gray-600 text-base md:text-lg leading-relaxed space-y-4 text-justify">
                        <p>
                            Program perhotelan adalah program pendidikan 1 tahun atau setara Diploma 1 (D1) di bidang operasional hotel untuk lulusan SMA dan sederajat.
                        </p>
                        <p>
                            Lulusan prodi perhotelan Tumbuh Hospitality & Arts School akan memiliki ketrampilan operasional perhotelan yang berkaitan dengan pekerjaan pada departmen <strong class="text-[#112958]">Housekeeping, Front Office, Food & Beverage Service, Food & Beverage Production, dan Pastry & Bakery.</strong>
                        </p>
                        <p>
                            Lulusan prodi perhotelan juga akan memiliki bekal kewirausahaan yang ramah lingkungan dan memiliki kemampuan berkomunikasi dengan bahasa yang baik dan benar minimal dalam dua bahasa, Indonesia dan Inggris.
                        </p>
                        <div class="bg-blue-50 border-l-4 border-[#112958] p-4 mt-4 rounded-r-lg">
                            <p class="text-sm md:text-base italic text-[#112958]">
                                Lulusan prodi perhotelan dapat <b>bekerja</b> di bawah pengawasan supervisor di bidang operasional hotel atau dunia industri, berwirausaha secara mandiri, maupun melanjutkan ke jenjang Perguruan Tinggi.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#112958 1px, transparent 1px); background-size: 20px 20px;"></div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#112958]">Kurikulum & Pembelajaran</h2>
                <div class="h-1 w-20 bg-[#FA8E00] mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <div class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-[#FA8E00] hover:-translate-y-2 transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-[#FA8E00]/10 rounded-full flex items-center justify-center mr-4 text-[#FA8E00]">
                            <i class="fa-solid fa-book-open text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-[#112958]">Kurikulum</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Kurikulum adalah jantungnya pendidikan. Kurikulum bagi mahasiswa THAS dikembangkan dengan mengacu pada tiga aspek:
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-[#FA8E00] mt-1 mr-3"></i>
                            <div>
                                <strong class="text-[#112958]">SNDikti:</strong> Menggunakan skema pendidikan tinggi (8 standar pendidikan).
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-[#FA8E00] mt-1 mr-3"></i>
                            <div>
                                <strong class="text-[#112958]">KKNI:</strong> Mengacu pada Kerangka Kualifikasi Nasional Indonesia (KKNI) level 3.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-[#FA8E00] mt-1 mr-3"></i>
                            <div>
                                <strong class="text-[#112958]">Perspektif Inklusi:</strong> Dikembangkan dengan menggunakan perspektif inklusi.
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-[#112958] hover:-translate-y-2 transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-[#112958]/10 rounded-full flex items-center justify-center mr-4 text-[#112958]">
                            <i class="fa-solid fa-chalkboard-user text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-[#112958]">Pembelajaran</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Proses pembelajaran berpusat pada mahasiswa (Student Centered Learning) dengan skema:
                    </p>
                    <ul class="space-y-2 text-gray-600 text-sm md:text-base">
                        <li class="flex items-center"><span class="w-2 h-2 bg-[#112958] rounded-full mr-3"></span> Lama studi 2 semester</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-[#112958] rounded-full mr-3"></span> Beban belajar 36 SKS</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-[#112958] rounded-full mr-3"></span> Komposisi: 30% Teori, 70% Praktik</li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-[#112958] rounded-full mr-3"></span> OJT di hotel/industri (3 bulan)</li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-[#112958] rounded-full mr-3 mt-1.5 flex-shrink-0"></span>
                            <span>Program penunjang: Guest lecturer, kunjungan industri, grooming, table manner, & gelar karya.</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">

            <div class="text-center mb-16 max-w-4xl mx-auto">
                <span class="text-[#00A450] font-bold text-sm uppercase tracking-wider mb-2 block">Program Keistimewaan Kampus</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#112958] mb-6">Green Entrepreneurship</h2>
                <p class="text-gray-600 text-lg">
                    Program unggulan yang terintegrasi pada mata kuliah Green Entrepreneurship dan berbasis projek (Project Based Learning) berbentuk unit usaha kuliner.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="bg-green-50 p-6 rounded-xl border border-green-100 hover:shadow-md transition text-center md:text-left">
                    <img src="{{ asset('images/icon/Pembelajaran.png') }}" alt="Icon" class="h-16 mb-4 mx-auto md:mx-0">
                    <h4 class="font-bold text-[#112958] mb-2">Pengembangan Pembelajaran</h4>
                    <p class="text-sm text-gray-600">Wadah untuk mengasah skill kewirausahaan mahasiswa yang inklusif dan ramah lingkungan.</p>
                </div>
                <div class="bg-green-50 p-6 rounded-xl border border-green-100 hover:shadow-md transition text-center md:text-left">
                    <img src="{{ asset('images/icon/LembagaUsaha.png') }}" alt="Icon" class="h-16 mb-4 mx-auto md:mx-0">
                    <h4 class="font-bold text-[#112958] mb-2">Unit Usaha Lembaga</h4>
                    <p class="text-sm text-gray-600">Menghasilkan keuntungan bagi lembaga dan mahasiswa serta menghidupkan ekonomi sirkular.</p>
                </div>
                <div class="bg-green-50 p-6 rounded-xl border border-green-100 hover:shadow-md transition text-center md:text-left">
                    <img src="{{ asset('images/icon/GreenEntre.png') }}" alt="Icon" class="h-16 mb-4 mx-auto md:mx-0">
                    <h4 class="font-bold text-[#112958] mb-2">Kegiatan Program</h4>
                    <ul class="text-sm text-gray-600 list-disc pl-4 space-y-1 text-left inline-block">
                        <li>Membuat Business Plan</li>
                        <li>Pembekalan Kewirausahaan</li>
                        <li>Pembekalan Digital Marketing</li>
                        <li>Produksi & Penjualan</li>
                    </ul>
                </div>
            </div>

            <div class="bg-[#112958] rounded-3xl overflow-hidden shadow-2xl relative">
                <div class="grid md:grid-cols-2 items-center">
                    <div class="p-8 md:p-12 order-2 md:order-1">
                        <h3 class="text-3xl font-extrabold text-white mb-4">Tumbuh BakeHouse</h3>
                        <p class="text-gray-300 text-lg leading-relaxed mb-6">
                            Tumbuh BakeHouse merupakan merk produk sekaligus nama unit usaha kuliner yang telah dihasilkan dari program keistimewaan kampus Green Entrepreneurship.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-[#FA8E00] text-white font-bold rounded-lg hover:bg-white hover:text-[#FA8E00] transition">
                            Hubungi Kami
                        </a>
                    </div>
                    <div class="order-1 md:order-2 h-64 md:h-full relative">
                        <img src="{{ asset('images/thas/bakehouse2.png') }}" alt="Bakehouse" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#112958] to-transparent md:bg-gradient-to-l"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <h2 class="text-center text-3xl font-extrabold text-[#112958] mb-12">Galeri Kegiatan</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach(['lkp1.png', 'lkp2.png', 'lkp3.png', 'lkp4.png'] as $index => $img)
                <div class="group relative rounded-xl overflow-hidden shadow-md h-48 md:h-64 cursor-pointer">
                    <img src="{{ asset('images/thas/' . $img) }}" alt="Kegiatan" class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white font-bold border border-white px-4 py-2 rounded-full text-sm">Kegiatan {{ $index + 1 }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
