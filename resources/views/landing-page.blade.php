<x-layout>

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
    <div class="relative z-10">
        <div class="max-w-5xl mx-auto px-6 py-20">
            {{-- Heading --}}
            <h2 class="text-center font-extrabold text-3xl md:text-4xl text-emerald-800 drop-shadow-sm">
                Barang Kecil Anda, Dampak Besar Bagi Mereka
            </h2>

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

                {{-- Card 2 (featured / fokus) --}}
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
    </div>


    {{-- coding here --}}
</x-layout>
