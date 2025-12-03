<x-layout>
    <main class="bg-gray-50 min-h-screen relative">

        {{-- 1. Header Background (Mengambil style dari referensi halaman utama) --}}
        <div class="h-64 w-full bg-cover bg-center relative"
            style="background-image: url('{{ asset('images/bg.png') }}');">
            {{-- Overlay Hijau --}}
            <div class="absolute inset-0 bg-[#2f5d50]/80"></div>

            {{-- Konten Header --}}
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
                <h1 class="text-white text-3xl md:text-4xl font-bold mb-2">Profil Saya</h1>
                <p class="text-white/90 text-lg max-w-xl">
                    Kelola informasi akun Anda dan pantau jejak kebaikan Anda.
                </p>
            </div>
        </div>

        {{-- 2. Kontainer Utama (Card Profil) --}}
        <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10 -mt-20 mb-20">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="md:flex">

                    {{-- Bagian Kiri: Foto Profil & Ringkasan --}}
                    <div class="bg-[#f8fcfb] md:w-1/3 p-8 flex flex-col items-center border-r border-gray-100">
                        <div class="relative group">
                            {{-- Placeholder Foto Profil --}}
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden border-4 border-[#90C5BA] shadow-md mb-4">
                                <img src="https://ui-avatars.com/api/?name=Musmidin&background=2f5d50&color=fff"
                                    alt="Profile" class="w-full h-full object-cover">
                            </div>
                            {{-- Tombol Edit Foto (Hanya visual) --}}
                            <button
                                class="absolute bottom-4 right-0 bg-[#2f5d50] text-white p-2 rounded-full shadow hover:bg-[#254a40] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                    </path>
                                    <circle cx="12" cy="13" r="4"></circle>
                                </svg>
                            </button>
                        </div>

                        <h2 class="text-xl font-bold text-[#2f5d50] mb-1">Musmidin</h2>
                        <p class="text-gray-500 text-sm mb-6">Donatur Aktif</p>

                        {{-- Stat Kecil --}}
                        <div class="w-full grid grid-cols-1 gap-3">
                            <div class="bg-[#90C5BA]/20 p-3 rounded-2xl text-center">
                                <span class="block text-2xl font-bold text-[#2f5d50]">12</span>
                                <span class="text-xs text-gray-600">Total Donasi</span>
                            </div>
                        </div>
                    </div>

                    {{-- Bagian Kanan: Form Edit Profil (Sesuai Gambar Upload) --}}
                    <div class="md:w-2/3 p-8 md:p-10">
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="text-2xl font-bold text-[#2f5d50]">Edit Informasi</h3>
                        </div>

                        <form action="#" method="POST">
                            @csrf
                            <div class="space-y-6">

                                {{-- Field 1: Nama --}}
                                <div>
                                    <label for="name"
                                        class="block text-[#2f5d50] font-bold mb-2 text-sm">Nama</label>
                                    <input type="text" id="name" name="name" value="Musmidin"
                                        class="w-full px-4 py-3 rounded-2xl border border-gray-300 focus:border-[#2f5d50] focus:ring focus:ring-[#90C5BA]/50 transition duration-200 outline-none placeholder-gray-400 text-gray-700 bg-white"
                                        placeholder="Masukkan nama anda">
                                </div>

                                {{-- Field 2: Email --}}
                                <div>
                                    <label for="email"
                                        class="block text-[#2f5d50] font-bold mb-2 text-sm">Email</label>
                                    <input type="email" id="email" name="email" value="jaje@example.com"
                                        class="w-full px-4 py-3 rounded-2xl border border-gray-300 focus:border-[#2f5d50] focus:ring focus:ring-[#90C5BA]/50 transition duration-200 outline-none placeholder-gray-400 text-gray-700 bg-white"
                                        placeholder="nama@email.com">
                                </div>

                                {{-- Field 3: Password --}}
                                <div>
                                    <label for="password"
                                        class="block text-[#2f5d50] font-bold mb-2 text-sm">Password</label>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="w-full px-4 py-3 rounded-2xl border border-gray-300 focus:border-[#2f5d50] focus:ring focus:ring-[#90C5BA]/50 transition duration-200 outline-none placeholder-gray-400 text-gray-700 bg-white"
                                            placeholder="Enter your password">

                                        {{-- Icon Mata (Visibility Toggle) --}}
                                        <button type="button"
                                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-[#2f5d50] transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-2 ml-1">Kosongkan jika tidak ingin mengubah
                                        password.</p>
                                </div>

                                {{-- Tombol Simpan (Style sesuai referensi button "Mulai Donasi") --}}
                                <div class="pt-4 flex justify-center">
                                    <button type="submit"
                                        class="bg-card text-green font-bold px-8 py-3 rounded-2xl shadow-md flex items-center gap-2 transition-all duration-300 ease-out hover:bg-[#7EB5AA] hover:scale-105 hover:-translate-y-1 hover:shadow-xl">
                                        <span>Simpan Perubahan</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z">
                                            </path>
                                            <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                            <polyline points="7 3 7 8 15 8"></polyline>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Tombol Logout / Danger Zone (Opsional) --}}
            <div class="mt-8 text-center">
                <a href="#" class="text-red-500 hover:text-red-700 text-sm font-semibold transition">Keluar dari
                    Akun</a>
            </div>
        </div>

    </main>
</x-layout>
