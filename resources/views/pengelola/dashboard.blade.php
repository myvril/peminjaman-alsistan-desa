<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard Pengelola Desa - Sistem Peminjaman Alsintan</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700&family=Inter:wght@400;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
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
                        "background": "#f9f9ff", "on-primary": "#ffffff", "on-secondary-container": "#57657a",
                        "on-secondary": "#ffffff", "surface-variant": "#d8e3fb", "on-error-container": "#93000a",
                        "surface-dim": "#cfdaf2", "surface-bright": "#f9f9ff", "surface-container-high": "#dee8ff",
                        "secondary": "#515f74", "tertiary":"#5a2e00", "primary-fixed-dim": "#8ed6aa",
                        "on-primary-container": "#8ad2a7", "on-secondary-fixed": "#0d1c2e", "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#ffb77d", "on-surface-variant": "#404942", "inverse-surface": "#263143",
                        "surface-container": "#e7eeff", "on-primary-fixed-variant": "#005232", "on-tertiary-fixed-variant": "#6e3900",
                        "primary-fixed": "#a9f3c5", "secondary-fixed-dim": "#b9c7df", "surface-tint": "#226b47",
                        "inverse-primary": "#8ed6aa", "tertiary-container": "#7c4100", "on-background": "#111c2d",
                        "error-container": "#ffdad6", "on-primary-fixed": "#002111", "on-secondary-fixed-variant": "#3a485b",
                        "on-surface": "#111c2d", "secondary-container": "#d5e3fc", "primary-container": "#0d5c3a",
                        "secondary-fixed": "#d5e3fc", "primary": "#004328", "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff", "surface": "#f9f9ff", "error": "#ba1a1a", "on-tertiary-fixed": "#2f1500",
                        "surface-container-highest": "#d8e3fb", "outline": "#707971", "surface-container-low": "#f0f3ff",
                        "inverse-on-surface": "#ecf1ff", "outline-variant": "#bfc9c0", "on-tertiary-container": "#ffb273", "tertiary-fixed": "#ffdcc3"
                    },
                    "borderRadius": { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
                    "spacing": { "space-xl": "2rem", "gutter-mobile": "1rem", "space-md": "1rem", "space-xs": "0.25rem", "margin-mobile": "1rem", "gutter": "1.5rem", "space-lg": "1.5rem", "space-2xl": "3rem", "space-sm": "0.5rem", "margin": "2rem" },
                    "fontFamily": {
                        "headline-lg": ["Plus Jakarta Sans"], "label-sm": ["Inter"], "headline-sm": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"], "label-md": ["Inter"], "body-sm": ["Inter"], "title-lg": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"], "body-md": ["Inter"], "title-md": ["Plus Jakarta Sans"],
                        "label-lg": ["Inter"], "display-lg-mobile": ["Plus Jakarta Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.005em", "fontWeight": "600" }]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased">

<!-- SIDEBAR NAVIGASI PENGELOLA -->
<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 hidden lg:flex flex-col justify-between">
    <div class="flex flex-col">
        <div class="h-16 px-space-lg flex items-center gap-space-sm bg-surface-container-lowest border-b border-outline-variant/20">
            <div class="w-9 h-9 rounded-xl bg-primary-container flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined text-[20px]">agriculture</span>
            </div>
            <div class="flex flex-col">
                <span class="font-title-md text-title-md text-primary tracking-tight">Alsintan Desa</span>
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Panel Pengelola</span>
            </div>
        </div>
        <div class="px-space-md py-space-sm">
            <div class="px-space-md py-space-xs mb-space-xs">
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Menu Utama</span>
            </div>
            <nav class="flex flex-col gap-space-xs">
                <a aria-current="page" class="flex items-center gap-space-sm px-space-md py-space-sm transition-colors bg-primary-container text-on-primary font-title-md rounded-xl shadow-sm" href="{{ route('pengelola.dashboard') }}">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    <span>Dashboard &amp; Pengajuan</span>
                </a>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('pengelola.alsintan.index') }}">
                    <span class="material-symbols-outlined text-[20px]">precision_manufacturing</span>
                    <span>Kelola Data Alsintan</span>
                </a>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('pengelola.laporan') }}">
                    <span class="material-symbols-outlined text-[20px]">bar_chart</span>
                    <span>Laporan Peminjaman</span>
                </a>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('pengelola.log') }}">
                    <span class="material-symbols-outlined text-[20px]">history</span>
                    <span>Log Aktivitas</span>
                </a>
            </nav>
        </div>
    </div>

    <div class="p-space-md flex flex-col gap-space-sm">
        <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
            <div class="flex items-center justify-between">
                <span class="font-label-sm text-label-sm text-secondary uppercase">Status Sistem</span>
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            </div>
            <span class="font-label-md text-label-md text-on-surface">UPJA Makmur Agraris</span>
            <span class="font-body-sm text-body-sm text-secondary">Pengelola Desa Aktif</span>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center gap-space-xs px-space-md py-2.5 rounded-xl bg-error-container text-error hover:bg-error hover:text-on-error font-label-md text-label-md transition-colors">
                <span class="material-symbols-outlined text-[18px]">logout</span>
                <span>Keluar Panel</span>
            </button>
        </form>
    </div>
