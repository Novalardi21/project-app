<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green Drop — Temukan Lokasiku</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind cepat -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        #map {
            height: 80vh;
            min-height: 420px;
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-gray-50 text-slate-800">
    <div class="max-w-6xl mx-auto p-4">
        <header class="flex items-center justify-between mb-4">
            <div>
                <h1 class="text-2xl font-bold">Green Drop</h1>
                <p class="text-sm text-gray-600">Temukan lokasi Anda — peta gratis (Leaflet + OSM)</p>
            </div>
            <div>
                <a href="{{ route('maps.index') }}"
                    class="inline-block bg-green-600 text-white px-4 py-2 rounded">Refresh</a>
            </div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <!-- Sidebar -->
            <aside class="lg:col-span-1 bg-white rounded shadow p-4">
                <h2 class="font-semibold mb-2">Titik Donasi</h2>
                <div class="space-y-2">
                    @foreach ($locations as $loc)
                        <div class="p-2 border rounded hover:bg-green-50 cursor-pointer" data-lat="{{ $loc['lat'] }}"
                            data-lng="{{ $loc['lng'] }}">
                            <div class="font-medium">{{ $loc['name'] }}</div>
                            <div class="text-xs text-gray-600">{{ $loc['address'] }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    <button id="locateBtn" class="w-full bg-blue-600 text-white py-2 rounded">Temukan Lokasiku</button>
                    <p id="locStatus" class="text-sm text-gray-600 mt-2">Klik tombol untuk membagikan lokasi (HTTPS /
                        localhost).</p>
                </div>
            </aside>

            <!-- Map -->
            <main class="lg:col-span-2 bg-white rounded shadow p-2">
                <div id="map"></div>
            </main>
        </div>
    </div>

    <script>
        // Pass locations from PHP
        const LOCATIONS = @json($locations);
    </script>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        // Inisialisasi peta
        const defaultCenter = LOCATIONS.length ? [LOCATIONS[0].lat, LOCATIONS[0].lng] : [-6.200000, 106.816666];
        const map = L.map('map').setView(defaultCenter, 13);

        // Tile OpenStreetMap (gratis)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // (Opsional) Tampilkan titik donasi — kalau kamu benar2 mau hanya lokasi user, hapus blok ini
        const donationLayer = L.layerGroup().addTo(map);
        LOCATIONS.forEach(loc => {
            const m = L.marker([loc.lat, loc.lng]).addTo(donationLayer);
            m.bindPopup(
                `<strong>${loc.name}</strong><br>${loc.address}<br><small>Menerima: ${loc.items ?? '-'}</small>`
                );
        });

        // Marker & circle untuk lokasi pengguna
        let userMarker = null;
        let userCircle = null;

        function onLocationFound(e) {
            const latlng = e.latlng;
            const accuracy = e.accuracy || 20;

            // hapus marker sebelumnya jika ada
            if (userMarker) map.removeLayer(userMarker);
            if (userCircle) map.removeLayer(userCircle);

            userMarker = L.marker(latlng).addTo(map).bindPopup('Lokasi Anda').openPopup();
            userCircle = L.circle(latlng, {
                radius: accuracy
            }).addTo(map);

            map.setView(latlng, 15);
            document.getElementById('locStatus').textContent = 'Lokasi terdeteksi (akurasi ≈ ' + Math.round(accuracy) +
                ' m).';
        }

        function onLocationError(e) {
            document.getElementById('locStatus').textContent = 'Gagal mendapatkan lokasi: ' + e.message;
        }

        // Tombol cari lokasi
        document.getElementById('locateBtn').addEventListener('click', () => {
            if (!navigator.geolocation) {
                document.getElementById('locStatus').textContent = 'Browser Anda tidak mendukung Geolocation.';
                return;
            }

            document.getElementById('locStatus').textContent = 'Meminta izin lokasi...';

            // Leaflet locate (pembungkus navigator.geolocation)
            map.locate({
                setView: false,
                maxZoom: 16,
                enableHighAccuracy: true
            });

            map.once('locationfound', onLocationFound);
            map.once('locationerror', onLocationError);
        });

        // Klik pada sidebar -> center ke lokasi donasi
        document.querySelectorAll('[data-lat]').forEach(el => {
            el.addEventListener('click', () => {
                const lat = parseFloat(el.dataset.lat);
                const lng = parseFloat(el.dataset.lng);
                map.setView([lat, lng], 15);
            });
        });
    </script>
</body>

</html>
