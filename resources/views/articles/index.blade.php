@extends('layouts.app')

@section('title', 'Info & Berita - Tumbuh Hospitality & Arts School')

@section('content')

    <section class="pt-28 md:pt-44 pb-12 bg-gray-50" x-data="{ showModal: false }">
        <div class="container mx-auto px-4 lg:px-8">

            <div class="text-center mb-12 border-b border-gray-200 pb-8">
                <nav class="flex justify-center items-center text-gray-500 text-xs md:text-sm font-medium space-x-2 mb-4">
                    <a href="{{ route('landingpage') }}" class="hover:text-[#FA8E00] transition">Home</a>
                    <span class="text-gray-300">/</span>
                    <span class="text-[#FA8E00] font-bold">Artikel</span>
                </nav>

                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#112958] leading-tight animate-fade-in-up">
                    Info & Berita
                </h1>
            </div>

            <div class="grid lg:grid-cols-3 gap-10">

                <div class="lg:col-span-2">

                    <div class="mb-10">
                        <form action="{{ route('articles.index') }}" method="GET" class="relative max-w-xl">
                            <input type="text"
                                   name="search"
                                   value="{{ request('search') }}"
                                   placeholder="Cari artikel lalu tekan Enter..."
                                   class="w-full pl-5 pr-14 py-3 rounded-full border border-gray-200 focus:border-[#FA8E00] focus:ring-1 focus:ring-[#FA8E00] outline-none shadow-sm transition bg-white">

                            <button type="submit" class="absolute right-2 top-1.5 bg-[#112958] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#FA8E00] transition shadow-md">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    @if(request('search'))
                    <div class="bg-yellow-50 border-l-4 border-[#FA8E00] p-4 mb-8 flex justify-between items-center rounded-r shadow-sm">
                        <p class="text-[#112958] text-sm">
                            Hasil pencarian untuk: <span class="font-bold">"{{ request('search') }}"</span>
                        </p>
                        <a href="{{ route('articles.index') }}" class="text-xs bg-white border border-gray-300 px-3 py-1.5 rounded hover:bg-gray-100 transition whitespace-nowrap">
                            Reset
                        </a>
                    </div>
                    @endif

                    @if(isset($selectedCategory) && $selectedCategory)
                    <div class="bg-blue-50 border-l-4 border-[#112958] p-4 mb-8 flex justify-between items-center rounded-r shadow-sm">
                        <p class="text-[#112958] text-sm">
                            Kategori: <span class="font-bold">{{ $selectedCategory->name }}</span>
                        </p>
                        <a href="{{ route('articles.index') }}" class="text-xs bg-white border border-gray-300 px-3 py-1.5 rounded hover:bg-gray-100 transition whitespace-nowrap">
                            Hapus Filter
                        </a>
                    </div>
                    @endif

                    <div class="grid md:grid-cols-2 gap-6">
                        @forelse($articles as $article)
                        <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full group">

                            <div class="relative h-48 overflow-hidden bg-gray-100">
                                <a href="{{ route('articles.show', $article->id) }}" class="block w-full h-full">
                                    @if(Str::startsWith($article->image, ['http://', 'https://']))
                                        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @else
                                        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @endif
                                </a>
                                <div class="absolute top-3 left-3 bg-[#FA8E00] text-white text-[10px] font-bold px-3 py-1 rounded shadow">
                                    {{ $article->created_at->format('d M Y') }}
                                </div>
                            </div>

                            <div class="p-5 flex flex-col flex-grow">
                                <div class="flex items-center text-xs text-gray-500 mb-2 space-x-3">
                                    <span class="flex items-center"><i class="fa-regular fa-user mr-1 text-[#FA8E00]"></i> {{ $article->author ?? 'Admin' }}</span>
                                </div>

                                <h3 class="text-lg font-bold text-[#112958] mb-2 line-clamp-2 leading-snug group-hover:text-[#FA8E00] transition-colors">
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
                        @empty
                        <div class="col-span-full text-center py-12 text-gray-500 bg-white rounded-2xl border border-dashed border-gray-300">
                            <i class="fa-regular fa-folder-open text-4xl mb-3 block text-gray-300"></i>
                            <p class="text-lg font-medium">Tidak ada artikel ditemukan.</p>
                            @if(request('search'))
                                <p class="text-sm mt-1">Coba kata kunci lain atau <a href="{{ route('articles.index') }}" class="text-[#FA8E00] hover:underline">reset pencarian</a>.</p>
                            @endif
                        </div>
                        @endforelse
                    </div>

                    <div class="mt-12">
                        {{ $articles->appends(request()->query())->onEachSide(1)->links('pagination::tailwind') }}
                    </div>

                </div>

                <div class="lg:col-span-1 space-y-8">

                    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm sticky top-24">
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

                        <div class="mt-8 pt-6 border-t border-gray-100">
                            <h4 class="text-lg font-bold text-[#112958] mb-4 flex items-center">
                                <i class="fa-solid fa-folder-open mr-2 text-[#FA8E00]"></i> Kategori
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                @if(isset($categories) && count($categories) > 0)
                                    @foreach($categories as $category)
                                    <a href="{{ route('articles.index', ['category' => $category->id]) }}" class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs text-gray-600 hover:bg-[#FA8E00] hover:text-white hover:border-[#FA8E00] transition">
                                        {{ $category->name }}
                                    </a>
                                    @endforeach
                                @else
                                    <span class="text-xs text-gray-400 italic">Tidak ada kategori</span>
                                @endif
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-100">
                            <h4 class="text-lg font-bold text-[#112958] mb-4 flex items-center">
                                <i class="fa-solid fa-bullhorn mr-2 text-[#FA8E00]"></i> Info Pendaftaran
                            </h4>
                            <div class="group relative rounded-xl overflow-hidden cursor-pointer shadow-md border border-gray-200" @click="showModal = true">
                                <img src="{{ asset('images/poster/pendaftaran-new.PNG') }}" class="w-full object-cover transition duration-500 group-hover:scale-105" alt="Poster Pendaftaran">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                    <span class="bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-bold border border-white/50 hover:bg-[#FA8E00] hover:border-[#FA8E00] transition">
                                        <i class="fa-solid fa-magnifying-glass-plus mr-2"></i> Perbesar
                                    </span>
                                </div>
                            </div>
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
