<x-layout>

    {{-- Ini cover ges --}}
    <div class="w-full h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/bg.png') }}');">
    </div>

    {{-- ini Blur hijau --}}
    <div class="absolute inset-0 bg-green/60"></div>

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
