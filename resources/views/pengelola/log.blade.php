<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Log Aktivitas Pengelola - Panel Pengelola Desa</title>
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
                    "spacing": { "space-xl": "2rem", "space-md": "1rem", "space-xs": "0.25rem", "space-lg": "1.5rem", "space-2xl": "3rem", "space-sm": "0.5rem" },
                    "fontFamily": {
                        "headline-lg": ["Plus Jakarta Sans"], "label-sm": ["Inter"], "headline-sm": ["Plus Jakarta Sans"],
                        "label-md": ["Inter"], "body-sm": ["Inter"], "title-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Inter"], "title-md": ["Plus Jakarta Sans"], "label-lg": ["Inter"], "headline-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "body-sm": ["12px", { "lineHeight": "18px", "fontWeight": "400" }],
                        "title-lg": ["18px", { "lineHeight": "26px", "fontWeight": "600" }],
                        "body-md": ["14px", { "lineHeight": "22px", "fontWeight": "400" }],
                        "title-md": ["16px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }]
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
                <a class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('pengelola.alsintan.index') }}">
                    <span class="material-symbols-outlined text-[20px]">precision_manufacturing</span>
                    <span>Kelola Data Alsintan</span>
                </a>
                <a class="flex items-center gap-space-sm px-space-md py-space-sm rounded-xl text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container-high hover:text-on-surface transition-colors" href="{{ route('pengelola.laporan') }}">
                    <span class="material-symbols-outlined text-[20px]">bar_chart</span>
                    <span>Laporan Peminjaman</span>
                </a>
                <a aria-current="page" class="flex items-center gap-space-sm px-space-md py-space-sm transition-colors bg-primary-container text-on-primary font-title-md rounded-xl shadow-sm" href="{{ route('pengelola.log') }}">
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
                <input id="logSearchInput" onkeyup="filterLogs()" class="w-full h-10 pl-10 pr-space-md rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm placeholder:text-secondary focus:outline-none focus:ring-2 focus:ring-primary-container transition-all" placeholder="Cari petugas, nomor pengajuan, atau deskripsi aktivitas..." type="text"/>
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

            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                <div class="flex flex-col gap-space-xs max-w-2xl">
                    <div class="inline-flex items-center gap-2 text-tertiary font-label-sm uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[16px]">history_toggle_off</span>
                        <span>Transparansi &amp; Audit Trail Digital (FR-20)</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Log Aktivitas Pengelola</h1>
                    <p class="font-body-md text-body-md text-secondary">
                        Rekam jejak digital setiap tindakan verifikasi pengajuan, serah terima alat, pengembalian, serta pengelolaan data alsintan desa.
                    </p>
                </div>

                <div class="flex items-center gap-space-sm">
                    <div class="flex items-center gap-1.5 px-3 py-2 rounded-lg bg-primary-fixed/40 text-on-primary-fixed-variant font-label-sm">
                        <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                        <span>Total {{ $logs->count() }} Catatan Aktivitas</span>
                    </div>
                </div>
            </div>

            <!-- Filter Control Bar -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-sm bg-surface-container-lowest p-space-md rounded-xl shadow-sm">
                <div class="flex flex-col gap-1">
                    <label class="font-label-sm text-secondary uppercase">Filter Tipe Aksi</label>
                    <select id="filterTipeAksi" onchange="filterLogs()" class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container">
                        <option value="all">Semua Tipe Aksi</option>
                        <option value="setujui">Setujui Pengajuan</option>
                        <option value="tolak">Tolak Pengajuan</option>
                        <option value="serah_terima">Catat Penyerahan</option>
                        <option value="kembali">Catat Pengembalian</option>
                        <option value="tambah_alat">Tambah Alsintan</option>
                        <option value="ubah_alat">Ubah Alsintan</option>
                        <option value="hapus_alat">Hapus Alsintan</option>
                    </select>
                </div>

                <div class="sm:col-span-2 flex flex-col gap-1">
                    <label class="font-label-sm text-secondary uppercase">Kata Kunci Audit</label>
                    <input id="logSearchSecondary" onkeyup="filterLogs()" type="text" placeholder="Ketik nama pengelola, kode #PMJ, atau keterangan..." class="h-10 px-3 rounded-lg bg-surface-container-low text-on-surface font-body-sm focus:outline-none focus:ring-2 focus:ring-primary-container"/>
                </div>
            </div>

            <!-- Audit Log Structured Table (DINAMIS DARI DATABASE) -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-secondary font-label-sm uppercase tracking-wider">
                                <th class="py-3 px-4 w-48">Waktu (created_at)</th>
                                <th class="py-3 px-4 w-56">Pengelola Desa</th>
                                <th class="py-3 px-4 w-40">Tipe Aksi</th>
                                <th class="py-3 px-4 w-48">Referensi Transaksi</th>
                                <th class="py-3 px-4">Deskripsi Aktivitas</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container font-body-md text-on-surface">
                            @forelse($logs as $log)
                                @php
                                    $namaPetugas = $log->pengelola->nama ?? 'Pengelola Desa';
                                    $kodePmj = $log->id_peminjaman ? '#PMJ-' . str_pad($log->id_peminjaman, 5, '0', STR_PAD_LEFT) : '-';
                                    $searchData = strtolower($namaPetugas . ' ' . $log->tipe_aksi . ' ' . $kodePmj . ' ' . $log->deskripsi);
                                @endphp
                                <tr class="log-row hover:bg-surface-container-low/50 transition-colors"
                                    data-aksi="{{ $log->tipe_aksi }}"
                                    data-search="{{ $searchData }}">
                                    <td class="py-3.5 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-on-surface font-medium">
                                                {{ \Carbon\Carbon::parse($log->created_at)->translatedFormat('d M Y, H:i') }} WIB
                                            </span>
                                            <span class="font-label-sm text-secondary">
                                                {{ \Carbon\Carbon::parse($log->created_at)->diffForHumans() }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-4">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary font-bold text-xs flex items-center justify-center shrink-0">
                                                {{ strtoupper(substr($namaPetugas, 0, 2)) }}
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="font-label-md text-on-surface font-semibold">{{ $namaPetugas }}</span>
                                                <span class="font-label-sm text-secondary text-[10px]">Pengelola Desa</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-4">
                                        @if($log->tipe_aksi === 'setujui')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant font-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">check_circle</span>
                                                setujui
                                            </span>
                                        @elseif($log->tipe_aksi === 'tolak')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">cancel</span>
                                                tolak
                                            </span>
                                        @elseif($log->tipe_aksi === 'serah_terima')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">output</span>
                                                serah_terima
                                            </span>
                                        @elseif($log->tipe_aksi === 'kembali')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container text-on-surface font-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">input</span>
                                                kembali
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">build</span>
                                                {{ $log->tipe_aksi }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3.5 px-4">
                                        <span class="font-label-md text-primary font-semibold font-mono">{{ $kodePmj }}</span>
                                    </td>
                                    <td class="py-3.5 px-4 font-body-sm text-on-surface">
                                        {{ $log->deskripsi }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-10 text-center text-secondary">
                                        Belum ada riwayat aktivitas pengelola yang tercatat.
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

<script>
    function filterLogs() {
        const q1 = (document.getElementById('logSearchInput')?.value || '').toLowerCase();
        const q2 = (document.getElementById('logSearchSecondary')?.value || '').toLowerCase();
        const query = q1 || q2;
        const aksi = document.getElementById('filterTipeAksi').value;

        document.querySelectorAll('.log-row').forEach(row => {
            const matchAksi = (aksi === 'all' || row.getAttribute('data-aksi') === aksi);
            const matchSearch = row.getAttribute('data-search').includes(query);
            row.style.display = (matchAksi && matchSearch) ? '' : 'none';
        });
    }
</script>
</body>
</html>