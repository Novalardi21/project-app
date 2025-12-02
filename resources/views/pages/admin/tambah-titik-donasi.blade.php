<x-admin-layout>
    <div class="min-h-screen bg-[#FBF8F5] p-8">

        {{-- Judul Halaman --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Titik Donasi</h1>

        {{-- CARD FORM --}}
        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm max-w-5xl mx-auto p-8">
            <h2 class="text-lg font-semibold text-center text-gray-900 mb-8">
                Tambah Titik Donasi
            </h2>

            <form action="{{ route('admin.titik.store') }}" method="POST" class="space-y-6">
                @csrf
                {{-- Grid 2 kolom --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Nama Lokasi --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Nama Lokasi
                        </label>
                        <input type="text" name="name"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="Yayasan Peduli Sesama Jakarta">
                    </div>


                    {{-- ID Lokasi --}}
                    {{-- <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            ID Lokasi
                        </label>
                        <input type="text" name="id_lokasi"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="1" readonly>
                    </div> --}}

                    {{-- Jam Operasional --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Jam Operasional
                        </label>
                        <input type="text" name="hours"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="Senin–Jumat, 09:00–17:00">
                    </div>


                    {{-- Nomor Handphone --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Nomor Handphone
                        </label>
                        <input type="text" name="phone"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="021-12345678">
                    </div>

                    {{-- Garis Lintang --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Garis Lintang
                        </label>
                        <input type="text" name="lat"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="-6.200000">
                    </div>

                    {{-- Items --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Items
                        </label>
                        <input type="text" name="items"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="Pakaian, Buku, Mainan">
                    </div>

                    {{-- Garis Bujur --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Garis Bujur
                        </label>
                        <input type="text" name="lng"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="106.816666">
                    </div>

                    {{-- Note --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Note
                        </label>
                        <input type="text" name="note"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800"
                            placeholder="Terima barang layak pakai dalam kondisi bersih">
                    </div>

                    {{-- Alamat Lengkap (full width, jadi kita pakai col-span-2) --}}
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">
                            Alamat Lengkap
                        </label>
                        <textarea name="address" rows="3"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800 resize-none"
                            placeholder="Jl. Sudirman No. 45, Jakarta Pusat"></textarea>
                    </div>

                </div>

                {{-- Tombol Simpan di kanan bawah --}}
                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="px-8 py-2.5 rounded-xl bg-[#2F5D50] text-white text-sm font-medium shadow hover:bg-[#244b40] transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-admin-layout>
