<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Formulir Pengajuan Peminjaman Alsintan - Desa Makmur Agraris</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
    <style>
        @layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}
        ::-webkit-scrollbar{display:none;}
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-tint": "#226b47", "on-primary": "#ffffff", "on-error": "#ffffff", "on-tertiary": "#ffffff",
                        "on-primary-fixed-variant": "#005232", "secondary-fixed-dim": "#b9c7df", "tertiary-container": "#7c4100",
                        "surface-container-highest": "#d8e3fb", "secondary-fixed": "#d5e3fc", "tertiary-fixed-dim": "#ffb77d",
                        "on-tertiary-fixed-variant": "#6e3900", "error": "#ba1a1a", "surface-variant": "#d8e3fb",
                        "surface": "#f9f9ff", "surface-bright": "#f9f9ff", "primary": "#004328",
                        "secondary-container": "#d5e3fc", "background": "#f9f9ff", "surface-dim": "#cfdaf2",
                        "surface-container-high": "#dee8ff", "secondary": "#515f74", "error-container": "#ffdad6",
                        "surface-container-low": "#f0f3ff", "primary-fixed-dim": "#8ed6aa", "on-tertiary-fixed": "#2f1500",
                        "inverse-on-surface": "#ecf1ff", "on-error-container": "#93000a", "primary-fixed": "#a9f3c5",
                        "on-surface-variant": "#404942", "inverse-primary": "#8ed6aa", "on-background": "#111c2d",
                        "on-primary-fixed": "#002111", "tertiary-fixed": "#ffdcc3", "tertiary": "#5a2e00",
                        "on-primary-container": "#8ad2a7", "outline-variant": "#bfc9c0", "on-tertiary-container": "#ffb273",
                        "inverse-surface": "#263143", "on-surface": "#111c2d", "surface-container-lowest": "#ffffff",
                        "surface-container": "#e7eeff", "primary-container": "#0d5c3a", "outline": "#707971",
                        "on-secondary-container": "#57657a", "on-secondary-fixed": "#0d1c2e", "on-secondary-fixed-variant": "#3a485b"
                    },
                    "borderRadius": { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
                    "spacing": { "space-lg": "1.5rem", "space-xl": "2rem", "space-2xl": "3rem", "gutter": "1.5rem", "space-md": "1rem", "space-sm": "0.5rem", "gutter-mobile": "1rem", "space-xs": "0.25rem", "margin-mobile": "1rem", "margin": "2rem" },
                    "fontFamily": {
                        "label-md": ["Inter"], "title-md": ["Plus Jakarta Sans"], "label-lg": ["Inter"], "body-sm": ["Inter"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"], "title-lg": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"], "label-sm": ["Inter"], "headline-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"], "headline-sm": ["Plus Jakarta Sans"], "display-lg-mobile": ["Plus Jakarta Sans"], "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen">

<!-- TOP NAVBAR -->
<header class="fixed top-0 left-0 w-full z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
    <div class="h-20 max-w-[1280px] mx-auto px-margin-mobile md:px-margin flex items-center justify-between gap-space-md">
        <div class="flex items-center gap-space-lg">
            <a class="flex items-center gap-space-sm group" href="{{ route('alsintan.index') }}">
                <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-on-primary shadow-sm">
                    <span class="material-symbols-outlined text-[24px]">agriculture</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-title-md text-title-md text-primary tracking-tight leading-tight">Alsintan Desa</span>
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Desa Makmur Agraris</span>
                </div>
            </a>
            <nav class="hidden md:flex items-center gap-space-xs">
                <a class="px-space-md py-space-sm rounded-xl font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('alsintan.index') }}">
                    Daftar Alsintan
                </a>
                <a class="px-space-md py-space-sm rounded-xl font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('peminjaman.saya') }}">
                    Peminjaman Saya
                </a>
            </nav>
        </div>

        <div class="flex items-center gap-space-md">
            <div class="flex items-center gap-space-sm bg-surface-container-low px-space-md py-space-xs rounded-full shadow-[0_1px_4px_rgba(0,0,0,0.02)]">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
                <div class="hidden sm:flex flex-col text-left">
                    <span class="font-label-md text-label-md text-on-surface">{{ Auth::user()->nama }}</span>
                    <span class="font-label-sm text-label-sm text-secondary">Petani</span>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center gap-space-xs px-space-md py-space-xs rounded-lg bg-error-container text-error hover:bg-error hover:text-on-error font-label-md text-label-md transition-colors">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    <span class="hidden sm:inline">Keluar</span>
                </button>
            </form>
        </div>
    </div>

    <div class="md:hidden flex px-margin-mobile pb-space-sm border-t border-outline-variant/30 pt-space-xs">
        <nav class="flex w-full gap-space-xs">
            <a class="flex-1 text-center py-space-xs rounded-lg font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-high" href="{{ route('alsintan.index') }}">Daftar Alsintan</a>
            <a class="flex-1 text-center py-space-xs rounded-lg font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-high" href="{{ route('peminjaman.saya') }}">Peminjaman Saya</a>
        </nav>
    </div>
</header>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-280px)]">
    <div class="flex flex-col w-full">
        
        <!-- Top Navigation / Breadcrumbs Area -->
        <div class="w-full bg-surface-container-low/60 py-space-sm mb-space-lg">
            <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin flex flex-wrap items-center justify-between gap-space-sm">
                <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs font-label-md text-label-md text-secondary">
                    <a class="hover:text-primary transition-colors" href="{{ route('alsintan.index') }}">Katalog Alsintan</a>
                    <span class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>
                    <span class="text-on-surface font-label-lg text-label-lg">Formulir Pengajuan</span>
                </nav>
                <a class="inline-flex items-center gap-space-xs font-label-lg text-label-lg text-primary hover:text-on-primary-fixed-variant transition-colors group" href="{{ route('alsintan.index') }}">
                    <span class="material-symbols-outlined text-[18px] group-hover:-translate-x-0.5 transition-transform">arrow_back</span>
                    <span>Kembali ke Katalog Alsintan</span>
                </a>
            </div>
        </div>

        <!-- Page Header & Notification Strip -->
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin w-full mb-space-xl">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                <div class="max-w-3xl">
                    <div class="inline-flex items-center gap-space-xs px-space-sm py-space-xs rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm mb-space-sm">
                        <span class="material-symbols-outlined text-[16px]">eco</span>
                        <span>Pengajuan Multi-Unit (BR-03) • Pengecekan Jadwal Otomatis (BR-08)</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Formulir Pengajuan Peminjaman Alsintan</h1>
                    <p class="font-body-md text-body-md text-secondary mt-space-xs leading-relaxed">
                        Pilih alsintan yang dibutuhkan, tentukan jadwal pemakaian lahan, dan lengkapi detail keperluan. Total biaya akan dihitung otomatis berdasarkan durasi sewa per hari (FR-12).
                    </p>
                </div>

                <!-- Quick Summary Stat Chip -->
                <div class="hidden lg:flex items-center gap-space-md bg-surface-container-lowest px-space-md py-space-sm rounded-xl shadow-sm">
                    <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[24px]">verified_user</span>
                    </div>
                    <div>
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block">ID Peminjam</span>
                        <span class="font-title-md text-title-md text-on-surface">USR-{{ str_pad(Auth::id(), 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>
            </div>

            <!-- VALIDATION & BUSINESS RULE ERRORS (BR-05, BR-08) -->
            @if ($errors->any())
                <div class="mt-6 p-4 rounded-xl bg-error-container text-on-error-container text-body-sm shadow-sm">
                    <div class="font-label-lg flex items-center gap-2 mb-1">
                        <span class="material-symbols-outlined text-[20px]">error</span>
                        <span>Pengajuan Gagal Diproses:</span>
                    </div>
                    <ul class="list-disc pl-6 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <!-- 2-Column Content Layout (7 Cols Left / 5 Cols Right) -->
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin w-full pb-space-2xl">
            @php
                // Ambil ID alsintan yang dikirim dari query string (?selected=1,3) atau old input
                $selectedFromQuery = request()->query('selected') ? explode(',', request()->query('selected')) : [];
                $preselectedIds = old('alsintan_ids', $selectedFromQuery);
                $defaultMulai = old('waktu_mulai', now()->addDay()->setTime(7, 0)->format('Y-m-d\TH:i'));
                $defaultSelesai = old('waktu_selesai', now()->addDays(2)->setTime(17, 0)->format('Y-m-d\TH:i'));
            @endphp

            <form action="{{ route('peminjaman.store') }}" class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start" id="alsintanLoanForm" method="POST">
                @csrf

                <!-- LEFT COLUMN (7 COLS) -->
                <div class="lg:col-span-7 flex flex-col gap-space-xl">
                    
                    <!-- SECTION 1: Selected Alsintan Multi-Unit List (BR-03) -->
                    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-lg flex flex-col gap-space-md">
                        <div class="flex items-center justify-between pb-space-xs">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-[20px]">precision_manufacturing</span>
                                </span>
                                <div>
                                    <h2 class="font-title-md text-title-md text-on-surface">Pilih Unit Alsintan (Multi-Unit)</h2>
                                    <span class="font-label-sm text-label-sm text-secondary" id="selectedUnitSubtitle">Centang satu atau lebih alsintan yang ingin diajukan (BR-03)</span>
                                </div>
                            </div>
                            <a href="{{ route('alsintan.index') }}" class="inline-flex items-center gap-space-xs text-primary font-label-sm text-label-sm hover:underline">
                                <span class="material-symbols-outlined text-[16px]">grid_view</span>
                                <span>Lihat Katalog</span>
                            </a>
                        </div>

                        <div class="flex flex-col gap-space-sm">
                            @forelse($alsintans as $alat)
                                @php
                                    $isChecked = in_array((string)$alat->id_alsintan, array_map('strval', $preselectedIds));
                                @endphp
                                <label for="alat_{{ $alat->id_alsintan }}"
                                       class="unit-selector-card cursor-pointer relative flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-md p-space-md rounded-xl transition-all duration-200 border-2 {{ $isChecked ? 'bg-primary-fixed/20 border-primary' : 'bg-surface-container-low border-transparent hover:bg-surface-container' }}">
                                    <div class="flex items-center gap-space-md w-full sm:w-auto">
                                        <input type="checkbox"
                                               id="alat_{{ $alat->id_alsintan }}"
                                               name="alsintan_ids[]"
                                               value="{{ $alat->id_alsintan }}"
                                               data-name="{{ $alat->nama_alat }}"
                                               data-tarif="{{ $alat->tarif_sewa_per_hari }}"
                                               onchange="recalculateAll()"
                                               {{ $isChecked ? 'checked' : '' }}
                                               class="alsintan-checkbox w-5 h-5 accent-primary rounded cursor-pointer shrink-0"/>

                                        <div class="relative w-24 h-20 rounded-lg overflow-hidden flex-shrink-0 bg-surface-container">
                                            <img class="w-full h-full object-cover"
                                                 src="{{ asset('images/' . $alat->foto) }}"
                                                 alt="{{ $alat->nama_alat }}"
                                                 onerror="this.src='https://placehold.co/300x200/004328/ffffff?text={{ urlencode($alat->nama_alat) }}'"/>
                                        </div>

                                        <div class="flex flex-col min-w-0">
                                            <div class="flex items-center gap-space-xs flex-wrap">
                                                <span class="font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed px-space-xs py-0.5 rounded uppercase">{{ $alat->jenis }}</span>
                                                <span class="font-label-sm text-label-sm text-secondary capitalize">• Status: {{ $alat->status_operasional }}</span>
                                            </div>
                                            <h3 class="font-title-md text-title-md text-on-surface mt-0.5">{{ $alat->nama_alat }}</h3>
                                            <p class="font-body-sm text-body-sm text-secondary line-clamp-1">{{ $alat->deskripsi }}</p>
                                            <div class="flex items-center gap-space-sm mt-1">
                                                <span class="font-label-lg text-label-lg text-primary">Rp {{ number_format($alat->tarif_sewa_per_hari, 0, ',', '.') }}</span>
                                                <span class="font-body-sm text-body-sm text-secondary">/ hari</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            @empty
                                <p class="text-body-sm text-secondary p-4 bg-surface-container-low rounded-xl">Tidak ada alsintan operasional yang tersedia saat ini.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- SECTION 2: Jadwal & Periode Penggunaan (BR-05) -->
                    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-lg flex flex-col gap-space-md">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                            </span>
                            <div>
                                <h2 class="font-title-md text-title-md text-on-surface">Jadwal &amp; Periode Penggunaan</h2>
                                <span class="font-label-sm text-label-sm text-secondary">Waktu mulai tidak boleh masa lalu dan waktu selesai harus setelahnya (BR-05)</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-space-xs">
                            <!-- Waktu Mulai -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface flex items-center justify-between" for="waktu_mulai">
                                    <span>Waktu Mulai Pinjam</span>
                                    <span class="text-error font-body-sm text-body-sm">*Wajib</span>
                                </label>
                                <input class="w-full h-11 px-space-md bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container shadow-inner"
                                       id="waktu_mulai"
                                       name="waktu_mulai"
                                       type="datetime-local"
                                       value="{{ $defaultMulai }}"
                                       onchange="recalculateAll()"
                                       required/>
                            </div>

                            <!-- Waktu Selesai -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface flex items-center justify-between" for="waktu_selesai">
                                    <span>Waktu Selesai (Pengembalian)</span>
                                    <span class="text-error font-body-sm text-body-sm">*Wajib</span>
                                </label>
                                <input class="w-full h-11 px-space-md bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container shadow-inner"
                                       id="waktu_selesai"
                                       name="waktu_selesai"
                                       type="datetime-local"
                                       value="{{ $defaultSelesai }}"
                                       onchange="recalculateAll()"
                                       required/>
                            </div>
                        </div>

                        <!-- Duration Notice Banner -->
                        <div class="mt-space-xs p-space-md rounded-xl bg-surface-container flex items-center gap-space-md">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary flex-shrink-0">
                                <span class="material-symbols-outlined text-[22px]">date_range</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-primary font-bold">Estimasi Durasi Terhitung:</span>
                                <span class="font-body-md text-body-md text-on-surface" id="durationSummaryBanner">
                                    <strong>2 Hari</strong> Operasional
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 3: Lokasi Lahan & Detail Kebutuhan (BR-04) -->
                    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-lg flex flex-col gap-space-md">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[20px]">pin_drop</span>
                            </span>
                            <div>
                                <h2 class="font-title-md text-title-md text-on-surface">Lokasi Lahan &amp; Keperluan Penggunaan</h2>
                                <span class="font-label-sm text-label-sm text-secondary">Wajib melengkapi informasi lokasi lahan dan keperluan (BR-04)</span>
                            </div>
                        </div>

                        <!-- Lokasi Lahan -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface flex items-center justify-between" for="lokasi_lahan">
                                <span>Lokasi / Titik Hamparan Lahan</span>
                                <span class="text-error font-body-sm text-body-sm">*Wajib</span>
                            </label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3 text-secondary text-[20px]">location_on</span>
                                <input class="w-full h-11 pl-10 pr-space-md bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container"
                                       id="lokasi_lahan"
                                       name="lokasi_lahan"
                                       placeholder="Contoh: Blok Sawah Wetan, RT 03 / RW 02 Dusun Krajan"
                                       required
                                       type="text"
                                       value="{{ old('lokasi_lahan') }}"/>
                            </div>
                        </div>

                        <!-- Keperluan Operasional -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface flex items-center justify-between" for="keperluan">
                                <span>Keperluan Penggunaan Alsintan</span>
                                <span class="text-error font-body-sm text-body-sm">*Wajib</span>
                            </label>
                            <textarea class="w-full p-space-md bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-primary-container leading-relaxed"
                                      id="keperluan"
                                      name="keperluan"
                                      placeholder="Contoh: Pembajakan lahan sawah seluas 1,5 hektar persiapan musim tanam padi..."
                                      required
                                      rows="3">{{ old('keperluan') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN (5 COLS) - STICKY SUMMARY & PRICING (FR-12) -->
                <div class="lg:col-span-5 flex flex-col gap-space-lg lg:sticky lg:top-24">
                    <div class="bg-surface-container-lowest rounded-xl shadow-md p-space-lg flex flex-col gap-space-md">
                        <div class="flex items-center justify-between border-b border-surface-container-high pb-space-sm">
                            <div class="flex items-center gap-space-xs">
                                <span class="material-symbols-outlined text-[22px] text-primary">receipt_long</span>
                                <h2 class="font-title-md text-title-md text-on-surface">Ringkasan &amp; Estimasi Biaya</h2>
                            </div>
                            <span class="font-label-sm text-label-sm bg-primary-fixed text-on-primary-fixed px-space-xs py-0.5 rounded uppercase">
                                FR-12 Otomatis
                            </span>
                        </div>

                        <!-- Farmer Profile Box -->
                        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
                            <div class="flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-secondary uppercase">Pemohon Pinjam</span>
                                <span class="font-label-sm text-label-sm px-space-xs py-0.5 bg-primary-fixed text-on-primary-fixed rounded">Petani Terdaftar</span>
                            </div>
                            <div class="font-title-md text-title-md text-on-surface">{{ Auth::user()->nama }}</div>
                            <div class="flex items-center gap-space-xs text-secondary font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-[16px]">call</span>
                                <span>{{ Auth::user()->no_hp }} • {{ Auth::user()->alamat }}</span>
                            </div>
                        </div>

                        <!-- Duration Display -->
                        <div class="flex items-center justify-between px-space-xs font-body-md text-body-md">
                            <span class="text-secondary">Durasi Terhitung:</span>
                            <span class="font-label-lg text-label-lg text-on-surface" id="rightDurationText">2 Hari</span>
                        </div>

                        <!-- Dynamic Itemized Breakdown -->
                        <div id="breakdownList" class="flex flex-col gap-space-xs pt-space-xs border-t border-surface-container">
                            <p class="text-body-sm text-secondary italic">Belum ada alsintan yang dipilih.</p>
                        </div>

                        <!-- Total Final Price Box -->
                        <div class="p-space-md rounded-xl bg-primary text-on-primary flex flex-col gap-1 shadow-sm mt-space-xs">
                            <span class="font-label-sm text-label-sm text-primary-fixed uppercase tracking-wider">Total Estimasi Biaya Sewa</span>
                            <div class="flex items-baseline justify-between">
                                <span class="font-display-lg text-headline-lg tracking-tight font-bold" id="grandTotalText">Rp 0</span>
                                <span class="font-label-sm text-label-sm text-primary-fixed">Bayar di Balai Desa</span>
                            </div>
                            <span class="text-[11px] text-primary-fixed-dim mt-1">Dihitung otomatis: Tarif Harian × Durasi Sewa</span>
                        </div>

                        <!-- Policy Notice -->
                        <div class="p-space-md rounded-xl bg-surface-container flex items-start gap-space-sm text-secondary">
                            <span class="material-symbols-outlined text-tertiary-container text-[20px] flex-shrink-0 mt-0.5">info</span>
                            <p class="font-body-sm text-body-sm leading-relaxed">
                                Status awal pengajuan adalah <strong>Menunggu</strong>. Jadwal baru terkunci secara resmi setelah disetujui oleh Pengelola Desa (BR-07).
                            </p>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex flex-col gap-space-sm pt-space-xs">
                            <button id="submitBtn" class="w-full h-12 rounded-xl bg-primary-container text-on-primary hover:bg-primary font-label-lg text-label-lg flex items-center justify-center gap-space-xs shadow-md hover:shadow-lg transition-all" type="submit">
                                <span>Kirim Pengajuan Peminjaman</span>
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </button>
                            <a href="{{ route('alsintan.index') }}" class="w-full h-10 rounded-xl bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-lg text-label-lg transition-colors flex items-center justify-center gap-space-xs">
                                <span>Batal &amp; Kembali</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer class="w-full bg-surface-container-low mt-space-2xl">
    <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="pt-space-md border-t border-outline-variant/40 flex flex-col sm:flex-row items-center justify-between gap-space-sm text-secondary font-label-sm text-label-sm">
            <span>© 2026 Pemerintah Desa Makmur Agraris • Sistem Peminjaman Alsintan Desa</span>
            <span>Dinas Pertanian &amp; Ketahanan Pangan</span>
        </div>
    </div>
</footer>

<script>
    function recalculateAll() {
        const startInput = document.getElementById('waktu_mulai');
        const endInput = document.getElementById('waktu_selesai');
        const checkboxes = document.querySelectorAll('.alsintan-checkbox');
        const breakdownList = document.getElementById('breakdownList');
        const grandTotalText = document.getElementById('grandTotalText');
        const rightDurationText = document.getElementById('rightDurationText');
        const durationSummaryBanner = document.getElementById('durationSummaryBanner');
        const selectedUnitSubtitle = document.getElementById('selectedUnitSubtitle');

        // 1. Hitung durasi hari (sama persis dengan rumus di PeminjamanController: max(1, ceil(diffInHours / 24)))
        let durasiHari = 1;
        if (startInput.value && endInput.value) {
            const start = new Date(startInput.value);
            const end = new Date(endInput.value);
            if (end <= start) {
                endInput.setCustomValidity('Waktu selesai harus setelah waktu mulai (BR-05)');
                durationSummaryBanner.innerHTML = '<span class="text-error font-semibold">Waktu selesai harus setelah waktu mulai!</span>';
            } else {
                endInput.setCustomValidity('');
                const diffHours = (end - start) / (1000 * 60 * 60);
                durasiHari = Math.max(1, Math.ceil(diffHours / 24));
                durationSummaryBanner.innerHTML = `<strong>${durasiHari} Hari Operasional</strong> (${startInput.value.replace('T', ' ')} s/d ${endInput.value.replace('T', ' ')})`;
            }
        }
        rightDurationText.innerText = `${durasiHari} Hari`;

        // 2. Highlight kartu terpilih & hitung rincian biaya
        let selectedCount = 0;
        let grandTotal = 0;
        let html = '';

        checkboxes.forEach(cb => {
            const card = cb.closest('.unit-selector-card');
            if (cb.checked) {
                selectedCount++;
                card.classList.remove('bg-surface-container-low', 'border-transparent');
                card.classList.add('bg-primary-fixed/20', 'border-primary');

                const name = cb.getAttribute('data-name');
                const tarif = Number(cb.getAttribute('data-tarif'));
                const subtotal = tarif * durasiHari;
                grandTotal += subtotal;

                html += `
                    <div class="flex items-center justify-between text-body-sm font-body-sm">
                        <span class="text-secondary truncate max-w-[210px]">${name} (${durasiHari} Hari)</span>
                        <span class="font-mono text-on-surface font-semibold">Rp ${subtotal.toLocaleString('id-ID')}</span>
                    </div>`;
            } else {
                card.classList.remove('bg-primary-fixed/20', 'border-primary');
                card.classList.add('bg-surface-container-low', 'border-transparent');
            }
        });

        selectedUnitSubtitle.innerText = `${selectedCount} unit alsintan dipilih (BR-03)`;

        if (selectedCount === 0) {
            breakdownList.innerHTML = '<p class="text-body-sm text-error italic">Pilih minimal 1 unit alsintan di sebelah kiri.</p>';
        } else {
            breakdownList.innerHTML = html;
        }

        grandTotalText.innerText = 'Rp ' + grandTotal.toLocaleString('id-ID');
    }

    // Jalankan kalkulasi awal saat halaman dimuat
    document.addEventListener('DOMContentLoaded', recalculateAll);
</script>
</body>
</html>