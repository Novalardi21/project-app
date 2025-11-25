<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Sign In — GreenDrop</title>
</head>

<body class="min-h-screen bg-white flex items-center justify-center" style="font-family: 'Poppins', sans-serif;">

    <!-- CARD BESAR -->
    <div
        class="w-[92%] max-w-[1500px] bg-white rounded-[32px] shadow-2xl border border-gray-100 overflow-hidden
               grid grid-cols-1 md:grid-cols-2 min-h-[660px]">

        {{-- LEFT PANEL (HIJAU) --}}
        <div class="relative bg-[#2F5D50] px-10 py-10 text-white">

            {{-- siluet logo di tengah --}}
            <img src="{{ asset('images/logo.png') }}" alt=""
                class="pointer-events-none select-none opacity-[0.07] w-[420px]
                        absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">

            {{-- logo + nama --}}
            <div class="flex items-center gap-3 mb-6 relative z-10">
                <img src="{{ asset('images/logo.png') }}" alt="GreenDrop" class="h-8 w-auto">
                <span class="font-semibold text-lg tracking-wide">GreenDrop</span>
            </div>

            {{-- judul + deskripsi --}}
            <div class="relative z-10 max-w-md">
                <h2 class="text-3xl font-bold leading-tight">
                    Kolaborasi Donasi <br> Lebih Mudah
                </h2>
                <p class="text-sm mt-4 opacity-95 leading-relaxed">
                    Hubungkan barang layak pakai Anda dengan penerima yang membutuhkan,
                    lewat peta donasi interaktif dan proses yang praktis.
                    Mulai berbagi, wujudkan dampak nyata bersama GreenDrop.
                </p>
            </div>

            {{-- ilustrasi – geser kiri sedikit, agak turun --}}
            <img src="{{ asset('images/sign.png') }}" alt="Donasi Illustration"
                class="absolute w-[340px] md:w-[370px] lg:w-[390px]
                        right-[-1px] md:right-[-1px] bottom-[-40px] lg:bottom-[-48px] drop-shadow-lg">

        </div>

        {{-- RIGHT PANEL (FORM) --}}
        <div class="px-10 py-12 flex flex-col justify-center bg-[#FFFFFF]">
            <div class="max-w-md w-full mx-auto">

                <h2 class="text-2xl md:text-3xl font-semibold text-[#2F5D50] mb-1">
                    Selamat Datang Kembali
                </h2>
                <p class="text-sm text-gray-500 mb-6">
                    Lanjutkan perjalanan kebaikan Anda dan kelola donasi dengan lebih mudah.
                </p>

                {{-- error global (email/password salah) --}}
                @if ($errors->any())
                    <div class="mb-4 rounded-md bg-red-50 border border-red-200 px-3 py-2 text-xs text-red-600">
                        {{ $errors->first() }}
                    </div>
                @endif

                {{-- Form --}}
                <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
                    @csrf

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-xs font-medium text-gray-700 mb-1">Email</label>
                        <input id="email" name="email" type="email" placeholder="jaje@example.com"
                            value="{{ old('email') }}"
                            class="w-full rounded-lg border border-emerald-200 bg-white px-3 py-2 text-sm
                                      focus:outline-none focus:ring-2 focus:ring-[#2F5D50] focus:border-[#2F5D50]">
                    </div>

                    {{-- Password --}}
                    <div class="relative" data-password-wrapper>
                        <label for="password" class="block text-xs font-medium text-gray-700 mb-1">
                            Password
                        </label>

                        <input id="password" name="password" type="password" placeholder="Enter your password"
                            class="w-full rounded-lg border border-emerald-200 bg-white px-3 py-2 text-sm pr-10
                                      focus:outline-none focus:ring-2 focus:ring-[#2F5D50] focus:border-[#2F5D50]"
                            data-password-input>

                        {{-- tombol toggle --}}
                        <button type="button" class="absolute right-3 top-[34px] text-gray-500 hover:text-gray-700"
                            data-toggle-password>
                            {{-- eye open --}}
                            <svg data-eye-open xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>

                            {{-- eye closed --}}
                            <svg data-eye-closed xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.585 10.585A3 3 0 0113.5 13.5M9.88 9.88A3 3 0 0114.12 14.12M6.227 6.227A8.96 8.96 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.043 9.043 0 01-1.928 3.284M6.227 6.227L4.458 4.458M17.773 17.773L19.542 19.542M6.227 6.227A8.96 8.96 0 003.3 12" />
                            </svg>
                        </button>
                    </div>

                    {{-- Remember + forgot --}}
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="remember"
                                class="rounded border-gray-300 text-emerald-600 focus:ring-[#2F5D50]">
                            <span>Remember me</span>
                        </label>
                        <a href="#" class="text-emerald-700 hover:underline">Forgot Password?</a>
                    </div>

                    {{-- Sign in button --}}
                    <button type="submit"
                        class="w-full mt-1 bg-[#2F5D50] hover:bg-[#264d43] text-white text-sm py-2.5 rounded-lg
                                   shadow-md transition">
                        Sign In
                    </button>
                </form>

                {{-- Divider --}}
                <div class="flex items-center gap-3 my-6">
                    <div class="flex-1 h-px bg-gray-200"></div>
                    <span class="text-[11px] text-gray-400">OR</span>
                    <div class="flex-1 h-px bg-gray-200"></div>
                </div>

                {{-- Sign in with Google (nanti bisa disambung Socialite) --}}
                <a href="{{ route('google.redirect') }}"
                    class="w-full border border-gray-300 rounded-lg py-2.5 bg-white hover:bg-gray-50
          flex items-center justify-center gap-2 text-sm text-gray-700 transition">
                    {{-- ikon Google --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <g fill="none" fill-rule="evenodd" clip-rule="evenodd">
                            <path fill="#f44336"
                                d="M7.209 1.061c.725-.081 1.154-.081 1.933 0a6.57 6.57 0 0 1 3.65 1.82a100 100 0 0 0-1.986 1.93q-1.876-1.59-4.188-.734q-1.696.78-2.362 2.528a78 78 0 0 1-2.148-1.658a.26.26 0 0 0-.16-.027q1.683-3.245 5.26-3.86"
                                opacity="0.987" />
                            <path fill="#ffc107"
                                d="M1.946 4.92q.085-.013.161.027a78 78 0 0 0 2.148 1.658A7.6 7.6 0 0 0 4.04 7.99q.037.678.215 1.331L2 11.116Q.527 8.038 1.946 4.92"
                                opacity="0.997" />
                            <path fill="#448aff"
                                d="M12.685 13.29a26 26 0 0 0-2.202-1.74q1.15-.812 1.396-2.228H8.122V6.713q3.25-.027 6.497.055q.616 3.345-1.423 6.032a7 7 0 0 1-.51.49"
                                opacity="0.999" />
                            <path fill="#43a047"
                                d="M4.255 9.322q1.23 3.057 4.51 2.854a3.94 3.94 0 0 0 1.718-.626q1.148.812 2.202 1.74a6.62 6.62 0 0 1-4.027 1.684a6.4 6.4 0 0 1-1.02 0Q3.82 14.524 2 11.116z"
                                opacity="0.993" />
                        </g>
                    </svg>
                    <span>Sign in with Google</span>
                </a>


                <p class="mt-6 text-[11px] md:text-xs text-gray-500 text-center">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-emerald-700 font-medium hover:underline">
                        Daftar
                    </a>
                </p>
            </div>
        </div>
    </div>

    {{-- Toggle show/hide password --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-password-wrapper]').forEach(wrapper => {
                const input = wrapper.querySelector('[data-password-input]');
                const toggle = wrapper.querySelector('[data-toggle-password]');
                const eyeOpen = wrapper.querySelector('[data-eye-open]');
                const eyeClosed = wrapper.querySelector('[data-eye-closed]');

                if (!input || !toggle) return;

                toggle.addEventListener('click', () => {
                    const isPassword = input.type === 'password';
                    input.type = isPassword ? 'text' : 'password';

                    if (eyeOpen && eyeClosed) {
                        eyeOpen.classList.toggle('hidden', !isPassword);
                        eyeClosed.classList.toggle('hidden', isPassword);
                    }
                });
            });
        });
    </script>

</body>

</html>
