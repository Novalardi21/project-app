<?php

namespace App\Http\Controllers;

use App\Models\DonationLocation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MapController extends Controller
{
    public function index()
    {
        $locations = DonationLocation::select('id', 'name', 'lat', 'lng', 'address', 'hours', 'phone', 'items', 'note')->get();

        return view('pages.maps.index', compact('locations'));
    }

    public function donateToLocation($locationId)
    {
        // pastikan lokasi ada
        $location = DonationLocation::findOrFail($locationId);

        // Kalau belum login, tendang ke halaman login + pesan
        if (! Auth::check()) {
            // simpan id lokasi biar bisa dipakai setelah login kalau mau
            Session::put('intended_location_id', $location->id);

            return redirect()
                ->route('login')
                ->with('error', 'Silakan login terlebih dahulu untuk mengirim donasi.');
        }

        // Simpan lokasi yang dipilih ke session (opsional, biar form donasi bisa pre-fill)
        Session::put('selected_location_id', $location->id);

        // Arahkan ke halaman form donasi
        // sesuaikan dengan nama route donasi kamu
        return redirect()->route('donation.index', ['location' => $location->id]);
    }
}
