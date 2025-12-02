{{-- resources/views/maps/index.blade.php --}}
<x-layout>
    <div class="min-h-screen bg-[#FBF8F5]">

        {{-- HERO (background lokal + judul di atas grid) --}}
        <div class="max-w-6xl mx-auto px-6 pt-10 pb-4 mt-20">
            <h1 class="text-3xl md:text-4xl font-extrabold text-emerald-800 drop-shadow-sm leading-tight">
                Peta Titik Donasi
            </h1>
            <p class="text-sm text-emerald-700/80 mt-1">
                Temukan lokasi donasi terdekat dari Anda
            </p>
        </div>

        {{-- MAIN CONTENT (grid) --}}
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                {{-- SIDEBAR --}}
                <aside class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h2 class="text-lg font-semibold text-emerald-800 mb-3">Titik Donasi</h2>

                        <div class="space-y-4 max-h-[66vh] overflow-auto pr-2">
                            @foreach ($locations as $loc)
                                <div class="donation-card flex gap-3 p-4 border border-emerald-50 rounded-lg hover:shadow-lg transition bg-white"
                                    data-lat="{{ $loc->lat }}" data-lng="{{ $loc->lng }}">
                                    <div
                                        class="flex-shrink-0 w-11 h-11 rounded-lg bg-emerald-50 flex items-center justify-center text-emerald-800">
                                        <!-- pin icon -->
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"
                                                fill="#14532d" />
                                            <circle cx="12" cy="9" r="2.2" fill="#fff" />
                                        </svg>
                                    </div>

                                    <div class="flex-1">
                                        <div class="font-medium text-sm text-emerald-900">{{ $loc->name }}</div>
                                        <div class="text-xs text-gray-500 mt-1">{{ $loc->address }}</div>

                                        <div class="mt-3 flex items-center justify-between text-xs text-gray-500">
                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-400" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2a10 10 0 1 0 .001 20.001A10 10 0 0 0 12 2zm.5 5v5l4 2"
                                                        stroke="#94a3b8" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>{{ $loc->hours ?? '—' }}</span>
                                            </div>

                                            <div class="flex items-center gap-2">
                                                <svg class="w-4 h-4 text-gray-400" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.13 19.5 19.5 0 0 1-6-6 19.86 19.86 0 0 1-3.13-8.63A2 2 0 0 1 4.09 2h3a2 2 0 0 1 2 1.72c.12.96.35 1.9.7 2.78a2 2 0 0 1-.45 2.11L8.09 9.91a14 14 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.11-.45c.88.35 1.82.58 2.78.7A2 2 0 0 1 22 16.92z"
                                                        stroke="#94a3b8" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <span>{{ $loc->phone ?? '—' }}</span>
                                            </div>
                                        </div>

                                        <div class="mt-3 flex flex-wrap gap-2">
                                            @if (!empty($loc->items))
                                                @foreach (explode(',', $loc->items) as $badge)
                                                    <span
                                                        class="text-xs bg-emerald-50 text-emerald-800 px-2 py-1 rounded-full">{{ trim($badge) }}</span>
                                                @endforeach
                                            @endif
                                        </div>

                                        @if (!empty($loc->note))
                                            <div class="mt-3 text-xs text-gray-400">{{ $loc->note }}</div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="mt-6">
                            <button id="locateBtn"
                                class="w-full bg-emerald-700 hover:bg-emerald-800 text-white py-2 rounded-md shadow">Temukan
                                Lokasiku</button>
                            <p id="locStatus" class="text-sm text-gray-500 mt-3">Klik tombol untuk membagikan lokasi
                                (HTTPS / localhost).</p>
                        </div>
                    </div>
                </aside>

                {{-- MAP --}}
                <main class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-md p-4">
                        <div id="map" class="w-full" style="height: 66vh; min-height:420px; border-radius:12px;">
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    {{-- Leaflet assets --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <style>
        .donation-card {
            background: #fff;
        }

        .leaflet-top.leaflet-left {
            top: 10px !important;
            left: 10px !important;
        }

        #map {
            box-shadow: 0 8px 26px rgba(16, 24, 32, 0.08);
            border-radius: 12px;
            border: 6px solid rgba(255, 255, 255, 0.9);
        }

        .leaflet-popup-content-wrapper {
            border-radius: 10px;
        }
    </style>

    {{-- Map script (sama seperti sebelumnya) --}}
    <script>
        const LOCATIONS = @json($locations);
        const defaultCenter = LOCATIONS.length ? [LOCATIONS[0].lat, LOCATIONS[0].lng] : [-6.200000, 106.816666];
        const map = L.map('map', {
            zoomControl: true
        }).setView(defaultCenter, 13);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; OpenStreetMap contributors & CartoDB',
            maxZoom: 19
        }).addTo(map);

        const greenIcon = L.icon({
            iconUrl: 'data:image/svg+xml;utf8,' + encodeURIComponent(
                `<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path fill="#16a34a" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.2" fill="#fff"/></svg>`
            ),
            iconSize: [36, 36],
            iconAnchor: [18, 36],
            popupAnchor: [0, -36]
        });

        const markers = [];
        LOCATIONS.forEach(loc => {
            const m = L.marker([loc.lat, loc.lng], {
                icon: greenIcon
            }).addTo(map);
            const popupHtml =
                `<div style="min-width:200px"><strong style="color:#065f46">${loc.name}</strong><br/><small style="color:#6b7280">${loc.address}</small><br/><small style="color:#6b7280">Menerima: ${loc.items ?? '-'}</small></div>`;
            m.bindPopup(popupHtml);
            markers.push({
                marker: m,
                lat: loc.lat,
                lng: loc.lng
            });
        });

        document.querySelectorAll('[data-lat]').forEach(el => {
            el.addEventListener('click', () => {
                const lat = parseFloat(el.dataset.lat);
                const lng = parseFloat(el.dataset.lng);
                map.setView([lat, lng], 15, {
                    animate: true
                });
                const found = markers.find(x => Math.abs(x.lat - lat) < 0.00001 && Math.abs(x.lng - lng) <
                    0.00001);
                if (found) found.marker.openPopup();
            });
        });

        let userMarker = null,
            userCircle = null;

        function onLocationFound(e) {
            const latlng = e.latlng || L.latLng(e.latitude, e.longitude);
            const accuracy = e.accuracy || 30;
            if (userMarker) map.removeLayer(userMarker);
            if (userCircle) map.removeLayer(userCircle);

            userMarker = L.circleMarker(latlng, {
                radius: 8,
                color: '#2563eb',
                fillColor: '#2563eb',
                fillOpacity: 1,
                weight: 2
            }).addTo(map).bindPopup('Lokasi Anda').openPopup();
            userCircle = L.circle(latlng, {
                radius: accuracy,
                color: '#60a5fa',
                fillColor: '#bfdbfe',
                fillOpacity: 0.12
            }).addTo(map);

            map.setView(latlng, 15);
            document.getElementById('locStatus').textContent = 'Lokasi terdeteksi (akurasi ≈ ' + Math.round(accuracy) +
                ' m).';
        }

        function onLocationError(e) {
            document.getElementById('locStatus').textContent = 'Gagal mendapatkan lokasi: ' + e.message;
        }

        document.getElementById('locateBtn').addEventListener('click', () => {
            if (!navigator.geolocation) {
                document.getElementById('locStatus').textContent = 'Browser Anda tidak mendukung Geolocation.';
                return;
            }
            document.getElementById('locStatus').textContent = 'Meminta izin lokasi...';
            map.locate({
                setView: false,
                maxZoom: 16,
                enableHighAccuracy: true
            });
            map.once('locationfound', onLocationFound);
            map.once('locationerror', onLocationError);
        });

        if (markers.length) setTimeout(() => markers[0].marker.openPopup(), 300);
    </script>
</x-layout>
