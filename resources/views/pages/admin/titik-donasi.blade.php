<x-admin-layout>
    <div class="min-h-screen bg-[#FBF8F5] p-8">

        {{-- Judul Halaman --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Titik Donasi</h1>

        {{-- SEARCH + FILTER --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">

            {{-- Search --}}
            <form method="GET" action="{{ url()->current() }}" class="relative w-full md:w-1/3">
                <input type="text" name="search" value="{{ $search ?? '' }}"
                    class="w-full border border-gray-300 rounded-xl py-2 pl-10 pr-4 focus:ring-2 focus:ring-emerald-400"
                    placeholder="Search">
                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-4.35-4.35M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
                </svg>
            </form>

            {{-- Tombol Tambah --}}
            <a href="{{ route('admin.tambah-donasi') }}"
                class="cursor-pointer text-white px-5 py-2 rounded-lg flex items-center gap-2 shadow transition-all duration-300 ease-out hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:bg-[#387161]"
                style="background-color: var(--color-green);">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z" />
                </svg>
                Tambah Titik Lokasi
            </a>
        </div>

        {{-- CARD TABEL --}}



        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">

            <h2 class="text-xl font-semibold mb-6 text-center text-slate-900">Tabel Titik Donasi</h2>

            <div class="overflow-x-auto w-full">
                <table class="w-full text-sm border-collapse">
                    <thead>
                        <tr class="bg-card text-slate-900 text-center">
                            <th class="border px-3 py-2 whitespace-nowrap">No</th>
                            <th class="border px-3 py-2 whitespace-nowrap">ID</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Name</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Address</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Operating Hours</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Phone</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($locations as $index => $item)
                            <tr>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    {{ ($page - 1) * $perPage + $index + 1 }}
                                </td>

                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    {{ $item->id }}
                                </td>

                                <td class="border px-3 py-2 whitespace-nowrap">
                                    {{ $item->name }}
                                </td>

                                <td class="border px-3 py-2 whitespace-nowrap">
                                    {{ $item->address }}
                                </td>

                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    {{ $item->hours }}
                                </td>

                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    {{ $item->phone }}
                                </td>

                                <td class="border px-4 py-2 text-center whitespace-nowrap">
                                    <a href="{{ route('admin.titik.edit', $item['id']) }}"
                                        class="inline-flex items-center gap-2 justify-center bg-yellow-400 hover:bg-yellow-500 text-white px-6 py-2 rounded-lg text-sm shadow whitespace-nowrap">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5"
                                                d="M8.8 20.199A2.73 2.73 0 0 1 6.869 21H3v-3.844c0-.724.288-1.419.8-1.931m5 4.974l-5-4.974m5 4.974l9.974-9.978M3.8 15.225l9.984-9.995m0 0l1.426-1.428a2.733 2.733 0 0 1 3.867-.001l1.126 1.127a2.733 2.733 0 0 1 0 3.865l-1.428 1.428M13.783 5.23l4.991 4.991" />
                                        </svg>

                                        Edit
                                    </a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>

            {{-- PAGINATION --}}
            {{-- PAGINATION STYLE BARU --}}
            <div class="mt-6 flex items-center justify-center gap-3">

                {{-- LEFT ARROW --}}
                @if ($page > 1)
                    <a href="?page={{ $page - 1 }}"
                        class="text-gray-600 hover:text-emerald-700 text-xl font-light">
                        ‹
                    </a>
                @else
                    <span class="text-gray-400 text-xl font-light">‹</span>
                @endif


                {{-- PAGE NUMBERS (WITH ELLIPSIS) --}}
                @for ($i = 1; $i <= $totalPages; $i++)
                    {{-- Tampilkan hanya halaman penting --}}
                    @if ($i == 1 || $i == $totalPages || abs($i - $page) <= 1)
                        {{-- Active Page --}}
                        @if ($i == $page)
                            <span class="px-3 py-1 rounded-full bg-emerald-700 text-white text-sm font-semibold">
                                {{ $i }}
                            </span>
                        @else
                            <a href="?page={{ $i }}"
                                class="px-3 py-1 rounded-full text-gray-700 hover:text-emerald-700 text-sm">
                                {{ $i }}
                            </a>
                        @endif
                    @elseif ($i == 2 && $page > 3)
                        <span class="text-gray-500">…</span>
                    @elseif ($i == $totalPages - 1 && $page < $totalPages - 2)
                        <span class="text-gray-500">…</span>
                    @endif
                @endfor


                {{-- RIGHT ARROW --}}
                @if ($page < $totalPages)
                    <a href="?page={{ $page + 1 }}"
                        class="text-gray-600 hover:text-emerald-700 text-xl font-light">
                        ›
                    </a>
                @else
                    <span class="text-gray-400 text-xl font-light">›</span>
                @endif

            </div>

        </div>

    </div>

</x-admin-layout>
