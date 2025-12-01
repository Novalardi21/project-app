<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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

        return view('pages.admin.dashboard');
    }

    public function HalamanTitikDonasi()
    {
        if (! Session::has('role') || ! Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $role = Session::get('role');
        if (! in_array($role, ['admin'])) {
            abort(403, 'Akses ditolak');
        }

        return view('pages.admin.titik-donasi');
    }

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
