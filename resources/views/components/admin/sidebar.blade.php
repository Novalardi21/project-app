<div class="fixed left-0 top-0 h-full w-64 bg-white border-r border-gray-100 shadow-sm p-6">
    {{-- Logo --}}
    <div class="flex items-center gap-3 mb-10">
        <img src="{{ asset('images/logo.png') }}" class="h-8" alt="GreenDrop Logo">
        <span class="text-xl font-semibold text-green-800">GreenDrop</span>
    </div>

    {{-- Menu --}}
    <nav class="space-y-2">

        {{-- Dashboard --}}
        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium 
            {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-200 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">
            {{-- Icon Home --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 9l9-6 9 6v11a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V13H9v7a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2z" />
            </svg>
            Dashboard
        </a>

        {{-- Titik Donasi --}}
        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium 
            {{ request()->routeIs('admin.donasi') ? 'bg-emerald-200 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">
            {{-- Icon Map Pin --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 11a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0 0c-5 0-9 2-9 5v2h18v-2c0-3-4-5-9-5z" />
            </svg>
            Titik Donasi
        </a>

        {{-- Pengguna --}}
        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-sm font-medium 
            {{ request()->routeIs('admin.users') ? 'bg-emerald-200 text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}">
            {{-- Icon User --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16 14a4 4 0 1 0-8 0m8 0v1a4 4 0 0 1-4 4m4-5a4 4 0 0 1-4-4m0 9a4 4 0 0 1-4-4v-1m4 5a4 4 0 0 0 4-4m-4-5a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
            </svg>
            Pengguna
        </a>

        {{-- Log Out --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center gap-3 w-full text-left px-4 py-3 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-100">
                {{-- Icon Logout --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10 16l4-4-4-4m4 4H3m9 9a9 9 0 1 0 0-18 9 9 0 0 0 0 18z" />
                </svg>
                Log Out
            </button>
        </form>

    </nav>
</div>
