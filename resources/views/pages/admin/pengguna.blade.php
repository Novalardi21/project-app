<x-admin-layout>

    <div class="min-h-screen bg-[#FBF8F5] p-8">

        {{-- JUDUL --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Pengguna</h1>

        {{-- SEARCH + BUTTON --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

            {{-- Search --}}
            <div class="relative w-full md:w-[450px]">
                <form method="GET" action="{{ route('admin.pengguna') }}" class="relative w-full">
                    <input type="text" name="search" value="{{ $search }}"
                        class="w-full border border-gray-300 rounded-xl py-2 pl-10 pr-4 focus:ring-2 focus:ring-emerald-400"
                        placeholder="Cari nama atau email...">

                    <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-4.35-4.35M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
                    </svg>
                </form>
            </div>




        </div>

        {{-- CARD TABEL --}}
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">

            {{-- Judul --}}
            <h2 class="text-xl font-semibold mb-6 text-center text-slate-900">Tabel Pengguna</h2>

            {{-- Table --}}
            <div class="overflow-x-auto w-full">
                <table class="w-full text-sm border-collapse">

                    <thead>
                        <tr class="bg-emerald-200 text-gray-700">
                            <th class="border px-3 py-2 whitespace-nowrap">No</th>
                            <th class="border px-3 py-2 whitespace-nowrap">ID Pengguna</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Name</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Email</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Status</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $i => $user)
                            <tr>
                                {{-- Nomor urut --}}
                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    {{ $i + 1 }}
                                </td>

                                {{-- ID pengguna --}}
                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    {{ $user->id }}
                                </td>

                                {{-- Nama --}}
                                <td class="border px-3 py-2 whitespace-nowrap">
                                    {{ $user->name }}
                                </td>

                                {{-- Email --}}
                                <td class="border px-3 py-2 whitespace-nowrap">
                                    {{ $user->email }}
                                </td>

                                {{-- STATUS BADGE --}}
                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    @if ($user->status === 'aktif')
                                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs shadow">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs shadow">
                                            Nonaktif
                                        </span>
                                    @endif
                                </td>

                                {{-- ACTION --}}
                                <td class="border px-3 py-2 text-center whitespace-nowrap flex gap-2 justify-center">
                                    {{-- <button
                                        class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-1 rounded-lg text-sm shadow">
                                        Detail
                                    </button> --}}

                                    <form action="{{ route('admin.users.toggleStatus', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-1 rounded-lg text-sm shadow">
                                            Ubah Status
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>

        </div>

    </div>

</x-admin-layout>
