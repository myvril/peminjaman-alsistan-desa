<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Daftar Alsintan Desa - Sistem Peminjaman Alsintan</title>
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
                <a aria-current="page" class="px-space-md py-space-sm transition-colors bg-primary-container text-on-primary font-label-lg rounded-xl shadow-sm" href="{{ route('alsintan.index') }}">
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
                    <span class="font-label-sm text-label-sm text-secondary capitalize">{{ Auth::user()->role === 'peminjam' ? 'Petani' : Auth::user()->role }}</span>
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

    <!-- Mobile Nav -->
    <div class="md:hidden flex px-margin-mobile pb-space-sm border-t border-outline-variant/30 pt-space-xs">
        <nav class="flex w-full gap-space-xs">
            <a aria-current="page" class="flex-1 text-center py-space-xs bg-primary-container text-on-primary font-label-md rounded-lg" href="{{ route('alsintan.index') }}">Daftar Alsintan</a>
            <a class="flex-1 text-center py-space-xs rounded-lg font-label-md text-label-md text-on-surface-variant hover:bg-surface-container-high" href="{{ route('peminjaman.saya') }}">Peminjaman Saya</a>
        </nav>
    </div>
</header>

<main class="w-full pt-20 bg-surface min-h-[calc(100vh-280px)]">
    <div class="flex flex-col w-full pb-36">
        
        <!-- Flash Notification -->
        @if(session('success'))
            <div class="max-w-[1280px] w-full mx-auto px-margin-mobile md:px-margin pt-4">
                <div class="p-4 rounded-xl bg-primary-fixed text-on-primary-fixed font-label-md flex items-center gap-2 shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <!-- Top Breadcrumb & Status Pill -->
        <section class="w-full bg-surface-container-low/70 py-space-sm px-margin-mobile md:px-margin">
            <div class="max-w-[1280px] mx-auto flex flex-col sm:flex-row sm:items-center sm:justify-between gap-space-xs">
                <nav class="flex items-center gap-space-xs font-body-sm text-body-sm text-secondary">
                    <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('alsintan.index') }}">
                        <span class="material-symbols-outlined text-[16px]">home</span>
                        Beranda
                    </a>
                    <span>/</span>
                    <span class="text-primary font-semibold">Katalog Alsintan Desa</span>
                </nav>
                <div class="inline-flex items-center gap-space-xs bg-primary-fixed text-on-primary-fixed px-space-sm py-1 rounded-full self-start sm:self-auto shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                    <span class="font-label-sm text-label-sm font-semibold tracking-wide">
                        Layanan Peminjaman Alsintan Desa Aktif
                    </span>
                </div>
            </div>
        </section>

        <!-- Header Banner & Intro -->
        <section class="w-full px-margin-mobile md:px-margin pt-space-lg pb-space-md">
            <div class="max-w-[1280px] mx-auto flex flex-col gap-space-md">
                <div class="flex flex-col gap-space-xs">
                    <div class="flex items-center gap-space-xs text-primary font-label-md text-label-md uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[18px]">verified</span>
                        Layanan Resmi UPJA BUMDes Makmur Agraris
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
                        Daftar Alat &amp; Mesin Pertanian Desa
                    </h1>
                    <p class="font-body-lg text-body-lg text-secondary max-w-3xl leading-relaxed">
                        Pilih satu atau lebih unit alsintan milik desa (BR-03) dan periksa jadwal yang sudah terisi agar tidak bertumpang tindih (BR-08).
                    </p>
                </div>

                <!-- Quick Alert Notice -->
                <div class="flex items-start gap-space-md p-space-md rounded-xl bg-primary/10 text-on-surface">
                    <div class="w-9 h-9 rounded-lg bg-primary-container text-on-primary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[20px]">info</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between w-full gap-space-xs">
                        <p class="font-body-md text-body-md text-on-surface leading-snug">
                            <strong>Ketentuan Peminjaman:</strong> Jadwal baru terkunci setelah disetujui oleh pengelola desa (BR-07). Pembayaran &amp; serah terima alat dilakukan di kantor balai desa.
                        </p>
                        <span class="font-label-sm text-label-sm text-primary uppercase shrink-0 bg-surface px-space-sm py-1 rounded shadow-sm">
                            Total Armada: {{ $alsintans->count() }} Unit
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter & Search Tooling Bar -->
        <section class="w-full px-margin-mobile md:px-margin py-space-sm">
            <div class="max-w-[1280px] mx-auto flex flex-col lg:flex-row lg:items-center justify-between gap-space-md bg-surface-container-lowest p-space-md rounded-xl shadow-[0_2px_12px_rgba(0,0,0,0.03)]">
                <!-- Filter Category Pills -->
                <div class="flex items-center gap-space-xs overflow-x-auto pb-1 lg:pb-0">
                    <a href="{{ route('alsintan.index') }}"
                       class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-lg font-label-md text-label-md transition-all {{ !$jenis ? 'bg-primary-container text-on-primary shadow-sm' : 'bg-surface-container text-on-surface-variant hover:bg-surface-container-high' }}">
                        <span class="material-symbols-outlined text-[18px]">grid_view</span>
                        <span>Semua</span>
                    </a>
                    @php
                        $kategoriList = [
                            'traktor' => ['label' => 'Traktor', 'icon' => 'agriculture'],
                            'combine' => ['label' => 'Combine Harvester', 'icon' => 'precision_manufacturing'],
                            'drone spray' => ['label' => 'Drone Spray', 'icon' => 'flight'],
                            'transplanter' => ['label' => 'Transplanter', 'icon' => 'yard'],
                        ];
                    @endphp
                    @foreach($kategoriList as $key => $kat)
                        <a href="{{ route('alsintan.index', ['jenis' => $key]) }}"
                           class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-lg font-label-md text-label-md transition-all {{ $jenis === $key ? 'bg-primary-container text-on-primary shadow-sm' : 'bg-surface-container text-on-surface-variant hover:bg-surface-container-high' }}">
                            <span class="material-symbols-outlined text-[18px]">{{ $kat['icon'] }}</span>
                            <span>{{ $kat['label'] }}</span>
                        </a>
                    @endforeach
                </div>

                <!-- Live Client Search & Status Filter -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm shrink-0">
                    <div class="relative min-w-[220px]">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-secondary text-[20px]">search</span>
                        <input id="searchInput" onkeyup="filterCards()" class="w-full h-10 pl-10 pr-space-md bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface placeholder:text-secondary focus:outline-none focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary-container transition-all" placeholder="Cari nama alsintan..." type="text"/>
                    </div>
                    <div class="relative">
                        <select id="statusFilter" onchange="filterCards()" class="w-full sm:w-auto h-10 px-space-md pr-9 bg-surface-container-low rounded-lg font-label-md text-label-md text-on-surface appearance-none focus:outline-none focus:ring-2 focus:ring-primary-container cursor-pointer">
                            <option value="all">Semua Status</option>
                            <option value="tersedia">Tersedia</option>
                            <option value="disewa">Sedang Disewa</option>
                            <option value="perawatan">Dalam Perawatan</option>
                        </select>
                        <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-secondary pointer-events-none text-[18px]">expand_more</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4-Column Alsintan Card Grid (DINAMIS DARI DATABASE) -->
        <section class="w-full px-margin-mobile md:px-margin pt-space-md">
            <div id="alsintanGrid" class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
                @forelse($alsintans as $alat)
                    @php
                        $idAlat = $alat->id_alsintan ?? $alat->id_alat;
                        $tarifAlat = $alat->tarif_sewa_per_hari ?? $alat->tarif_sewa ?? 0;
                        $deskripsiAlat = $alat->deskripsi ?? $alat->spesifikasi ?? '-';
                    @endphp
                    <article class="alsintan-card flex flex-col bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow relative {{ $alat->status_operasional === 'perawatan' ? 'opacity-90' : '' }}"
                             data-card-id="{{ $idAlat }}"
                             data-name="{{ strtolower($alat->nama_alat) }}"
                             data-status="{{ $alat->status_operasional }}">
                        
                        <div class="relative w-full aspect-[16/10] overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover transition-transform duration-500 {{ $alat->status_operasional === 'perawatan' ? 'grayscale-[30%]' : 'hover:scale-105' }}"
                                 src="{{ asset('images/' . ($alat->foto ?? 'default.jpg')) }}"
                                 alt="{{ $alat->nama_alat }}"
                                 onerror="this.src='https://placehold.co/600x375/004328/ffffff?text={{ urlencode($alat->nama_alat) }}'"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-on-surface/65 via-transparent to-transparent"></div>
                            
                            <!-- Badge Jenis -->
                            <div class="absolute top-space-xs left-space-xs flex items-center gap-1.5">
                                <span class="px-space-xs py-0.5 rounded bg-on-surface/85 backdrop-blur-sm text-surface font-label-sm text-label-sm uppercase tracking-wider">
                                    {{ $alat->jenis }}
                                </span>
                            </div>

                            <!-- Badge Status Operasional -->
                            <div class="absolute top-space-xs right-space-xs">
                                @if($alat->status_operasional === 'tersedia')
                                    <span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-emerald-600/80 backdrop-blur-md text-white font-label-sm text-label-sm capitalize">
                                        <span class="w-2 h-2 rounded-full bg-emerald-300 animate-pulse"></span>
                                        Tersedia
                                    </span>
                                @elseif($alat->status_operasional === 'disewa' || $alat->status_operasional === 'dipinjam')
                                    <span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-amber-600/85 backdrop-blur-md text-white font-label-sm text-label-sm capitalize">
                                        <span class="w-2 h-2 rounded-full bg-amber-300"></span>
                                        Disewa
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-rose-600/85 backdrop-blur-md text-white font-label-sm text-label-sm capitalize">
                                        <span class="w-2 h-2 rounded-full bg-rose-300"></span>
                                        Perawatan
                                    </span>
                                @endif
                            </div>

                            <!-- Tarif Sewa -->
                            <div class="absolute bottom-space-xs left-space-xs right-space-xs flex items-baseline justify-between text-on-primary">
                                <div>
                                    <span class="font-label-sm text-label-sm opacity-90 block">Tarif Sewa</span>
                                    <span class="font-title-md text-title-md font-bold">Rp {{ number_format($tarifAlat, 0, ',', '.') }}</span>
                                    <span class="text-xs opacity-80">/ {{ ucfirst($alat->satuan_sewa ?? 'Hari') }}</span>
                                </div>
                                <span class="font-label-sm text-label-sm bg-primary/80 backdrop-blur-sm px-2 py-0.5 rounded">
                                    Aset Desa
                                </span>
                            </div>
                        </div>

                        <div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
                            <div class="flex flex-col gap-space-xs">
                                <h3 class="font-title-lg text-title-lg text-on-surface tracking-tight leading-snug">
                                    {{ $alat->nama_alat }}
                                </h3>
                                <p class="font-body-sm text-body-sm text-secondary line-clamp-3">
                                    {{ $deskripsiAlat }}
                                </p>
                            </div>

                            <div class="flex flex-col gap-space-xs pt-space-xs">
                                <!-- Tombol Cek Jadwal Terisi -->
                                <button type="button"
                                        onclick="openScheduleModal({{ $idAlat }}, '{{ addslashes($alat->nama_alat) }}')"
                                        class="w-full py-space-xs px-space-sm rounded-lg bg-surface-container-high text-on-surface font-label-md text-label-md hover:bg-surface-container-highest transition-colors flex items-center justify-center gap-1.5">
                                    <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                                    <span>Lihat Jadwal Terisi</span>
                                </button>

                                <!-- Tombol Pilih Alat (Multi-Unit Selection sesuai BR-03) -->
                                @if($alat->status_operasional !== 'perawatan')
                                    <button type="button"
                                            class="select-btn w-full py-space-xs px-space-sm rounded-lg bg-surface-container text-on-surface-variant hover:bg-surface-container-high font-label-md text-label-md transition-all flex items-center justify-center gap-1.5"
                                            onclick="toggleCardSelection(this, {{ $idAlat }}, '{{ addslashes($alat->nama_alat) }}', {{ $tarifAlat }})">
                                        <span class="material-symbols-outlined text-[18px]">add</span>
                                        <span>+ Pilih Alat</span>
                                    </button>
                                @else
                                    <button type="button" disabled class="w-full py-space-xs px-space-sm rounded-lg bg-surface-container text-secondary cursor-not-allowed font-label-md text-label-md flex items-center justify-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">block</span>
                                        <span>Dalam Perawatan</span>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full bg-surface-container-lowest p-12 rounded-2xl text-center">
                        <span class="material-symbols-outlined text-4xl text-secondary mb-2">inventory_2</span>
                        <h3 class="font-title-lg text-on-surface">Belum Ada Data Alsintan</h3>
                        <p class="text-body-sm text-secondary mt-1">Data alsintan untuk kategori ini belum tersedia di database.</p>
                    </div>
                @endforelse
            </div>
        </section>

        <!-- Schedule Modal -->
        <div class="fixed inset-0 z-50 hidden bg-on-surface/40 backdrop-blur-sm flex items-center justify-center p-space-md" id="scheduleModal">
            <div class="bg-surface-container-lowest w-full max-w-xl rounded-2xl shadow-2xl p-space-lg flex flex-col gap-space-md">
                <div class="flex items-start justify-between pb-space-xs border-b border-surface-container">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Pengecekan Jadwal Anti-Bentrok (BR-08)</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold" id="modalMachineTitle">
                            Jadwal Terisi Alsintan
                        </h3>
                        <span class="font-body-sm text-body-sm text-secondary">Menampilkan peminjaman yang sudah disetujui / sedang berlangsung.</span>
                    </div>
                    <button type="button" class="w-8 h-8 rounded-full bg-surface-container flex items-center justify-center text-secondary hover:text-on-surface" onclick="closeScheduleModal()">
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>

                <div id="scheduleListContainer" class="bg-surface-container-low p-4 rounded-xl min-h-[140px] max-h-[300px] overflow-y-auto">
                    <p class="text-body-sm text-secondary text-center py-6">Memuat data jadwal...</p>
                </div>

                <div class="flex justify-end gap-space-sm pt-space-xs">
                    <button type="button" class="px-space-md py-space-xs rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container" onclick="closeScheduleModal()">
                        Tutup
                    </button>
                </div>
            </div>
        </div>

        <!-- Sticky Bottom Selection Bar -->
        <aside class="fixed bottom-4 left-1/2 -translate-x-1/2 w-[calc(100%-2rem)] max-w-[1280px] z-40 bg-surface-container-lowest/95 backdrop-blur-xl border border-outline-variant/30 rounded-2xl shadow-[0_12px_40px_rgba(0,0,0,0.12)] p-space-md transition-all" id="stickyBottomBar">
            <div class="flex flex-col md:flex-row items-center justify-between gap-space-md">
                <div class="flex items-center gap-space-sm">
                    <div class="w-10 h-10 rounded-xl bg-primary text-on-primary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[22px]">agriculture</span>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-center gap-space-xs">
                            <span class="font-label-lg text-label-lg text-on-surface font-bold" id="selectedCountText">0 Alsintan Dipilih</span>
                            <span class="bg-primary/10 text-primary font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">{{ Auth::user()->nama }}</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-secondary truncate max-w-sm md:max-w-md" id="selectedNamesText">
                            Klik "+ Pilih Alat" pada kartu di atas untuk mengajukan peminjaman.
                        </span>
                    </div>
                </div>

                <div class="flex flex-row md:flex-col items-center md:items-end justify-between w-full md:w-auto gap-1 border-t md:border-t-0 border-surface-container pt-2 md:pt-0">
                    <div class="flex flex-col md:items-end">
                        <span class="font-label-sm text-label-sm text-secondary">Estimasi Tarif Per Hari:</span>
                        <div class="flex items-baseline gap-1">
                            <span class="font-headline-sm text-headline-sm font-bold text-primary" id="totalPriceText">Rp 0</span>
                            <span class="font-body-sm text-body-sm text-secondary">/ Hari</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-space-xs w-full md:w-auto">
                    <button type="button" class="px-space-sm py-space-xs font-label-md text-label-md text-secondary hover:text-error transition-colors" onclick="resetSelection()">
                        Reset Pilihan
                    </button>
                    <a id="btnAjukan" href="{{ route('peminjaman.create') }}"
                       class="inline-flex items-center gap-space-xs px-space-lg py-space-sm bg-primary hover:bg-primary-container text-on-primary rounded-xl font-label-lg text-label-lg shadow-sm hover:shadow-md transition-all">
                        <span>Ajukan Peminjaman</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </aside>
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
    let selectedItems = [];

    function updateStickyBar() {
        const countText = document.getElementById('selectedCountText');
        const namesText = document.getElementById('selectedNamesText');
        const priceText = document.getElementById('totalPriceText');
        const btnAjukan = document.getElementById('btnAjukan');

        if (selectedItems.length === 0) {
            countText.innerText = '0 Alsintan Dipilih';
            namesText.innerText = 'Klik "+ Pilih Alat" pada kartu di atas untuk mengajukan peminjaman.';
            priceText.innerText = 'Rp 0';
            btnAjukan.href = "{{ route('peminjaman.create') }}";
        } else {
            countText.innerText = `${selectedItems.length} Alsintan Dipilih`;
            namesText.innerText = selectedItems.map(item => item.name).join(', ');
            const total = selectedItems.reduce((acc, curr) => acc + curr.price, 0);
            priceText.innerText = 'Rp ' + total.toLocaleString('id-ID');

            const ids = selectedItems.map(item => item.id).join(',');
            btnAjukan.href = "{{ route('peminjaman.create') }}?selected=" + ids;
        }
    }

    function toggleCardSelection(btn, id, name, price) {
        const existingIndex = selectedItems.findIndex(item => item.id === id);
        if (existingIndex > -1) {
            selectedItems.splice(existingIndex, 1);
            btn.className = "select-btn w-full py-space-xs px-space-sm rounded-lg bg-surface-container text-on-surface-variant hover:bg-surface-container-high font-label-md text-label-md transition-all flex items-center justify-center gap-1.5";
            btn.innerText = '+ Pilih Alat';
        } else {
            selectedItems.push({ id, name, price: Number(price) });
            btn.className = "select-btn w-full py-space-xs px-space-sm rounded-lg bg-primary-container text-on-primary font-label-md text-label-md transition-all flex items-center justify-center gap-1.5 shadow-sm active:scale-95";
            btn.innerText = '✓ Alat Dipilih';
        }
        updateStickyBar();
    }

    function resetSelection() {
        selectedItems = [];
        document.querySelectorAll('.select-btn').forEach(btn => {
            btn.className = "select-btn w-full py-space-xs px-space-sm rounded-lg bg-surface-container text-on-surface-variant hover:bg-surface-container-high font-label-md text-label-md transition-all flex items-center justify-center gap-1.5";
            btn.innerText = '+ Pilih Alat';
        });
        updateStickyBar();
    }

    function filterCards() {
        const query = (document.getElementById('searchInput')?.value || '').toLowerCase();
        const status = document.getElementById('statusFilter')?.value || 'all';

        document.querySelectorAll('.alsintan-card').forEach(card => {
            const cardName = card.getAttribute('data-name') || '';
            const cardStatus = card.getAttribute('data-status') || '';
            const matchName = cardName.includes(query);
            const matchStatus = (status === 'all' || cardStatus === status || (status === 'disewa' && cardStatus === 'dipinjam'));
            card.style.display = (matchName && matchStatus) ? '' : 'none';
        });
    }

    function showScheduleMessage(container, text, colorClass) {
        container.replaceChildren();
        const p = document.createElement('p');
        p.className = `text-body-sm ${colorClass} text-center py-6`;
        p.textContent = text;
        container.appendChild(p);
    }

    async function openScheduleModal(idAlat, namaAlat) {
        const modal = document.getElementById('scheduleModal');
        const titleEl = document.getElementById('modalMachineTitle');
        const listContainer = document.getElementById('scheduleListContainer');

        titleEl.innerText = 'Jadwal Terisi: ' + namaAlat;
        showScheduleMessage(listContainer, 'Memuat data jadwal...', 'text-secondary');
        modal.classList.remove('hidden');

        try {
            const response = await fetch(`/alsintan/${idAlat}/jadwal`);
            const data = await response.json();
            const jadwals = Array.isArray(data) ? data : (data.jadwal || []);

            if (jadwals.length === 0) {
                showScheduleMessage(listContainer, 'Belum ada jadwal peminjaman aktif. Unit bebas dipinjam kapan saja.', 'text-primary font-semibold');
                return;
            }

            listContainer.replaceChildren();
            jadwals.forEach(item => {
                const card = document.createElement('div');
                card.className = 'p-3 mb-2 rounded-lg bg-surface-container-lowest border border-outline-variant/30 flex items-center justify-between gap-2';

                const info = document.createElement('div');

                const waktu = document.createElement('span');
                waktu.className = 'font-label-md text-on-surface block';
                waktu.textContent = `${item.waktu_mulai} s/d ${item.waktu_selesai}`;

                const lokasi = document.createElement('span');
                lokasi.className = 'font-body-sm text-secondary block';
                lokasi.textContent = `Lokasi: ${item.lokasi_lahan ?? '-'}`;

                const status = document.createElement('span');
                status.className = 'font-body-sm text-secondary capitalize';
                status.textContent = `Status: ${item.status_peminjaman}`;

                info.append(waktu, lokasi, status);

                const badge = document.createElement('span');
                badge.className = 'px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm shrink-0';
                badge.textContent = 'Terjadwal';

                card.append(info, badge);
                listContainer.appendChild(card);
            });
        } catch (err) {
            showScheduleMessage(listContainer, 'Gagal mengambil data jadwal dari server.', 'text-error');
        }
    }

    function closeScheduleModal() {
        document.getElementById('scheduleModal').classList.add('hidden');
    }
</script>
</body>
</html>