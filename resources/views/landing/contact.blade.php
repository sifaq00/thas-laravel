@extends('layouts.app')

@section('title', 'Kontak Kami - Tumbuh Hospitality & Arts School')

@section('content')

    <section class="pt-32 md:pt-48 pb-16 md:pb-24 bg-gradient-to-b from-[#f8fafc] to-white">
        <div class="container mx-auto px-4 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
                <span class="inline-block text-[#FA8E00] font-semibold uppercase tracking-widest text-xs mb-3">
                    Informasi Kontak
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#112958] mb-4">
                    Tetap Terhubung Dengan Kami
                </h2>
                <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                    Jangan ragu menghubungi kami terkait pendaftaran, program studi,
                    maupun kerja sama institusi. Tim kami siap membantu Anda.
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6 md:p-12">
                <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-start">

                    <div class="space-y-6">

                        <a href="https://maps.app.goo.gl/YourActualMapLinkHere"
                           target="_blank"
                           class="group flex flex-col sm:flex-row items-center sm:items-start gap-4 sm:gap-5 p-6 rounded-2xl bg-gray-50 border border-gray-200
                                  hover:border-[#FA8E00] hover:shadow-md transition text-center sm:text-left">

                            <div class="w-12 h-12 rounded-xl bg-[#FA8E00]/10 flex-shrink-0 flex items-center justify-center
                                        text-[#FA8E00] group-hover:bg-[#FA8E00] group-hover:text-white transition">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <h5 class="font-bold text-[#112958] mb-1 flex items-center justify-center sm:justify-start gap-2">
                                    Lokasi Kampus
                                    <i class="fa-solid fa-arrow-up-right-from-square text-xs text-gray-400"></i>
                                </h5>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Sekolah Tumbuh Kampus Terpadu<br>
                                    Jl. KH. Ali Maksum, Panggungharjo<br>
                                    Sewon, Bantul – D.I Yogyakarta
                                </p>
                            </div>
                        </a>

                        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 sm:gap-5 p-6 rounded-2xl bg-gray-50 border border-gray-200 text-center sm:text-left">
                            <div class="w-12 h-12 rounded-xl bg-[#112958]/10 flex-shrink-0 flex items-center justify-center text-[#112958]">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-[#112958] mb-1">Kontak Resmi</h5>
                                <p class="text-sm text-gray-600">
                                    Email:
                                    <span class="font-medium text-gray-800 break-all">
                                        hospitality.arts@sekolahtumbuh.sch.id
                                    </span>
                                </p>
                                <p class="text-sm text-gray-600 mt-1">
                                    WhatsApp:
                                    <a href="https://wa.me/6282223243036"
                                       class="font-semibold text-[#FA8E00] hover:underline">
                                        0822-2324-3036
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 sm:gap-5 p-6 rounded-2xl bg-gray-50 border border-gray-200 text-center sm:text-left">
                            <div class="w-12 h-12 rounded-xl bg-gray-200 flex-shrink-0 flex items-center justify-center text-[#112958]">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="w-full sm:w-auto">
                                <h5 class="font-bold text-[#112958] mb-3">Ikuti Kami</h5>
                                <div class="flex justify-center sm:justify-start gap-3">
                                    <a href="https://instagram.com/hospitality.artsschool" target="_blank"
                                       class="w-10 h-10 rounded-xl border border-gray-300 flex items-center justify-center
                                              hover:bg-[#FA8E00] hover:text-white hover:border-[#FA8E00] transition">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="#"
                                       class="w-10 h-10 rounded-xl border border-gray-300 flex items-center justify-center
                                              hover:bg-[#FA8E00] hover:text-white hover:border-[#FA8E00] transition">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#"
                                       class="w-10 h-10 rounded-xl border border-gray-300 flex items-center justify-center
                                              hover:bg-[#FA8E00] hover:text-white hover:border-[#FA8E00] transition">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="bg-gray-50 p-6 md:p-10 rounded-2xl border border-gray-200">
                        <h3 class="text-2xl font-extrabold text-[#112958] mb-6 text-center md:text-left">
                            Kirim Pesan
                        </h3>

                        <form class="space-y-4">
                            <input type="text" placeholder="Nama Lengkap"
                                   class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300
                                          focus:ring-2 focus:ring-[#FA8E00]/40 focus:border-[#FA8E00] outline-none transition">

                            <input type="email" placeholder="Alamat Email"
                                   class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300
                                          focus:ring-2 focus:ring-[#FA8E00]/40 focus:border-[#FA8E00] outline-none transition">

                            <input type="text" placeholder="Subjek"
                                   class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300
                                          focus:ring-2 focus:ring-[#FA8E00]/40 focus:border-[#FA8E00] outline-none transition">

                            <textarea rows="4" placeholder="Tulis pesan Anda..."
                                      class="w-full px-4 py-3 rounded-xl bg-white border border-gray-300
                                             focus:ring-2 focus:ring-[#FA8E00]/40 focus:border-[#FA8E00] outline-none resize-none transition"></textarea>

                            <button type="submit"
                                    class="w-full py-4 rounded-xl bg-[#FA8E00] text-white font-bold
                                           hover:bg-[#d67900] transition transform hover:-translate-y-0.5 shadow-md">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="relative w-full h-[400px] md:h-[550px] shadow-inner border-t border-gray-200">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37604.67336333947!2d110.31520092081036!3d-7.821082079960201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57eafc8da2d7%3A0x296082143669b908!2z6qeL6qax6qa86qaP6qa66qa06qat6qaD6qag6qa46qap6qeA6qan6qa46qaDIFNFS09MQUggVFVNQlVI!5e0!3m2!1sid!2sid!4v1766755915154!5m2!1sid!2sid"
            class="absolute inset-0 w-full h-full border-0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 md:translate-x-0 md:left-12 z-10 w-[90%] max-w-sm">
            <div class="bg-white p-5 md:p-6 rounded-2xl shadow-2xl border border-gray-100/50 backdrop-blur-sm bg-white/95">
                <h4 class="font-bold text-[#112958] text-lg mb-2">Sekolah Tumbuh</h4>
                <p class="text-sm text-gray-600 mb-4 leading-snug">
                    Kampus Terpadu, Jl. KH. Ali Maksum, Panggungharjo, Sewon, Bantul.
                </p>
                <a href="https://maps.google.com/?q=Sekolah+Tumbuh+Kampus+Terpadu" target="_blank"
                   class="text-xs font-bold text-[#FA8E00] hover:text-[#d67900] flex items-center gap-1">
                    <i class="fa-solid fa-diamond-turn-right"></i> Petunjuk Arah
                </a>
            </div>
        </div>

    </section>

@endsection
