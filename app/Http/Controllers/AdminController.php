<?php

namespace App\Http\Controllers;

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

        return view('pages.admin.dashboard');
    }
}
