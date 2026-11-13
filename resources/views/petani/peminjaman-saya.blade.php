<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Peminjaman Saya &amp; Riwayat - Alsintan Desa</title>
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
                        "on-tertiary-fixed-variant": "#6e3900", "inverse-on-surface": "#ecf1ff", "on-secondary": "#ffffff",
                        "surface-bright": "#f9f9ff", "secondary-container": "#d5e3fc", "on-primary-container": "#8ad2a7",
                        "tertiary-container": "#7c4100", "surface-container-low": "#f0f3ff", "primary": "#004328",
                        "on-primary-fixed": "#002111", "outline": "#707971", "on-primary-fixed-variant": "#005232",
                        "primary-fixed": "#a9f3c5", "error-container": "#ffdad6", "error": "#ba1a1a",
                        "surface-dim": "#cfdaf2", "surface-variant": "#d8e3fb", "on-secondary-container": "#57657a",
                        "inverse-surface": "#263143", "secondary": "#515f74", "tertiary-fixed-dim": "#ffb77d",
                        "on-secondary-fixed-variant": "#3a485b", "surface-container-highest": "#d8e3fb", "on-primary": "#ffffff",
                        "on-surface-variant": "#404942", "on-surface": "#111c2d", "surface-container-lowest": "#ffffff",
                        "surface": "#f9f9ff", "outline-variant": "#bfc9c0", "primary-fixed-dim": "#8ed6aa",
                        "on-error-container": "#93000a", "secondary-fixed": "#d5e3fc", "on-tertiary-fixed": "#2f1500",
                        "on-tertiary": "#ffffff", "surface-container": "#e7eeff", "on-error": "#ffffff",
                        "secondary-fixed-dim": "#b9c7df", "on-tertiary-container": "#ffb273", "on-background": "#111c2d",
                        "tertiary-fixed": "#ffdcc3", "background": "#f9f9ff", "inverse-primary": "#8ed6aa",
                        "primary-container": "#0d5c3a", "surface-container-high": "#dee8ff", "surface-tint": "#226b47",
                        "on-secondary-fixed": "#0d1c2e", "tertiary": "#5a2e00"
                    },
                    "borderRadius": { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
                    "spacing": { "space-xl": "2rem", "margin": "2rem", "space-2xl": "3rem", "space-xs": "0.25rem", "space-md": "1rem", "margin-mobile": "1rem", "space-lg": "1.5rem", "gutter-mobile": "1rem", "gutter": "1.5rem", "space-sm": "0.5rem" },
                    "fontFamily": {
                        "headline-lg": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"], "label-sm": ["Inter"],
                        "label-md": ["Inter"], "headline-md": ["Plus Jakarta Sans"], "title-md": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"], "headline-sm": ["Plus Jakarta Sans"], "title-lg": ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"], "label-lg": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], "display-lg-mobile": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }],
                        "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen">

<!-- TOP NAVBAR -->
<header class="fixed top-0 left-0 w-full z-50 bg-surface/95 backdrop-blur-md shadow-[0_1px_6px_rgba(0,0,0,0.04)]">
    <div class="h-20 max-w-[1280px] mx-auto px-margin-mobile md:px-margin flex items-center justify-between gap-space-md">
        <div class="flex items-center gap-space-xl">
            <a class="flex items-center gap-space-sm group" href="{{ route('alsintan.index') }}">
                <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center text-on-primary shadow-sm">
                    <span class="material-symbols-outlined text-[24px]">agriculture</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-title-md text-title-md text-primary tracking-tight leading-tight">Alsintan Desa</span>
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">DESA MAKMUR AGRARIS</span>
                </div>
            </a>
            <nav class="hidden md:flex items-center gap-space-xs">
                <a class="px-space-md py-space-sm rounded-xl font-label-lg text-label-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('alsintan.index') }}">
                    Daftar Alsintan
                </a>
                <a aria-current="page" class="px-space-md py-space-sm transition-colors bg-primary-container text-on-primary font-label-lg rounded-xl shadow-sm" href="{{ route('peminjaman.saya') }}">
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
            <a aria-current="page" class="flex-1 text-center py-space-xs bg-primary-container text-on-primary font-label-md rounded-lg shadow-sm" href="{{ route('peminjaman.saya') }}">Peminjaman Saya</a>
        </nav>
    </div>
