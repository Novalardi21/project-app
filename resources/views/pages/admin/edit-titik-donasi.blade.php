<x-admin-layout>
    <div class="min-h-screen bg-[#FBF8F5] p-8">

        <h1 class="text-3xl font-bold text-gray-900 mb-8">Titik Donasi</h1>

        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm max-w-5xl mx-auto p-8">
            <h2 class="text-lg font-semibold text-center text-gray-900 mb-8">
                Edit Titik Donasi
            </h2>

            <form action="{{ route('admin.titik.update', $donasi->id) }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Nama Lokasi --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Nama Lokasi</label>
                        <input type="text" name="name" value="{{ $donasi->name }}"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800">
                    </div>

                    {{-- Jam Operasional --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Jam Operasional</label>
                        <input type="text" name="hours" value="{{ $donasi->hours }}"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800">
                    </div>

                    {{-- Nomor HP --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Nomor Handphone</label>
                        <input type="text" name="phone" value="{{ $donasi->phone }}"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800">
                    </div>

                    {{-- Latitude --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Garis Lintang</label>
                        <input type="text" name="lat" value="{{ $donasi->lat }}"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800">
                    </div>

                    {{-- Items --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Items</label>
                        <input type="text" name="items" value="{{ $donasi->items }}"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800">
                    </div>

                    {{-- Longitude --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Garis Bujur</label>
                        <input type="text" name="lng" value="{{ $donasi->lng }}"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800">
                    </div>

                    {{-- Note --}}
                    <div>
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Note</label>
                        <input type="text" name="note" value="{{ $donasi->note }}"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800">
                    </div>

                    {{-- Address full --}}
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-emerald-800 mb-2">Alamat Lengkap</label>
                        <textarea name="address" rows="3"
                            class="w-full rounded-xl border border-gray-200 bg-[#F7F1E9] px-4 py-2.5 text-sm text-gray-800 resize-none">{{ $donasi->address }}</textarea>
                    </div>

                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="px-8 py-2.5 rounded-xl bg-[#2F5D50] text-white text-sm font-medium shadow hover:bg-[#244b40] transition">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-admin-layout>
