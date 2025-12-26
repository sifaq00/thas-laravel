@extends('layouts.app')

@section('title', 'About Us - Tumbuh Hospitality & Arts School')

@section('content')

    <div class="relative bg-gray-900 pt-40 pb-20 md:pt-64 md:pb-32 lg:pt-80 lg:pb-40 bg-cover bg-center"
        style="background-image: url('{{ asset('images/about/breadcrumbs2.png') }}');">

        <div class="absolute inset-0 bg-gradient-to-b from-[#112958]/80 to-black/60"></div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white mb-3 md:mb-4 animate-fade-in-up">About Us</h1>
            <nav class="flex justify-center text-gray-300 text-xs md:text-sm lg:text-base font-medium space-x-3">
                <a href="{{ route('landingpage') }}" class="hover:text-[#FA8E00] transition duration-300">Home</a>
                <span><i class="fa-solid fa-chevron-right text-[10px] text-[#FA8E00]"></i></span>
                <span class="text-white">About Us</span>
            </nav>
        </div>
    </div>

    <section class="py-16 md:py-20 lg:py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 md:w-96 md:h-96 bg-gray-50 rounded-full blur-3xl opacity-50 z-0"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-48 h-48 md:w-72 md:h-72 bg-[#FA8E00]/5 rounded-full blur-3xl opacity-50 z-0"></div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                <div class="relative group order-2 lg:order-1 mt-8 lg:mt-0">
                    <div class="absolute -inset-2 md:-inset-4 bg-gradient-to-tr from-[#112958] to-[#FA8E00] rounded-2xl md:rounded-[2rem] opacity-10 group-hover:opacity-20 transition duration-500 transform rotate-2 md:rotate-3"></div>

                    <div class="relative rounded-xl md:rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="{{ asset('images/thas/about.png') }}" alt="Tentang THAS" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-105">

                        <div class="absolute bottom-4 right-4 md:bottom-6 md:right-6 bg-white/95 backdrop-blur shadow-lg p-3 md:p-4 rounded-lg md:rounded-xl border-l-4 border-[#FA8E00] hidden sm:block animate-fade-in-up">
                            <div class="flex items-center gap-3">
                                <div class="bg-[#FA8E00]/10 p-2 rounded-full text-[#FA8E00]">
                                    <i class="fa-solid fa-graduation-cap text-lg md:text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] md:text-xs text-gray-500 font-bold uppercase tracking-wider">Sejak</p>
                                    <p class="text-lg md:text-xl font-extrabold text-[#112958]">2008</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#FA8E00]/10 text-[#FA8E00] text-[10px] md:text-xs font-bold uppercase tracking-widest mb-4 md:mb-6">
                        <span class="w-2 h-2 rounded-full bg-[#FA8E00]"></span>
                        Tentang Kami
                    </div>

                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#112958] mb-4 md:mb-6 leading-tight">
                        Profil Tumbuh <br class="hidden md:block"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FA8E00] to-orange-400">Hospitality & Arts</span>
                    </h2>

                    <div class="text-gray-600 text-base md:text-lg leading-relaxed space-y-4 md:space-y-6 mb-8 md:mb-10 text-justify">
                        <p>
                            Setelah 18 tahun berdiri, Sekolah Tumbuh melebarkan sayapnya dengan melahirkan lembaga pendidikan vokasi modern bernama <strong class="text-[#112958]">Tumbuh Hospitality & Arts School (THAS)</strong>.
                        </p>
                        <p>
                            Kami menggabungkan kurikulum berbasis industri dengan nilai-nilai <span class="italic text-[#FA8E00]">inklusif</span> untuk mencetak profesional muda di bidang perhotelan, kuliner, dan seni.
                        </p>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-4 md:gap-5">
                        <div class="bg-gray-50 p-5 md:p-6 rounded-2xl border border-gray-100 hover:shadow-lg hover:border-[#FA8E00]/30 transition duration-300 group">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-[#FA8E00] text-lg md:text-xl mb-3 md:mb-4 group-hover:bg-[#FA8E00] group-hover:text-white transition">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h4 class="font-bold text-[#112958] text-base md:text-lg mb-2 md:mb-3">Harapan Kami</h4>
                            <ul class="space-y-2 text-xs md:text-sm text-gray-600">
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-check text-[#FA8E00] mt-1"></i>
                                    <span>Fasilitas lanjutan lulusan SMA.</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fa-solid fa-check text-[#FA8E00] mt-1"></i>
                                    <span>Pengembangan potensi & minat.</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-[#112958] p-5 md:p-6 rounded-2xl shadow-lg text-white hover:bg-[#0d2149] transition duration-300 relative overflow-hidden group">
                            <div class="absolute top-0 right-0 opacity-10 transform translate-x-4 -translate-y-4">
                                <i class="fa-solid fa-shapes text-6xl md:text-8xl"></i>
                            </div>
                            <div class="relative z-10">
                                <div class="w-10 h-10 md:w-12 md:h-12 bg-white/10 rounded-xl flex items-center justify-center text-[#FA8E00] text-lg md:text-xl mb-3 md:mb-4">
                                    <i class="fa-solid fa-layer-group"></i>
                                </div>
                                <h4 class="font-bold text-white text-base md:text-lg mb-2 md:mb-3">Program Studi</h4>
                                <ul class="space-y-2 text-xs md:text-sm text-gray-300">
                                    <li class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#FA8E00]"></span> Perhotelan (1 Tahun)
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#FA8E00]"></span> Short Course Kuliner
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#FA8E00]"></span> Eksplorasi Seni
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-12 items-start">

                <div class="relative h-64 md:h-96 lg:h-full lg:min-h-[400px] rounded-2xl overflow-hidden shadow-xl lg:sticky lg:top-24 mb-8 lg:mb-0">
                    <img src="{{ asset('images/about/profile.png') }}" alt="Visi Misi THAS" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#112958]/50 to-transparent"></div>
                </div>

                <div class="space-y-6 md:space-y-8">
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border-l-[6px] border-[#FA8E00] hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-3 md:mb-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-[#FA8E00]/10 rounded-full flex items-center justify-center mr-3 md:mr-4 text-[#FA8E00] flex-shrink-0">
                                <i class="fa-solid fa-lightbulb text-lg md:text-xl"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-extrabold text-[#112958]">Visi</h3>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base md:text-lg font-medium">
                            Menghasilkan lulusan yang berkarakter, profesional dalam bekerja, dan memiliki jiwa kewirausahaan.
                        </p>
                    </div>

                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border-l-[6px] border-[#112958] hover:shadow-md transition duration-300">
                        <div class="flex items-center mb-3 md:mb-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 bg-[#112958]/10 rounded-full flex items-center justify-center mr-3 md:mr-4 text-[#112958] flex-shrink-0">
                                <i class="fa-solid fa-bullseye text-lg md:text-xl"></i>
                            </div>
                            <h3 class="text-xl md:text-2xl font-extrabold text-[#112958]">Misi</h3>
                        </div>

                        <ul class="space-y-4 text-gray-600 text-sm md:text-base text-justify">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#112958] text-white flex items-center justify-center text-xs font-bold mt-0.5 mr-3">1</span>
                                <span class="leading-relaxed">
                                    Menyelenggarakan program pendidikan reguler dan non reguler di bidang operasional perhotelan, kuliner, dan seni yang menekankan pada penguasaan ketrampilan yang selalu terbaharui, mengikuti perkembangan informasi dan teknologi, serta tuntutan dunia kerja dan dunia industri.
                                </span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#112958] text-white flex items-center justify-center text-xs font-bold mt-0.5 mr-3">2</span>
                                <span class="leading-relaxed">
                                    Menyelenggarakan program pendidikan yang mengusung nilai-nilai inklusif, Jogja educational spirit, kepedulian pada lingkungan, dan pendidikan berkelanjutan.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8">

            <div class="text-center mb-10 md:mb-16 max-w-2xl mx-auto">
                <span class="text-[#FA8E00] font-bold uppercase tracking-[0.2em] text-[10px] md:text-xs mb-2 block">Sarana & Prasarana</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-[#112958]">Fasilitas Standar Industri</h2>
                <div class="h-1 w-16 md:w-24 bg-gradient-to-r from-[#FA8E00] to-[#112958] mx-auto rounded-full mt-3 md:mt-4"></div>
            </div>

            <div x-data="{ showAll: false }">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6">

                    <div class="group relative rounded-2xl overflow-hidden cursor-pointer h-56 md:h-64 shadow-lg">
                        <img src="{{ asset('images/about/RuangKelas.png') }}" alt="Ruang Kelas" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#112958] via-[#112958]/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 p-5 md:p-6 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="w-8 h-1 bg-[#FA8E00] mb-2 rounded-full opacity-0 group-hover:opacity-100 transition duration-500"></div>
                            <h5 class="text-white font-bold text-base md:text-lg leading-tight group-hover:text-[#FA8E00] transition-colors">Ruang Kelas Nyaman</h5>
                            <p class="text-gray-300 text-[10px] md:text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-500 delay-100">Dilengkapi AC & Multimedia</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden cursor-pointer h-56 md:h-64 shadow-lg">
                        <img src="{{ asset('images/about/LabFood.png') }}" alt="Lab F&B" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#112958] via-[#112958]/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 p-5 md:p-6 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="w-8 h-1 bg-[#FA8E00] mb-2 rounded-full opacity-0 group-hover:opacity-100 transition duration-500"></div>
                            <h5 class="text-white font-bold text-base md:text-lg leading-tight group-hover:text-[#FA8E00] transition-colors">Lab. F&B Service</h5>
                            <p class="text-gray-300 text-[10px] md:text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-500 delay-100">Simulasi Restoran</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden cursor-pointer h-56 md:h-64 shadow-lg">
                        <img src="{{ asset('images/about/LabHousekeeping.png') }}" alt="Lab Housekeeping" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#112958] via-[#112958]/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 p-5 md:p-6 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="w-8 h-1 bg-[#FA8E00] mb-2 rounded-full opacity-0 group-hover:opacity-100 transition duration-500"></div>
                            <h5 class="text-white font-bold text-base md:text-lg leading-tight group-hover:text-[#FA8E00] transition-colors">Lab. Housekeeping</h5>
                            <p class="text-gray-300 text-[10px] md:text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-500 delay-100">Kamar Hotel Bintang</p>
                        </div>
                    </div>

                    <div class="group relative rounded-2xl overflow-hidden cursor-pointer h-56 md:h-64 shadow-lg">
                        <img src="{{ asset('images/about/LabKitchen.png') }}" alt="Lab Kitchen" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#112958] via-[#112958]/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                        <div class="absolute bottom-0 left-0 p-5 md:p-6 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <div class="w-8 h-1 bg-[#FA8E00] mb-2 rounded-full opacity-0 group-hover:opacity-100 transition duration-500"></div>
                            <h5 class="text-white font-bold text-base md:text-lg leading-tight group-hover:text-[#FA8E00] transition-colors">Lab. Kitchen</h5>
                            <p class="text-gray-300 text-[10px] md:text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-500 delay-100">Peralatan Modern</p>
                        </div>
                    </div>

                    <template x-if="showAll">
                        <div class="contents">
                            <div class="group relative rounded-2xl overflow-hidden cursor-pointer h-56 md:h-64 shadow-lg animate-fade-in-up">
                                <img src="{{ asset('images/about/LabFrontOffice.png') }}" alt="Lab FO" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#112958] via-[#112958]/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 p-5 md:p-6 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <div class="w-8 h-1 bg-[#FA8E00] mb-2 rounded-full opacity-0 group-hover:opacity-100 transition duration-500"></div>
                                    <h5 class="text-white font-bold text-base md:text-lg leading-tight group-hover:text-[#FA8E00] transition-colors">Lab. Front Office</h5>
                                    <p class="text-gray-300 text-[10px] md:text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-500 delay-100">Simulasi Resepsionis</p>
                                </div>
                            </div>

                            <div class="group relative rounded-2xl overflow-hidden cursor-pointer h-56 md:h-64 shadow-lg animate-fade-in-up">
                                <img src="{{ asset('images/about/psikologi.png') }}" alt="Psikologi" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#112958] via-[#112958]/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 p-5 md:p-6 translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <div class="w-8 h-1 bg-[#FA8E00] mb-2 rounded-full opacity-0 group-hover:opacity-100 transition duration-500"></div>
                                    <h5 class="text-white font-bold text-base md:text-lg leading-tight group-hover:text-[#FA8E00] transition-colors">Assesemen Psikologi</h5>
                                    <p class="text-gray-300 text-[10px] md:text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-500 delay-100">Pengembangan Karakter</p>
                                </div>
                            </div>
                        </div>
                    </template>

                </div>

                <div class="text-center mt-10 md:mt-12">
                    <button @click="showAll = !showAll" class="group relative px-6 py-2.5 md:px-8 md:py-3 rounded-full bg-white text-[#112958] font-bold text-sm md:text-base shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                        <span class="relative z-10 flex items-center">
                            <span x-text="showAll ? 'Tutup Sebagian' : 'Lihat Selengkapnya'"></span>
                            <i class="fa-solid ml-2 transition-transform duration-300" :class="showAll ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                        </span>
                        <div class="absolute inset-0 bg-[#FA8E00] transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300 ease-out -z-0"></div>
                        <div class="absolute inset-0 z-0 group-hover:text-white transition-colors duration-300"></div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 relative bg-[#0a1936] overflow-hidden">

        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute top-[-10%] right-[-5%] w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-[#FA8E00]/10 rounded-full blur-[80px] md:blur-[120px]"></div>
            <div class="absolute bottom-[-10%] left-[-5%] w-[250px] h-[250px] md:w-[400px] md:h-[400px] bg-[#00A450]/10 rounded-full blur-[80px] md:blur-[100px]"></div>
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(90deg, #ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-10 md:mb-12">
                <div class="max-w-2xl">
                    <h2 class="text-2xl md:text-4xl lg:text-5xl font-extrabold text-white mb-3 md:mb-4">Mitra & Kolaborasi</h2>
                    <p class="text-gray-400 text-sm md:text-lg leading-relaxed">
                        Kami bekerjasama dengan industri perhotelan dan kuliner terbaik untuk menjamin kualitas lulusan yang siap kerja.
                    </p>
                </div>
                <div class="hidden md:block">
                    <span class="inline-block px-4 py-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 text-sm">
                        <i class="fa-solid fa-handshake mr-2 text-[#FA8E00]"></i> Trusted Partners
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 md:gap-4 lg:gap-6">
                @php
                    $partners = [
                        ['name' => 'Artotel Hotel', 'icon' => 'fa-hotel'],
                        ['name' => 'Grup Mesa', 'icon' => 'fa-building'],
                        ['name' => 'Grup Colours', 'icon' => 'fa-utensils'],
                        ['name' => 'Grup Casa', 'icon' => 'fa-home'],
                        ['name' => 'JNM Bloc', 'icon' => 'fa-store'],
                        ['name' => 'Kopi Mlaku', 'icon' => 'fa-mug-hot'],
                    ];
                @endphp

                @foreach($partners as $partner)
                <div class="group relative bg-white/5 backdrop-blur-sm rounded-xl p-4 md:p-6 border border-white/10 hover:border-[#FA8E00] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(250,142,0,0.15)] flex flex-col items-center justify-center text-center h-32 md:h-40">

                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/5 flex items-center justify-center mb-2 md:mb-3 group-hover:bg-[#FA8E00] group-hover:text-white transition-all duration-300 text-[#FA8E00]">
                        <i class="fa-solid {{ $partner['icon'] }} text-lg md:text-xl"></i>
                    </div>

                    <h5 class="text-gray-300 font-bold text-xs md:text-sm group-hover:text-white transition-colors">
                        {{ $partner['name'] }}
                    </h5>

                    <div class="absolute top-0 right-0 w-4 h-4 md:w-6 md:h-6 border-t-2 border-r-2 border-white/20 rounded-tr-lg opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                    <div class="absolute bottom-0 left-0 w-4 h-4 md:w-6 md:h-6 border-b-2 border-l-2 border-white/20 rounded-bl-lg opacity-0 group-hover:opacity-100 transition-all duration-300"></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
