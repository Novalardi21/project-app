<?php

namespace App\Http\Controllers;

class MapController extends Controller
{
    public function index()
    {
        // Hard-coded locations for MVP (10-20 entries). Change coordinates & info as needed.
        $locations = [
            [
                'id' => 1,
                'name' => 'Panti Asuhan Harapan',
                'lat' => -6.200000,
                'lng' => 106.816666,
                'address' => 'Jl. Merdeka No.1, Jakarta',
                'items' => 'Pakaian, Buku',
                'hours' => '09:00 - 16:00',
            ],
            [
                'id' => 2,
                'name' => 'Pos Donasi Bersama',
                'lat' => -6.210000,
                'lng' => 106.820000,
                'address' => 'Jl. Sudirman 12',
                'items' => 'Perabotan kecil, Mainan',
                'hours' => '08:00 - 17:00',
            ],
            // add more locations here...
        ];

        return view('maps.index', compact('locations'));
    }
}
