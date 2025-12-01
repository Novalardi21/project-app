<header class="fixed inset-x-0 top-4 z-50 flex justify-center px-4">
    <nav
        class="backdrop-blur-md bg-green border border-white/30 shadow-lg
           px-4 py-2 md:px-4 md:py-1 rounded-2xl flex items-center gap-50 md:gap-10 relative">

        {{-- Hamburger Menu Checkbox --}}
        <input type="checkbox" id="menu-toggle" class="hidden peer" />

        {{-- Hamburger Icon --}}
        <label for="menu-toggle" class="md:hidden cursor-pointer text-white text-2xl select-none">
            ☰
        </label>

        {{-- Logo --}}
        <span class="text-white text-lg md:text-xl">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-9 md:h-11 md:mr-20" />
        </span>

        {{-- Menu Items --}}
        <div
            class="hidden peer-checked:flex md:flex
             flex-col md:flex-row
             gap-4 md:gap-8
             fixed md:static top-14 left-0 right-0
             bg-green md:bg-transparent
             p-6 md:p-0
             rounded-xl
             items-center md:items-center shadow-xl md:shadow-none">

            {{-- Link: Beranda --}}
            <a href="/"
                class="group relative inline-block text-sm md:text-md transition-colors duration-300
               {{ request()->is('/') ? 'text-green-300 font-semibold' : 'text-white hover:text-green-200' }}">
                Beranda
                {{-- Garis Animasi (Center Out) --}}
                <span
                    class="absolute -bottom-1 left-0 w-full h-0.5 bg-green-300 rounded-full
                       origin-center transform transition-transform duration-300 ease-out
                       {{ request()->is('/') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                </span>
            </a>

            {{-- Link: Peta Donasi --}}
            <a href="/maps"
                class="group relative inline-block text-sm md:text-md transition-colors duration-300
               {{ request()->is('maps') ? 'text-green-300 font-semibold' : 'text-white hover:text-green-200' }}">
                Peta Donasi
                <span
                    class="absolute -bottom-1 left-0 w-full h-0.5 bg-green-300 rounded-full
                       origin-center transform transition-transform duration-300 ease-out
                       {{ request()->is('maps') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                </span>
            </a>

            {{-- Link: Kirim Donasi --}}
            <a href="/donate"
                class="group relative inline-block text-sm md:text-md transition-colors duration-300
               {{ request()->is('donate') ? 'text-green-300 font-semibold' : 'text-white hover:text-green-200' }}">
                Kirim Donasi
                <span
                    class="absolute -bottom-1 left-0 w-full h-0.5 bg-green-300 rounded-full
                       origin-center transform transition-transform duration-300 ease-out
                       {{ request()->is('donate') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                </span>
            </a>

            {{-- Link: Tentang --}}
            <a href="{{ route('about.index') }}"
                class="group relative inline-block text-sm md:text-md transition-colors duration-300
               {{ request()->is('about.index') ? 'text-green-300 font-semibold' : 'text-white hover:text-green-200' }}">
                Tentang
                <span
                    class="absolute -bottom-1 left-0 w-full h-0.5 bg-green-300 rounded-full
                       origin-center transform transition-transform duration-300 ease-out
                       {{ request()->is('about') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                </span>
            </a>

            {{-- Tombol CTA --}}
            {{-- Tombol kanan: sebelum login = Mulai Donasi, sesudah login = Akun --}}
            <div class="md:ml-20 ml-0 mt-4 md:mt-0">
                @guest
                    <a href="{{ route('login') }}"
                        class="text-white text-sm md:text-md px-5 py-2 border border-white/50 rounded-xl transition-all duration-300
                  hover:bg-green-300 hover:text-green hover:border-transparent hover:shadow-[0_0_15px_rgba(134,239,172,0.6)] active:scale-95">
                        Mulai Donasi
                    </a>
                @else
                    @php
                        $user = Auth::user();
                        $hasAvatar = filled($user->avatar);
                        $initial = strtoupper(mb_substr($user->name ?? 'U', 0, 1));
                    @endphp

                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" type="button"
                            class="flex items-center gap-2 text-white text-sm md:text-md 
px-3 py-2 border border-white/50 rounded-xl transition-all duration-300
hover:bg-green-300 hover:text-green hover:border-transparent hover:shadow-[0_0_15px_rgba(134,239,172,0.6)]
active:scale-95 cursor-pointer select-none">

                            {{-- Avatar / Initial --}}
                            @if ($hasAvatar)
                                <img src="{{ trim($user->avatar) }}" alt="Avatar" referrerpolicy="no-referrer"
                                    class="w-7 h-7 rounded-full object-cover ring-2 ring-white/60 bg-white/20">
                            @else
                                <div
                                    class="w-7 h-7 rounded-full ring-2 ring-white/60 bg-white/20 flex items-center justify-center">
                                    <span class="text-xs font-semibold text-white">{{ $initial }}</span>
                                </div>
                            @endif

                            <span> {{ $user->name }}</span>
                        </button>

                        {{-- Dropdown Container --}}
                        <div x-show="open" @click.outside="open = false" style="display: none;" {{-- Kita gunakan x-init dan $watch untuk mentrigger GSAP saat 'open' berubah --}}
                            x-init="$watch('open', value => {
                                if (value) {
                                    // Animasi Masuk: Item muncul satu per satu (Stagger)
                                    gsap.fromTo('.menu-item', { y: -10, opacity: 0 }, { y: 0, opacity: 1, duration: 0.4, stagger: 0.1, ease: 'back.out(1.7)' });
                                }
                            })"
                            class="absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden z-50 origin-top-right">

                            {{-- 1. PROFILE LINK --}}
                            <a href="{{ route('profile.index') }}"
                                class="menu-item group flex items-center gap-3 px-5 py-3 text-sm font-medium text-gray-600 transition-colors relative">

                                {{-- Icon Profile --}}
                                <div class="icon-box relative z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-green">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>

                                <span class="relative z-10 group-hover:text-green transition-colors duration-300">Profile
                                    Saya</span>

                                {{-- Background Hover Effect (Layer tersembunyi untuk animasi) --}}
                                <div
                                    class="absolute inset-0 bg-[#90C5BA]/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </a>

                            <div class="h-px bg-gray-100 mx-4"></div> {{-- Separator Line --}}

                            {{-- 2. LOGOUT FORM --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="menu-item group w-full flex items-center gap-3 px-5 py-3 text-sm font-medium text-red-500 transition-colors relative">

                                    {{-- Icon Logout --}}
                                    <div class="icon-box relative z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                    </div>

                                    <span
                                        class="relative z-10 group-hover:text-red-700 transition-colors duration-300">Keluar</span>

                                    {{-- Background Hover Effect --}}
                                    <div
                                        class="absolute inset-0 bg-red-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>

                @endguest
            </div>
        </div>
    </nav>
</header>