</aside>

<div class="lg:pl-72 flex flex-col min-h-screen">
    <!-- TOP HEADER -->
    <header class="fixed top-0 left-0 lg:left-72 right-0 h-16 bg-surface-container-lowest/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-40 flex items-center justify-between px-space-lg">
        <div class="flex items-center gap-space-md w-96">
            <div class="relative w-full flex items-center">
                <span class="material-symbols-outlined absolute left-space-md text-secondary text-[20px]">search</span>
                <input id="topSearchInput" onkeyup="filterTable()" class="w-full h-10 pl-10 pr-space-md rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm placeholder:text-secondary focus:outline-none focus:ring-2 focus:ring-primary-container transition-all" placeholder="Cari peminjam, nomor pengajuan, atau alsintan..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-space-lg">
            <div class="flex items-center gap-space-sm">
                <div class="text-right hidden sm:flex flex-col">
                    <span class="font-label-lg text-label-lg text-on-surface leading-tight">{{ Auth::user()->nama }}</span>
                    <span class="font-label-sm text-label-sm text-secondary">Pengelola Desa</span>
                </div>
                <div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">admin_panel_settings</span>
                </div>
            </div>
        </div>
    </header>

    <main class="w-full pt-20 px-space-lg pb-space-2xl bg-background flex-1">
        <div class="flex flex-col w-full">

            <!-- FLASH NOTIFICATIONS & VALIDATION ERRORS -->
            @if(session('success'))
                <div class="mb-space-md p-4 rounded-xl bg-primary-fixed text-on-primary-fixed font-label-md flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-space-md p-4 rounded-xl bg-error-container text-on-error-container font-label-md flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">error</span>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <!-- Top Welcome & Master Action Header -->
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-space-md mb-space-lg">
                <div>
                    <div class="flex items-center gap-space-xs mb-1">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-primary/10 text-primary">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                            Sistem Peminjaman Alsintan Desa
                        </span>
                        <span class="text-secondary text-xs">• Verifikasi &amp; Serah Terima (FR-14 s/d FR-17)</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
                        Selamat Datang, {{ Auth::user()->nama }}
                    </h1>
                    <p class="font-body-md text-body-md text-secondary mt-1 max-w-2xl">
                        Pantau ketersediaan unit alsintan, tinjau pengajuan petani, dan catat penyerahan maupun pengembalian alat secara tertib.
                    </p>
                </div>

                <!-- Quick Action Group -->
                <div class="flex items-center gap-space-sm flex-wrap">
                    <a href="{{ route('pengelola.laporan') }}" class="inline-flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-surface-container-lowest text-secondary hover:text-on-surface hover:bg-surface-container shadow-sm font-label-md text-label-md transition-all">
                        <span class="material-symbols-outlined text-[18px]">bar_chart</span>
                        Lihat Laporan Peminjaman
                    </a>
                    <a href="{{ route('pengelola.alsintan.index') }}" class="inline-flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-primary text-on-primary hover:bg-primary-container shadow-sm font-label-md text-label-md transition-all">
                        <span class="material-symbols-outlined text-[18px]">precision_manufacturing</span>
                        Kelola Armada Alsintan
                    </a>
                </div>
            </div>

            <!-- 4 Top KPI Metrics Cards (DINAMIS DARI CONTROLLER) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md mb-space-lg">
                <!-- Card 1: Ketersediaan Alsintan -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[22px]">agriculture</span>
                        </div>
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-primary-fixed text-on-primary-fixed">
                            Armada Desa
                        </span>
                    </div>
                    <div class="mt-space-md">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Alsintan Tersedia</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="font-headline-lg text-headline-lg text-on-surface">{{ $alsintanTersedia ?? 0 }} <span class="text-secondary text-xl font-normal">/ {{ $totalAlsintan ?? 0 }} Unit</span></span>
                        </div>
                        <p class="font-body-sm text-body-sm text-secondary mt-1">
                            Unit dengan status operasional siap pakai
                        </p>
                    </div>
                </div>

                <!-- Card 2: Pengajuan Menunggu -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div class="w-10 h-10 rounded-lg bg-tertiary-fixed/60 text-tertiary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[22px]">pending_actions</span>
                        </div>
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-tertiary-fixed-dim text-on-tertiary-fixed">
                            Butuh Verifikasi
                        </span>
                    </div>
                    <div class="mt-space-md">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Menunggu Persetujuan</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="font-headline-lg text-headline-lg text-on-surface">{{ $pengajuanMenunggu ?? 0 }} <span class="text-secondary text-xl font-normal">Berkas</span></span>
                        </div>
                        <p class="font-body-sm text-body-sm text-secondary mt-1">
                            Perlu validasi jadwal anti-bentrok (BR-08)
                        </p>
                    </div>
                </div>

                <!-- Card 3: Peminjaman Berlangsung -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div class="w-10 h-10 rounded-lg bg-secondary-container text-on-secondary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-[22px]">directions_run</span>
                        </div>
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-secondary-fixed text-on-secondary-fixed">
                            Operasional Lapangan
                        </span>
                    </div>
                    <div class="mt-space-md">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Peminjaman Berlangsung</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="font-headline-lg text-headline-lg text-on-surface">{{ $sedangBerlangsung ?? 0 }} <span class="text-secondary text-xl font-normal">Transaksi</span></span>
                        </div>
                        <p class="font-body-sm text-body-sm text-secondary mt-1">
                            Unit sedang digunakan di lahan petani
                        </p>
                    </div>
                </div>

                <!-- Card 4: Total Pendapatan Sewa -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div class="w-10 h-10 rounded-lg bg-primary-fixed text-on-primary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-[22px]">payments</span>
                        </div>
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-xs font-semibold bg-primary/10 text-primary">
                            PADes Alsintan
                        </span>
                    </div>
                    <div class="mt-space-md">
                        <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Total Pemasukan Sewa</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="font-headline-md text-headline-md text-primary tracking-tight font-bold">
                                Rp {{ number_format($totalPendapatan ?? 0, 0, ',', '.') }}
                            </span>
                        </div>
                        <p class="font-body-sm text-body-sm text-secondary mt-1">
                            Akumulasi pengajuan disetujui &amp; selesai
                        </p>
                    </div>
                </div>
            </div>

            <!-- Main Section: Grid with Processing Table & SOP Sidebar -->
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg">
                <!-- Left 9 Columns: Main Processing Table -->
                <div class="xl:col-span-9 flex flex-col gap-space-md">
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md pb-space-sm">
                            <div>
                                <h2 class="font-title-lg text-title-lg text-on-surface">
                                    Daftar Pengajuan &amp; Serah Terima Alsintan
                                </h2>
                                <p class="font-body-sm text-body-sm text-secondary">
                                    Kelola persetujuan (FR-14), catat penyerahan alat (FR-15), catat pengembalian (FR-16), dan penolakan beserta catatan (FR-17).
                                </p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-surface-container-low text-secondary">
                                    Total Berkas: <strong class="text-on-surface">{{ $peminjamans->count() }}</strong>
                                </span>
                            </div>
                        </div>

                        <!-- Filter & Search Toolbar -->
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-space-sm pt-space-sm">
                            <div class="sm:col-span-8 relative">
                                <span class="material-symbols-outlined absolute left-3 top-2.5 text-secondary text-[18px]">search</span>
                                <input id="tableSearchInput" onkeyup="filterTable()" class="w-full h-10 pl-9 pr-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm placeholder:text-secondary focus:outline-none focus:ring-2 focus:ring-primary transition-all" placeholder="Cari nama peminjam, nomor HP, lokasi lahan, atau nama alsintan..." type="text"/>
                            </div>
                            <div class="sm:col-span-4">
                                <select id="filterStatus" onchange="filterTable()" class="w-full h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm focus:outline-none focus:ring-2 focus:ring-primary transition-all">
                                    <option value="all">Semua Status Pengajuan</option>
                                    <option value="menunggu">Menunggu Persetujuan</option>
                                    <option value="disetujui">Disetujui (Siap Ambil)</option>
                                    <option value="berlangsung">Sedang Berlangsung</option>
                                    <option value="selesai">Selesai Dikembalikan</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="dibatalkan">Dibatalkan</option>
                                </select>
                            </div>
                        </div>

                        <!-- Master Table View (DINAMIS DARI DATABASE) -->
                        <div class="overflow-x-auto mt-space-md -mx-space-md sm:mx-0">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider">
                                        <th class="py-3 px-4 rounded-l-lg">Kode &amp; Peminjam</th>
                                        <th class="py-3 px-4">Unit Alsintan (Multi-Unit)</th>
                                        <th class="py-3 px-4">Jadwal &amp; Lokasi Lahan</th>
                                        <th class="py-3 px-4">Total Biaya</th>
                                        <th class="py-3 px-4 text-center">Status</th>
                                        <th class="py-3 px-4 rounded-r-lg text-right">Aksi Pengelola</th>
                                    </tr>
                                </thead>
                                <tbody class="font-body-sm text-body-sm divide-y divide-outline-variant/20" id="applicationTableBody">
                                    @forelse($peminjamans as $pinjam)
                                        @php
                                            $status = $pinjam->status_peminjaman;
                                            $kodePmj = '#PMJ-' . str_pad($pinjam->id_peminjaman, 5, '0', STR_PAD_LEFT);
                                            $namaPeminjam = $pinjam->peminjam->nama ?? 'Petani';
                                            $noHp = $pinjam->peminjam->no_hp ?? '-';
                                            $details = $pinjam->detail ?? $pinjam->detailPeminjaman ?? collect();
                                            $daftarAlatText = $details->map(fn($d) => $d->alsintan->nama_alat ?? 'Alsintan')->implode(', ');
                                            $searchText = strtolower($kodePmj . ' ' . $namaPeminjam . ' ' . $noHp . ' ' . $pinjam->lokasi_lahan . ' ' . $daftarAlatText);
                                        @endphp

                                        <tr class="loan-row hover:bg-surface-container-low/70 transition-colors"
                                            data-status="{{ $status }}"
                                            data-search="{{ $searchText }}">
                                            <!-- Peminjam -->
                                            <td class="py-3.5 px-4 align-top">
                                                <div class="flex flex-col">
                                                    <span class="font-label-sm text-label-sm text-primary">{{ $kodePmj }}</span>
                                                    <span class="font-title-md text-title-md text-on-surface">{{ $namaPeminjam }}</span>
                                                    <span class="text-secondary text-xs mt-0.5 flex items-center gap-1">
                                                        <span class="material-symbols-outlined text-[13px]">call</span>
                                                        {{ $noHp }}
                                                    </span>
                                                    <span class="text-[11px] text-secondary mt-0.5">
                                                        Ajuan: {{ \Carbon\Carbon::parse($pinjam->tanggal_pengajuan)->format('d/m/Y H:i') }}
                                                    </span>
                                                </div>
                                            </td>

                                            <!-- Unit Alsintan -->
                                            <td class="py-3.5 px-4 align-top">
                                                <div class="flex flex-col gap-2">
                                                    @foreach($details as $detail)
                                                        @php $alat = $detail->alsintan; @endphp
                                                        <div class="flex items-center gap-2.5">
                                                            <img class="w-10 h-10 rounded-lg object-cover bg-surface-container shadow-sm shrink-0"
                                                                 src="{{ asset('images/' . ($alat->foto ?? 'default.jpg')) }}"
                                                                 alt="{{ $alat->nama_alat ?? 'Alsintan' }}"
                                                                 onerror="this.src='https://placehold.co/100x100/004328/ffffff?text=Unit'"/>
                                                            <div class="flex flex-col">
                                                                <span class="font-label-md text-label-md text-on-surface leading-tight">{{ $alat->nama_alat ?? 'Unit Alsintan' }}</span>
                                                                <span class="text-[11px] text-secondary uppercase">{{ $alat->jenis ?? '-' }}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </td>

                                            <!-- Jadwal & Lokasi -->
                                            <td class="py-3.5 px-4 align-top">
                                                <div class="flex flex-col">
                                                    <span class="font-label-md text-label-md text-on-surface">
                                                        {{ \Carbon\Carbon::parse($pinjam->waktu_mulai)->translatedFormat('d M Y, H:i') }}
                                                    </span>
                                                    <span class="text-secondary text-xs">
                                                        s/d {{ \Carbon\Carbon::parse($pinjam->waktu_selesai)->translatedFormat('d M Y, H:i') }} WIB
                                                    </span>
                                                    <span class="text-primary text-[11px] font-medium flex items-center gap-0.5 mt-1">
                                                        <span class="material-symbols-outlined text-[13px]">pin_drop</span>
                                                        {{ $pinjam->lokasi_lahan }}
                                                    </span>
                                                    <span class="text-[11px] text-secondary line-clamp-1" title="{{ $pinjam->keperluan }}">
                                                        Keperluan: {{ $pinjam->keperluan }}
                                                    </span>
                                                </div>
                                            </td>

                                            <!-- Total Biaya -->
                                            <td class="py-3.5 px-4 align-top">
                                                <div class="flex flex-col">
                                                    <span class="font-title-md text-title-md text-on-surface">
                                                        Rp {{ number_format($pinjam->total_biaya, 0, ',', '.') }}
                                                    </span>
                                                    <span class="text-[11px] text-secondary">Estimasi Sewa</span>
                                                </div>
                                            </td>

                                            <!-- Status -->
                                            <td class="py-3.5 px-4 text-center align-top">
                                                @if($status === 'menunggu')
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-tertiary-fixed/60 text-tertiary">
                                                        <span class="material-symbols-outlined text-[14px]">schedule</span>
                                                        Menunggu
                                                    </span>
                                                @elseif($status === 'disetujui')
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-secondary-container text-on-secondary-container">
                                                        <span class="material-symbols-outlined text-[14px]">task_alt</span>
                                                        Disetujui
                                                    </span>
                                                @elseif($status === 'berlangsung')
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-primary/10 text-primary">
                                                        <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                                        Berlangsung
                                                    </span>
                                                @elseif($status === 'selesai')
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-surface-variant text-secondary">
                                                        <span class="material-symbols-outlined text-[14px]">archive</span>
                                                        Selesai
                                                    </span>
                                                @elseif($status === 'ditolak')
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-error-container text-error">
                                                        <span class="material-symbols-outlined text-[14px]">cancel</span>
                                                        Ditolak
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-surface-container text-secondary">
                                                        Dibatalkan
                                                    </span>
                                                @endif
                                            </td>

                                            <!-- Aksi Alur Kerja (FR-14, FR-15, FR-16, FR-17) -->
                                            <td class="py-3.5 px-4 text-right align-top">
                                                <div class="flex flex-col items-end gap-1.5">
                                                    @if($status === 'menunggu')
                                                        <div class="flex items-center justify-end gap-1.5">
                                                            <!-- FR-14: Setujui -->
                                                            <form action="{{ route('pengelola.peminjaman.setujui', $pinjam->id_peminjaman) }}" method="POST" onsubmit="return confirm('Setujui pengajuan {{ $kodePmj }} atas nama {{ addslashes($namaPeminjam) }}?')">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm hover:bg-primary-container shadow-sm transition-all">
                                                                    <span class="material-symbols-outlined text-[16px]">check</span>
                                                                    Setujui
                                                                </button>
                                                            </form>

                                                            <!-- FR-17: Tolak dengan Catatan Wajib -->
                                                            <button type="button"
                                                                    onclick="openRejectModal('{{ route('pengelola.peminjaman.tolak', $pinjam->id_peminjaman) }}', '{{ $kodePmj }}', '{{ addslashes($namaPeminjam) }}', '{{ addslashes($daftarAlatText) }}')"
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-error-container text-on-error-container font-label-sm text-label-sm hover:bg-error hover:text-on-error transition-all">
                                                                <span class="material-symbols-outlined text-[16px]">close</span>
                                                                Tolak
                                                            </button>
                                                        </div>
                                                    @elseif($status === 'disetujui')
                                                        <!-- FR-15: Catat Penyerahan Alsintan -->
                                                        <form action="{{ route('pengelola.peminjaman.serahTerima', $pinjam->id_peminjaman) }}" method="POST" onsubmit="return confirm('Catat penyerahan fisik unit alsintan kepada {{ addslashes($namaPeminjam) }} sekarang?')">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-sm text-label-sm hover:opacity-95 shadow-sm transition-all">
                                                                <span class="material-symbols-outlined text-[16px]">inventory_2</span>
                                                                Catat Penyerahan
                                                            </button>
                                                        </form>
                                                    @elseif($status === 'berlangsung')
                                                        <!-- FR-16: Catat Pengembalian Alsintan -->
                                                        <form action="{{ route('pengelola.peminjaman.kembali', $pinjam->id_peminjaman) }}" method="POST" onsubmit="return confirm('Konfirmasi bahwa unit alsintan dari {{ addslashes($namaPeminjam) }} telah dikembalikan ke balai desa?')">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-primary-container text-on-primary font-label-sm text-label-sm hover:opacity-95 shadow-sm transition-all">
                                                                <span class="material-symbols-outlined text-[16px]">call_received</span>
                                                                Catat Pengembalian
                                                            </button>
                                                        </form>
                                                    @else
                                                        <span class="text-xs text-secondary italic">Selesai diproses</span>
                                                    @endif

                                                    @if($pinjam->catatan_pengelola)
                                                        <span class="text-[11px] text-secondary max-w-[200px] text-right line-clamp-2" title="{{ $pinjam->catatan_pengelola }}">
                                                            Catatan: "{{ $pinjam->catatan_pengelola }}"
                                                        </span>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="py-10 text-center text-secondary">
                                                Belum ada data pengajuan peminjaman alsintan.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Right 3 Columns: SOP & Quick Navigation -->
                <div class="xl:col-span-3 flex flex-col gap-space-md">
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm">
                        <h4 class="font-title-md text-title-md text-on-surface flex items-center gap-2 mb-3">
                            <span class="material-symbols-outlined text-[18px] text-primary">rule</span>
                            SOP Pengelola (FR-14 s/d FR-17)
                        </h4>
                        <ul class="space-y-2.5 text-xs text-secondary">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-[16px] text-primary shrink-0 mt-0.5">check_circle</span>
                                <span><strong>Persetujuan (FR-14):</strong> Sistem otomatis memblokir persetujuan jika jadwal bentrok (BR-08).</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-[16px] text-primary shrink-0 mt-0.5">check_circle</span>
                                <span><strong>Penyerahan (FR-15):</strong> Klik <em>Catat Penyerahan</em> saat petani mengambil unit di balai desa.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-[16px] text-primary shrink-0 mt-0.5">check_circle</span>
                                <span><strong>Pengembalian (FR-16):</strong> Klik <em>Catat Pengembalian</em> setelah memeriksa kondisi fisik alat.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-[16px] text-error shrink-0 mt-0.5">cancel</span>
                                <span><strong>Penolakan (FR-17):</strong> Wajib mengisi alasan penolakan yang jelas untuk petani.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-primary text-on-primary rounded-xl p-space-md shadow-sm">
                        <span class="font-label-sm text-label-sm text-primary-fixed uppercase tracking-wider">Audit &amp; Transparansi</span>
                        <h4 class="font-title-md text-title-md text-on-primary mt-1">Riwayat Log Aktivitas (FR-20)</h4>
                        <p class="font-body-sm text-body-sm text-on-primary/80 mt-1">
                            Setiap perubahan status pengajuan dan pengelolaan unit alsintan otomatis tercatat dalam log audit pengelola.
                        </p>
                        <div class="mt-space-sm pt-space-sm">
                            <a href="{{ route('pengelola.log') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-on-primary text-primary font-label-sm text-label-sm font-semibold hover:bg-primary-fixed transition-colors">
                                <span>Buka Log Aktivitas</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- MODAL PENOLAKAN PENGAJUAN (FR-17 - TERHUBUNG KE PATCH /pengelola/peminjaman/{id}/tolak) -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/50 backdrop-blur-xs hidden transition-opacity" id="rejectionModal">
    <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full mx-4 shadow-xl overflow-hidden">
        <div class="p-space-md bg-error-container text-on-error-container flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[22px]">assignment_late</span>
                <h3 class="font-title-md text-title-md">Tolak Pengajuan Alsintan (FR-17)</h3>
            </div>
            <button class="p-1 rounded-lg hover:bg-black/5 text-on-error-container" onclick="closeRejectModal()" type="button">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <form id="rejectionForm" method="POST" action="" class="p-space-md flex flex-col gap-space-md">
            @csrf
            @method('PATCH')
            <div>
                <span class="font-label-sm text-label-sm text-secondary uppercase">Berkas Pengajuan / Pemohon</span>
                <p class="font-title-md text-title-md text-on-surface mt-0.5" id="modalApplicantDetails">-</p>
            </div>
            <div class="flex flex-col gap-1">
                <label class="font-label-md text-label-md text-on-surface flex items-center justify-between" for="catatanPengelola">
                    <span>Catatan Alasan Penolakan <span class="text-error">* (Wajib diisi)</span></span>
                </label>
                <textarea class="w-full p-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm placeholder:text-secondary focus:outline-none focus:ring-2 focus:ring-error transition-all"
                          id="catatanPengelola"
                          name="catatan_pengelola"
                          placeholder="Tuliskan alasan penolakan secara spesifik agar petani dapat mengajukan jadwal ulang..."
                          required
                          rows="4"></textarea>
            </div>
            <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                <button class="px-4 py-2 rounded-lg bg-surface-container text-secondary font-label-md text-label-md hover:text-on-surface transition-all" onclick="closeRejectModal()" type="button">
                    Batal
                </button>
                <button class="px-4 py-2 rounded-lg bg-error text-on-error font-label-md text-label-md hover:opacity-90 shadow-sm transition-all flex items-center gap-1.5" type="submit">
                    <span class="material-symbols-outlined text-[16px]">send</span>
                    Konfirmasi Penolakan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openRejectModal(actionUrl, kodePmj, applicantName, machineNames) {
        const modal = document.getElementById('rejectionModal');
        const form = document.getElementById('rejectionForm');
        const details = document.getElementById('modalApplicantDetails');

        form.action = actionUrl;
        details.textContent = `${kodePmj} • ${applicantName} (${machineNames})`;
        document.getElementById('catatanPengelola').value = '';
        modal.classList.remove('hidden');
    }

    function closeRejectModal() {
        document.getElementById('rejectionModal').classList.add('hidden');
    }

    function filterTable() {
        const topQuery = (document.getElementById('topSearchInput')?.value || '').toLowerCase();
        const tableQuery = (document.getElementById('tableSearchInput')?.value || '').toLowerCase();
        const query = topQuery || tableQuery;
        const statusFilter = document.getElementById('filterStatus').value;

        document.querySelectorAll('.loan-row').forEach(row => {
            const rowStatus = row.getAttribute('data-status');
            const rowSearch = row.getAttribute('data-search');
            const matchStatus = (statusFilter === 'all' || rowStatus === statusFilter);
            const matchSearch = rowSearch.includes(query);
            row.style.display = (matchStatus && matchSearch) ? '' : 'none';
        });
    }

    window.addEventListener('click', function(e) {
        const modal = document.getElementById('rejectionModal');
        if (e.target === modal) closeRejectModal();
    });
</script>
</body>
</html>