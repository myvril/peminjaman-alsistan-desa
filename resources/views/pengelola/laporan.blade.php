<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Laporan Peminjaman Alsintan - Panel Pengelola Desa</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700&family=Inter:wght@400;600;700&family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <style>
        @layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}}
        @media print {
            .no-print { display: none !important; }
            .print-full { padding-left: 0 !important; padding-top: 0 !important; }
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#f9f9ff", "on-primary": "#ffffff", "on-secondary-container": "#57657a",
                        "secondary": "#515f74", "tertiary": "#5a2e00", "on-surface": "#111c2d",
                        "secondary-container": "#d5e3fc", "primary-container": "#0d5c3a",
                        "primary": "#004328", "surface-container-lowest": "#ffffff", "error": "#ba1a1a",
                        "error-container": "#ffdad6", "primary-fixed": "#a9f3c5", "on-primary-fixed": "#002111",
                        "surface-container": "#e7eeff", "surface-container-low": "#f0f3ff", "tertiary-fixed": "#ffdcc3"
                    },
                    "fontFamily": {
                        "headline-lg": ["Plus Jakarta Sans"], "title-md": ["Plus Jakarta Sans"],
                        "body-md": ["Inter"], "label-md": ["Inter"], "label-sm": ["Inter"], "label-lg": ["Inter"]
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased">

<!-- SIDEBAR NAVIGASI PENGELOLA -->
<aside class="no-print fixed left-0 top-0 h-full w-72 bg-surface-container-lowest shadow-[0_1px_8px_rgba(0,0,0,0.04)] z-50 hidden lg:flex flex-col justify-between">
    <div class="flex flex-col">
        <div class="h-16 px-6 flex items-center gap-2 border-b border-gray-100">
            <div class="w-9 h-9 rounded-xl bg-primary-container flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined text-[20px]">agriculture</span>
            </div>
            <div class="flex flex-col">
                <span class="font-title-md text-primary font-bold">Alsintan Desa</span>
                <span class="font-label-sm text-xs text-secondary uppercase">Panel Pengelola</span>
            </div>
        </div>
        <div class="px-4 py-3">
            <nav class="flex flex-col gap-1">
                <a class="flex items-center gap-2 px-4 py-2.5 rounded-xl text-secondary hover:bg-surface-container text-sm font-semibold" href="{{ route('pengelola.dashboard') }}">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    <span>Dashboard &amp; Pengajuan</span>
                </a>
                <a class="flex items-center gap-2 px-4 py-2.5 rounded-xl text-secondary hover:bg-surface-container text-sm font-semibold" href="{{ route('pengelola.alsintan.index') }}">
                    <span class="material-symbols-outlined text-[20px]">precision_manufacturing</span>
                    <span>Kelola Data Alsintan</span>
                </a>
                <a aria-current="page" class="flex items-center gap-2 px-4 py-2.5 bg-primary-container text-on-primary font-semibold rounded-xl shadow-sm text-sm" href="{{ route('pengelola.laporan') }}">
                    <span class="material-symbols-outlined text-[20px]">bar_chart</span>
                    <span>Laporan Peminjaman</span>
                </a>
                <a class="flex items-center gap-2 px-4 py-2.5 rounded-xl text-secondary hover:bg-surface-container text-sm font-semibold" href="{{ route('pengelola.log') }}">
                    <span class="material-symbols-outlined text-[20px]">history</span>
                    <span>Log Aktivitas</span>
                </a>
            </nav>
        </div>
    </div>

    <div class="p-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-xl bg-error-container text-error hover:bg-error hover:text-white text-xs font-bold transition-colors">
                <span class="material-symbols-outlined text-[18px]">logout</span>
                <span>Keluar Panel</span>
            </button>
        </form>
    </div>
</aside>

<div class="print-full lg:pl-72 flex flex-col min-h-screen">
    <main class="w-full pt-8 px-6 pb-16 flex-1 max-w-7xl mx-auto">
        <div class="flex flex-col gap-6">

            <!-- Header & Tombol Cetak -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-surface-container-lowest p-6 rounded-xl shadow-sm">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-primary">Laporan Operasional &amp; PADes (FR-19)</span>
                    <h1 class="font-headline-lg text-2xl md:text-3xl font-bold text-on-surface mt-1">
                        Laporan Peminjaman &amp; Pendapatan Alsintan Desa
                    </h1>
                    <p class="text-sm text-secondary mt-1">
                        Rekapitulasi transaksi peminjaman alsintan desa beserta total estimasi pendapatan sewa per periode.
                    </p>
                </div>
                <button onclick="window.print()" type="button" class="no-print inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-primary text-on-primary hover:bg-primary-container font-semibold text-sm shadow-sm">
                    <span class="material-symbols-outlined text-[18px]">print</span>
                    <span>Cetak Laporan (PDF)</span>
                </button>
            </div>

            <!-- Filter Periode Tanggal -->
            <form method="GET" action="{{ route('pengelola.laporan') }}" class="no-print bg-surface-container-lowest p-5 rounded-xl shadow-sm grid grid-cols-1 sm:grid-cols-4 gap-4 items-end">
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold text-secondary uppercase">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" value="{{ request('tanggal_mulai') }}" class="h-10 px-3 rounded-lg bg-surface-container-low text-sm"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold text-secondary uppercase">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" value="{{ request('tanggal_selesai') }}" class="h-10 px-3 rounded-lg bg-surface-container-low text-sm"/>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold text-secondary uppercase">Status Transaksi</label>
                    <select name="status" class="h-10 px-3 rounded-lg bg-surface-container-low text-sm">
                        <option value="">Semua Status</option>
                        <option value="disetujui" {{ request('status') === 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                        <option value="berlangsung" {{ request('status') === 'berlangsung' ? 'selected' : '' }}>Berlangsung</option>
                        <option value="selesai" {{ request('status') === 'selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="ditolak" {{ request('status') === 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="flex-1 h-10 px-4 rounded-lg bg-primary-container text-white font-semibold text-sm hover:bg-primary">
                        Tampilkan
                    </button>
                    <a href="{{ route('pengelola.laporan') }}" class="h-10 px-3 rounded-lg bg-surface-container text-secondary flex items-center justify-center text-sm font-semibold">
                        Reset
                    </a>
                </div>
            </form>

            <!-- Ringkasan Statistik Laporan -->
            @php
                $totalTransaksi = $laporans->count();
                $transaksiSelesai = $laporans->where('status_peminjaman', 'selesai')->count();
                $totalPendapatanPeriode = $laporans->whereIn('status_peminjaman', ['disetujui', 'berlangsung', 'selesai'])->sum('total_biaya');
            @endphp
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm">
                    <span class="text-xs font-bold uppercase text-secondary">Total Transaksi Periode Ini</span>
                    <p class="text-2xl font-bold text-on-surface mt-1">{{ $totalTransaksi }} Pengajuan</p>
                </div>
                <div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm">
                    <span class="text-xs font-bold uppercase text-secondary">Transaksi Selesai Dikembalikan</span>
                    <p class="text-2xl font-bold text-primary mt-1">{{ $transaksiSelesai }} Transaksi</p>
                </div>
                <div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm">
                    <span class="text-xs font-bold uppercase text-secondary">Total Pendapatan Sewa Alsintan</span>
                    <p class="text-2xl font-bold text-primary mt-1">Rp {{ number_format($totalPendapatanPeriode, 0, ',', '.') }}</p>
                </div>
            </div>

            <!-- Tabel Rekapitulasi Laporan -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low text-secondary text-xs uppercase">
                                <th class="py-3 px-4">Kode</th>
                                <th class="py-3 px-4">Petani Peminjam</th>
                                <th class="py-3 px-4">Unit Alsintan</th>
                                <th class="py-3 px-4">Jadwal Penggunaan</th>
                                <th class="py-3 px-4">Lokasi Lahan</th>
                                <th class="py-3 px-4">Status</th>
                                <th class="py-3 px-4 text-right">Total Biaya</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm">
                            @forelse($laporans as $item)
                                <tr>
                                    <td class="py-3 px-4 font-mono font-bold text-primary">
                                        #PMJ-{{ str_pad($item->id_peminjaman, 5, '0', STR_PAD_LEFT) }}
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="font-semibold">{{ $item->peminjam->nama ?? '-' }}</div>
                                        <div class="text-xs text-secondary">{{ $item->peminjam->no_hp ?? '-' }}</div>
                                    </td>
                                    <td class="py-3 px-4">
                                        @foreach($item->detailPeminjaman as $detail)
                                            <div>• {{ $detail->alsintan->nama_alat ?? 'Unit' }}</div>
                                        @endforeach
                                    </td>
                                    <td class="py-3 px-4 text-xs">
                                        {{ \Carbon\Carbon::parse($item->waktu_mulai)->format('d/m/Y H:i') }} s/d
                                        {{ \Carbon\Carbon::parse($item->waktu_selesai)->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="py-3 px-4">{{ $item->lokasi_lahan }}</td>
                                    <td class="py-3 px-4 capitalize font-semibold">{{ $item->status_peminjaman }}</td>
                                    <td class="py-3 px-4 text-right font-bold">
                                        Rp {{ number_format($item->total_biaya, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="py-8 text-center text-secondary">
                                        Tidak ada data peminjaman pada periode yang dipilih.
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
</body>
</html>