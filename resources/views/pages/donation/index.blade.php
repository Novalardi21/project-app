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
                <div class="w-14 h-14 rounded-full bg-green flex items-center justify-center mb-4">
                    {{-- Icon wong --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-card" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M17 20v-2a4 4 0 00-3-3.87M9 14.13A4 4 0 006 18v2m6-10a3 3 0 11-6 0 3 3 0 016 0zm6
                                 3a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold text-[#1d3f32] mb-1">200+</p>
                <p class="text-sm text-gray-500">Penerima Manfaat</p>
            </div>

            {{-- Card 2 --}}
            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-green flex items-center justify-center mb-4">
                    {{-- Icon box --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-card" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"
                            d="M20.25 7.5L12 3 3.75 7.5M20.25 7.5L12 12m8.25-4.5V16.5L12 21m0-9L3.75 7.5M12 12v9" />
                    </svg>
                </div>
                <p class="text-2xl font-semibold text-[#1d3f32] mb-1">1,200+</p>
                <p class="text-sm text-gray-500">Barang Terdonasi</p>
            </div>

            {{-- Card 3 --}}
            <div class="flex flex-col items-center">
                <div class="w-14 h-14 rounded-full bg-green flex items-center justify-center mb-4">
                    {{-- Icon heart --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-card" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
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
            <div class="bg-white  px-4 py-8 rounded-xl border border-gray-200 shadow-sm">
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
            <div class="bg-white  px-4 py-8 rounded-xl border border-gray-200 shadow-sm">
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
            <div class="bg-white  px-4 py-8 rounded-xl border border-gray-200 shadow-sm">
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
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6">

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

                {{-- FORM FIELD --}}
                <form class="space-y-6">

                    <div>
                        <label class="text-sm font-medium text-gray-700">Nama Lengkap *</label>
                        <input type="text"
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border border-gray-200 focus:ring-[#256049] focus:border-[#256049]">
                    </div>


                    <div>
                        <label class="text-sm font-medium text-gray-700">Nomor Telepon *</label>
                        <input type="text" placeholder="08xx xxxx xxxx"
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border border-gray-200 focus:ring-[#256049] focus:border-[#256049]">
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Alamat Lengkap *</label>
                        <textarea rows="3" placeholder="masukan alamat lengkap untuk pengambilan atau pengantaran donasi"
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border border-gray-200 focus:ring-[#256049] focus:border-[#256049]"></textarea>
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Jenis Barang *</label>
                        <select
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border border-gray-200 focus:ring-[#256049] focus:border-[#256049]">

                            <option>Pilih Jenis Barang</option>
                            <option>laptop</option>
                            <option>Mouse</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Deskripsi Barang *</label>
                        <textarea rows="3"
                            class="w-full mt-1 p-3 rounded-lg shadow-sm bg-[#faf6f2] border border-gray-200 focus:ring-[#256049] focus:border-[#256049]"></textarea>
                    </div>

                    <div>
                        <label class="text-sm font-medium text-gray-700">Foto Barang (Opsional)</label>

                        <div onclick="document.getElementById('fotoUpload').click()"
                            class="w-full rounded-lg p-6 flex flex-col items-center justify-center text-gray-600
           bg-[#faf6f2] border border-gray-200 shadow-sm cursor-pointer">

                            {{-- Input File Asli (disembunyikan) --}}
                            <input type="file" id="fotoUpload" name="foto[]" accept="image/png, image/jpeg"
                                class="hidden" multiple>

                            {{-- Upload Icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" viewBox="0 0 24 24">
                                <path fill="#256049"
                                    d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h5.903q.214 0 .357.143t.143.357t-.143.357t-.357.143H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h5.904q.214 0 .357.143t.143.357t-.143.357t-.357.143zm12.444-7.5H9.692q-.213 0-.356-.143T9.192 12t.143-.357t.357-.143h8.368l-1.971-1.971q-.141-.14-.15-.338q-.01-.199.15-.364q.159-.165.353-.168q.195-.003.36.162l2.614 2.613q.242.243.242.566t-.243.566l-2.613 2.613q-.146.146-.347.153t-.366-.159q-.16-.165-.157-.357t.162-.35z" />
                            </svg>

                            <p class="text-sm">Klik untuk upload foto</p>
                            <p class="text-xs text-gray-500">Max 3 foto (JPG, PNG)</p>
                        </div>


                    </div>

                    <button class="w-full bg-[#256049] hover:bg-[#1e4a3e] text-white py-3 rounded-lg font-medium">
                        Kirim Donasi
                    </button>

                </form>
            </div>

            {{-- Ini card kanan gess --}}
            <div class="bg-white rounded-xl  p-8 shadow-sm h-fit">

                <div class="flex flex-col items-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-[#e3f3ea] flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#256049]" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2m0 18a8 8 0 1 1 8-8a8 8 0 0 1-8 8m-1-5l-3-3l1.4-1.4l1.6 1.6l4.6-4.6L17 9l-6 6Z" />
                        </svg>
                    </div>

                    <h2 class="text-2xl font-semibold text-[#1d3f32]">Terima Kasih!</h2>
                    <p class="text-gray-600 text-sm">Donasi Anda telah berhasil didaftarkan</p>
                </div>

                {{-- Box No Referensi --}}
                <div class="border rounded-lg p-4 mb-4">
                    <p class="text-xs text-gray-500">Nomor Referensi</p>
                    <p class="font-semibold text-[#1d3f32]">DN-DFF32800 (id donasi ini tu)</p>
                </div>

                <p class="text-gray-600 text-sm mb-5">
                    Tim kami akan segera menghubungi Anda untuk mengatur jadwal pengambilan atau konfirmasi pengantaran
                    donasi.
                </p>

                <button
                    class="w-full border border-[#256049] text-[#256049] py-3 rounded-lg font-medium mb-3 hover:bg-[#eaf3f0]">
                    Kirim Donasi Lagi
                </button>

                <button class="w-full bg-[#256049] hover:bg-[#1e4a3e] text-white py-3 rounded-lg font-medium">
                    Kembali Ke Beranda
                </button>
            </div>

        </div>
    </section>

</x-layout>
