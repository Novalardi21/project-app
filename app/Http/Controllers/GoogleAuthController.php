<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    /**
     * Redirect user ke halaman login Google
     */
    public function redirect()
    {
        // kalau sering error "state mismatch", bisa pakai ->stateless() di sini juga
        return Socialite::driver('google')->redirect();
    }

    /**
     * Callback dari Google setelah user login.
     */
    public function callback()
    {
        try {
            // pakai stateless biar aman dari masalah session di local
            $driver = Socialite::driver('google');
            /** @var \Laravel\Socialite\Two\AbstractProvider $driver */
            $googleUser = $driver->stateless()->user();
        } catch (\Throwable $e) {
            // dd($e->getMessage()); // kalau mau debug
            return redirect()
                ->route('login')
                ->with('error', 'Gagal login dengan Google, silakan coba lagi.');
        }

        // Nama provider yang kita simpan di DB
        $providerName = 'google';

        // 1. Coba cari user berdasarkan provider + provider_id
        $user = User::where('provider', $providerName)
            ->where('provider_id', $googleUser->getId())
            ->first();

        // 2. Kalau belum ada, cek berdasarkan email (mungkin pernah daftar manual)
        if (! $user && $googleUser->getEmail()) {
            $user = User::where('email', $googleUser->getEmail())->first();
        }

        // 3. Kalau tetap belum ada -> buat user baru
        if (! $user) {
            $user = User::create([
                'name' => $googleUser->getName() ?? $googleUser->getNickname() ?? 'User Google',
                'email' => $googleUser->getEmail(),
                'provider' => $providerName,
                'provider_id' => $googleUser->getId(),
                'avatar' => trim($googleUser->getAvatar() ?? ''),
                'password' => Hash::make(Str::random(40)), // password random
                'email_verified_at' => now(), // opsional: anggap email Google valid
            ]);
        } else {
            // 4. Update data provider kalau user lama belum punya
            $user->update([
                'provider' => $user->provider ?: $providerName,
                'provider_id' => $user->provider_id ?: $googleUser->getId(),
                'avatar' => $googleUser->getAvatar() ?: $user->avatar,
            ]);
        }

        // 5. Login-kan user
        Auth::login($user, true); // true = remember me

        // 6. Arahkan ke landing page
        return redirect()->intended(route('landing'));
    }
}
