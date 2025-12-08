<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function HalamanAdmin()
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $role = Session::get('role');
        if (! in_array($role, ['admin'])) {
            abort(403, 'Akses ditolak');
        }
        $totalDonasi = Donation::count();
        $barangTersalurkan = Donation::where('status', 'selesai')->count();
        $donaturAktif = Donation::distinct('user_id')->count('user_id');
        $penerimaManfaat = 340; // Sementara angka statis dulu pang
        $latestDonations = Donation::with('user')->latest()->take(5)->get();
        $totalTitikDonasi = DonationLocation::count();

        return view('pages.admin.dashboard', compact(
            'totalDonasi',
            'barangTersalurkan',
            'donaturAktif',
            'penerimaManfaat',
            'latestDonations',
            'totalTitikDonasi'
        ));
    }

    public function HalamanTitikDonasi(Request $request)
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $role = Session::get('role');
        if (! in_array($role, ['admin'])) {
            abort(403, 'Akses ditolak');
        }

        // Search
        $search = $request->get('search');

        $query = DonationLocation::query()->orderBy('id');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // Pagination
        $locations = $query->paginate(10)->withQueryString();
        $page = $locations->currentPage();
        $perPage = $locations->perPage();
        $totalPages = $locations->lastPage();

        return view('pages.admin.titik-donasi', compact(
            'locations',
            'search',
            'page',
            'perPage',
            'totalPages'
        ));
    }

    public function HalamanTambahTitikDonasi()
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        if (Session::get('role') !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        return view('pages.admin.tambah-titik-donasi');
    }

    public function StoreDonasi(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'address' => 'required|string',
            'hours' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'items' => 'required|string',
            'note' => 'nullable|string',
        ]);

        // Simpan ke database
        DonationLocation::create($validated);

        return redirect()
            ->route('admin.titik-donasi')
            ->with('success', 'Titik donasi berhasil ditambahkan!');
    }

    public function HalamanEditDonasi($id)
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }

        if (Session::get('role') !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        $donasi = DonationLocation::findOrFail($id);

        return view('pages.admin.edit-titik-donasi', compact('donasi'));
    }

    public function UpdateDonasi(Request $request, $id)
    {
        $donasi = DonationLocation::findOrFail($id);

        $donasi->update([
            'name' => $request->name,
            'hours' => $request->hours,
            'phone' => $request->phone,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'items' => $request->items,
            'note' => $request->note,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.titik-donasi')->with('success', 'Titik Donasi berhasil diperbarui!');
    }

    public function HalamanDonasi(Request $request)
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $role = Session::get('role');
        if (! in_array($role, ['admin'])) {
            abort(403, 'Akses ditolak');
        }

        // Search
        $search = $request->get('search');

        $query = Donation::query()
            ->with(['user', 'location']) // kalau relasi sudah dibuat
            ->orderBy('id', 'desc');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('donor_name', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%")
                    ->orWhere('item_type', 'like', "%{$search}%")
                    ->orWhere('delivery_type', 'like', "%{$search}%");
            });
        }

        // Pagination
        $donations = $query->paginate(10)->withQueryString();

        return view('pages.admin.donasi', compact(
            'donations',
            'search',
        ));
    }

    public function HalamanDetailDonation($id)
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }

        if (Session::get('role') !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        // ambil data dari tabel donations
        $donation = Donation::findOrFail($id);

        return view('pages.admin.detail-donasi', compact('donation'));
    }

    public function UpdateDonasiStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai,dibatalkan',
        ]);

        $donation = Donation::findOrFail($id);
        $donation->status = $request->status;
        $donation->save();

        return back()->with('success', 'Status donasi berhasil diperbarui.');
    }

    // This crud edit donasi

    public function HalamanPengguna(Request $request)
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        if (Session::get('role') !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        $search = $request->input('search');

        // Query: hanya user role "user"
        $users = User::where('role', 'user')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'LIKE', "%$search%")
                        ->orWhere('email', 'LIKE', "%$search%");
                });
            })
            ->orderBy('id', 'desc')
            ->get();

        return view('pages.admin.pengguna', compact('users', 'search'));
    }

    public function toggleStatus($id)
    {
        if (! Session::has('role') || Session::get('role') !== 'admin') {
            abort(403, 'Akses ditolak');
        }

        $user = User::findOrFail($id);

        if ($user->role === 'admin') {
            return back()->with('error', 'Tidak dapat mengubah status admin');
        }

        // Toggle status
        $user->status = $user->status === 'aktif' ? 'nonaktif' : 'aktif';
        $user->save();

        return back()->with('success', 'Status pengguna berhasil diperbarui');
    }
}
