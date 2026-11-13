<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengelola Desa & Contoh Petani
        DB::table('user')->insert([
            [
                'nama' => 'Pengelola Alsintan Desa',
                'email' => 'pengelola@desa.go.id',
                'password' => Hash::make('pengelola123'),
                'no_hp' => '081234567890',
                'alamat' => 'Kantor Balai Desa',
                'role' => 'pengelola',
                'created_at' => now(),
            ],
            [
                'nama' => 'Pak Budi Santoso',
                'email' => 'budi@petani.id',
                'password' => Hash::make('petani123'),
                'no_hp' => '085712345678',
                'alamat' => 'Dusun Krajan RT 02',
                'role' => 'peminjam',
                'created_at' => now(),
            ],
        ]);

        // 4 Unit Alsintan Desa
        DB::table('alat_berat')->insert([
            [
                'nama_alat' => 'Traktor Roda Empat Kubota L5018',
                'jenis' => 'traktor',
                'deskripsi' => 'Traktor roda empat untuk pembajakan dan pengolahan tanah sawah.',
                'foto' => 'traktor.png',
                'status_operasional' => 'tersedia',
                'tarif_sewa_per_hari' => 500000,
                'created_at' => now(),
            ],
            [
                'nama_alat' => 'Combine Harvester Kubota DC-70',
                'jenis' => 'combine',
                'deskripsi' => 'Mesin pemanen padi sekaligus perontok gabah otomatis.',
                'foto' => 'combine.png',
                'status_operasional' => 'tersedia',
                'tarif_sewa_per_hari' => 850000,
                'created_at' => now(),
            ],
            [
                'nama_alat' => 'Drone Sprayer Pertanian XA6',
                'jenis' => 'drone spray',
                'deskripsi' => 'Drone penyemprot pupuk cair dan pestisida presisi tinggi.',
                'foto' => 'drone-spray.png',
                'status_operasional' => 'tersedia',
                'tarif_sewa_per_hari' => 300000,
                'created_at' => now(),
            ],
            [
                'nama_alat' => 'Rice Transplanter 4-Row',
                'jenis' => 'transplanter',
                'deskripsi' => 'Mesin penanam bibit padi otomatis dengan jarak tanam presisi.',
                'foto' => 'transplanter.png',
                'status_operasional' => 'tersedia',
                'tarif_sewa_per_hari' => 450000,
                'created_at' => now(),
            ],
        ]);
    }
}