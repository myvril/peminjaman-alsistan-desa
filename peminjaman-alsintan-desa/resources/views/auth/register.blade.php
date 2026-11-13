<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Akun Petani | Sistem Peminjaman Alsintan Desa</title>

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

@php
    // Kelas input dipakai berulang
    $input = 'w-full rounded-xl border border-transparent bg-field py-3.5 pl-11 pr-4 text-sm placeholder:text-slate-400 focus:border-forest-700 focus:bg-white focus:outline-none focus:ring-2 focus:ring-forest-700/20';
    $icon  = 'pointer-events-none absolute left-4 h-4 w-4 text-slate-400';
@endphp

<body class="min-h-screen bg-white font-sans text-ink antialiased">
<div class="flex min-h-screen">

    {{-- ============ PANEL KIRI ============ --}}
    <aside class="relative hidden w-[44%] max-w-[560px] shrink-0 flex-col justify-between overflow-hidden bg-gradient-to-br from-forest-800 via-forest-900 to-forest-950 px-12 py-12 text-white lg:flex">
        <div class="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full border border-white/10"></div>
        <div class="pointer-events-none absolute -bottom-10 -right-10 h-48 w-48 rounded-full border border-white/10"></div>

        <div class="relative">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-mint-300 text-forest-900">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6.5" cy="17" r="3.5"/><circle cx="18" cy="18" r="2"/><path d="M3 17V9h7l2 4h4V6h3v9"/></svg>
                </div>
                <div class="leading-tight">
                    <p class="text-[11px] font-medium tracking-[0.18em] text-white/70">PORTAL RESMI ALSINTAN</p>
                    <p class="text-sm font-semibold">Koperasi Tani Desa Mandiri</p>
                </div>
            </div>

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
        <div class="mx-auto flex w-full max-w-[560px] flex-wrap items-center justify-between gap-2 text-[11px] font-medium">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-field px-3 py-1 text-slate-600">
                <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg>
                Portal Layanan Digital Warga Desa
            </span>
            <span class="inline-flex items-center gap-1.5 text-slate-600">
                <svg class="h-4 w-4 text-forest-800" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 14v-2a9 9 0 0 1 18 0v2"/><path d="M21 15a2 2 0 0 1-2 2h-1v-5h1a2 2 0 0 1 2 2zM3 15a2 2 0 0 0 2 2h1v-5H5a2 2 0 0 0-2 2z"/></svg>
                Posko Alsintan: 0812-4567-890
            </span>
        </div>

        <div class="mx-auto my-auto w-full max-w-[560px] py-10">
            {{-- Tab --}}
            <div class="grid grid-cols-2 gap-1 rounded-xl bg-field p-1 text-sm font-medium">
                <a href="{{ url('/login') }}"
                   class="flex items-center justify-center gap-2 rounded-lg px-4 py-3 text-slate-500 transition hover:text-ink">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M15 12H3"/></svg>
                    Masuk (Petani / Pengelola)
                </a>
                <a href="{{ url('/register') }}" aria-current="page"
                   class="flex items-center justify-center gap-2 rounded-lg bg-white px-4 py-3 text-ink shadow-sm">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="4"/><path d="M2 21a7 7 0 0 1 14 0M19 8v6M16 11h6"/></svg>
                    Daftar Akun Petani
                </a>
            </div>

            <h2 class="mt-9 text-3xl font-bold tracking-tight">Buat Akun Petani</h2>
            <p class="mt-2 text-[15px] leading-relaxed text-slate-500">
                Isi data diri Anda untuk mulai mengajukan peminjaman alsintan desa.
            </p>

            <div class="mt-6 flex gap-3 rounded-xl bg-field p-4 text-[13px] leading-relaxed text-slate-600">
                <svg class="mt-0.5 h-4 w-4 shrink-0 text-forest-800" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 16v-4M12 8h.01"/></svg>
                <p><strong class="font-semibold text-ink">Khusus petani:</strong> Pendaftaran ini hanya untuk akun petani. Akun pengelola disiapkan oleh pihak desa.</p>
            </div>

            @if ($errors->any())
                <div class="mt-5 rounded-xl bg-red-50 px-4 py-3 text-sm text-red-700" role="alert">
                    Pendaftaran belum berhasil. Periksa kembali isian yang ditandai.
                </div>
            @endif

            {{-- Form register --}}
            <form method="POST" action="{{ url('/register') }}" class="mt-6 space-y-5">
                @csrf

                {{-- Nama --}}
                <div>
                    <label for="nama" class="block text-sm font-semibold">Nama Lengkap</label>
                    <div class="relative mt-2 flex items-center">
                        <svg class="{{ $icon }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></svg>
                        <input id="nama" name="nama" type="text" value="{{ old('nama') }}" required maxlength="100" autocomplete="name"
                               placeholder="Nama sesuai KTP"
                               class="{{ $input }} @error('nama') !border-red-400 @enderror">
                    </div>
                    @error('nama') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                </div>

                {{-- Email & No HP --}}
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="email" class="block text-sm font-semibold">Alamat Email</label>
                        <div class="relative mt-2 flex items-center">
                            <svg class="{{ $icon }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="100" autocomplete="email"
                                   placeholder="nama@email.com"
                                   class="{{ $input }} @error('email') !border-red-400 @enderror">
                        </div>
                        @error('email') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="no_hp" class="block text-sm font-semibold">Nomor HP</label>
                        <div class="relative mt-2 flex items-center">
                            <svg class="{{ $icon }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg>
                            <input id="no_hp" name="no_hp" type="tel" value="{{ old('no_hp') }}" required maxlength="15" autocomplete="tel" inputmode="numeric"
                                   placeholder="0812xxxxxxx"
                                   class="{{ $input }} @error('no_hp') !border-red-400 @enderror">
                        </div>
                        @error('no_hp') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                {{-- Alamat --}}
                <div>
                    <label for="alamat" class="block text-sm font-semibold">Alamat Lengkap</label>
                    <textarea id="alamat" name="alamat" rows="3" required autocomplete="street-address"
                              placeholder="Dusun, RT/RW, desa"
                              class="mt-2 w-full resize-none rounded-xl border border-transparent bg-field px-4 py-3.5 text-sm placeholder:text-slate-400 focus:border-forest-700 focus:bg-white focus:outline-none focus:ring-2 focus:ring-forest-700/20 @error('alamat') !border-red-400 @enderror">{{ old('alamat') }}</textarea>
                    @error('alamat') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                </div>

                {{-- Password --}}
                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="password" class="block text-sm font-semibold">Kata Sandi</label>
                        <div class="relative mt-2 flex items-center">
                            <svg class="{{ $icon }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                            <input id="password" name="password" type="password" required minlength="8" autocomplete="new-password"
                                   placeholder="Minimal 8 karakter"
                                   class="{{ $input }} pr-12 @error('password') !border-red-400 @enderror">
                            <button type="button" data-toggle="password" aria-label="Tampilkan kata sandi"
                                    class="absolute right-3 rounded-md p-1.5 text-slate-500 hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-forest-700/40">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                            </button>
                        </div>
                        @error('password') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold">Ulangi Kata Sandi</label>
                        <div class="relative mt-2 flex items-center">
                            <svg class="{{ $icon }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>
                            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                                   placeholder="Ketik ulang kata sandi"
                                   class="{{ $input }} pr-12">
                            <button type="button" data-toggle="password_confirmation" aria-label="Tampilkan kata sandi"
                                    class="absolute right-3 rounded-md p-1.5 text-slate-500 hover:text-ink focus:outline-none focus-visible:ring-2 focus-visible:ring-forest-700/40">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <button type="submit"
                        class="flex w-full items-center justify-center gap-2 rounded-xl bg-forest-900 px-5 py-3.5 text-sm font-semibold text-white transition hover:bg-forest-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-forest-700 focus-visible:ring-offset-2">
                    Buat Akun Petani
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </button>

                <p class="text-center text-sm text-slate-500">
                    Sudah punya akun?
                    <a href="{{ url('/login') }}" class="font-semibold text-forest-800 hover:underline">Masuk di sini</a>
                </p>
            </form>
        </div>
    </main>
</div>

<script>
    // Tampilkan / sembunyikan kata sandi
    document.querySelectorAll('[data-toggle]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const input = document.getElementById(btn.dataset.toggle);
            const show = input.type === 'password';
            input.type = show ? 'text' : 'password';
            btn.setAttribute('aria-label', show ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi');
        });
    });
</script>
</body>
</html>