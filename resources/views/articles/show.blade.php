@extends('layouts.app')

@section('title', $article->title . ' - Tumbuh Hospitality & Arts School')

@section('content')

    <section class="pt-28 md:pt-44 pb-12 bg-white" x-data="{ showModal: false }">
        <div class="container mx-auto px-4 lg:px-8">

            <div class="text-center mb-12 border-b border-gray-100 pb-4 lg:pb-8">
                <nav class="flex justify-center items-center text-gray-500 text-xs md:text-sm font-medium space-x-2 mb-4">
                    <a href="{{ route('landingpage') }}" class="hover:text-[#FA8E00] transition">Home</a>
                    <span class="text-gray-300">/</span>
                    <a href="{{ route('articles.index') }}" class="hover:text-[#FA8E00] transition">Artikel</a>
                    <span class="text-gray-300">/</span>
                    <span class="text-[#FA8E00] font-bold">Detail</span>
                </nav>

                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#112958] leading-tight max-w-5xl mx-auto">
                    {{ $article->title }}
                </h1>
            </div>

            <div class="grid lg:grid-cols-3 gap-10">

                <div class="lg:col-span-2">

                    <div class="flex flex-wrap items-center text-sm text-gray-500 mb-6 gap-4 sm:gap-6">
                        <span class="flex items-center">
                            <i class="fa-regular fa-calendar text-[#FA8E00] mr-2"></i>
                            {{ $article->created_at->timezone('Asia/Jakarta')->format('d M Y, H:i') }} WIB
                        </span>
                        <span class="flex items-center">
                            <i class="fa-regular fa-user text-[#FA8E00] mr-2"></i>
                            {{ $article->author ?? 'Admin' }}
                        </span>
                        @if($article->category)
                        <span class="flex items-center px-3 py-1 bg-gray-100 rounded-full text-xs font-bold text-[#112958]">
                            {{ $article->category->name }}
                        </span>
                        @endif
                    </div>

                    @if($article->image)
                    <div class="rounded-2xl overflow-hidden shadow-lg mb-8">
                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-auto object-cover">
                    </div>
                    @endif

                    <div class="prose prose-lg prose-blue max-w-none text-gray-700 leading-relaxed text-justify">
                        {!! $article->content !!}
                    </div>

                    <div class="mt-12 pt-8 border-t border-gray-100">
                        <h5 class="font-bold text-[#112958] mb-4">Bagikan artikel ini:</h5>
                        <div class="flex space-x-3">
                            <a href="#" class="w-10 h-10 rounded-full bg-[#3b5998] text-white flex items-center justify-center hover:opacity-90 transition"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-[#1DA1F2] text-white flex items-center justify-center hover:opacity-90 transition"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-[#25D366] text-white flex items-center justify-center hover:opacity-90 transition"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('articles.index') }}" class="inline-flex items-center text-[#112958] font-bold hover:text-[#FA8E00] transition">
                            <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-1 space-y-8">

                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <h4 class="text-lg font-bold text-[#112958] mb-4 border-b pb-2 border-gray-100 flex items-center">
                            <i class="fa-solid fa-newspaper mr-2 text-[#FA8E00]"></i> Artikel Terbaru
                        </h4>
                        <ul class="space-y-4">
                            @if(isset($recentArticles) && count($recentArticles) > 0)
                                @foreach ($recentArticles as $latest)
                                <li class="group">
                                    <a href="{{ route('articles.show', $latest->id) }}" class="flex items-start gap-3 hover:bg-gray-50 p-2 rounded-lg transition duration-200 -mx-2">
                                        <div class="w-16 h-16 flex-shrink-0 rounded-md overflow-hidden bg-gray-200">
                                            @if($latest->image)
                                            <img src="{{ asset('storage/' . $latest->image) }}" class="w-full h-full object-cover">
                                            @else
                                            <div class="w-full h-full flex items-center justify-center text-gray-400"><i class="fa-regular fa-image"></i></div>
                                            @endif
                                        </div>
                                        <div>
                                            <h5 class="text-sm font-bold text-gray-700 group-hover:text-[#FA8E00] transition line-clamp-2 leading-snug">
                                                {{ $latest->title }}
                                            </h5>
                                            <span class="text-[10px] text-gray-400 mt-1 block">{{ $latest->created_at->format('d M Y') }}</span>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            @else
                                <li class="text-sm text-gray-500 italic">Belum ada artikel terbaru.</li>
                            @endif
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                        <h4 class="text-lg font-bold text-[#112958] mb-4 border-b pb-2 border-gray-100 flex items-center">
                            <i class="fa-solid fa-list mr-2 text-[#FA8E00]"></i> Kategori
                        </h4>
                        <ul class="space-y-1">
                            @if(isset($categories) && count($categories) > 0)
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('articles.index', ['category' => $category->id]) }}" class="block px-3 py-2 rounded-lg text-sm text-gray-600 hover:text-[#FA8E00] hover:bg-gray-50 transition flex justify-between items-center group">
                                        <span>{{ $category->name }}</span>
                                        <i class="fa-solid fa-chevron-right text-xs text-gray-300 group-hover:text-[#FA8E00]"></i>
                                    </a>
                                </li>
                                @endforeach
                            @else
                                <li class="text-sm text-gray-500 italic">Belum ada kategori.</li>
                            @endif
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-lg border-t-4 border-[#FA8E00]">
                        <h4 class="text-lg font-bold text-[#112958] mb-4 border-b pb-2 border-gray-100">Informasi Pendaftaran</h4>

                        <div class="group relative rounded-xl overflow-hidden mb-4 cursor-pointer shadow border border-gray-100" @click="showModal = true">
                            <img src="{{ asset('images/poster/pendaftaran-new.PNG') }}" class="w-full object-cover transition duration-500 group-hover:scale-105" alt="Poster Pendaftaran">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                <span class="bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-bold border border-white/50 hover:bg-[#FA8E00] hover:border-[#FA8E00] transition">
                                    <i class="fa-solid fa-magnifying-glass-plus mr-2"></i> Perbesar
                                </span>
                            </div>
                        </div>

                        <div class="text-center">
                            <h5 class="font-bold text-[#112958] mb-3 text-sm">Pendaftaran Mahasiswa Baru</h5>
                            <button @click="showModal = true" class="w-full py-2.5 bg-[#FA8E00] hover:bg-[#d67900] text-white rounded-lg font-bold text-sm transition shadow-md">
                                Lihat Detail
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div x-show="showModal"
             style="display: none;"
             class="fixed inset-0 z-[9999] overflow-y-auto"
             aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak>

            <div x-show="showModal"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 bg-black/80 transition-opacity backdrop-blur-sm"
                 @click="showModal = false"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div x-show="showModal"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl"
                     @click.stop>

                    <div class="bg-white px-4 py-3 sm:px-6 flex justify-between items-center border-b border-gray-100">
                        <h3 class="text-lg font-bold leading-6 text-[#112958]" id="modal-title">Informasi Pendaftaran</h3>
                        <button @click="showModal = false" class="text-gray-400 hover:text-gray-600 transition w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100">
                            <i class="fa-solid fa-xmark text-xl"></i>
                        </button>
                    </div>

                    <div class="bg-gray-50 p-0 md:p-4">
                        <div x-data="{
                                activeSlide: 0,
                                slides: [
                                    '{{ asset('images/poster/pendaftaran-new.PNG') }}',
                                    '{{ asset('images/poster/posterpendaftaran1.jpg') }}',
                                    '{{ asset('images/poster/posterpendaftaran2.jpg') }}'
                                ]
                             }" class="relative w-full group">

                            <div class="relative w-full aspect-[3/4] md:aspect-[4/3] overflow-hidden bg-gray-200 rounded-none md:rounded-lg">
                                <template x-for="(slide, index) in slides" :key="index">
                                    <div x-show="activeSlide === index"
                                         x-transition:enter="transition transform duration-500 ease-in-out"
                                         x-transition:enter-start="opacity-0 translate-x-10"
                                         x-transition:enter-end="opacity-100 translate-x-0"
                                         x-transition:leave="transition transform duration-500 ease-in-out"
                                         x-transition:leave-start="opacity-100 translate-x-0"
                                         x-transition:leave-end="opacity-0 -translate-x-10"
                                         class="absolute inset-0 flex items-center justify-center">
                                        <img :src="slide" class="max-w-full max-h-full object-contain" alt="Poster Pendaftaran">
                                    </div>
                                </template>
                            </div>

                            <button @click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1"
                                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-[#FA8E00] hover:text-white text-gray-800 w-10 h-10 rounded-full flex items-center justify-center transition shadow-lg opacity-0 group-hover:opacity-100 focus:outline-none">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>

                            <button @click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-[#FA8E00] hover:text-white text-gray-800 w-10 h-10 rounded-full flex items-center justify-center transition shadow-lg opacity-0 group-hover:opacity-100 focus:outline-none">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>

                            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                                <template x-for="(slide, index) in slides" :key="index">
                                    <button @click="activeSlide = index"
                                            class="w-2.5 h-2.5 rounded-full transition shadow-sm"
                                            :class="activeSlide === index ? 'bg-[#FA8E00] scale-125' : 'bg-white/70 hover:bg-white'">
                                    </button>
                                </template>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 border-t border-gray-100">
                        <button type="button" @click="showModal = false" class="inline-flex w-full justify-center rounded-lg bg-white px-4 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto transition">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
