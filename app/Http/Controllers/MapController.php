<?php

namespace App\Http\Controllers;
use App\Models\DonationLocation;

class MapController extends Controller
{
    public function index()
    {
        $locations = DonationLocation::select('id', 'name', 'lat', 'lng', 'address', 'hours', 'phone', 'items', 'note')->get();

        return view('pages.maps.index', compact('locations'));
    }
}
