<x-layout>
    {{-- Pastikan script GSAP sudah diload di layout utama atau di sini --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <main class="min-h-screen bg-[#f8fcfb] overflow-hidden">

        {{-- 1. HERO SECTION --}}
        <section class="relative pt-20 pb-12 px-6 text-center">
            {{-- Background Elements --}}
            <div class="absolute top-10 left-10 w-32 h-32 bg-card rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute top-20 right-10 w-40 h-40 bg-green rounded-full blur-2xl animate-pulse"
                style="animation-delay: 1s;"></div>

            <div class="relative z-10 max-w-4xl mx-auto hero-content">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-[#e0f2f1] text-green text-sm font-bold tracking-wide mb-6">
                    TENTANG KAMI
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-green mb-6 leading-tight">
                    Mengenal GreenDrop Lebih Dekat
                </h1>
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Platform berbasis peta yang memudahkan distribusi barang donasi kepada mereka yang membutuhkan,
                    menghubungkan niat baik dengan aksi nyata.
                </p>
            </div>
        </section>

        <div class="max-w-6xl mx-auto px-6 pb-20">

            {{-- 2. MISSION & VISION (Side by Side) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">

                {{-- Misi Card --}}
                <div
                    class="mv-card bg-white p-8 rounded-3xl border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-card rounded-bl-full transition-transform group-hover:scale-150 duration-500">
                    </div>

                    <div
                        class="w-14 h-14 bg-[#e8f5f3] rounded-2xl flex items-center justify-center mb-6 text-green group-hover:rotate-12 transition-transform duration-300">
                        {{-- Icon Target --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <circle cx="12" cy="12" r="6" />
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                    </div>

                    <h2 class="text-2xl font-bold text-green mb-4 relative z-10">Misi Kami</h2>
                    <p class="text-gray-600 leading-relaxed relative z-10">
                        PetaBaik hadir untuk menjembatani kesenjangan antara mereka yang ingin berbagi dengan mereka
                        yang membutuhkan.
                        Kami percaya setiap barang layak pakai memiliki kesempatan kedua, dan teknologi dapat membuat
                        distribusi donasi lebih efisien.
                    </p>
                </div>

                {{-- Visi Card --}}
                <div
                    class="mv-card bg-white p-8 rounded-3xl border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 group relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-green rounded-bl-full transition-transform group-hover:scale-150 duration-500">
                    </div>

                    <div
                        class="w-14 h-14 bg-[#fff8e1] rounded-2xl flex items-center justify-center mb-6 text-yellow-600 group-hover:rotate-12 transition-transform duration-300">
                        {{-- Icon Lightbulb --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-1 1.5-2 1.5-3.5 0-2.2-1.8-4-4-4-2.2 0-4 1.8-4 4 0 1.5.5 2.5 1.5 3.5.8.8 1.3 1.5 1.5 2.5" />
                            <path d="M9 18h6" />
                            <path d="M10 22h4" />
                        </svg>
                    </div>

                    <h2 class="text-2xl font-bold text-yellow-600 mb-4 relative z-10">Visi Kami</h2>
                    <p class="text-gray-600 leading-relaxed relative z-10">
                        Menjadi platform donasi berbasis teknologi terdepan di Indonesia. Memastikan barang donasi
                        sampai ke tangan yang tepat dengan cepat, terverifikasi, serta menciptakan ekosistem berbagi
                        yang berkelanjutan.
                    </p>
                </div>
            </div>

            {{-- 3. VALUES GRID --}}
            <div class="mb-20">
                <div class="text-center mb-12 section-title">
                    <h2 class="text-3xl font-bold text-green">Nilai-Nilai Kami</h2>
                    <div class="w-16 h-1 bg-[#90C5BA] mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    {{-- Value 1: Empati --}}
                    <div
                        class="value-item bg-white p-6 rounded-2xl shadow-md border-b-4 border-[#90C5BA] hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-10 h-10 bg-red-50 rounded-full flex items-center justify-center mb-4 text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-green mb-2">Empati</h3>
                        <p class="text-sm text-gray-500">Memahami kebutuhan masyarakat untuk solusi kesejahteraan
                            bersama.</p>
                    </div>

                    {{-- Value 2: Transparansi --}}
                    <div
                        class="value-item bg-white p-6 rounded-2xl shadow-md border-b-4 border-green hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-10 h-10 bg-green-50 rounded-full flex items-center justify-center mb-4 text-green">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="22" y1="12" x2="18" y2="12" />
                                <line x1="6" y1="12" x2="2" y2="12" />
                                <line x1="12" y1="6" x2="12" y2="2" />
                                <line x1="12" y1="22" x2="12" y2="18" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-green mb-2">Transparansi</h3>
                        <p class="text-sm text-gray-500">Proses donasi jelas dan dapat dilacak oleh semua pihak.</p>
                    </div>

                    {{-- Value 3: Kolaborasi --}}
                    <div
                        class="value-item bg-white p-6 rounded-2xl shadow-md border-b-4 border-blue-400 hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center mb-4 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-green mb-2">Kolaborasi</h3>
                        <p class="text-sm text-gray-500">Bekerja sama dengan lembaga sosial untuk memperluas dampak.
                        </p>
                    </div>

                    {{-- Value 4: Inovasi --}}
                    <div
                        class="value-item bg-white p-6 rounded-2xl shadow-md border-b-4 border-yellow-400 hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-10 h-10 bg-yellow-50 rounded-full flex items-center justify-center mb-4 text-yellow-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v4" />
                                <path d="m16.2 7.8 2.9-2.9" />
                                <path d="M18 12h4" />
                                <path d="m16.2 16.2 2.9 2.9" />
                                <path d="M12 18v4" />
                                <path d="m4.9 19.1 2.9-2.9" />
                                <path d="M2 12h4" />
                                <path d="m4.9 4.9 2.9 2.9" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-green mb-2">Inovasi</h3>
                        <p class="text-sm text-gray-500">Terus mengembangkan teknologi untuk pengalaman donasi terbaik.
                        </p>
                    </div>
                </div>
            </div>

            {{-- 4. HOW IT STARTED (Story) --}}
            <div
                class="story-card  from-green to-[#90C5BA]/20 rounded-3xl p-8 md:p-12 border border-[#90C5BA]/30 mb-16 relative">
                <div class="md:flex items-center gap-10">
                    <div class="flex-1 mb-6 md:mb-0">
                        <h2 class="text-2xl md:text-3xl font-bold text-green mb-4">Bagaimana Kami Memulai?</h2>
                        <div class="space-y-4 text-gray-600 leading-relaxed">
                            <p>
                                PetaBaik lahir dari keprihatinan atas sulitnya menemukan lokasi donasi yang tepat.
                                Banyak orang ingin berbagi namun bingung kemana harus menyalurkan, sementara lembaga
                                sosial kesulitan mencari donatur.
                            </p>
                            <p>
                                Dengan memanfaatkan <strong>teknologi peta interaktif</strong>, kami menciptakan
                                jembatan yang mempertemukan kedua sisi ini.
                                PetaBaik hadir sebagai solusi sederhana namun <em>powerful</em> untuk membuat proses
                                berbagi menjadi lebih mudah dan transparan.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/3 flex justify-center">
                        <div
                            class="w-40 h-40 bg-white rounded-full flex items-center justify-center shadow-xl rotate-3 hover:rotate-0 transition-all duration-500">
                            <span class="text-6xl">🌱</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 5. CTA CONTACT --}}
            <div
                class="contact-cta text-center bg-white rounded-2xl p-8 shadow-sm border border-gray-100 max-w-2xl mx-auto">
                <h2 class="text-2xl font-bold text-green mb-3">Ingin Berkolaborasi?</h2>
                <p class="text-gray-500 mb-6">
                    Jika Anda adalah lembaga sosial yang ingin bergabung atau memiliki pertanyaan, jangan ragu untuk
                    menghubungi kami.
                </p>
                <a href="mailto:info@petabaik.id"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-[#e8f5f3] text-green rounded-xl font-bold hover:bg-green hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="16" x="2" y="4" rx="2" />
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                    </svg>
                    info@petabaik.id
                </a>
            </div>

        </div>
    </main>

    {{-- Script Animasi GSAP --}}
    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            gsap.registerPlugin(ScrollTrigger);

            // 1. Hero Animation (Tetap sama)
            gsap.from(".hero-content > *", {
                y: 50,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power3.out"
            });

            // --- PERBAIKAN DI SINI (MISI & VISI) ---
            // Kita loop setiap elemen dengan class .mv-card agar dipicu secara individual
            gsap.utils.toArray(".mv-card").forEach((card, index) => {
                gsap.from(card, {
                    scrollTrigger: {
                        trigger: card, // Pemicu adalah kartu itu sendiri, bukan kartu pertama saja
                        start: "top 85%", // Animasi mulai saat bagian atas kartu masuk 85% viewport
                        toggleActions: "play none none reverse"
                    },
                    y: 50,
                    opacity: 0,
                    duration: 0.8,
                    delay: index *
                        0.2, // Memberikan jeda (stagger) manual: Kartu kedua muncul lebih lambat
                    ease: "back.out(1.2)"
                });
            });

            // 3. Values Grid (Staggered pop up)
            gsap.from(".value-item", {
                scrollTrigger: {
                    trigger: ".section-title", // Pemicu saat judul section terlihat
                    start: "top 75%",
                },
                scale: 0.8,
                opacity: 0,
                y: 30,
                duration: 0.6,
                stagger: 0.1,
                ease: "power2.out"
            });

            // 4. Story Card (Fade Up)
            gsap.from(".story-card", {
                scrollTrigger: {
                    trigger: ".story-card",
                    start: "top 85%",
                },
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power2.out"
            });

            // 5. Contact CTA (Zoom In)
            gsap.from(".contact-cta", {
                scrollTrigger: {
                    trigger: ".contact-cta",
                    start: "top 90%",
                },
                scale: 0.9,
                opacity: 0,
                duration: 0.8,
                ease: "back.out(1.5)"
            });
        });
    </script>
</x-layout>