</header>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-280px)]">
    <!-- Breadcrumb -->
    <div class="bg-surface-container-low/60 border-b border-outline-variant/30">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin py-space-sm">
            <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs text-secondary font-label-sm text-label-sm">
                <a class="hover:text-primary transition-colors" href="{{ route('alsintan.index') }}">Katalog Alsintan</a>
                <span class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>
                <span aria-current="page" class="text-primary font-semibold">Peminjaman Saya</span>
            </nav>
        </div>
    </div>

    @php
        $totalCount = $peminjamans->count();
        $berlangsungCount = $peminjamans->where('status_peminjaman', 'berlangsung')->count();
        $disetujuiCount = $peminjamans->where('status_peminjaman', 'disetujui')->count();
        $menungguCount = $peminjamans->where('status_peminjaman', 'menunggu')->count();
        $selesaiCount = $peminjamans->where('status_peminjaman', 'selesai')->count();
        $ditolakCount = $peminjamans->where('status_peminjaman', 'ditolak')->count();
        $dibatalkanCount = $peminjamans->where('status_peminjaman', 'dibatalkan')->count();
    @endphp

    <div class="flex flex-col w-full">
        <div class="relative w-full max-w-[1280px] mx-auto px-margin-mobile md:px-margin pb-space-2xl">
            <div class="absolute -top-10 left-1/2 -translate-x-1/2 w-3/4 h-28 bg-gradient-to-r from-primary/10 via-primary-fixed/20 to-primary-container/10 blur-3xl -z-10 pointer-events-none rounded-full"></div>

            <!-- Flash Messages -->
            @if(session('success'))
                <div class="mt-6 p-4 rounded-xl bg-primary-fixed text-on-primary-fixed font-label-md flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mt-6 p-4 rounded-xl bg-error-container text-on-error-container font-label-md flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">error</span>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <!-- Page Header Section -->
            <div class="pt-space-lg pb-space-md flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                <div class="flex flex-col gap-space-xs max-w-2xl">
                    <div class="inline-flex items-center gap-space-xs text-primary font-label-md">
                        <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                        <span>Riwayat Transaksi • {{ Auth::user()->nama }}</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Peminjaman Saya &amp; Riwayat</h1>
                    <p class="font-body-md text-body-md text-secondary leading-relaxed">
                        Pantau status persetujuan (FR-06), jadwal penggunaan, tenggat pengembalian alsintan (FR-11), dan riwayat permohonan Anda di Desa Makmur Agraris.
                    </p>
                </div>
                <div class="flex items-center gap-space-sm self-start md:self-auto">
                    <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-sm bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg rounded-xl shadow-md transition-all active:scale-[0.98]" href="{{ route('peminjaman.create') }}">
                        <span class="material-symbols-outlined text-[20px]">add_circle</span>
                        <span>+ Ajukan Peminjaman</span>
                    </a>
                </div>
            </div>

            <!-- Quick Stats Metric Cards -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-space-sm md:gap-space-md my-space-md">
                <!-- Total Pengajuan -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[26px]">contract</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Total Pengajuan</span>
                        <span class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">{{ $totalCount }} <span class="font-body-sm text-body-sm font-normal text-secondary">Berkas</span></span>
                    </div>
                </div>

                <!-- Sedang Berlangsung / Disetujui -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md hover:shadow-md transition-shadow relative overflow-hidden">
                    <div class="absolute right-0 top-0 w-1.5 h-full bg-primary-container"></div>
                    <div class="w-12 h-12 rounded-xl bg-primary-fixed/40 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[26px]" style="font-variation-settings: 'FILL' 1;">precision_manufacturing</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Berlangsung / Aktif</span>
                        <div class="flex items-center gap-space-xs">
                            <span class="font-headline-md text-headline-md text-primary font-semibold tracking-tight">{{ $berlangsungCount + $disetujuiCount }}</span>
                            <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-primary-fixed text-on-primary-fixed font-bold">Aktif</span>
                        </div>
                    </div>
                </div>

                <!-- Menunggu Persetujuan -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-tertiary-fixed/50 flex items-center justify-center text-on-tertiary-fixed-variant">
                        <span class="material-symbols-outlined text-[26px]">hourglass_top</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Menunggu</span>
                        <div class="flex items-center gap-space-xs">
                            <span class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">{{ $menungguCount }}</span>
                            <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-tertiary-fixed text-on-tertiary-fixed-variant font-bold">Verifikasi</span>
                        </div>
                    </div>
                </div>

                <!-- Ditolak / Dibatalkan -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex items-center gap-space-md hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-error-container/60 flex items-center justify-center text-error">
                        <span class="material-symbols-outlined text-[26px]">cancel</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Ditolak / Batal</span>
                        <div class="flex items-center gap-space-xs">
                            <span class="font-headline-md text-headline-md text-on-surface font-semibold tracking-tight">{{ $ditolakCount + $dibatalkanCount }}</span>
                            <span class="font-label-sm text-label-sm px-1.5 py-0.5 rounded bg-error-container text-error font-bold">Arsip</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Pills & Search Section -->
            <div class="flex flex-col gap-space-md my-space-md">
                <div class="flex items-center gap-space-xs overflow-x-auto pb-space-xs pt-space-xs" id="statusFilterTabs">
                    <button type="button" onclick="filterByStatus('all', this)" class="status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-primary text-on-primary shadow-sm shrink-0">
                        <span>Semua</span>
                        <span class="bg-white/20 text-on-primary px-1.5 py-0.5 rounded-full text-label-sm">{{ $totalCount }}</span>
                    </button>
                    <button type="button" onclick="filterByStatus('menunggu', this)" class="status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface shrink-0 transition-colors">
                        <span>Menunggu</span>
                        <span class="bg-tertiary-fixed text-on-tertiary-fixed-variant px-1.5 py-0.5 rounded-full text-label-sm font-bold">{{ $menungguCount }}</span>
                    </button>
                    <button type="button" onclick="filterByStatus('disetujui', this)" class="status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface shrink-0 transition-colors">
                        <span>Disetujui</span>
                        <span class="bg-secondary-container text-on-secondary-fixed px-1.5 py-0.5 rounded-full text-label-sm font-bold">{{ $disetujuiCount }}</span>
                    </button>
                    <button type="button" onclick="filterByStatus('berlangsung', this)" class="status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface shrink-0 transition-colors">
                        <span>Berlangsung</span>
                        <span class="bg-primary-fixed text-on-primary-fixed px-1.5 py-0.5 rounded-full text-label-sm font-bold">{{ $berlangsungCount }}</span>
                    </button>
                    <button type="button" onclick="filterByStatus('selesai', this)" class="status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface shrink-0 transition-colors">
                        <span>Selesai</span>
                        <span class="bg-surface-dim text-secondary px-1.5 py-0.5 rounded-full text-label-sm font-bold">{{ $selesaiCount }}</span>
                    </button>
                    <button type="button" onclick="filterByStatus('ditolak', this)" class="status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface shrink-0 transition-colors">
                        <span>Ditolak</span>
                        <span class="bg-error-container text-error px-1.5 py-0.5 rounded-full text-label-sm font-bold">{{ $ditolakCount }}</span>
                    </button>
                    <button type="button" onclick="filterByStatus('dibatalkan', this)" class="status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface shrink-0 transition-colors">
                        <span>Dibatalkan</span>
                        <span class="bg-surface-dim text-secondary px-1.5 py-0.5 rounded-full text-label-sm font-bold">{{ $dibatalkanCount }}</span>
                    </button>
                </div>

                <!-- Search Input -->
                <div class="bg-surface-container-lowest p-space-sm rounded-xl shadow-sm flex items-center justify-between gap-space-sm">
                    <div class="relative w-full flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-outline text-[20px]">search</span>
                        <input id="loanSearchInput" onkeyup="applyLoanFilters()" class="w-full pl-10 pr-space-md py-2 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Cari nomor pengajuan, lokasi lahan, atau nama alsintan..." type="text"/>
                    </div>
                </div>
            </div>

            <!-- Loan Cards Stack Container (DINAMIS DARI DATABASE) -->
            <div class="flex flex-col gap-space-lg mt-space-md" id="loanCardsContainer">
                @forelse($peminjamans as $pinjam)
                    @php
                        $status = $pinjam->status_peminjaman;
                        $stripeClass = match($status) {
                            'berlangsung' => 'h-2 w-full bg-gradient-to-r from-primary-container via-primary-fixed to-primary',
                            'disetujui'   => 'h-1.5 w-full bg-primary',
                            'menunggu'    => 'h-1.5 w-full bg-tertiary-fixed-dim',
                            'selesai'     => 'h-1.5 w-full bg-secondary',
                            'ditolak'     => 'h-1.5 w-full bg-error',
                            default       => 'h-1.5 w-full bg-outline-variant',
                        };

                        $details = $pinjam->detail ?? $pinjam->detailPeminjaman ?? collect();
                        $alatNames = $details->map(fn($d) => $d->alsintan->nama_alat ?? 'Alsintan')->implode(' ');
                        $searchBlob = strtolower('#PMJ-' . $pinjam->id_peminjaman . ' ' . $pinjam->lokasi_lahan . ' ' . $pinjam->keperluan . ' ' . $alatNames);

                        $waktuAmbil = $pinjam->waktu_pengambilan ?? $pinjam->waktu_diambil;
                        $waktuKembali = $pinjam->waktu_penyerahan ?? $pinjam->waktu_dikembalikan;
                    @endphp

                    <article class="loan-card bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden relative hover:shadow-md transition-all"
                             data-status="{{ $status }}"
                             data-search="{{ $searchBlob }}">
                        <!-- Status Indicator Stripe -->
                        <div class="{{ $stripeClass }}"></div>

                        <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">
                            <!-- Card Header Info -->
                            <div class="flex flex-wrap items-center justify-between gap-space-sm pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-9 h-9 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                                        <span class="material-symbols-outlined text-[22px]">history_edu</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex items-center gap-space-xs flex-wrap">
                                            <span class="font-headline-sm text-headline-sm text-on-surface font-semibold tracking-tight">#PMJ-{{ str_pad($pinjam->id_peminjaman, 5, '0', STR_PAD_LEFT) }}</span>
                                            <span class="text-secondary">•</span>
                                            <span class="font-label-sm text-label-sm text-secondary">
                                                Diajukan: {{ \Carbon\Carbon::parse($pinjam->tanggal_pengajuan)->translatedFormat('d M Y, H:i') }} WIB
                                            </span>
                                        </div>
                                        <span class="font-label-sm text-label-sm text-secondary">
                                            {{ $details->count() }} Unit Alsintan • Pemohon: {{ Auth::user()->nama }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Status Badge -->
                                @if($status === 'berlangsung')
                                    <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-primary-fixed text-on-primary-fixed font-label-md text-label-md font-semibold shadow-sm">
                                        <span class="relative flex h-2 w-2">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                                        </span>
                                        <span>Sedang Berlangsung</span>
                                    </div>
                                @elseif($status === 'disetujui')
                                    <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-secondary-container text-on-secondary-fixed font-label-md text-label-md font-semibold shadow-sm">
                                        <span class="material-symbols-outlined text-[16px]">verified</span>
                                        <span>Disetujui (Siap Diambil)</span>
                                    </div>
                                @elseif($status === 'menunggu')
                                    <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-md text-label-md font-semibold shadow-sm">
                                        <span class="material-symbols-outlined text-[16px]">hourglass_top</span>
                                        <span>Menunggu Persetujuan</span>
                                    </div>
                                @elseif($status === 'selesai')
                                    <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container-highest text-on-surface font-label-md text-label-md font-semibold">
                                        <span class="material-symbols-outlined text-[16px] text-primary">task_alt</span>
                                        <span>Selesai Dikembalikan</span>
                                    </div>
                                @elseif($status === 'ditolak')
                                    <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-error-container text-error font-label-md text-label-md font-semibold">
                                        <span class="material-symbols-outlined text-[16px]">cancel</span>
                                        <span>Pengajuan Ditolak</span>
                                    </div>
                                @else
                                    <div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container text-secondary font-label-md text-label-md font-semibold">
                                        <span class="material-symbols-outlined text-[16px]">block</span>
                                        <span>Dibatalkan</span>
                                    </div>
                                @endif
                            </div>

                            <!-- FR-11: Pengingat Tenggat Waktu Pengembalian (Untuk status berlangsung & disetujui) -->
                            @if(in_array($status, ['berlangsung', 'disetujui']))
                                @php
                                    $waktuSelesai = \Carbon\Carbon::parse($pinjam->waktu_selesai);
                                    $isOverdue = now()->gt($waktuSelesai);
                                    $sisaWaktu = $isOverdue
                                        ? 'Terlambat ' . $waktuSelesai->diffForHumans(now(), true)
                                        : 'Sisa waktu: ' . now()->diffForHumans($waktuSelesai, true);
                                @endphp
                                <div class="bg-surface-container-low p-space-md rounded-xl flex flex-col lg:flex-row lg:items-center justify-between gap-space-md shadow-inner">
                                    <div class="flex items-start gap-space-md">
                                        <div class="w-11 h-11 rounded-xl {{ $isOverdue ? 'bg-error-container text-error' : 'bg-tertiary-fixed text-on-tertiary-fixed-variant' }} flex items-center justify-center shrink-0">
                                            <span class="material-symbols-outlined text-[24px]">alarm_on</span>
                                        </div>
                                        <div class="flex flex-col gap-0.5">
                                            <span class="font-label-lg text-label-lg {{ $isOverdue ? 'text-error' : 'text-tertiary' }} font-bold">
                                                Pengingat Tenggat Pengembalian Alsintan (FR-11)
                                            </span>
                                            <div class="flex items-center gap-space-sm flex-wrap mt-0.5">
                                                <span class="font-title-md text-title-md text-on-surface font-semibold">
                                                    Tenggat: {{ $waktuSelesai->translatedFormat('d M Y, H:i') }} WIB
                                                </span>
                                                <span class="inline-flex items-center gap-1 font-label-md text-label-md px-2.5 py-0.5 rounded-lg {{ $isOverdue ? 'bg-error-container text-error' : 'bg-tertiary-fixed text-on-tertiary-fixed' }} font-bold">
                                                    <span class="material-symbols-outlined text-[15px]">schedule</span>
                                                    {{ $sisaWaktu }}
                                                </span>
                                            </div>
                                            <p class="font-body-sm text-body-sm text-secondary mt-1">
                                                Harap kembalikan seluruh unit alsintan ke Balai Pengelola Desa sebelum tenggat waktu berakhir dalam kondisi bersih.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Catatan Pengelola (Untuk status ditolak atau disetujui jika ada catatan) -->
                            @if($pinjam->catatan_pengelola)
                                <div class="{{ $status === 'ditolak' ? 'bg-error-container/25' : 'bg-secondary-container/40' }} p-space-md rounded-xl flex items-start gap-space-sm">
                                    <span class="material-symbols-outlined text-[20px] {{ $status === 'ditolak' ? 'text-error' : 'text-primary' }} mt-0.5">
                                        {{ $status === 'ditolak' ? 'warning' : 'comment' }}
                                    </span>
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md {{ $status === 'ditolak' ? 'text-error' : 'text-on-surface' }} font-bold">
                                            Catatan Pengelola Desa:
                                        </span>
                                        <p class="font-body-md text-body-md text-on-surface leading-relaxed mt-0.5">
                                            “{{ $pinjam->catatan_pengelola }}”
                                        </p>
                                    </div>
                                </div>
                            @endif

                            <!-- Daftar Multi-Unit Alsintan pada Pengajuan Ini (BR-03) -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                                @foreach($details as $detail)
                                    @php $alat = $detail->alsintan; @endphp
                                    <div class="flex items-center gap-space-md p-3 rounded-xl bg-surface-container-low/80 border border-outline-variant/20">
                                        <div class="w-20 h-16 rounded-lg overflow-hidden bg-surface-container shrink-0">
                                            <img class="w-full h-full object-cover"
                                                 src="{{ asset('images/' . ($alat->foto ?? 'default.jpg')) }}"
                                                 alt="{{ $alat->nama_alat ?? 'Alsintan' }}"
                                                 onerror="this.src='https://placehold.co/240x180/004328/ffffff?text=Alsintan'"/>
                                        </div>
                                        <div class="flex flex-col min-w-0">
                                            <span class="font-label-sm text-label-sm text-primary uppercase">{{ $alat->jenis ?? '-' }}</span>
                                            <span class="font-title-md text-title-md text-on-surface truncate">{{ $alat->nama_alat ?? 'Unit Alsintan' }}</span>
                                            <span class="font-body-sm text-body-sm text-secondary">
                                                Subtotal: <strong class="text-on-surface">Rp {{ number_format($detail->subtotal_biaya, 0, ',', '.') }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Metadata Jadwal, Lokasi, Keperluan & Total Biaya -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-sm bg-surface-container-low/70 p-space-md rounded-xl">
                                <div class="flex flex-col gap-0.5">
                                    <span class="font-label-sm text-label-sm text-secondary uppercase">Waktu Penggunaan</span>
                                    <span class="font-label-lg text-label-lg text-on-surface">
                                        {{ \Carbon\Carbon::parse($pinjam->waktu_mulai)->translatedFormat('d M Y, H:i') }}
                                    </span>
                                    <span class="font-body-sm text-body-sm text-secondary">
                                        s/d {{ \Carbon\Carbon::parse($pinjam->waktu_selesai)->translatedFormat('d M Y, H:i') }} WIB
                                    </span>
                                </div>

                                <div class="flex flex-col gap-0.5">
                                    <span class="font-label-sm text-label-sm text-secondary uppercase">Lokasi Lahan</span>
                                    <span class="font-label-lg text-label-lg text-on-surface">{{ $pinjam->lokasi_lahan }}</span>
                                    <span class="font-body-sm text-body-sm text-secondary line-clamp-1">{{ $pinjam->keperluan }}</span>
                                </div>

                                <div class="flex flex-col gap-0.5">
                                    <span class="font-label-sm text-label-sm text-secondary uppercase">Log Serah Terima</span>
                                    <span class="font-body-sm text-body-sm text-on-surface">
                                        Ambil: <strong>{{ $waktuAmbil ? \Carbon\Carbon::parse($waktuAmbil)->translatedFormat('d M, H:i') : '-' }}</strong>
                                    </span>
                                    <span class="font-body-sm text-body-sm text-on-surface">
                                        Kembali: <strong>{{ $waktuKembali ? \Carbon\Carbon::parse($waktuKembali)->translatedFormat('d M, H:i') : '-' }}</strong>
                                    </span>
                                </div>

                                <div class="flex flex-col gap-0.5">
                                    <span class="font-label-sm text-label-sm text-secondary uppercase">Total Biaya Sewa</span>
                                    <span class="font-headline-sm text-headline-sm text-primary font-bold">
                                        Rp {{ number_format($pinjam->total_biaya, 0, ',', '.') }}
                                    </span>
                                    <span class="font-body-sm text-body-sm text-secondary">Pembayaran di Balai Desa</span>
                                </div>
                            </div>

                            <!-- Action Footer (FR-05 Pembatalan hanya saat status 'menunggu') -->
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-space-sm pt-space-xs">
                                <div class="flex items-center gap-space-xs text-secondary font-body-sm text-body-sm">
                                    <span class="material-symbols-outlined text-[18px] text-outline">info</span>
                                    @if($status === 'menunggu')
                                        <span>Anda dapat membatalkan pengajuan ini selama belum diproses pengelola (FR-05).</span>
                                    @elseif($status === 'ditolak')
                                        <span>Silakan ajukan ulang dengan memilih jadwal lain yang masih kosong.</span>
                                    @else
                                        <span>Tunjukkan kode pengajuan <strong>#PMJ-{{ str_pad($pinjam->id_peminjaman, 5, '0', STR_PAD_LEFT) }}</strong> kepada petugas balai desa.</span>
                                    @endif
                                </div>

                                <div class="flex items-center gap-space-sm w-full sm:w-auto">
                                    @if($status === 'menunggu')
                                        <form action="{{ route('peminjaman.batal', $pinjam->id_peminjaman) }}" method="POST" class="w-full sm:w-auto" onsubmit="return confirm('Yakin ingin membatalkan pengajuan #PMJ-{{ str_pad($pinjam->id_peminjaman, 5, '0', STR_PAD_LEFT) }}?')">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 rounded-lg bg-error-container text-error hover:bg-error hover:text-on-error font-label-md text-label-md transition-colors">
                                                <span class="material-symbols-outlined text-[18px]">close</span>
                                                <span>Batalkan Pengajuan</span>
                                            </button>
                                        </form>
                                    @endif

                                    @if(in_array($status, ['ditolak', 'dibatalkan', 'selesai']))
                                        <a href="{{ route('peminjaman.create') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md shadow-sm transition-all">
                                            <span>Ajukan Peminjaman Baru</span>
                                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="bg-surface-container-lowest rounded-2xl p-12 text-center shadow-sm">
                        <div class="w-16 h-16 rounded-2xl bg-primary-fixed/40 text-primary flex items-center justify-center mx-auto mb-4">
                            <span class="material-symbols-outlined text-4xl">agriculture</span>
                        </div>
                        <h3 class="font-title-lg text-title-lg text-on-surface">Belum Ada Riwayat Peminjaman</h3>
                        <p class="font-body-md text-body-md text-secondary max-w-md mx-auto mt-1 mb-6">
                            Anda belum pernah mengajukan peminjaman alsintan. Mulai pilih unit traktor, combine harvester, drone sprayer, atau transplanter di katalog desa.
                        </p>
                        <a href="{{ route('alsintan.index') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary text-on-primary font-label-lg hover:bg-primary-container transition-colors">
                            <span>Lihat Daftar Alsintan</span>
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Bottom Help & Hotline Support Section -->
            <div class="mt-space-xl bg-surface-container-low rounded-xl p-space-md md:p-space-lg shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-md">
                <div class="flex items-start gap-space-md">
                    <div class="w-12 h-12 rounded-xl bg-primary-container text-on-primary flex items-center justify-center shrink-0 shadow-sm">
                        <span class="material-symbols-outlined text-[24px]">support_agent</span>
                    </div>
                    <div class="flex flex-col gap-space-xs">
                        <span class="font-title-md text-title-md text-primary font-bold">Layanan Bantuan &amp; Koordinasi Lapangan</span>
                        <p class="font-body-md text-body-md text-secondary leading-relaxed max-w-2xl">
                            Butuh bantuan terkait status persetujuan atau kendala operasional alsintan di sawah? Hubungi Balai Pengelola Desa Makmur Agraris di WhatsApp <span class="font-semibold text-on-surface">0812-4567-890</span> (Senin – Sabtu, 06:00 – 17:00 WIB).
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-space-sm w-full md:w-auto shrink-0">
                    <a class="w-full md:w-auto inline-flex items-center justify-center gap-space-xs px-space-lg py-2.5 rounded-xl bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md shadow-md transition-colors" href="https://wa.me/628124567890" rel="noopener noreferrer" target="_blank">
                        <span class="material-symbols-outlined text-[20px]">chat</span>
                        <span>WhatsApp Posko UPJA</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer class="w-full bg-surface-container-low mt-space-2xl">
    <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="pt-space-md border-t border-outline-variant/40 flex flex-col sm:flex-row items-center justify-between gap-space-sm text-secondary font-label-sm text-label-sm">
            <span>© 2026 Pemerintah Desa Makmur Agraris • Balai Pengelola Alsintan Terpadu</span>
            <span>Didukung oleh Dinas Pertanian &amp; Ketahanan Pangan</span>
        </div>
    </div>
</footer>

<script>
    let activeStatusFilter = 'all';

    function filterByStatus(status, btn) {
        activeStatusFilter = status;

        document.querySelectorAll('.status-tab').forEach(tab => {
            tab.className = "status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-surface-container hover:bg-surface-container-high text-on-surface shrink-0 transition-colors";
        });
        btn.className = "status-tab inline-flex items-center gap-space-xs px-space-md py-2 rounded-full font-label-md text-label-md bg-primary text-on-primary shadow-sm shrink-0";

        applyLoanFilters();
    }

    function applyLoanFilters() {
        const query = document.getElementById('loanSearchInput').value.toLowerCase();
        document.querySelectorAll('.loan-card').forEach(card => {
            const cardStatus = card.getAttribute('data-status');
            const searchData = card.getAttribute('data-search');
            const matchStatus = (activeStatusFilter === 'all' || cardStatus === activeStatusFilter);
            const matchQuery = searchData.includes(query);
            card.style.display = (matchStatus && matchQuery) ? 'block' : 'none';
        });
    }
</script>
</body>
</html>