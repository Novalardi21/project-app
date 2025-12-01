<x-admin-layout>

    <div class="min-h-screen bg-[#FBF8F5] p-8">

        {{-- JUDUL --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Pengguna</h1>

        {{-- SEARCH + BUTTON --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

            {{-- Search --}}
            <div class="relative w-full md:w-1/3">
                <input type="text"
                    class="w-full border border-gray-300 rounded-xl py-2 pl-10 pr-4 focus:ring-2 focus:ring-emerald-400"
                    placeholder="Search">

                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-4.35-4.35M10 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z" />
                </svg>
            </div>

            {{-- Button Ubah Status --}}
            <button
                class="cursor-pointer text-white px-5 py-2 rounded-lg flex items-center gap-2 shadow
                       transition-all duration-300 ease-out
                       hover:-translate-y-1 hover:scale-105 hover:shadow-lg
                       hover:bg-green"
                style="background-color: var(--color-green);">

                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path d="M21 7H3V5h18v2zm0 3H3v2h18v-2zm0 5H3v2h18v-2z" />
                </svg>

                Ubah Status
            </button>

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
                        @php
                            $data = [
                                ['id' => 1, 'name' => 'Naya', 'email' => 'naya@gmail.com', 'status' => 'Aktif'],
                                ['id' => 2, 'name' => 'Jeje', 'email' => 'jeje@gmail.com', 'status' => 'Nonaktif'],
                                ['id' => 3, 'name' => 'Taro', 'email' => 'taro@gmail.com', 'status' => 'Nonaktif'],
                                ['id' => 4, 'name' => 'Rina', 'email' => 'rina@gmail.com', 'status' => 'Aktif'],
                                ['id' => 5, 'name' => 'Mutiara', 'email' => 'mutiara@gmail.com', 'status' => 'Aktif'],
                                ['id' => 6, 'name' => 'Rania', 'email' => 'rania@gmail.com', 'status' => 'Aktif'],
                                ['id' => 7, 'name' => 'Jelita', 'email' => 'jelita@gmail.com', 'status' => 'Nonaktif'],
                                ['id' => 8, 'name' => 'Daffa', 'email' => 'daffa@gmail.com', 'status' => 'Nonaktif'],
                            ];
                        @endphp

                        @foreach ($data as $i => $item)
                            <tr>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">{{ $i + 1 }}</td>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">{{ $item['id'] }}</td>
                                <td class="border px-3 py-2 whitespace-nowrap">{{ $item['name'] }}</td>
                                <td class="border px-3 py-2 whitespace-nowrap">{{ $item['email'] }}</td>

                                {{-- STATUS BADGE --}}
                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    @if ($item['status'] === 'Aktif')
                                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs shadow">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs shadow">
                                            Nonaktif
                                        </span>
                                    @endif
                                </td>

                                {{-- ACTION BUTTONS --}}
                                <td class="border px-3 py-2 text-center whitespace-nowrap flex gap-2 justify-center">
                                    <button
                                        class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-1 rounded-lg text-sm shadow">
                                        Detail
                                    </button>

                                    <button
                                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-1 rounded-lg text-sm shadow">
                                        Ubah Status
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>

    </div>

</x-admin-layout>
