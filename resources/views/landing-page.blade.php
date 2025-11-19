<x-layout>
    <main class="bg-bg">
        {{-- Ini cover ges --}}
        <div class="w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/bg.png') }}');">
        </div>

        {{-- ini Blur hijau --}}
        <div class="absolute inset-0 bg-green/70">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 pt-20">

                <!-- JUDUL -->
                <h1 class="text-white text-4xl font-bold mb-4 max-w-4xl leading-tight">
                    Hubungkan Barang Layak Pakai ke Penerima yang Membutuhkan
                </h1>

                <!-- PARAGRAF DI TENGAH NICH -->
                <p class="text-white text-lg max-w-xl mb-6">
                    Dengan mudah temukan lokasi donasi terdekat dan salurkan barang Anda kepada mereka yang membutuhkan
                    melalui peta interaktif
                </p>

                <!-- TOMBOL -->
                <div class="flex flex-col sm:flex-row gap-4">

                    <a href="#"
                        class="bg-bt text-green font-semibold px-4 py-2 rounded-3xl shadow-md flex items-center gap-2 mr-15
                   transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#2f5d50"
                                d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4s-4 1.794-4 4s1.794 4 4 4m0-6c1.103 0 2 .897 2 2s-.897 2-2 2s-2-.897-2-2s.897-2 2-2" />
                            <path fill="#2f5d50"
                                d="M11.42 21.814a1 1 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819M12 4c3.309 0 6 2.691 6 6.005c.021 4.438-4.388 8.423-6 9.73c-1.611-1.308-6.021-5.294-6-9.735c0-3.309 2.691-6 6-6" />
                        </svg>
                        <span class="text-sm">Lihat Peta Donasi</span>
                    </a>


                    <a href="#"
                        class="border-white border font-semibold px-3 rounded-3xl shadow-md flex items-center gap-2
                    transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="none" stroke="#ffffff" stroke-linejoin="round" stroke-width="1.5"
                                d="m12 12l8.073-4.625M12 12v9.25M12 12L7.963 9.688m12.11-2.313a3.17 3.17 0 0 0-1.165-1.156L16.25 4.696m3.823 2.679c.275.472.427 1.015.427 1.58v6.09a3.15 3.15 0 0 1-1.592 2.736l-5.316 3.046A3.2 3.2 0 0 1 12 21.25M3.926 7.375a3.14 3.14 0 0 0-.426 1.58v6.09c0 1.13.607 2.172 1.592 2.736l5.316 3.046A3.2 3.2 0 0 0 12 21.25M3.926 7.375a3.17 3.17 0 0 1 1.166-1.156l5.316-3.046a3.2 3.2 0 0 1 3.184 0l2.658 1.523M3.926 7.375l4.037 2.313m0 0l8.287-4.992" />
                        </svg>
                        <span class="text-sm text-white">Kirim Donasi</span>
                    </a>
                </div>
            </div>

        </div>

        {{-- content Main --}}
        <main class="relative z-10">
            <div class="max-w-5xl mx-auto px-6 py-10">
                {{-- Cards --}}
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-10 items-stretch">
                    {{-- Card 1 --}}
                    <div class="stat-card">
                        <div class="stat-icon" aria-hidden="true">
                            <!-- simple location pin svg -->
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"
                                    fill="#2d6a4f" />
                                <circle cx="12" cy="9" r="2.2" fill="#ffffff" />
                            </svg>
                        </div>
                        <div class="mt-3">
                            <div class="stat-number">10+</div>
                            <div class="stat-label">Titik Donasi Terverifikasi</div>
                        </div>
                    </div>

                    <div class="stat-card stat-card--featured">
                        <div class="stat-icon" aria-hidden="true">
                            <!-- box icon -->
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 16V8a1 1 0 0 0-.553-.894l-8-4.5a1 1 0 0 0-.894 0l-8 4.5A1 1 0 0 0 3 8v8a1 1 0 0 0 .553.894l8 4.5a1 1 0 0 0 .894 0l8-4.5A1 1 0 0 0 21 16z"
                                    fill="#14532d" />
                                <path d="M12 2v6" stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="mt-3">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Barang Tersalurkan</div>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="stat-card">
                        <div class="stat-icon" aria-hidden="true">
                            <!-- people icon -->
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3z"
                                    fill="#2d6a4f" />
                                <path
                                    d="M8 13c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zM20 13c-.29 0-.62.02-.97.05C19.73 13.4 20 13.95 20 14.5V19h4v-2.5c0-2.33-4.67-3.5-6-3.5z"
                                    fill="#ffffff" opacity="0.9" />
                            </svg>
                        </div>
                        <div class="mt-3">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Keluarga Terbantu</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        {{-- main card 2 --}}
        <main class="relative z-10 mt-5">
            <div class="max-w-5xl mx-auto px-6 py-10">
                <h2 class="text-center font-extrabold text-3xl md:text-4xl text-green drop-shadow-sm mb-5">
                    Cara Kerja Green Drop
                </h2>
                <p class="text-text text-center text-xl mb-15">Tiga langkah mudah untuk menyalurkan donasi Anda</p>

                <!-- Grid 3 kolom -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-10">

                    {{-- Card A --}}
                    <div class="bg-white rounded-md p-6 shadow-md hover:shadow-lg transition hover:scale-105 relative">

                        <!-- Badge Keluar dari Card -->
                        <div class="absolute -top-6 -left-6">
                            <div
                                class="bg-card text-white rounded-full w-13 h-13
                    flex items-center justify-center text-2xl font-bold shadow-md">
                                1
                            </div>
                        </div>

                        <div class="flex">
                            <div class="p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    viewBox="0 0 24 24">
                                    <path fill="#2f5d50"
                                        d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4s-4 1.794-4 4s1.794 4 4 4m0-6c1.103 0 2 .897 2 2s-.897 2-2 2s-2-.897-2-2s.897-2 2-2" />
                                    <path fill="#2f5d50"
                                        d="M11.42 21.814a1 1 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819M12 4c3.309 0 6 2.691 6 6.005c.021 4.438-4.388 8.423-6 9.73c-1.611-1.308-6.021-5.294-6-9.735c0-3.309 2.691-6 6-6" />
                                </svg>
                            </div>
                        </div>

                        <div class=" ml-2">
                            <div class="text-xl font-bold text-green ">Temukan Lokasi</div>
                            <div class="text-gray-600 mt-4 text-left text-sm">Buka peta interaktif dan temukan
                                titik
                                donasi
                                terdekat dari
                                lokasi Anda</div>
                        </div>
                    </div>
                    {{-- Card B --}}
                    <div class="bg-white rounded-md p-6 shadow-md hover:shadow-lg transition hover:scale-105 relative">

                        <!-- Badge Keluar dari Card -->
                        <div class="absolute -top-6 -left-6">
                            <div
                                class="bg-card text-white rounded-full w-13 h-13
                    flex items-center justify-center text-2xl font-bold shadow-md">
                                2
                            </div>
                        </div>

                        <div class="flex">
                            <div class="p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="#2f5d50" stroke-linejoin="round" stroke-width="1.5"
                                        d="m12 12l8.073-4.625M12 12v9.25M12 12L7.963 9.688m12.11-2.313a3.17 3.17 0 0 0-1.165-1.156L16.25 4.696m3.823 2.679c.275.472.427 1.015.427 1.58v6.09a3.15 3.15 0 0 1-1.592 2.736l-5.316 3.046A3.2 3.2 0 0 1 12 21.25M3.926 7.375a3.14 3.14 0 0 0-.426 1.58v6.09c0 1.13.607 2.172 1.592 2.736l5.316 3.046A3.2 3.2 0 0 0 12 21.25M3.926 7.375a3.17 3.17 0 0 1 1.166-1.156l5.316-3.046a3.2 3.2 0 0 1 3.184 0l2.658 1.523M3.926 7.375l4.037 2.313m0 0l8.287-4.992" />
                                </svg>
                            </div>
                        </div>

                        <div class=" ml-2">
                            <div class="text-xl font-bold text-green ">Isi Formulir</div>
                            <div class="text-gray-600 mt-4 text-left text-sm">Lengkapi formulir donasi dengan detail
                                barang yang akan Anda sumbangkan</div>
                        </div>
                    </div>
                    {{-- Card C --}}
                    <div class="bg-white rounded-md p-6 shadow-md hover:shadow-lg transition hover:scale-105 relative">

                        <!-- Badge Keluar dari Card -->
                        <div class="absolute -top-6 -left-6">
                            <div
                                class="bg-card text-white rounded-full w-13 h-13
                    flex items-center justify-center text-2xl font-bold shadow-md">
                                3
                            </div>
                        </div>

                        <div class="flex">
                            <div class="p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px"
                                    viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path
                                            d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                        <path fill="#2f5d50"
                                            d="M14.125 19.972c-.222.164-.463.3-.728.37c-.746.2-1.561-.098-2.273-.298c-4.773-1.343-7.97-3.446-8.887-6.584c-.732-2.506-.028-5.016 1.52-6.576c1.434-1.445 3.56-2.031 5.741-1.092c1.42-1.904 3.555-2.46 5.519-1.925c2.12.577 3.984 2.399 4.603 4.935q.182.746.183 1.519q.384.197.72.48c1.157.979 1.775 2.642 1.43 4.371c-.44 2.206-2.485 3.755-5.41 4.861c-.501.19-1.049.425-1.596.329c-.304-.054-.576-.21-.822-.39m-9.968-7.073c-.535-1.833.003-3.581 1.02-4.606c.976-.984 2.423-1.35 4.023-.414c.559.327 1.28.133 1.6-.428c.918-1.611 2.354-2.018 3.691-1.654c1.394.38 2.734 1.624 3.186 3.479q.083.334.11.685a3.7 3.7 0 0 0-1.06.301c-1.074-1.047-2.496-1.253-3.75-.791c-1.422.523-2.572 1.875-2.84 3.618c-.273 1.785.57 3.525 2.139 5.198c-.198-.05-.403-.11-.61-.168c-4.631-1.303-6.9-3.135-7.509-5.22m7.958.493c.16-1.05.839-1.781 1.553-2.045c.66-.242 1.393-.115 1.95.69a1.104 1.104 0 0 0 1.545.273c.8-.567 1.532-.435 2.068.018c.582.492.968 1.412.76 2.453c-.225 1.13-1.368 2.328-4.155 3.381c-.177.067-.353.139-.535.192c-.153-.113-.294-.24-.438-.363c-2.258-1.943-2.923-3.46-2.748-4.6Z" />
                                    </g>
                                </svg>
                            </div>
                        </div>

                        <div class=" ml-2">
                            <div class="text-xl font-bold text-green ">Salurkan Donasi</div>
                            <div class="text-gray-600 mt-4 text-left text-sm">Antarkan barang Anda ke titik donasi atau
                                koordinasikan penjemputan</div>
                        </div>
                    </div>

                </div>

            </div>
        </main>

        {{-- Footer ges --}}
        <footer class="bg-white mt-10">
            <div class="max-w-6xl mx-auto px-6 py-10 md:py-12">
                <div class="grid gap-10 md:grid-cols-4">
                    {{-- Brand + Deskripsi --}}
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-9 h-9 rounded-full flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('images/logo.png') }}" alt="logo"
                                    class="w-13 h-13 object-contain">
                            </div>

                            <span class="text-xl font-semibold text-[#195b3b]">
                                Green Drop
                            </span>
                        </div>

                        <p class="text-sm text-gray-600 leading-relaxed max-w-xs">
                            Menghubungkan barang layak pakai dengan mereka yang membutuhkan.
                        </p>
                    </div>

                    {{-- Navigasi --}}
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800 mb-3">Navigasi</h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li>
                                <a href="#" class="hover:text-green hover:underline">
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-green hover:underline">
                                    Peta Donasi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-green hover:underline">
                                    Kirim Donasi
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:text-green hover:underline">
                                    Tentang
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Kontak --}}
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800 mb-3">Kontak</h3>
                        <div class="flex items-center gap-2 text-sm text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24">
                                <path fill="none" stroke="#2d6a4f" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6.75A2.75 2.75 0 0 1 6.75 4h10.5A2.75 2.75 0 0 1 20 6.75v10.5A2.75 2.75 0 0 1 17.25 20H6.75A2.75 2.75 0 0 1 4 17.25z" />
                                <path fill="none" stroke="#2d6a4f" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m5.5 7.5l5.636 3.523a2.75 2.75 0 0 0 2.728 0L19.5 7.5" />
                            </svg>
                            <span>greendrop@gmail.com</span>
                        </div>
                    </div>

                    {{-- Tentang Kami --}}
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800 mb-3">Tentang Kami</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Platform berbasis peta untuk memudahkan distribusi barang donasi ke tangan yang tepat.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" bg-[#fbf7f0]"></div>
        </footer>
    </main>
</x-layout>
