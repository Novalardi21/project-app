<x-admin-layout>
    <div class="min-h-screen bg-[#FBF8F5] p-8">

        {{-- Judul Halaman --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Titik Donasi</h1>

        {{-- SEARCH + FILTER --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">

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

            {{-- Tombol Filter --}}
            <a href="#"
                class="cursor-pointer text-white px-5 py-2 rounded-lg flex items-center gap-2 shadow
           transition-all duration-300 ease-out
           hover:-translate-y-1 hover:scale-105 hover:shadow-lg
           hover:bg-[#387161]"
                style="background-color: var(--color-green);">

                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z" />
                </svg>

                Filter
            </a>

        </div>

        {{-- CARD TABEL --}}
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">

            <h2 class="text-xl font-semibold mb-6 text-center text-slate-900">Tabel Titik Donasi</h2>

            <div class="overflow-x-auto w-full">
                <table class="w-full text-sm border-collapse">
                    <thead class="">
                        <tr class="bg-card text-slate-900 text-center">
                            <th class="border px-3 py-2 whitespace-nowrap">No</th>
                            <th class="border px-3 py-2 whitespace-nowrap">ID</th>
                            <th class="border px-3 py-2 whitespace-nowrap ">Name</th>
                            <th class="border px-3 py-2 whitespace-nowrap ">Address</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Operating Hours</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Phone</th>
                            <th class="border px-3 py-2 whitespace-nowrap">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        {{-- DATA STATIS --}}
                        @php
                            $data = [
                                [
                                    'id' => 1,
                                    'name' => 'Yayasan Peduli Sesama Jakarta',
                                    'address' => 'Jl. Sudirman No. 45, Jakarta Pusat',
                                    'hours' => 'Senin–Jumat, 09:00–17:00',
                                    'phone' => '021-12345678',
                                ],
                                [
                                    'id' => 2,
                                    'name' => 'Rumah Zakat Cabang Bekasi',
                                    'address' => 'Jl. Ahmad Yani No. 123, Bekasi',
                                    'hours' => 'Senin–Sabtu, 08:00–16:00',
                                    'phone' => '021-87654321',
                                ],
                                [
                                    'id' => 3,
                                    'name' => 'Panti Asuhan Harapan Bangsa',
                                    'address' => 'Jl. Gatot Subroto No. 167, Tangerang',
                                    'hours' => 'Setiap hari, 08:00–20:00',
                                    'phone' => '021-56512345',
                                ],
                                [
                                    'id' => 4,
                                    'name' => 'Masjid Al-Ikhlas',
                                    'address' => 'Jl. Raya Bogor KM 20, Depok',
                                    'hours' => 'Setiap hari, 07:00–21:00',
                                    'phone' => '021-87651234',
                                ],
                                [
                                    'id' => 5,
                                    'name' => 'Panti Asuhan Cahaya Bandung',
                                    'address' => 'Jl. Soekarno Hatta No. 212, Bandung',
                                    'hours' => 'Selasa–Sabtu, 08:00–17:00',
                                    'phone' => '022-99887766',
                                ],
                                [
                                    'id' => 6,
                                    'name' => 'Rumah Peduli Sesama Semarang',
                                    'address' => 'Jl. Pemuda No. 14, Semarang',
                                    'hours' => 'Senin–Jumat, 09:00–18:00',
                                    'phone' => '024-76543210',
                                ],
                                [
                                    'id' => 7,
                                    'name' => 'Pos Donasi Berbagi Surabaya',
                                    'address' => 'Jl. Dharmawangsa No. 5, Surabaya',
                                    'hours' => 'Senin–Minggu, 10:00–19:00',
                                    'phone' => '031-22334455',
                                ],
                                [
                                    'id' => 8,
                                    'name' => 'Lembaga Sosial Bina Karya Medan',
                                    'address' => 'Jl. Gatot Subroto No. 70, Medan',
                                    'hours' => 'Rabu–Minggu, 09:00–17:00',
                                    'phone' => '061-44556677',
                                ],
                                [
                                    'id' => 9,
                                    'name' => 'Komunitas Tangan Terbuka Makassar',
                                    'address' => 'Jl. Urip Sumoharjo No. 32, Makassar',
                                    'hours' => 'Senin–Sabtu, 08:30–16:00',
                                    'phone' => '0411-77889900',
                                ],
                                [
                                    'id' => 10,
                                    'name' => 'Yayasan Berbagi Kasih Yogyakarta',
                                    'address' => 'Jl. Malioboro No. 16, Yogyakarta',
                                    'hours' => 'Selasa–Minggu, 10:00–18:00',
                                    'phone' => '0274-66778899',
                                ],
                            ];
                        @endphp

                        @foreach ($data as $i => $item)
                            <tr>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">{{ $i + 1 }}</td>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">{{ $item['id'] }}</td>
                                <td class="border px-3 py-2 whitespace-nowrap">{{ $item['name'] }}</td>
                                <td class="border px-3 py-2 whitespace-nowrap">{{ $item['address'] }}</td>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">{{ $item['hours'] }}</td>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">{{ $item['phone'] }}</td>
                                <td class="border px-3 py-2 text-center whitespace-nowrap">
                                    <button
                                        class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-1 rounded-lg text-sm shadow">
                                        Detail
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
