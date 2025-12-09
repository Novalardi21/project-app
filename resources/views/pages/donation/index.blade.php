<x-layout>
    {{-- Hero Section --}}
    <section class="bg-[#faf6ef] py-20">
        <div class="max-w-5xl mx-auto mt-25 text-center">

            {{-- Badge --}}
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#e3f3ea] text-sm font-medium text-[#256049] mb-6">
                {{-- Icon hati --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                        d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                </svg>
                <span>Berbagi Kebahagiaan</span>
            </div>

            {{-- Title --}}
            <h1 class="text-3xl md:text-4xl font-semibold text-[#1d3f32] mb-4">
                Donasi Barang Anda
            </h1>

            {{-- Sub Title --}}
            <p class="text-sm md:text-base text-gray-600 max-w-2xl mx-auto">
                Setiap barang yang Anda donasikan akan memberikan manfaat besar bagi mereka
                yang membutuhkan. Mari bersama berbagi kebahagiaan.
            </p>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="bg-white py-12">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10 text-center">

            {{-- Card 1 --}}
            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-card flex items-center justify-center mb-4">
                    {{-- Icon wong --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 48 48">
                        <g fill="none" stroke="#2f5d50" stroke-linecap="round" stroke-width="4">
                            <path
                                d="M10 19s-5.143 2-6 9m34-9s5.143 2 6 9m-26-9s4.8 1.167 6 7m6-7s-4.8 1.167-6 7m-4 8s-4.2.75-6 6m14-6s4.2.75 6 6" />
                            <circle cx="24" cy="31" r="5" stroke-linejoin="round" />
                            <circle cx="34" cy="14" r="6" stroke-linejoin="round" />
                            <circle cx="14" cy="14" r="6" stroke-linejoin="round" />
                        </g>
                    </svg>
                </div>
                <p class="text-2xl font-semibold text-[#1d3f32] mb-1">200+</p>
                <p class="text-sm text-gray-500">Penerima Manfaat</p>
            </div>

            {{-- Card 2 --}}
            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-card flex items-center justify-center mb-4">
                    {{-- Icon box --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 16 16">
                        <path fill="#2f5d50"
                            d="M6.923 1.378a3 3 0 0 1 2.154 0l4.962 1.908a1.5 1.5 0 0 1 .961 1.4v6.626a1.5 1.5 0 0 1-.961 1.4l-4.962 1.909a3 3 0 0 1-2.154 0l-4.961-1.909a1.5 1.5 0 0 1-.962-1.4V4.686a1.5 1.5 0 0 1 .962-1.4zm1.795.933a2 2 0 0 0-1.436 0l-1.384.533l5.59 2.116l1.948-.834zM14 4.971L8.5 7.33v6.428q.11-.028.218-.07l4.962-1.908a.5.5 0 0 0 .32-.467zm-6.5 8.786V7.33L2 4.972v6.34a.5.5 0 0 0 .32.467l4.962 1.908q.107.042.218.07M2.564 4.126L8 6.456l2.164-.928l-5.667-2.146z" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold text-[#1d3f32] mb-1">1,200+</p>
                <p class="text-sm text-gray-500">Barang Terdonasi</p>
            </div>

            {{-- Card 3 --}}
            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-card flex items-center justify-center mb-4">
                    {{-- Icon heart --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-green" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold text-[#1d3f32] mb-1">150+</p>
                <p class="text-sm text-gray-500">Donatur Aktif</p>
            </div>

        </div>
    </section>


    {{-- Section 2 --}}
    <section class="bg-[#faf6ef] py-20">
        <div class="max-w-5xl mx-auto text-center">

            {{-- Title --}}
            <h1 class="text-3xl md:text-4xl font-semibold text-[#1d3f32] mb-3">
                Cara Berdonasi
            </h1>

            {{-- Sub Title --}}
            <p class="text-sm md:text-base text-gray-600 max-w-2xl mx-auto">
                Proses mudah dalam 3 langkah sederhana
            </p>
        </div>

        {{-- Cards --}}
        <div class="max-w-6xl mx-auto mt-5 grid grid-cols-1 md:grid-cols-3 gap-6 px-6">

            {{-- Card 1 --}}
            <div
                class="bg-white  px-4 py-8 rounded-xl border border-gray-200 shadow-sm transform transition-all duration-500 ease-out
    hover:scale-105 hover:-translate-y-2 relative">
                <div class="flex flex-col gap-4">


                    {{-- Icon upload --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                        <g transform="rotate(-90 12 12)">
                            <path fill="#2f5d50"
                                d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h5.903q.214 0 .357.143t.143.357t-.143.357t-.357.143H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h5.904q.214 0 .357.143t.143.357t-.143.357t-.357.143zm12.444-7.5H9.692q-.213 0-.356-.143T9.192 12t.143-.357t.357-.143h8.368l-1.971-1.971q-.141-.14-.15-.338q-.01-.199.15-.364q.159-.165.353-.168q.195-.003.36.162l2.614 2.613q.242.243.242.566t-.243.566l-2.613 2.613q-.146.146-.347.153t-.366-.159q-.16-.165-.157-.357t.162-.35z" />
                        </g>
                    </svg>


                    <div>
                        <h2 class="text-lg font-semibold text-green ml-2">1. Isi Formulir</h2>
                        <p class="text-sm text-gray-600 mt-1">Lengkapi formulir donasi dengan informasi barang dan data
                            diri Anda.</p>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div
                class="bg-white  px-4 py-8 rounded-xl border border-gray-200 shadow-sm transform transition-all duration-500 ease-out
    hover:scale-105 hover:-translate-y-2 relative">
                <div class="flex flex-col gap-4">

                    {{-- Icon upload --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32">
                        <g fill="none" stroke="#2f5d50" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2">
                            <circle cx="16" cy="16" r="14" />
                            <path d="M16 8v8l4 4" />
                        </g>
                    </svg>

                    <div>
                        <h2 class="text-lg font-semibold text-green ml-2">2. Konfirmasi Tim</h2>
                        <p class="text-sm text-gray-600 mt-1">Tim kami akan menghubungi Anda untuk jadwal pengambilan
                            atau pengantaran.</p>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div
                class="bg-white  px-4 py-8 rounded-xl border border-gray-200 shadow-sm transform transition-all duration-500 ease-out
    hover:scale-105 hover:-translate-y-2 relative">
                <div class="flex flex-col gap-4">

                    {{-- Icon upload --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                        <g fill="none" stroke="#2f5d50" stroke-width="1.5">
                            <path
                                d="M19.5 17.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.5 17.5h-5M2 4h10c1.414 0 2.121 0 2.56.44C15 4.878 15 5.585 15 7v8.5m.5-9h1.801c.83 0 1.245 0 1.589.195c.344.194.557.55.984 1.262l1.699 2.83c.212.354.318.532.373.728c.054.197.054.403.054.816V15c0 .935 0 1.402-.201 1.75a1.5 1.5 0 0 1-.549.549c-.348.201-.815.201-1.75.201M2 13v2c0 .935 0 1.402.201 1.75a1.5 1.5 0 0 0 .549.549c.348.201.815.201 1.75.201M2 7h6m-6 3h4" />
                        </g>
                    </svg>

                    <div>
                        <h2 class="text-lg font-semibold text-green ml-2">3. Penyaluran</h2>
                        <p class="text-sm text-gray-600 mt-1">Barang Anda akan disalurkan kepada mereka yang
                            membutuhkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  Section 3 --}}
    <section class="bg-[#faf6ef] py-2">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-1 gap-8 px-6">


            {{-- Ini Crad kiri --}}
            <div class="md:col-span-2 bg-white rounded-xl p-8 shadow-sm">


                <div class="flex flex-col items-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-[#e3f3ea] flex items-center justify-center mb-3">
                        {{-- Icon Box --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 16 16">
                            <path fill="#2f5d50"
                                d="M6.923 1.378a3 3 0 0 1 2.154 0l4.962 1.908a1.5 1.5 0 0 1 .961 1.4v6.626a1.5 1.5 0 0 1-.961 1.4l-4.962 1.909a3 3 0 0 1-2.154 0l-4.961-1.909a1.5 1.5 0 0 1-.962-1.4V4.686a1.5 1.5 0 0 1 .962-1.4zm1.795.933a2 2 0 0 0-1.436 0l-1.384.533l5.59 2.116l1.948-.834zM14 4.971L8.5 7.33v6.428q.11-.028.218-.07l4.962-1.908a.5.5 0 0 0 .32-.467zm-6.5 8.786V7.33L2 4.972v6.34a.5.5 0 0 0 .32.467l4.962 1.908q.107.042.218.07M2.564 4.126L8 6.456l2.164-.928l-5.667-2.146z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-semibold text-[#1d3f32]">Formulir Donasi</h2>
                    <p class="text-gray-600 text-sm">Isi formulir di bawah ini untuk mengirimkan donasi Anda</p>
                </div>

                {{-- INFO / ALERT TITIK DONASI --}}
                @if (!empty($selectedLocation))
                    {{-- Jika SUDAH ada titik donasi --}}
                    <div
                        class="mb-6 p-4 rounded-lg bg-[#e3f3ea] border border-emerald-100 flex items-start justify-between gap-3">
                        <div class="flex items-start gap-3">
                            <div
                                class="w-9 h-9 rounded-full bg-[#2f5d50] flex items-center justify-center text-white flex-shrink-0">
                                {{-- ikon pin kecil --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] uppercase tracking-wide text-emerald-700 font-semibold">
                                    Titik Donasi Tujuan
                                </p>
                                <p class="text-sm font-semibold text-[#1d3f32]">
                                    {{ $selectedLocation->name }}
                                </p>
                                <p class="text-xs text-gray-600">
                                    {{ $selectedLocation->address }}
                                </p>
                            </div>
                        </div>

                        {{-- Tombol ganti lokasi --}}
                        <div class="flex-shrink-0">
                            <a href="{{ route('maps.index') }}"
                                class="inline-flex items-center gap-1 text-xs px-3 py-1.5 rounded-full border border-emerald-500 text-emerald-700 hover:bg-emerald-50 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M15 18l-6-6 6-6" />
                                </svg>
                                Ganti lokasi
                            </a>
                        </div>
                    </div>
                @else
                    {{-- Jika BELUM memilih titik donasi --}}
                    <div class="mb-6 p-4 rounded-lg bg-yellow-50 border border-yellow-200 flex items-start gap-3">
                        <div class="mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="13" />
                                <circle cx="12" cy="16.5" r="0.8" fill="currentColor" stroke="none" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-yellow-800">
                                Anda belum memilih titik donasi.
                            </p>
                            <p class="text-xs text-yellow-700 mt-1">
                                Silakan pilih lokasi donasi terlebih dahulu melalui halaman peta agar tim kami tahu
                                donasi ini ditujukan ke titik mana.
                            </p>
                            <a href="{{ route('maps.index') }}"
                                class="inline-flex items-center gap-1 mt-2 text-xs px-3 py-1.5 rounded-full bg-yellow-500 text-white hover:bg-yellow-600 transition">
                                Pilih titik donasi
                            </a>
                        </div>
                    </div>
                @endif

                @if (session('success'))
                    <div class="mb-4 p-3 rounded-lg bg-emerald-50 border border-emerald-200 text-sm text-emerald-800">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- FORM FIELD --}}
                <form class="space-y-6" method="POST" action="{{ route('donation.store') }}"
                    enctype="multipart/form-data">
                    @csrf

                    {{-- kalau datang dari maps, kirimkan id lokasi --}}
                    @if (!empty($selectedLocation))
                        <input type="hidden" name="donation_location_id" value="{{ $selectedLocation->id }}">
                    @endif

                    <div>
                        <label class="text-sm font-medium text-gray-700">Nama Lengkap <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="donor_name" value="{{ old('donor_name') }}" required
                            minlength="3" maxlength="255" pattern="[a-zA-Z\s\.\,\']+"
                            title="Hanya huruf, spasi, titik, dan koma yang diperbolehkan"
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border @error('donor_name') border-red-500 @else border-gray-200   @enderror focus:ring-[#256049] focus:border-[#256049]">

                        @error('donor_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- NOMOR TELEPON --}}
                    <div>
                        <label class="text-sm font-medium text-gray-700">Nomor Telepon <span
                                class="text-red-500">*</span></label>
                        <input type="number" name="phone" value="{{ old('phone') }}"
                            placeholder="Contoh: 081234567890" required minlength="10" maxlength="20"
                            pattern="^(\+62|62|0)[0-9]{8,15}$" title="Gunakan format 08xx atau 628xx (hanya angka)"
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border @error('phone') border-red-500 @else border-gray-200 @enderror focus:ring-[#256049] focus:border-[#256049]">

                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- ALAMAT LENGKAP --}}
                    <div>
                        <label class="text-sm font-medium text-gray-700">Alamat Lengkap <span
                                class="text-red-500">*</span></label>
                        <textarea name="address" rows="3" required minlength="10" maxlength="1000"
                            placeholder="Masukan nama jalan, nomor rumah, RT/RW, dan patokan..."
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border @error('address') border-red-500 @else border-gray-200 @enderror focus:ring-[#256049] focus:border-[#256049]">{{ old('address') }}</textarea>

                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Jenis Barang <span
                                class="text-red-500">*</span></label>

                        {{-- DROPDOWN --}}
                        <select id="selectItemType" onchange="checkItemType(this)"
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border border-gray-200 focus:ring-[#256049] focus:border-[#256049]">
                            <option value="">Pilih Jenis Barang</option>
                            <option value="Pakaian" {{ old('item_type') == 'Pakaian' ? 'selected' : '' }}>Pakaian
                            </option>
                            <option value="Buku" {{ old('item_type') == 'Buku' ? 'selected' : '' }}>Buku</option>
                            <option value="Perabotan" {{ old('item_type') == 'Perabotan' ? 'selected' : '' }}>
                                Perabotan</option>
                            <option value="Elektronik" {{ old('item_type') == 'Elektronik' ? 'selected' : '' }}>
                                Elektronik</option>
                            <option value="Mainan" {{ old('item_type') == 'Mainan' ? 'selected' : '' }}>Mainan
                            </option>
                            <option value="Makanan" {{ old('item_type') == 'Makanan' ? 'selected' : '' }}>Makanan
                            </option>

                            {{-- Opsi Lainnya --}}
                            <option value="Lainnya" {{ old('item_type') == 'Lainnya' ? 'selected' : '' }}>Lainnya
                            </option>
                        </select>

                        {{-- INPUT MANUAL (Tersembunyi secara default) --}}
                        <div id="manualInputDiv" class="hidden mt-2">
                            <input type="text" id="manualItemInput" placeholder="Tuliskan jenis barang..."
                                class="w-full p-3 rounded-lg shadow-sm bg-white border border-gray-200 focus:ring-[#256049] focus:border-[#256049]">
                            <p class="text-xs text-gray-500 mt-1">*Masukan jenis barang secara spesifik</p>
                        </div>

                        {{-- Hidden input untuk menampung nilai final yang dikirim ke controller --}}
                        <input type="hidden" name="item_type" id="finalItemType" value="{{ old('item_type') }}">

                        @error('item_type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Jenis Pengantaran <span
                                class="text-red-500">*</span></label>
                        <select name="delivery_type" required
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border @error('delivery_type') border-red-500 @else border-gray-200 @enderror focus:ring-[#256049] focus:border-[#256049]">
                            <option value="">Pilih Jenis Pengantaran</option>
                            <option value="jemput" {{ old('delivery_type') == 'jemput' ? 'selected' : '' }}>Jemput
                                Donasi (Kurir kami datang ke lokasi)</option>
                            <option value="antar" {{ old('delivery_type') == 'antar' ? 'selected' : '' }}>Antar
                                Donasi (Anda antar ke lokasi kami)</option>
                        </select>

                        @error('delivery_type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Deskripsi Barang <span
                                class="text-red-500">*</span></label>
                        <textarea name="item_description" rows="3" required minlength="10" maxlength="2000"
                            placeholder="Jelaskan kondisi barang, merek, tahun pembelian, dll..."
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border @error('item_description') border-red-500 @else border-gray-200 @enderror focus:ring-[#256049] focus:border-[#256049]">{{ old('item_description') }}</textarea>

                        @error('item_description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Foto Barang (Opsional)</label>

                        <div onclick="document.getElementById('fotoUpload').click()"
                            class="w-full rounded-lg p-6 flex flex-col items-center justify-center text-gray-600 bg-[#faf6f2] border border-gray-200 shadow-sm cursor-pointer">

                            {{-- Input File Asli (disembunyikan) --}}
                            <input type="file" id="fotoUpload" name="photos[]" accept="image/png, image/jpeg"
                                class="hidden" multiple>

                            {{-- Icon upload --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" viewBox="0 0 24 24">
                                <path fill="#256049"
                                    d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h5.903q.214 0 .357.143t.143.357t-.143.357t-.357.143H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h5.904q.214 0 .357.143t.143.357t-.143.357t-.357.143zm12.444-7.5H9.692q-.213 0-.356-.143T9.192 12t.143-.357t.357-.143h8.368l-1.971-1.971q-.141-.14-.15-.338q-.01-.199.15-.364q.159-.165.353-.168q.195-.003.36.162l2.614 2.613q.242.243.242.566t-.243.566l-2.613 2.613q-.146.146-.347.153t-.366-.159q-.16-.165-.157-.357t.162-.35z" />
                            </svg>

                            <p class="text-sm">Klik untuk upload foto</p>
                            <p class="text-xs text-gray-500">Max 3 foto (JPG, PNG)</p>
                        </div>

                        {{-- PREVIEW THUMBNAIL --}}
                        <div id="fotoPreview" class="mt-3 grid grid-cols-3 gap-3 hidden">
                            {{-- diisi via JS --}}
                        </div>

                        {{-- LIST NAMA FILE --}}
                        <div id="fotoFileNames" class="mt-2 space-y-1 text-xs text-gray-600">
                            {{-- diisi via JS --}}
                        </div>

                        {{-- Pesan error frontend (optional) --}}
                        <p id="fotoError" class="mt-1 text-xs text-red-500 hidden"></p>
                    </div>


                    <button class="w-full bg-[#256049] hover:bg-[#1e4a3e] text-white py-3 rounded-lg font-medium">
                        Kirim Donasi
                    </button>

                </form>
            </div>
        </div>
    </section>
    {{-- Script ketiak klik jenis lainnya maka di alihkan ke input manual --}}
    <script>
        function checkItemType(selectElement) {
            const manualDiv = document.getElementById('manualInputDiv');
            const manualInput = document.getElementById('manualItemInput');
            const finalInput = document.getElementById('finalItemType');

            if (selectElement.value === 'Lainnya') {
                // 1. Munculkan kotak input manual
                manualDiv.classList.remove('hidden');

                // 2. Fokus ke kotak input
                manualInput.focus();

                // 3. Set value final jadi kosong dulu (menunggu user mengetik)
                finalInput.value = manualInput.value;

                // 4. Tambahkan event listener saat mengetik
                manualInput.oninput = function() {
                    finalInput.value = this.value; // Nilai yang dikirim ke server adalah hasil ketikan
                };
            } else {
                // 1. Sembunyikan kotak input manual
                manualDiv.classList.add('hidden');

                // 2. Nilai yang dikirim ke server adalah pilihan Dropdown
                finalInput.value = selectElement.value;
            }
        }

        // Logika tambahan: Jika validasi gagal dan user sebelumnya memilih "Lainnya" atau mengetik custom
        document.addEventListener("DOMContentLoaded", function() {
            const oldVal = "{{ old('item_type') }}";
            const selectBox = document.getElementById('selectItemType');

            // Cek apakah old value ada di dalam opsi dropdown standar?
            let existsInDropdown = false;
            for (let i = 0; i < selectBox.options.length; i++) {
                if (selectBox.options[i].value === oldVal) {
                    existsInDropdown = true;
                    break;
                }
            }

            // Jika ada value TAPI tidak ada di dropdown (berarti user mengetik manual sebelumnya)
            if (oldVal && !existsInDropdown) {
                selectBox.value = 'Lainnya'; // Set dropdown ke "Lainnya"
                document.getElementById('manualInputDiv').classList.remove('hidden'); // Buka kotak manual
                document.getElementById('manualItemInput').value = oldVal; // Isi kotak manual dengan text lama
            }
        });
    </script>
</x-layout>
