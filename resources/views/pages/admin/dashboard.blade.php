<x-admin-layout>

    <div class="min-h-screen bg-[#FBF8F5] p-8">

        {{-- Judul --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Dashboard</h1>

        {{-- GRID SUMMARY --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
            
            {{-- Total Donasi Masuk --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 text-center">
                <p class="text-sm text-gray-500 font-medium">Total Donasi Masuk</p>
                <p class="text-4xl font-semibold mt-2">351</p>
            </div>

            {{-- Barang Tersalurkan --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 text-center">
                <p class="text-sm text-gray-500 font-medium">Barang Tersalurkan</p>
                <p class="text-4xl font-semibold mt-2">1.250</p>
            </div>

            {{-- Donatur Aktif --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 text-center">
                <p class="text-sm text-gray-500 font-medium">Donatur Aktif</p>
                <p class="text-4xl font-semibold mt-2">220</p>
            </div>

            {{-- Penerima Manfaat --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 text-center">
                <p class="text-sm text-gray-500 font-medium">Penerima Manfaat</p>
                <p class="text-4xl font-semibold mt-2">340</p>
            </div>

        </div>

        {{-- GRID BAWAH --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            {{-- TABEL DONASI TERBARU --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold mb-4">Donasi Terbaru</h3>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm border-collapse">
                        <thead>
                            <tr class="bg-emerald-200 text-gray-700">
                                <th class="border px-3 py-2 text-left">No</th>
                                <th class="border px-3 py-2 text-left">ID Donasi</th>
                                <th class="border px-3 py-2 text-left">Nama</th>
                                <th class="border px-3 py-2 text-left">Jenis Barang</th>
                                <th class="border px-3 py-2 text-left">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="border px-3 py-2">1</td>
                                <td class="border px-3 py-2">DN-001</td>
                                <td class="border px-3 py-2">Naya</td>
                                <td class="border px-3 py-2">Pakaian</td>
                                <td class="border px-3 py-2">Terverifikasi</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">2</td>
                                <td class="border px-3 py-2">DN-002</td>
                                <td class="border px-3 py-2">Jeje</td>
                                <td class="border px-3 py-2">Buku</td>
                                <td class="border px-3 py-2">Menunggu</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">3</td>
                                <td class="border px-3 py-2">DN-003</td>
                                <td class="border px-3 py-2">Taro</td>
                                <td class="border px-3 py-2">Mainan</td>
                                <td class="border px-3 py-2">Selesai</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">4</td>
                                <td class="border px-3 py-2">DN-004</td>
                                <td class="border px-3 py-2">Rina</td>
                                <td class="border px-3 py-2">Pakaian</td>
                                <td class="border px-3 py-2">Menunggu</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">5</td>
                                <td class="border px-3 py-2">DN-005</td>
                                <td class="border px-3 py-2">Mutiara</td>
                                <td class="border px-3 py-2">Makanan</td>
                                <td class="border px-3 py-2">Selesai</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">6</td>
                                <td class="border px-3 py-2">DN-006</td>
                                <td class="border px-3 py-2">Rania</td>
                                <td class="border px-3 py-2">Elektronik</td>
                                <td class="border px-3 py-2">Terverifikasi</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">7</td>
                                <td class="border px-3 py-2">DN-007</td>
                                <td class="border px-3 py-2">Jelita</td>
                                <td class="border px-3 py-2">Buku</td>
                                <td class="border px-3 py-2">Dijemput</td>
                            </tr>
                            <tr>
                                <td class="border px-3 py-2">8</td>
                                <td class="border px-3 py-2">DN-008</td>
                                <td class="border px-3 py-2">Daffa</td>
                                <td class="border px-3 py-2">Perabotan</td>
                                <td class="border px-3 py-2">Dijemput</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- MAP --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4">
                <h3 class="text-lg font-semibold mb-4">Lokasi Donasi</h3>

                <div class="w-full h-[350px] rounded-xl overflow-hidden border">
                    {{-- Placeholder map (nanti bisa diganti Leaflet/Google Maps) --}}
                    <img src="https://maps.googleapis.com/maps/api/staticmap?center=Indonesia&zoom=5&size=600x350&key=YOUR_KEY"
                        class="w-full h-full object-cover" alt="Map Placeholder">
                </div>
            </div>

        </div>

    </div>

</x-admin-layout>
