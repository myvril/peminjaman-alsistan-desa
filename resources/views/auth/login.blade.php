<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Masuk & Daftar - Sistem Peminjaman Alsintan Desa</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
    <style>
        @layer base { html, body { margin: 0; padding: 0; } body { overscroll-behavior: none; } main > :first-child { margin-top: 0 !important; } main > :last-child { margin-bottom: 0 !important; } }
        ::-webkit-scrollbar { display: none; }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed-variant": "#005232", "tertiary-fixed": "#ffdcc3", "on-secondary-fixed": "#0d1c2e",
                        "secondary-fixed-dim": "#b9c7df", "primary-fixed-dim": "#8ed6aa", "surface-dim": "#cfdaf2",
                        "on-primary-container": "#8ad2a7", "on-secondary": "#ffffff", "surface-container-low": "#f0f3ff",
                        "on-error": "#ffffff", "on-primary": "#ffffff", "on-tertiary-fixed": "#2f1500",
                        "surface-container": "#e7eeff", "inverse-primary": "#8ed6aa", "outline-variant": "#bfc9c0",
                        "on-error-container": "#93000a", "secondary": "#515f74", "tertiary": "#5a2e00",
                        "primary": "#004328", "on-background": "#111c2d", "error": "#ba1a1a",
                        "on-secondary-container": "#57657a", "secondary-fixed": "#d5e3fc", "outline": "#707971",
                        "primary-container": "#0d5c3a", "on-secondary-fixed-variant": "#3a485b", "surface-variant": "#d8e3fb",
                        "inverse-surface": "#263143", "on-surface-variant": "#404942", "tertiary-fixed-dim": "#ffb77d",
                        "on-tertiary-fixed-variant": "#6e3900", "on-primary-fixed": "#002111", "secondary-container": "#d5e3fc",
                        "background": "#f9f9ff", "surface-container-lowest": "#ffffff", "on-tertiary-container": "#ffb273",
                        "on-surface": "#111c2d", "surface-container-high": "#dee8ff", "surface": "#f9f9ff",
                        "surface-bright": "#f9f9ff", "tertiary-container": "#7c4100", "primary-fixed": "#a9f3c5",
                        "surface-tint": "#226b47", "error-container": "#ffdad6", "surface-container-highest": "#d8e3fb",
                        "inverse-on-surface": "#ecf1ff", "on-tertiary": "#ffffff"
                    },
                    "borderRadius": { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
                    "fontFamily": {
                        "body-md": ["Inter"], "display-lg": ["Plus Jakarta Sans"], "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"], "body-lg": ["Inter"], "headline-sm": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"], "body-sm": ["Inter"], "label-md": ["Inter"],
                        "label-lg": ["Inter"], "title-lg": ["Plus Jakarta Sans"], "title-md": ["Plus Jakarta Sans"],
                        "display-lg-mobile": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
                        "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-background font-body-md text-on-surface min-h-screen">
<main class="w-full min-h-screen bg-background">
    <div class="flex flex-col w-full">
        <div class="w-full min-h-screen flex flex-col lg:flex-row bg-surface-container-lowest">
            
            <!-- LEFT PANEL: Editorial Agrarian Hero -->
            <div class="relative w-full lg:w-5/12 xl:w-5/12 min-h-[480px] lg:min-h-screen flex flex-col justify-between p-8 sm:p-12 lg:p-16 overflow-hidden bg-primary">
                <!-- Background Image Lokal dari public/images/bg-desa.png -->
                <div class="absolute inset-0 w-full h-full bg-cover bg-center mix-blend-overlay opacity-35 transform scale-105 transition-transform duration-1000 ease-out"
                     style="background-image: url('{{ asset('images/bg-desa.png') }}');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary/95 to-primary-container opacity-90"></div>
                
                <!-- Decorative Vector Pattern -->
                <svg class="absolute -right-24 -bottom-24 w-96 h-96 text-primary-fixed opacity-5 pointer-events-none" fill="none" viewBox="0 0 400 400">
                    <circle cx="200" cy="200" r="180" stroke="currentColor" stroke-dasharray="8 8" stroke-width="2"></circle>
                    <circle cx="200" cy="200" r="130" stroke="currentColor" stroke-width="1.5"></circle>
                    <circle cx="200" cy="200" r="80" stroke="currentColor" stroke-width="2"></circle>
                    <path d="M20,200 L380,200 M200,20 L200,380" stroke="currentColor" stroke-opacity="0.4" stroke-width="1"></path>
                </svg>

                <div class="relative z-10 flex flex-col">
                    <div class="flex items-center gap-3.5">
                        <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-on-primary-fixed shadow-md shadow-black/10">
                            <span class="material-symbols-outlined text-headline-sm" style="font-variation-settings: 'FILL' 1;">agriculture</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-sm uppercase tracking-wider text-primary-fixed-dim">Portal Resmi Alsintan</span>
                            <span class="font-title-md text-on-primary font-semibold tracking-tight">Koperasi Tani Desa Mandiri</span>
                        </div>
                    </div>

                    <div class="mt-12 lg:mt-20">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-primary-fixed text-label-sm font-label-sm mb-5 backdrop-blur-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary-fixed-dim animate-pulse"></span>
                            Musim Tanam Aktif
                        </div>
                        <h1 class="font-display-lg text-headline-lg lg:text-display-lg text-on-primary leading-tight font-bold">
                            Sistem Peminjaman Alsintan Desa
                        </h1>
                        <p class="mt-4 font-body-lg text-on-primary/80 max-w-lg leading-relaxed">
                            Pengelolaan armada mesin tani desa yang transparan, terjadwal, dan anti-bentrok demi ketahanan pangan seluruh warga tani.
                        </p>
                    </div>

                    <div class="mt-10 space-y-4 max-w-md">
                        <div class="flex items-start gap-3.5 p-3.5 rounded-xl bg-white/5 backdrop-blur-sm transition-all hover:bg-white/10">
                            <div class="w-8 h-8 rounded-lg bg-primary-fixed/20 flex items-center justify-center text-primary-fixed shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-title-md">balance</span>
                            </div>
                            <div>
                                <h2 class="font-title-md text-body-md font-semibold text-on-primary">Transparansi Kuota &amp; Tarif Sewa</h2>
                                <p class="font-body-sm text-on-primary/70 mt-0.5">Tarif sewa per hari standar desa, terbuka tanpa biaya tambahan.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5 p-3.5 rounded-xl bg-white/5 backdrop-blur-sm transition-all hover:bg-white/10">
                            <div class="w-8 h-8 rounded-lg bg-primary-fixed/20 flex items-center justify-center text-primary-fixed shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-title-md">calendar_clock</span>
                            </div>
                            <div>
                                <h2 class="font-title-md text-body-md font-semibold text-on-primary">Jadwal Real-Time Bebas Tumpang Tindih</h2>
                                <p class="font-body-sm text-on-primary/70 mt-0.5">Pencegahan otomatis agar jadwal penggunaan alat tidak saling bertabrakan.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5 p-3.5 rounded-xl bg-white/5 backdrop-blur-sm transition-all hover:bg-white/10">
                            <div class="w-8 h-8 rounded-lg bg-primary-fixed/20 flex items-center justify-center text-primary-fixed shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-title-md">build_circle</span>
                            </div>
                            <div>
                                <h2 class="font-title-md text-body-md font-semibold text-on-primary">Armada Lengkap Milik Desa</h2>
                                <p class="font-body-sm text-on-primary/70 mt-0.5">Tersedia Traktor Roda Empat, Combine Harvester, Drone Spray, &amp; Rice Transplanter.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 pt-8 mt-12 border-t border-white/10 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                    <div class="flex items-center gap-2 text-on-primary/75 font-body-sm">
                        <span class="material-symbols-outlined text-label-lg text-primary-fixed-dim">verified</span>
                        <span>Pemerintah Desa Makmur Agraris</span>
                    </div>
                    <span class="font-label-sm text-on-primary/50">Dinas Pertanian &amp; Ketahanan Pangan</span>
                </div>
            </div>

            <!-- RIGHT PANEL: Action & Authentication Hub -->
            <div class="w-full lg:w-7/12 xl:w-7/12 min-h-screen bg-surface-container-lowest flex flex-col justify-center items-center px-6 py-12 lg:px-16 xl:px-24">
                <div class="w-full max-w-xl">
                    <!-- Top Civic Status Tag -->
                    <div class="flex items-center justify-between mb-8">
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container text-secondary text-label-sm font-label-sm">
                            <span class="material-symbols-outlined text-label-md text-primary">public</span>
                            Portal Layanan Digital Warga Desa
                        </div>
                        <div class="flex items-center gap-1.5 text-body-sm text-secondary">
                            <span class="material-symbols-outlined text-title-sm text-primary">support_agent</span>
                            <span class="font-label-sm font-semibold">Posko Alsintan: 0812-3456-7890</span>
                        </div>
                    </div>

                    <!-- Pill Segment Switcher Tab -->
                    <div class="p-1.5 bg-surface-container rounded-xl flex items-center gap-1 shadow-inner mb-8">
                        <button class="flex-1 py-3 px-4 rounded-lg font-title-sm font-semibold text-center transition-all duration-200 bg-surface-container-lowest text-primary shadow-sm flex items-center justify-center gap-2" id="tabBtnLogin" onclick="switchAuthTab('login')" type="button">
                            <span class="material-symbols-outlined text-title-md">login</span>
                            Masuk (Petani / Pengelola)
                        </button>
                        <button class="flex-1 py-3 px-4 rounded-lg font-title-sm font-medium text-center transition-all duration-200 text-secondary hover:text-on-surface flex items-center justify-center gap-2" id="tabBtnRegister" onclick="switchAuthTab('register')" type="button">
                            <span class="material-symbols-outlined text-title-md">person_add</span>
                            Daftar Akun Petani
                        </button>
                    </div>

                    <!-- ALERT VALIDASI ERROR DARI LARAVEL -->
                    @if ($errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-error-container text-on-error-container text-body-sm">
                            <ul class="list-disc pl-4 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- ======================= TAB 1: FORM MASUK ======================= -->
                    <div class="block transition-opacity duration-300" id="sectionLogin">
                        <div class="mb-6">
                            <h2 class="font-display-lg text-headline-md lg:text-headline-lg font-bold text-on-surface tracking-tight">Selamat Datang Kembali</h2>
                            <p class="font-body-md text-secondary mt-1">Masukkan email dan kata sandi terdaftar untuk memeriksa jadwal atau meminjam alsintan.</p>
                        </div>

                        <div class="mb-6 p-4 rounded-xl bg-surface-container-low flex items-start gap-3 text-secondary">
                            <span class="material-symbols-outlined text-headline-sm text-primary-container shrink-0 mt-0.5">info</span>
                            <div class="text-body-sm leading-relaxed">
                                <span class="font-semibold text-on-surface">Akun Demo Tersedia:</span><br>
                                Pengelola: <code class="text-primary font-semibold">pengelola@desa.go.id</code> (Pass: <code class="text-primary">pengelola123</code>)<br>
                                Petani: <code class="text-primary font-semibold">budi@petani.id</code> (Pass: <code class="text-primary">petani123</code>)
                            </div>
                        </div>

                        <form action="{{ route('login') }}" class="space-y-5" method="POST">
                            @csrf
                            <!-- Email Input -->
                            <div class="space-y-1.5">
                                <label class="block font-label-lg text-on-surface font-semibold" for="loginIdentifier">
                                    Alamat Email Terdaftar
                                </label>
                                <div class="relative flex items-center">
                                    <span class="material-symbols-outlined absolute left-3.5 text-secondary text-title-md pointer-events-none">mail</span>
                                    <input class="w-full pl-11 pr-4 py-3.5 rounded-xl bg-surface-container-low text-on-surface placeholder:text-secondary/60 font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                                           id="loginIdentifier" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required type="email"/>
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="space-y-1.5">
                                <div class="flex items-center justify-between">
                                    <label class="block font-label-lg text-on-surface font-semibold" for="loginPassword">
                                        Kata Sandi
                                    </label>
                                </div>
                                <div class="relative flex items-center">
                                    <span class="material-symbols-outlined absolute left-3.5 text-secondary text-title-md pointer-events-none">lock</span>
                                    <input class="w-full pl-11 pr-11 py-3.5 rounded-xl bg-surface-container-low text-on-surface placeholder:text-secondary/60 font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                                           id="loginPassword" name="password" placeholder="Masukkan kata sandi Anda" required type="password"/>
                                    <button class="absolute right-3 text-secondary hover:text-on-surface focus:outline-none p-1 flex items-center justify-center" onclick="togglePasswordVisibility('loginPassword', this)" type="button">
                                        <span class="material-symbols-outlined text-title-md">visibility</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button class="w-full py-3.5 px-6 rounded-xl bg-primary text-on-primary font-title-sm font-semibold tracking-wide shadow-md hover:bg-primary-container active:scale-[0.99] transition-all flex items-center justify-center gap-2" type="submit">
                                <span>Masuk ke Portal Alsintan</span>
                                <span class="material-symbols-outlined text-title-md">arrow_forward</span>
                            </button>
                        </form>

                        <!-- Roles Badges Indicator -->
                        <div class="mt-8 pt-6 border-t border-surface-container">
                            <span class="block font-label-sm uppercase text-secondary font-semibold text-center mb-3">
                                Kategori Pengguna Layanan Terintegrasi
                            </span>
                            <div class="flex flex-wrap items-center justify-center gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed/30 text-on-primary-fixed text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-label-md">person</span>
                                    Petani (Peminjam)
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-label-md">engineering</span>
                                    Pengelola Desa
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- ======================= TAB 2: FORM PENDAFTARAN PETANI ======================= -->
                    <div class="hidden transition-opacity duration-300" id="sectionRegister">
                        <div class="mb-5">
                            <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed text-label-sm font-bold mb-2">
                                Khusus Petani &amp; Penggarap Lahan Desa (BR-02)
                            </div>
                            <h2 class="font-display-lg text-headline-md lg:text-headline-lg font-bold text-on-surface tracking-tight">Daftar Akun Petani Baru</h2>
                            <p class="font-body-md text-secondary mt-1">Registrasi mudah untuk mengajukan peminjaman traktor, combine harvester, drone spray, dan transplanter desa.</p>
                        </div>

                        <form action="{{ route('register') }}" class="space-y-4" method="POST">
                            @csrf
                            <!-- Full Name (kolom: nama) -->
                            <div class="space-y-1.5">
                                <label class="block font-label-lg text-on-surface font-semibold" for="regFullName">
                                    Nama Lengkap Sesuai KTP / Kartu Tani <span class="text-error">*</span>
                                </label>
                                <div class="relative flex items-center">
                                    <span class="material-symbols-outlined absolute left-3.5 text-secondary text-title-md pointer-events-none">badge</span>
                                    <input class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low text-on-surface placeholder:text-secondary/60 font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                                           id="regFullName" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso" required type="text"/>
                                </div>
                            </div>

                            <!-- WhatsApp Phone & Email Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- WhatsApp Phone (kolom: no_hp) -->
                                <div class="space-y-1.5">
                                    <label class="block font-label-lg text-on-surface font-semibold" for="regPhone">
                                        Nomor HP (WhatsApp) <span class="text-error">*</span>
                                    </label>
                                    <div class="relative flex items-center">
                                        <span class="material-symbols-outlined absolute left-3.5 text-secondary text-title-md pointer-events-none">call</span>
                                        <input class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low text-on-surface placeholder:text-secondary/60 font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                                               id="regPhone" name="no_hp" value="{{ old('no_hp') }}" placeholder="08xxxxxxxxxx" required type="tel"/>
                                    </div>
                                </div>

                                <!-- Email (kolom: email - Wajib & Unique di ERD) -->
                                <div class="space-y-1.5">
                                    <label class="block font-label-lg text-on-surface font-semibold" for="regEmail">
                                        Alamat Email <span class="text-error">*</span>
                                    </label>
                                    <div class="relative flex items-center">
                                        <span class="material-symbols-outlined absolute left-3.5 text-secondary text-title-md pointer-events-none">alternate_email</span>
                                        <input class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low text-on-surface placeholder:text-secondary/60 font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                                               id="regEmail" name="email" value="{{ old('email') }}" placeholder="petani@email.com" required type="email"/>
                                    </div>
                                </div>
                            </div>

                            <!-- Alamat (kolom: alamat) -->
                            <div class="space-y-1.5">
                                <label class="block font-label-lg text-on-surface font-semibold" for="regAddress">
                                    Alamat Lengkap (Dusun / RT / RW) <span class="text-error">*</span>
                                </label>
                                <div class="relative flex items-start">
                                    <span class="material-symbols-outlined absolute left-3.5 top-3 text-secondary text-title-md pointer-events-none">location_on</span>
                                    <textarea class="w-full pl-11 pr-4 py-2.5 rounded-xl bg-surface-container-low text-on-surface placeholder:text-secondary/60 font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary transition-all resize-none"
                                              id="regAddress" name="alamat" placeholder="Contoh: Dusun Krajan RT 02 / RW 01, Desa Makmur" required rows="2">{{ old('alamat') }}</textarea>
                                </div>
                            </div>

                            <!-- Password Registration (kolom: password) -->
                            <div class="space-y-1.5">
                                <label class="block font-label-lg text-on-surface font-semibold" for="regPassword">
                                    Kata Sandi Baru <span class="text-error">*</span>
                                </label>
                                <div class="relative flex items-center">
                                    <span class="material-symbols-outlined absolute left-3.5 text-secondary text-title-md pointer-events-none">key</span>
                                    <input class="w-full pl-11 pr-11 py-3 rounded-xl bg-surface-container-low text-on-surface placeholder:text-secondary/60 font-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary transition-all"
                                           id="regPassword" name="password" placeholder="Minimal 6 karakter" required type="password"/>
                                    <button class="absolute right-3 text-secondary hover:text-on-surface focus:outline-none p-1 flex items-center justify-center" onclick="togglePasswordVisibility('regPassword', this)" type="button">
                                        <span class="material-symbols-outlined text-title-md">visibility</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Submit Register -->
                            <button class="w-full py-3.5 px-6 rounded-xl bg-primary text-on-primary font-title-sm font-semibold tracking-wide shadow-md hover:bg-primary-container active:scale-[0.99] transition-all flex items-center justify-center gap-2 mt-2" type="submit">
                                <span class="material-symbols-outlined text-title-md">how_to_reg</span>
                                <span>Daftar Akun Sekarang</span>
                            </button>
                        </form>

                        <div class="mt-6 text-center">
                            <p class="font-body-sm text-secondary">
                                Sudah memiliki akun terdaftar?
                                <button class="font-label-lg font-semibold text-primary hover:underline ml-1" onclick="switchAuthTab('login')" type="button">
                                    Masuk di sini
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchAuthTab(tab) {
            const btnLogin = document.getElementById('tabBtnLogin');
            const btnRegister = document.getElementById('tabBtnRegister');
            const secLogin = document.getElementById('sectionLogin');
            const secRegister = document.getElementById('sectionRegister');

            if (tab === 'login') {
                btnLogin.className = 'flex-1 py-3 px-4 rounded-lg font-title-sm font-semibold text-center transition-all duration-200 bg-surface-container-lowest text-primary shadow-sm flex items-center justify-center gap-2';
                btnRegister.className = 'flex-1 py-3 px-4 rounded-lg font-title-sm font-medium text-center transition-all duration-200 text-secondary hover:text-on-surface flex items-center justify-center gap-2';
                secLogin.classList.remove('hidden');
                secLogin.classList.add('block');
                secRegister.classList.remove('block');
                secRegister.classList.add('hidden');
            } else {
                btnRegister.className = 'flex-1 py-3 px-4 rounded-lg font-title-sm font-semibold text-center transition-all duration-200 bg-surface-container-lowest text-primary shadow-sm flex items-center justify-center gap-2';
                btnLogin.className = 'flex-1 py-3 px-4 rounded-lg font-title-sm font-medium text-center transition-all duration-200 text-secondary hover:text-on-surface flex items-center justify-center gap-2';
                secRegister.classList.remove('hidden');
                secRegister.classList.add('block');
                secLogin.classList.remove('block');
                secLogin.classList.add('hidden');
            }
        }

        function togglePasswordVisibility(inputId, btn) {
            const input = document.getElementById(inputId);
            const icon = btn.querySelector('.material-symbols-outlined');
            if (input.type === 'password') {
                input.type = 'text';
                icon.textContent = 'visibility_off';
            } else {
                input.type = 'password';
                icon.textContent = 'visibility';
            }
        }
    </script>
</main>
</body>
</html>