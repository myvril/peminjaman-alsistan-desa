<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Masuk | Sistem Peminjaman Alsintan Desa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Tailwind via CDN supaya langsung jalan. Untuk produksi, ganti dengan Vite + Tailwind. --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'] },
                    colors: {
                        forest: { 950: '#063a22', 900: '#0b4a2c', 800: '#115c38', 700: '#1a7048' },
                        mint: { 100: '#d9f7e4', 300: '#a8efc3' },
                        ink: '#1e2433',
                        field: '#eef1fb',
                    },
                },
            },
        };
    </script>
</head>

<body class="min-h-screen bg-white font-sans text-ink antialiased">
<div class="flex min-h-screen">

    {{-- ============ PANEL KIRI ============ --}}
    <aside class="relative hidden w-[44%] max-w-[560px] shrink-0 flex-col justify-between overflow-hidden bg-gradient-to-br from-forest-800 via-forest-900 to-forest-950 px-12 py-12 text-white lg:flex">
        <div class="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full border border-white/10"></div>
        <div class="pointer-events-none absolute -bottom-10 -right-10 h-48 w-48 rounded-full border border-white/10"></div>

        <div class="relative">
            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-mint-300 text-forest-900">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6.5" cy="17" r="3.5"/><circle cx="18" cy="18" r="2"/><path d="M3 17V9h7l2 4h4V6h3v9"/></svg>
                </div>
                <div class="leading-tight">
                    <p class="text-[11px] font-medium tracking-[0.18em] text-white/70">PORTAL RESMI ALSINTAN</p>
                    <p class="text-sm font-semibold">Koperasi Tani Desa Mandiri</p>
                </div>
            </div>

            {{-- Badge musim tanam --}}
            <span class="mt-14 inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-[11px] font-medium text-white/80">
                <span class="h-1.5 w-1.5 rounded-full bg-mint-300"></span>
                Musim Tanam Rendeng 2025 Aktif
            </span>

            <h1 class="mt-6 text-5xl font-extrabold leading-[1.1] tracking-tight">
                Sistem Peminjaman Alsintan Desa
            </h1>

            <p class="mt-6 max-w-md text-[15px] leading-relaxed text-white/75">
                Pengelolaan armada mesin tani desa yang transparan, terjadwal, dan anti-bentrok demi ketahanan pangan seluruh warga tani.
            </p>

            {{-- Poin keunggulan --}}
            <ul class="mt-9 space-y-3">
                <li class="flex gap-4 rounded-xl bg-white/[0.07] p-4">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10">
                        <svg class="h-5 w-5 text-mint-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 7h14M5 7l-3 8a4 4 0 0 0 6 0L5 7zm14 0-3 8a4 4 0 0 0 6 0l-3-8z"/></svg>
                    </span>
                    <div>
                        <p class="text-sm font-semibold">Transparansi Kuota &amp; Tarif Sewa</p>
                        <p class="mt-1 text-[13px] leading-relaxed text-white/65">Tarif sewa bersubsidi desa standar Poktan, terbuka tanpa biaya siluman.</p>
                    </div>
                </li>
                <li class="flex gap-4 rounded-xl bg-white/[0.07] p-4">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10">
                        <svg class="h-5 w-5 text-mint-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                    </span>
                    <div>
                        <p class="text-sm font-semibold">Jadwal Real-Time Bebas Tumpang Tindih</p>
                        <p class="mt-1 text-[13px] leading-relaxed text-white/65">Plot giliran olah lahan otomatis terkoordinasi antar-dusun secara presisi.</p>
                    </div>
                </li>
                <li class="flex gap-4 rounded-xl bg-white/[0.07] p-4">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-white/10">
                        <svg class="h-5 w-5 text-mint-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m9 12 2 2 4-4"/></svg>
                    </span>
                    <div>
                        <p class="text-sm font-semibold">Dukungan Operator &amp; BBM Resmi</p>
                        <p class="mt-1 text-[13px] leading-relaxed text-white/65">Didampingi teknisi UPJA terlatih dan pasokan solar resmi khusus tani.</p>
                    </div>
                </li>
            </ul>
        </div>

        {{-- Footer panel kiri --}}
        <div class="relative mt-10 flex items-center gap-8 border-t border-white/15 pt-6 text-[13px]">
            <div class="flex items-center gap-2 font-medium">
                <svg class="h-4 w-4 text-mint-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="m9 12 2 2 4-4"/></svg>
                <span>Pemerintah Desa<br>Makmur Agraris</span>
            </div>
            <p class="text-white/55">Dinas Pertanian &amp;<br>Ketahanan Pangan</p>
        </div>
    </aside>



    {{-- ============ PANEL KANAN ============ --}}
    <main class="flex flex-1 flex-col px-6 py-8 sm:px-12 lg:px-16">
        {{-- Bar atas --}}
        <div class="mx-auto flex w-full max-w-[560px] flex-wrap items-center justify-between gap-2 text-[11px] font-medium">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-field px-3 py-1 text-slate-600">
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>
                Portal Layanan Digital Warga Desa
            </span>
        </div>

        <div class="mx-auto my-auto w-full max-w-[560px] py-10">
            {{-- Tab --}}
            <div class="grid grid-cols-2 gap-1 rounded-xl bg-field p-1 text-sm font-medium">
                <a href="{{ route('login') }}" aria-current="page"
                   class="flex items-center justify-center gap-2 rounded-lg bg-white px-4 py-3 text-ink shadow-sm">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M15 12H3"/></svg>
                    Masuk (Petani / Pengelola)
                </a>
                <a href="{{ route('register') }}"
                   class="flex items-center justify-center gap-2 rounded-lg px-4 py-3 text-slate-500 transition hover:text-ink">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="4"/><path d="M2 21a7 7 0 0 1 14 0M19 8v6M16 11h6"/></svg>
                    Daftar Akun Petani
                </a>
            </div>

            <h2 class="mt-9 text-3xl font-bold tracking-tight">Selamat Datang Kembali</h2>
            <p class="mt-2 text-[15px] leading-relaxed text-slate-500">
                Masukkan kredensial akun terdaftar untuk memeriksa jadwal atau meminjam alsintan.
            </p>

            {{-- Info petugas --}}
            <div class="mt-6 flex gap-3 rounded-xl bg-field p-4 text-[13px] leading-relaxed text-slate-600">
                <svg class="mt-0.5 h-4 w-4 shrink-0 text-forest-800" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 16v-4M12 8h.01"/></svg>
                <p><strong class="font-semibold text-ink">Informasi Petugas UPJA:</strong> Pemdes dan operator wajib masuk menggunakan email kedinasan terverifikasi oleh Kepala Dusun.</p>
            </div>

            {{-- Pesan sukses / error --}}
            @if (session('status'))
                <div class="mt-5 rounded-xl bg-mint-100 px-4 py-3 text-sm text-forest-900" role="status">{{ session('status') }}</div>
            @endif
            @if ($errors->any())
                <div class="mt-5 rounded-xl bg-red-50 px-4 py-3 text-sm text-red-700" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            {{-- Form login --}}
            <form method="POST" action="{{ url('/login') }}" class="mt-6">
                @csrf

                <label for="login" class="block text-sm font-semibold">Alamat Email atau Nomor HP</label>
                <div class="relative mt-2">
                    <svg class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                    <input id="login" name="login" type="text" value="{{ old('login') }}" required autofocus autocomplete="username"
                           placeholder="nama@email.com atau 0812xxxxxxx"
                           class="w-full rounded-xl border border-transparent bg-field py-3.5 pl-11 pr-4 text-sm placeholder:text-slate-400 focus:border-forest-700 focus:bg-white focus:outline-none focus:ring-2 focus:ring-forest-700/20 @error('login') border-red-400 @enderror">
                </div>

                <div class="mt-5 flex items-center justify-between">
                    <label for="password" class="text-sm font-semibold">Kata Sandi</label>
                    <a href="#" class="text-sm font-semibold text-forest-800 hover:underline">Lupa Kata Sandi?</a>
                </div>
                <div class="relative mt-2">
                    <svg class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                           placeholder="Masukkan kata sandi Anda"
                           class="w-full rounded-xl border border-transparent bg-field py-3.5 pl-11 pr-12 text-sm placeholder:text-slate-400 focus:border-forest-700 focus:bg-white focus:outline-none focus:ring-2 focus:ring-forest-700/20">
                    <button type="button" id="togglePassword" aria-label="Tampilkan kata sandi"
                            class="absolute right-3 top-1/2 -translate-y-1/2 rounded-md p-1.5 text-slate-500 hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-forest-700/40">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                    </button>
                </div>

                <label class="mt-5 flex cursor-pointer items-center gap-2.5 text-sm text-slate-600">
                    <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-forest-800 focus:ring-forest-700">
                    Ingat saya di perangkat ini
                </label>

                <button type="submit"
                        class="mt-6 flex w-full items-center justify-center gap-2 rounded-xl bg-forest-900 px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-forest-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-forest-700 focus-visible:ring-offset-2">
                    Masuk ke Portal Alsintan
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </button>
            </form>

            {{-- Kategori pengguna --}}
            <div class="mt-8 border-t border-slate-200 pt-6 text-center">
                <p class="text-xs font-semibold tracking-wide text-slate-500">KATEGORI PENGGUNA LAYANAN TERINTEGRASI</p>
                <div class="mt-3 flex flex-wrap items-center justify-center gap-2 text-[11px] font-semibold">
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-mint-100 px-3 py-1 text-forest-900">
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></svg>
                        Petani Terdaftar
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-indigo-100 px-3 py-1 text-indigo-900">
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><circle cx="17" cy="9" r="2.5"/><path d="M2 20a7 7 0 0 1 14 0M16 15a5 5 0 0 1 6 5"/></svg>
                        Kelompok Tani (Poktan)
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-full bg-orange-100 px-3 py-1 text-orange-900">
                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="4"/><path d="M2 21a7 7 0 0 1 14 0M19 8v6M16 11h6"/></svg>
                        Operator UPJA Desa
                    </span>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Tampilkan / sembunyikan kata sandi
    const pw = document.getElementById('password');
    document.getElementById('togglePassword').addEventListener('click', function () {
        const show = pw.type === 'password';
        pw.type = show ? 'text' : 'password';
        this.setAttribute('aria-label', show ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
    });
</script>
</body>
</html>