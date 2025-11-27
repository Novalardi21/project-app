<header class="fixed inset-x-0 top-4 z-50 flex justify-center px-4">
    <nav
        class="backdrop-blur-md bg-green border border-white/30 shadow-lg
           px-4 py-2 md:px-4 md:py-1 rounded-2xl flex items-center gap-3 md:gap-10 relative">

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
             items-start md:items-center shadow-xl md:shadow-none">

            {{-- Link: Beranda --}}
            <a href="/"
                class="group relative inline-block text-sm md:text-md transition-colors duration-300
               {{ request()->is('/') ? 'text-green-300 font-semibold' : 'text-white hover:text-green-200' }}">
                Beranda
                {{-- Garis Animasi (Center Out) --}}
                <span
                    class="absolute -bottom-1 left-0 w-full h-[2px] bg-green-300 rounded-full
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
                    class="absolute -bottom-1 left-0 w-full h-[2px] bg-green-300 rounded-full
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
                    class="absolute -bottom-1 left-0 w-full h-[2px] bg-green-300 rounded-full
                       origin-center transform transition-transform duration-300 ease-out
                       {{ request()->is('donate') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}">
                </span>
            </a>

            {{-- Link: Tentang --}}
            <a href="/about"
                class="group relative inline-block text-sm md:text-md transition-colors duration-300
               {{ request()->is('about') ? 'text-green-300 font-semibold' : 'text-white hover:text-green-200' }}">
                Tentang
                <span
                    class="absolute -bottom-1 left-0 w-full h-[2px] bg-green-300 rounded-full
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

                        {{-- Dropdown --}}
                        <div x-show="open" @click.outside="open = false" x-transition
                            class="absolute right-0 mt-2 w-44 bg-white text-sm text-gray-700 rounded-xl shadow-lg py-2">

                            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-slate-200 transition">
                                Profile
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 rounded-lg hover:bg-slate-200 transition">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>

                @endguest
            </div>


        </div>
    </nav>
</header>
