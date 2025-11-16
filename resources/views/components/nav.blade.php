<header class="absolute inset-x-0 top-4 z-50 flex justify-center px-4">
    <nav
        class="backdrop-blur-md bg-green border border-white/30 shadow-lg
               px-4 py-2 md:px-4 md:py-1 rounded-2xl flex items-center gap-3 md:gap-10 relative">

        <input type="checkbox" id="menu-toggle" class="hidden peer">

        <label for="menu-toggle" class="md:hidden cursor-pointer text-white text-2xl">
            ☰
        </label>

        <span class="text-white text-lg md:text-xl">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-9 md:h-11 md:mr-20">
        </span>

        <div
            class="hidden peer-checked:flex md:flex 
                    flex-col md:flex-row
                    gap-4 md:gap-6
                    absolute md:static top-14 left-0 right-0
                    bg-green md:bg-transparent
                    p-4 md:p-0
                    rounded-lg
                    items-start md:items-center">

            <a href="#" class="text-white text-sm md:text-md hover:text-green-200">Beranda</a>
            <a href="#" class="text-white text-sm md:text-md hover:text-green-200">Peta Donasi</a>
            <a href="#" class="text-white text-sm md:text-md hover:text-green-200">Kirim Donasi</a>
            <a href="#" class="text-white text-sm md:text-md hover:text-green-200">Tentang</a>

            <a href="#"
                class="text-white text-sm md:text-md px-4 py-2 hover:text-green-200 
                              md:ml-20 
                              border border-white/50 rounded-lg">
                Mulai Donasi
            </a>
        </div>
    </nav>
</header>
