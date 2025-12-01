<div class="fixed left-0 top-0 h-full w-64 bg-white border-r border-gray-100 shadow-sm p-6">
    {{-- Logo --}}
    <div class="flex items-center gap-3 mb-10">
        <img src="{{ asset('images/logo.png') }}" class="h-8" alt="GreenDrop Logo">
        <span class="text-xl font-semibold text-green-800">GreenDrop</span>
    </div>

    {{-- Menu --}}
    <nav class="space-y-2">

        {{-- Dashboard --}}
        <a href="{{ route('admin.index') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium 
            {{ request()->routeIs('admin.index') ? 'bg-card text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">
            {{-- Icon Home --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
            </svg>
            Dashboard
        </a>

        {{-- Titik Donasi --}}
        <a href="{{ route('admin.titik-donasi') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium 
            {{ request()->routeIs('admin.titik-donasi') ? 'bg-card text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">
            {{-- Icon Map Pin --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd"
                    d="m12.065 21.243l-.006-.005zm.182-.274a29 29 0 0 0 3.183-3.392c2.04-2.563 3.281-5.09 3.365-7.337a6.8 6.8 0 1 0-13.591 0c.085 2.247 1.327 4.774 3.366 7.337a29 29 0 0 0 3.183 3.392q.166.15.247.218zm-.985 1.165S4 16.018 4 10a8 8 0 1 1 16 0c0 6.018-7.262 12.134-7.262 12.134c-.404.372-1.069.368-1.476 0M12 12.8a2.8 2.8 0 1 0 0-5.6a2.8 2.8 0 0 0 0 5.6m0 1.2a4 4 0 1 1 0-8a4 4 0 0 1 0 8" />
            </svg>
            Titik Donasi
        </a>

        {{-- Pengguna --}}
        <a href="{{ route('admin.pengguna') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium 
            {{ request()->routeIs('admin.pengguna') ? 'bg-card text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">
            {{-- Icon User --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path
                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor"
                        d="M16 14a5 5 0 0 1 4.995 4.783L21 19v1a2 2 0 0 1-1.85 1.995L19 22H5a2 2 0 0 1-1.995-1.85L3 20v-1a5 5 0 0 1 4.783-4.995L8 14zm0 2H8a3 3 0 0 0-2.995 2.824L5 19v1h14v-1a3 3 0 0 0-2.824-2.995zM12 2a5 5 0 1 1 0 10a5 5 0 0 1 0-10m0 2a3 3 0 1 0 0 6a3 3 0 0 0 0-6" />
                </g>
            </svg>
            Pengguna
        </a>

        {{-- Log Out --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center gap-3 w-full text-left px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-100">
                {{-- Icon Logout --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M16 13v-2H7V8l-5 4l5 4v-3z" />
                    <path fill="currentColor"
                        d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2" />
                </svg>
                Log Out
            </button>
        </form>

    </nav>
</div>
