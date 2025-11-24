<?php

namespace App\Http\Controllers;

class MapController extends Controller
{
    public function index()
    {
        $locations = [
            [
                'id' => 1,
                'name' => 'Yayasan Peduli Sesama Jakarta',
                'lat' => -6.200000,
                'lng' => 106.816666,
                'address' => 'Jl. Sudirman No. 45, Jakarta Pusat',
                'hours' => 'Senin–Jumat, 09:00–17:00',
                'phone' => '021-12345678',
                'items' => 'Pakaian, Buku, Mainan',
                'note' => 'Terima barang layak pakai dalam kondisi bersih',
            ],
            [
                'id' => 2,
                'name' => 'Rumah Zakat Cabang Bekasi',
                'lat' => -6.210000,
                'lng' => 106.820000,
                'address' => 'Jl. Ahmad Yani No. 123, Bekasi',
                'hours' => 'Sabtu, 08:00–16:00',
                'phone' => '021-87654321',
                'items' => 'Pakaian, Perabotan, Elektronik',
                'note' => 'Hubungi dulu sebelum antarkan barang besar',
            ],
        ];

        return view('pages.maps.index', compact('locations'));
    }
}
