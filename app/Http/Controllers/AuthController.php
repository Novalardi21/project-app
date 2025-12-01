<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function index()
    {
        // form login
        return view('pages.signin.login');
    }

    public function showRegisterForm()
    {
        // form register
        return view('pages.signin.register');
    }

    public function login(Request $request)
    {
        // validasi basic
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember');

        // cari user berdasarkan email
        $user = User::where('email', $data['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');
        }

        $inputPassword = $data['password'];
        $storedPassword = $user->password;
        $valid = false;

        // 1) coba treat sebagai hash bcrypt (kalau memang hash)
        try {
            // kalau ini memang hash bcrypt normal, Hash::check akan jalan
            if (Hash::check($inputPassword, $storedPassword)) {
                $valid = true;
            }
        } catch (\Throwable $e) {
            // kalau bukan bcrypt, Hash::check lempar error → kita lanjut cek plaintext
        }

        // 2) kalau belum valid, cek sebagai plaintext
        if (!$valid && $storedPassword === $inputPassword) {
            $valid = true;

            // upgrade ke bcrypt supaya next login aman
            $user->update([
                'password' => Hash::make($inputPassword),
            ]);
        }

        // 3) kalau tetap tidak valid → gagal login
        if (!$valid) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');
        }

        // 4) password valid → login manual, tidak pakai Auth::attempt
        Auth::login($user, $remember);
        $request->session()->regenerate();

        // simpan role di session
        Session::put('role', $user->role);

        // redirect berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->route('admin.index');
        }

        return redirect()->intended(route('landing'));
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', Password::min(8)], // bisa tambahkan ->letters()->numbers() dll
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('landing');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
