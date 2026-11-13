<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Pengelola</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body{font-family:'Plus Jakarta Sans',sans-serif}</style>
</head>

<body class="bg-[#f6f7f5] text-[13px] text-slate-800">
<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside class="hidden lg:flex w-56 shrink-0 flex-col gap-5 bg-white border-r p-4">
        <div class="flex items-center gap-2">
            <div class="size-9 rounded-lg bg-green-800"></div>
            <div><b class="block">Alsintan Desa</b><small class="text-[9px] tracking-wider text-slate-500">PANEL PENGELOLA</small></div>
        </div>
        <nav class="space-y-1">
            <p class="text-[10px] font-bold tracking-wider text-slate-400 mb-2">MENU UTAMA</p>
            <a href="#" class="block rounded-lg bg-green-800 text-white font-semibold px-3 py-2">Dashboard Pengelola</a>
            <a href="#" class="block rounded-lg font-semibold px-3 py-2 hover:bg-green-50">Daftar Pengajuan</a>
            <a href="#" class="block rounded-lg font-semibold px-3 py-2 hover:bg-green-50">Kelola Data Alsintan</a>
            <a href="#" class="block rounded-lg font-semibold px-3 py-2 hover:bg-green-50">Laporan Peminjaman</a>
            <a href="#" class="block rounded-lg font-semibold px-3 py-2 hover:bg-green-50">Log Aktivitas</a>
        </nav>
        <div class="mt-auto rounded-xl bg-green-50 p-3 text-[11px]">
            <small class="text-[9px] font-bold tracking-wider text-slate-500">STATUS OPERASIONAL</small>
            <b class="block">UPJA Suka Makmur</b>
            <span class="text-slate-500">Desa Mandiri Pangan</span>
        </div>
    </aside>

    <div class="flex-1 min-w-0">

        {{-- TOPBAR --}}
        <header class="flex items-center justify-between gap-4 bg-white border-b px-6 py-3">
            <input type="search" placeholder="Cari alsintan, peminjam, atau kode aset..." class="w-full max-w-sm rounded-lg border bg-slate-50 px-3 py-2">
            <div class="flex items-center gap-3 text-right leading-tight">
                <div><b class="block">{{  $nama_user }}</b><small class="text-slate-500">Kepala UPJA Desa</small></div>
                <div class="grid size-9 place-items-center rounded-full bg-green-100 font-extrabold text-green-800">B</div>
            </div>
        </header>

        <main class="grid gap-5 p-6 xl:grid-cols-[1fr_280px]">

            {{-- HERO --}}
            <section class="xl:col-span-2 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <span class="rounded-full bg-green-100 px-3 py-1 text-[11px] font-bold text-green-800">Musim Tanam Rendeng 2026</span>
                    <h1 class="mt-2 text-3xl font-extrabold">Selamat Datang, nama user.</h1>
                    <p class="mt-1 max-w-lg text-slate-500">Pantau ketersediaan armada traktor, drone, dan mesin panen serta proses alur permohonan petani secara terpadu.</p>
                </div>
                <div class="flex gap-2">
                    <a href="#" class="rounded-lg border bg-white px-4 py-2 font-bold">Export Laporan Harian</a>
                    <a href="#" class="rounded-lg bg-green-800 px-4 py-2 font-bold text-white">+ Tambah Jadwal Manual</a>
                </div>
            </section>

            {{-- ALERT --}}
            <section class="xl:col-span-2 flex items-center gap-3 rounded-xl border border-orange-200 bg-orange-50 p-4" role="alert">
                <div class="size-9 rounded-lg bg-stone-800"></div>
                <div class="flex-1">
                    <b class="text-sm">Peringatan Tenggat Pengembalian Hari Ini</b>
                    <p class="text-xs text-slate-600">1 Unit Drone Sprayer XAG P100 Pro memiliki tenggat pengembalian pukul <b>17:00 WIB hari ini</b> (Peminjam: Pak Budi Santoso - Poktan Sri Rejeki).</p>
                </div>
                <a href="#" class="rounded-lg bg-green-900 px-4 py-2 font-bold text-white">Proses Masuk</a>
            </section>

            <div class="min-w-0 space-y-5">

                {{-- STATISTIK --}}
                <section class="grid grid-cols-2 gap-4 xl:grid-cols-4">
                    <article class="rounded-2xl border bg-white p-4">
                        <p class="mt-4 text-[10px] font-bold uppercase text-slate-500">Total Alsintan Siap Pakai</p>
                        <p class="text-3xl font-extrabold">{{ $total_alsintan_siap_pakai }} <small class="text-sm text-slate-500">siap pakai</small></p>
                        <p class="text-[11px] text-slate-500">4 Sedang di Lapangan, 0 Servis</p>
                        <div class="mt-3 h-1 rounded bg-slate-100"><div class="h-1 w-3/4 rounded bg-green-800"></div></div>
                    </article>
                    <article class="rounded-2xl border bg-white p-4">
                        <p class="mt-4 text-[10px] font-bold uppercase text-slate-500">Menunggu Persetujuan</p>
                        <p class="text-3xl font-extrabold">{{  $menunggu_persetujuan }} <small class="text-sm text-slate-500">Berkas</small></p>
                        <p class="text-[11px] text-slate-500">Perlu verifikasi jadwal & anti-bentrok lahan</p>
                        <div class="mt-3 h-1 rounded bg-slate-100"><div class="h-1 w-1/3 rounded bg-orange-400"></div></div>
                    </article>
                    <article class="rounded-2xl border bg-white p-4">
                        <p class="mt-4 text-[10px] font-bold uppercase text-slate-500">Peminjaman Berlangsung</p>
                        <p class="text-3xl font-extrabold">{{  $peminjaman_berlangsung }} <small class="text-sm text-slate-500">Unit Aktif</small></p>
                        <p class="text-[11px] text-slate-500">1 unit mendekati tenggat FR-11</p>
                        <div class="mt-3 h-1 rounded bg-slate-100"><div class="h-1 w-2/5 rounded bg-slate-500"></div></div>
                    </article>
                    <article class="rounded-2xl border bg-white p-4">
                        <p class="mt-4 text-[10px] font-bold uppercase text-slate-500">Total Pemasukan Sewa Desa</p>
                        <p class="text-2xl font-extrabold">{{  $total_pemasukan_sewa_desa }}</p>
                        <p class="text-[11px] text-slate-500">Akumulasi PADes Musim Rendeng 2026</p>
                        <div class="mt-3 h-1 rounded bg-slate-100"><div class="h-1 w-5/6 rounded bg-green-800"></div></div>
                    </article>
                </section>

                {{-- TABEL PENGAJUAN --}}
                <section class="overflow-hidden rounded-2xl border bg-white">
                    <div class="flex items-start justify-between gap-3 p-4">
                        <div>
                            <h2 class="text-base font-bold">Pemrosesan Pengajuan & Serah Terima Alsintan</h2>
                            <p class="text-xs text-slate-500">Kelola alur persetujuan, validasi BAST (FR-15), dan pengembalian unit (FR-16).</p>
                        </div>
                        <div class="flex gap-2 text-[10px] text-slate-500">
                            <div class="rounded-lg bg-slate-100 px-3 py-1">Total Berkas <b class="block text-base text-slate-800">24</b></div>
                            <div class="rounded-lg bg-orange-100 px-3 py-1">4 Tertunda</div>
                        </div>
                    </div>

                    <div class="flex gap-2 px-4 pb-3">
                        <input type="search" placeholder="Cari nama peminjam, nomor HP, kode berkas..." class="flex-1 rounded-lg border bg-slate-50 px-3 py-2">
                        <select class="rounded-lg border bg-slate-50 px-3"><option>Semua Status</option></select>
                        <select class="rounded-lg border bg-slate-50 px-3"><option>Semua Tipe Alsintan</option></select>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[720px] text-left">
                            <thead class="border-y bg-slate-50 text-[10px] uppercase text-slate-500">
                                <tr><th class="p-3 pl-4">Peminjam & Poktan</th><th class="p-3">Alsintan</th><th class="p-3">Jadwal</th><th class="p-3">Tarif Sewa</th><th class="p-3">Status</th></tr>
                            </thead>
                            <tbody class="divide-y align-top">
                                <tr>
                                    <td class="p-3 pl-4"><b class="text-sm">Pak Budi Santoso</b><br><span class="text-[10px] text-blue-700">Poktan Sri Rejeki · Dusun I</span><br><small class="text-slate-500">0812-3456-7890</small></td>
                                    <td class="p-3"><b>Traktor Kubota L5018</b><br><small class="text-green-800">#ALS-TRK-01 · Roda 4</small></td>
                                    <td class="p-3"><b>20 – 21 Nov 2026</b><br><small class="text-slate-500">07:00 WIB (2 Hari)</small></td>
                                    <td class="p-3"><b class="text-[15px]">Rp 500.000</b></td>
                                    <td class="p-3"><span class="rounded-full border border-orange-200 bg-orange-50 px-3 py-1 text-[11px] font-bold text-orange-700">Menunggu</span></td>
                                </tr>
                                <tr>
                                    <td class="p-3 pl-4"><b class="text-sm">Slamet Riyadi</b><br><span class="text-[10px] text-blue-700">Poktan Tani Makmur · Dusun III</span><br><small class="text-slate-500">0813-9090-1122</small></td>
                                    <td class="p-3"><b>Mesin Tanam Padi Jarwo</b><br><small class="text-green-800">#ALS-TRP-04 · 4 Baris</small></td>
                                    <td class="p-3"><b>21 – 22 Nov 2026</b><br><small class="text-slate-500">08:00 WIB (2 Hari)</small></td>
                                    <td class="p-3"><b class="text-[15px]">Rp 400.000</b></td>
                                    <td class="p-3"><span class="rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-[11px] font-bold text-blue-700">Disetujui</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex items-center justify-between border-t p-4 text-[11px] text-slate-500">
                        <span>Menampilkan 2 dari 24 permohonan aktif</span>
                        <div class="flex gap-1">
                            <button class="size-7 rounded border bg-green-800 text-white">1</button>
                            <button class="size-7 rounded border">2</button>
                            <button class="size-7 rounded border">3</button>
                        </div>
                    </div>
                </section>

                {{-- ARMADA --}}
                <section class="rounded-2xl border bg-white p-4">
                    <h3 class="mb-3 text-[13px] font-bold">Status Armada Alsintan di Garasi UPJA Hari Ini</h3>
                    <div class="grid gap-3 md:grid-cols-3">
                        <div class="rounded-xl bg-slate-50 p-3"><b>Traktor Roda 2 & 4</b><p class="text-[11px] text-slate-500">5 Tersedia · 2 Membajak</p></div>
                        <div class="rounded-xl bg-slate-50 p-3"><b>Drone Semprot</b><p class="text-[11px] text-slate-500">1 Tersedia · 1 Bertugas</p></div>
                        <div class="rounded-xl bg-slate-50 p-3"><b>Mesin Panen & Pompa Air</b><p class="text-[11px] text-slate-500">1 Tersedia · 1 Siap Ambil</p></div>
                    </div>
                </section>
            </div>

            {{-- KOLOM KANAN --}}
            <aside class="space-y-4">
                <section class="rounded-2xl border bg-white p-4">
                    <div class="flex justify-between"><h3 class="font-bold">Jadwal Pekan Ini</h3><small class="text-slate-500">Nov 2026</small></div>
                    <div class="my-3 grid grid-cols-7 gap-1 text-center text-xs">
                        <span class="py-1.5 text-slate-400">16</span><span class="py-1.5 text-slate-400">17</span><span class="py-1.5 text-slate-400">18</span><span class="py-1.5 text-slate-400">19</span>
                        <b class="rounded bg-green-800 py-1.5 text-white">20</b><b class="rounded bg-green-800 py-1.5 text-white">21</b><b class="rounded bg-green-800 py-1.5 text-white">22</b>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between rounded-lg border-l-4 border-green-800 bg-slate-50 p-2"><span><b class="block">Olah Lahan Poktan Tani 1</b><small class="text-slate-500">Traktor Kubota</small></span><b class="text-[11px]">07:00</b></div>
                        <div class="flex justify-between rounded-lg border-l-4 border-green-800 bg-slate-50 p-2"><span><b class="block">Semprot Hama Wereng</b><small class="text-slate-500">Drone Sprayer XAG P100</small></span><b class="text-[11px]">14:00</b></div>
                    </div>
                </section>

                <section class="rounded-2xl border bg-white p-4">
                    <h3 class="mb-2 font-bold">SOP Pengelola (FR-15 s/d 17)</h3>
                    <ul class="space-y-2 text-[11px] text-slate-600">
                        <li><b class="text-slate-800">Persetujuan:</b> pastikan jadwal pemohon tidak overlap.</li>
                        <li><b class="text-slate-800">Penyerahan (FR-15):</b> petani wajib tanda tangan BAST atau konfirmasi OTP.</li>
                        <li><b class="text-slate-800">Pengembalian (FR-16):</b> cek kebersihan alat, oli, dan kelengkapan.</li>
                        <li><b class="text-slate-800">Penolakan (FR-17):</b> wajib beri catatan alasan yang jelas.</li>
                    </ul>
                </section>

                <section class="rounded-2xl bg-green-800 p-4 text-white">
                    <small class="text-[10px] tracking-wider opacity-80">PUSAT BANTUAN & POSKO UPJA</small>
                    <h3 class="text-base font-bold leading-tight">Butuh Bantuan Operator Teknis?</h3>
                    <p class="mb-3 mt-1 text-[11px] opacity-85">Hubungi koordinator mekanik jika terjadi kendala teknis pada mesin.</p>
                    <div class="flex items-center justify-between"><b>0811-2233-4455</b><a href="tel:081122334455" class="rounded-lg bg-white px-3 py-1 font-bold text-green-800">Panggil</a></div>
                </section>
            </aside>

        </main>
    </div>
</div>
</body>
</html>