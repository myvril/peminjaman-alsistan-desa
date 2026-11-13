<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kelola Data Alsintan - Panel Pengelola Desa</title>
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
                        "secondary": "#515f74", "tertiary": "#5a2e00", "primary-fixed-dim": "#8ed6aa",
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
                        "label-lg": ["Inter"], "headline-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "body-lg": ["16px", { "lineHeight": "26px", "fontWeight": "400" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
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
                <a class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('pengelola.dashboard') }}">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    <span>Dashboard &amp; Pengajuan</span>
                </a>
                <a aria-current="page" class="flex items-center gap-space-sm px-space-md py-space-sm transition-colors bg-primary-container text-on-primary font-title-md rounded-xl shadow-sm" href="{{ route('pengelola.alsintan.index') }}">
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
                <span class="font-label-sm text-label-sm text-secondary uppercase">Status Operasional</span>
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
                <input id="topSearchAlsintan" onkeyup="filterAlsintan()" class="w-full h-10 pl-10 pr-space-md rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm placeholder:text-secondary focus:outline-none focus:ring-2 focus:ring-primary-container transition-all" placeholder="Cari nama alsintan, jenis, atau nomor registrasi..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-space-sm">
            <div class="text-right hidden sm:flex flex-col">
                <span class="font-label-lg text-label-lg text-on-surface leading-tight">{{ Auth::user()->nama }}</span>
                <span class="font-label-sm text-label-sm text-secondary">Pengelola Desa</span>
            </div>
            <div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-on-primary text-[18px]">admin_panel_settings</span>
            </div>
        </div>
    </header>

    <main class="w-full pt-20 px-space-lg pb-space-2xl bg-background flex-1">
        <div class="flex flex-col w-full gap-space-lg">

            <!-- Flash Messages -->
            @if(session('success'))
                <div class="p-4 rounded-xl bg-primary-fixed text-on-primary-fixed font-label-md flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="p-4 rounded-xl bg-error-container text-on-error-container font-label-md flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">error</span>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <!-- TOP CONTEXT BAR -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                <div class="flex flex-col gap-space-xs">
                    <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs text-secondary font-label-md text-label-md">
                        <a href="{{ route('pengelola.dashboard') }}" class="hover:text-primary">Panel Pengelola</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-primary font-title-md">Kelola Data Alsintan (FR-08)</span>
                    </nav>
                    <div class="flex items-center gap-space-sm mt-space-xs flex-wrap">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-[14px]">domain</span>
                            UPJA Makmur Agraris
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-[14px]">verified_user</span>
                            Proteksi Penghapusan Aktif (BR-11)
                        </span>
                    </div>
                </div>

                <button type="button" onclick="openTambahModal()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">add_circle</span>
                    <span>+ Tambah Alsintan Baru</span>
                </button>
            </div>

            @php
                $totalUnit = $alsintans->count();
                $tersediaUnit = $alsintans->where('status_operasional', 'tersedia')->count();
                $dipinjamUnit = $alsintans->where('status_operasional', 'dipinjam')->count();
                $perawatanUnit = $alsintans->where('status_operasional', 'perawatan')->count();
            @endphp

            <!-- Header & KPI Strip -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg">
                <div class="flex flex-col gap-space-xs max-w-2xl">
                    <div class="inline-flex items-center gap-2 text-primary font-label-sm uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[16px]">precision_manufacturing</span>
                        <span>Inventaris &amp; Kontrol Armada (FR-08)</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Kelola Data Alsintan Desa</h1>
                    <p class="font-body-md text-body-md text-secondary">
                        Inventarisasi armada alat dan mesin pertanian desa, pengaturan tarif sewa, nomor registrasi, foto unit, dan status operasional balai desa.
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm w-full lg:w-auto">
                    <div class="flex flex-col p-3 rounded-lg bg-surface-container-lowest shadow-sm min-w-[125px]">
                        <span class="font-label-sm text-secondary uppercase">Total Armada</span>
                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold">{{ $totalUnit }} <span class="font-body-sm font-normal text-secondary">Unit</span></span>
                    </div>
                    <div class="flex flex-col p-3 rounded-lg bg-surface-container-lowest shadow-sm min-w-[125px]">
                        <span class="font-label-sm text-primary uppercase">Tersedia</span>
                        <span class="font-headline-sm text-headline-sm text-primary font-bold">{{ $tersediaUnit }} <span class="font-body-sm font-normal text-secondary">Unit</span></span>
                    </div>
                    <div class="flex flex-col p-3 rounded-lg bg-surface-container-lowest shadow-sm min-w-[125px]">
                        <span class="font-label-sm text-tertiary uppercase">Dipinjam</span>
                        <span class="font-headline-sm text-headline-sm text-tertiary font-bold">{{ $dipinjamUnit }} <span class="font-body-sm font-normal text-secondary">Unit</span></span>
                    </div>
                    <div class="flex flex-col p-3 rounded-lg bg-surface-container-lowest shadow-sm min-w-[125px]">
                        <span class="font-label-sm text-error uppercase">Perawatan</span>
                        <span class="font-headline-sm text-headline-sm text-error font-bold">{{ $perawatanUnit }} <span class="font-body-sm font-normal text-secondary">Unit</span></span>
                    </div>
                </div>
            </div>

            <!-- Filter & Search Toolbar -->
            <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md bg-surface-container-lowest p-space-md rounded-xl shadow-sm">
                <div class="flex flex-1 flex-col sm:flex-row items-stretch sm:items-center gap-space-sm">
                    <div class="relative flex-1 min-w-[240px]">
                        <span class="material-symbols-outlined absolute left-3 top-2.5 text-secondary text-[20px]">search</span>
                        <input id="searchAlsintanInput" onkeyup="filterAlsintan()" class="w-full h-10 pl-10 pr-space-md rounded-lg bg-surface-container-low text-on-surface font-body-sm placeholder:text-secondary focus:outline-none focus:ring-2 focus:ring-primary-container" placeholder="Cari nama alsintan, jenis mesin, atau nomor registrasi..." type="text"/>
                    </div>
                    <div class="flex items-center gap-space-sm">
                        <select id="filterJenisAlsintan" onchange="filterAlsintan()" class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container cursor-pointer">
                            <option value="all">Semua Jenis Alsintan</option>
                            @foreach($alsintans->pluck('jenis')->unique() as $jenis)
                                <option value="{{ strtolower($jenis) }}">{{ $jenis }}</option>
                            @endforeach
                        </select>
                        <select id="filterStatusAlsintan" onchange="filterAlsintan()" class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container cursor-pointer">
                            <option value="all">Semua Status Operasional</option>
                            <option value="tersedia">Tersedia</option>
                            <option value="dipinjam">Dipinjam</option>
                            <option value="perawatan">Perawatan</option>
                        </select>
                    </div>
                </div>
                <div class="text-secondary font-label-sm">
                    Total <strong class="text-on-surface">{{ $totalUnit }}</strong> unit alsintan terdaftar
                </div>
            </div>

            <!-- Alsintan Inventory Master Table (DINAMIS DARI DATABASE) -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-secondary font-label-sm uppercase tracking-wider">
                                <th class="py-3.5 px-4 w-12 text-center">No</th>
                                <th class="py-3.5 px-4 w-24">Foto</th>
                                <th class="py-3.5 px-4">Identitas &amp; Spesifikasi Aset</th>
                                <th class="py-3.5 px-4">Jenis Mesin</th>
                                <th class="py-3.5 px-4">Tarif Sewa</th>
                                <th class="py-3.5 px-4">Status Operasional</th>
                                <th class="py-3.5 px-4 text-right">Aksi &amp; Kebijakan BR-11</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container font-body-md text-on-surface">
                            @forelse($alsintans as $index => $alat)
                                @php
                                    $statusOp = $alat->status_operasional;
                                    // Cek apakah alsintan pernah/sedang terikat peminjaman aktif (BR-11)
                                    $hasActiveLoan = $alat->detailPeminjaman()
                                        ->whereHas('peminjaman', fn($q) => $q->whereIn('status_peminjaman', ['menunggu', 'disetujui', 'berlangsung']))
                                        ->exists();
                                    $searchData = strtolower($alat->nama_alat . ' ' . $alat->jenis . ' ' . ($alat->nomor_registrasi ?? '') . ' ' . ($alat->spesifikasi ?? ''));
                                @endphp
                                <tr class="alsintan-row hover:bg-surface-container-low/60 transition-colors {{ $statusOp === 'perawatan' ? 'bg-error-container/10' : ($statusOp === 'dipinjam' ? 'bg-tertiary-fixed/10' : '') }}"
                                    data-jenis="{{ strtolower($alat->jenis) }}"
                                    data-status="{{ $statusOp }}"
                                    data-search="{{ $searchData }}">
                                    <td class="py-4 px-4 text-center font-label-md text-secondary">{{ $index + 1 }}</td>
                                    <td class="py-4 px-4">
                                        <div class="w-20 h-14 rounded-lg overflow-hidden bg-surface-container shadow-inner">
                                            <img class="w-full h-full object-cover"
                                                 src="{{ asset('images/' . ($alat->foto ?? 'default.jpg')) }}"
                                                 alt="{{ $alat->nama_alat }}"
                                                 onerror="this.src='https://placehold.co/200x140/004328/ffffff?text=Alsintan'"/>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col gap-0.5">
                                            <span class="font-title-md text-title-md text-on-surface font-bold">{{ $alat->nama_alat }}</span>
                                            <div class="flex flex-wrap items-center gap-2 text-secondary font-label-sm">
                                                <span class="px-2 py-0.5 rounded bg-surface-container font-mono text-primary font-bold">
                                                    {{ $alat->nomor_registrasi ?? '#ALS-' . str_pad($alat->id_alsintan, 3, '0', STR_PAD_LEFT) }}
                                                </span>
                                                @if($alat->spesifikasi)
                                                    <span>•</span>
                                                    <span class="line-clamp-1">{{ $alat->spesifikasi }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-secondary-container text-on-secondary-container font-label-md">
                                            <span class="material-symbols-outlined text-[16px]">agriculture</span>
                                            {{ $alat->jenis }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-title-md text-on-surface font-bold">
                                                Rp {{ number_format($alat->tarif_sewa, 0, ',', '.') }}
                                            </span>
                                            <span class="font-label-sm text-primary font-semibold">Per {{ $alat->satuan_sewa }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        @if($statusOp === 'tersedia')
                                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant font-label-sm">
                                                <span class="w-2 h-2 rounded-full bg-primary"></span>
                                                Tersedia di Garasi
                                            </span>
                                        @elseif($statusOp === 'dipinjam')
                                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm font-semibold">
                                                <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                                                Sedang Dipinjam
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">build</span>
                                                Dalam Perawatan
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-4 px-4 text-right">
                                        <div class="flex items-center justify-end gap-1.5">
                                            <!-- Tombol Edit -->
                                            <button type="button"
                                                    onclick='openEditModal(@json($alat), "{{ route('pengelola.alsintan.update', $alat->id_alsintan) }}")'
                                                    class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md transition-colors">
                                                <span class="material-symbols-outlined text-[16px] text-secondary">edit</span>
                                                <span>Edit</span>
                                            </button>

                                            <!-- Tombol Hapus dengan Aturan BR-11 -->
                                            @if($hasActiveLoan || $statusOp === 'dipinjam')
                                                <div class="relative group inline-block">
                                                    <button disabled type="button" class="cursor-not-allowed opacity-50 inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-surface-container text-secondary font-label-md">
                                                        <span class="material-symbols-outlined text-[16px]">lock</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                    <div class="absolute bottom-full right-0 mb-2 hidden group-hover:flex flex-col w-64 p-2.5 rounded-lg bg-inverse-surface text-inverse-on-surface shadow-xl z-20 pointer-events-none text-left">
                                                        <div class="flex items-center gap-1 text-tertiary-fixed-dim font-label-sm font-bold">
                                                            <span class="material-symbols-outlined text-[14px]">gavel</span>
                                                            <span>Regulasi BR-11 Terkunci</span>
                                                        </div>
                                                        <p class="font-body-sm text-[11px] leading-tight mt-1">
                                                            Alsintan tidak dapat dihapus selama masih memiliki peminjaman aktif atau menunggu verifikasi.
                                                        </p>
                                                    </div>
                                                </div>
                                            @else
                                                <form action="{{ route('pengelola.alsintan.destroy', $alat->id_alsintan) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus unit {{ addslashes($alat->nama_alat) }} dari inventaris desa?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-flex items-center gap-1 px-2.5 py-1.5 rounded-lg bg-error-container/50 hover:bg-error-container text-on-error-container font-label-md transition-colors">
                                                        <span class="material-symbols-outlined text-[16px]">delete</span>
                                                        <span>Hapus</span>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="py-10 text-center text-secondary">
                                        Belum ada data unit alsintan. Klik <strong>+ Tambah Alsintan Baru</strong> untuk mulai mendaftarkan inventaris.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- SLIDE-OVER MODAL: TAMBAH ALSINTAN BARU (POST /pengelola/alsintan) -->
<div class="hidden relative z-50" id="modal-tambah-alsintan">
    <div class="fixed inset-0 bg-inverse-surface/40 backdrop-blur-xs transition-opacity" onclick="closeTambahModal()"></div>
    <form action="{{ route('pengelola.alsintan.store') }}" method="POST" enctype="multipart/form-data" class="fixed inset-y-0 right-0 max-w-xl w-full bg-surface-container-lowest shadow-2xl p-space-xl flex flex-col justify-between overflow-y-auto z-10">
        @csrf
        <div class="flex flex-col gap-space-lg">
            <div class="flex items-center justify-between pb-space-sm border-b border-surface-container">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px]">add_business</span>
                    </span>
                    <div>
                        <h2 class="font-title-lg text-title-lg text-on-surface">Tambah Unit Alsintan Baru</h2>
                        <span class="font-label-sm text-secondary">Registrasi Inventaris Aset Desa (FR-08)</span>
                    </div>
                </div>
                <button type="button" onclick="closeTambahModal()" class="w-8 h-8 rounded-lg flex items-center justify-center text-secondary hover:bg-surface-container">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>

            <div class="flex flex-col gap-space-md">
                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Nama &amp; Model Alsintan <span class="text-error">*</span></label>
                    <input name="nama_alat" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container" placeholder="Contoh: Traktor Roda Empat Kubota L5018" type="text"/>
                </div>

                <div class="grid grid-cols-2 gap-space-md">
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Jenis Alsintan <span class="text-error">*</span></label>
                        <input name="jenis" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container" placeholder="Contoh: Traktor Roda 4" type="text"/>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Nomor Registrasi Aset</label>
                        <input name="nomor_registrasi" class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container font-mono" placeholder="ALS-TRK-06" type="text"/>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-space-md">
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Tarif Sewa (Rp) <span class="text-error">*</span></label>
                        <input name="tarif_sewa" required min="0" class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container" placeholder="500000" type="number"/>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Satuan Sewa <span class="text-error">*</span></label>
                        <select name="satuan_sewa" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container">
                            <option value="hari">Per Hari</option>
                            <option value="jam">Per Jam</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Status Operasional Awal <span class="text-error">*</span></label>
                    <select name="status_operasional" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container">
                        <option value="tersedia">Tersedia (Siap Operasi)</option>
                        <option value="perawatan">Dalam Perawatan</option>
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Spesifikasi Mesin &amp; Kelengkapan</label>
                    <textarea name="spesifikasi" rows="3" class="p-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container" placeholder="Contoh: Daya mesin 50 HP, penggerak 4WD, lengkap bajak rotary & singkal."></textarea>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Foto Unit Alsintan (JPG/PNG, Maks 2MB)</label>
                    <input name="foto" type="file" accept="image/*" class="p-2 rounded-lg bg-surface-container-low text-on-surface font-body-sm"/>
                </div>
            </div>
        </div>

        <div class="pt-space-lg flex items-center justify-end gap-space-sm border-t border-surface-container">
            <button type="button" onclick="closeTambahModal()" class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-label-md hover:bg-surface-container-high transition-colors">
                Batal
            </button>
            <button type="submit" class="px-5 py-2 rounded-lg bg-primary-container text-on-primary font-label-md font-semibold hover:bg-primary transition-colors">
                Simpan Data Alsintan
            </button>
        </div>
    </form>
</div>

<!-- SLIDE-OVER MODAL: EDIT DATA ALSINTAN (PUT /pengelola/alsintan/{id}) -->
<div class="hidden relative z-50" id="modal-edit-alsintan">
    <div class="fixed inset-0 bg-inverse-surface/40 backdrop-blur-xs transition-opacity" onclick="closeEditModal()"></div>
    <form id="form-edit-alsintan" action="" method="POST" enctype="multipart/form-data" class="fixed inset-y-0 right-0 max-w-xl w-full bg-surface-container-lowest shadow-2xl p-space-xl flex flex-col justify-between overflow-y-auto z-10">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-space-lg">
            <div class="flex items-center justify-between pb-space-sm border-b border-surface-container">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-secondary text-on-secondary flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px]">edit</span>
                    </span>
                    <div>
                        <h2 class="font-title-lg text-title-lg text-on-surface">Ubah Data Alsintan</h2>
                        <span class="font-label-sm text-secondary">Perbarui Spesifikasi, Tarif, atau Status Perawatan</span>
                    </div>
                </div>
                <button type="button" onclick="closeEditModal()" class="w-8 h-8 rounded-lg flex items-center justify-center text-secondary hover:bg-surface-container">
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>
            </div>

            <div class="flex flex-col gap-space-md">
                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Nama &amp; Model Alsintan <span class="text-error">*</span></label>
                    <input id="edit_nama_alat" name="nama_alat" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container" type="text"/>
                </div>

                <div class="grid grid-cols-2 gap-space-md">
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Jenis Alsintan <span class="text-error">*</span></label>
                        <input id="edit_jenis" name="jenis" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container" type="text"/>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Nomor Registrasi Aset</label>
                        <input id="edit_nomor_registrasi" name="nomor_registrasi" class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container font-mono" type="text"/>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-space-md">
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Tarif Sewa (Rp) <span class="text-error">*</span></label>
                        <input id="edit_tarif_sewa" name="tarif_sewa" required min="0" class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container" type="number"/>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="font-label-md text-on-surface">Satuan Sewa <span class="text-error">*</span></label>
                        <select id="edit_satuan_sewa" name="satuan_sewa" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container">
                            <option value="hari">Per Hari</option>
                            <option value="jam">Per Jam</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Status Operasional <span class="text-error">*</span></label>
                    <select id="edit_status_operasional" name="status_operasional" required class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container">
                        <option value="tersedia">Tersedia (Siap Operasi)</option>
                        <option value="dipinjam">Sedang Dipinjam</option>
                        <option value="perawatan">Dalam Perawatan</option>
                    </select>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Spesifikasi Mesin &amp; Kelengkapan</label>
                    <textarea id="edit_spesifikasi" name="spesifikasi" rows="3" class="p-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container"></textarea>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="font-label-md text-on-surface">Ganti Foto Unit (Opsional)</label>
                    <input name="foto" type="file" accept="image/*" class="p-2 rounded-lg bg-surface-container-low text-on-surface font-body-sm"/>
                </div>
            </div>
        </div>

        <div class="pt-space-lg flex items-center justify-end gap-space-sm border-t border-surface-container">
            <button type="button" onclick="closeEditModal()" class="px-4 py-2 rounded-lg bg-surface-container text-on-surface font-label-md hover:bg-surface-container-high transition-colors">
                Batal
            </button>
            <button type="submit" class="px-5 py-2 rounded-lg bg-primary text-on-primary font-label-md font-semibold hover:bg-primary-container transition-colors">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<script>
    function openTambahModal() {
        document.getElementById('modal-tambah-alsintan').classList.remove('hidden');
    }
    function closeTambahModal() {
        document.getElementById('modal-tambah-alsintan').classList.add('hidden');
    }

    function openEditModal(alat, updateUrl) {
        const form = document.getElementById('form-edit-alsintan');
        form.action = updateUrl;
        document.getElementById('edit_nama_alat').value = alat.nama_alat || '';
        document.getElementById('edit_jenis').value = alat.jenis || '';
        document.getElementById('edit_nomor_registrasi').value = alat.nomor_registrasi || '';
        document.getElementById('edit_tarif_sewa').value = alat.tarif_sewa || 0;
        document.getElementById('edit_satuan_sewa').value = alat.satuan_sewa || 'hari';
        document.getElementById('edit_status_operasional').value = alat.status_operasional || 'tersedia';
        document.getElementById('edit_spesifikasi').value = alat.spesifikasi || '';
        document.getElementById('modal-edit-alsintan').classList.remove('hidden');
    }
    function closeEditModal() {
        document.getElementById('modal-edit-alsintan').classList.add('hidden');
    }

    function filterAlsintan() {
        const q1 = (document.getElementById('topSearchAlsintan')?.value || '').toLowerCase();
        const q2 = (document.getElementById('searchAlsintanInput')?.value || '').toLowerCase();
        const query = q1 || q2;
        const jenis = document.getElementById('filterJenisAlsintan').value;
        const status = document.getElementById('filterStatusAlsintan').value;

        document.querySelectorAll('.alsintan-row').forEach(row => {
            const matchJenis = (jenis === 'all' || row.getAttribute('data-jenis') === jenis);
            const matchStatus = (status === 'all' || row.getAttribute('data-status') === status);
            const matchQuery = row.getAttribute('data-search').includes(query);
            row.style.display = (matchJenis && matchStatus && matchQuery) ? '' : 'none';
        });
    }
</script>
</body>
</html>