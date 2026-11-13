<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    public $timestamps = false;

    protected $fillable = [
        'id_peminjam',
        'id_pengelola',
        'tanggal_pengajuan',
        'waktu_mulai',
        'waktu_selesai',
        'lokasi_lahan',
        'keperluan',
        'status_peminjaman',
        'waktu_diproses',
        'waktu_pengambilan',
        'waktu_penyerahan',
        'total_biaya',
        'catatan_pengelola',
    ];

    public function peminjam()
    {
        return $this->belongsTo(User::class, 'id_peminjam', 'id_user');
    }

    public function pengelola()
    {
        return $this->belongsTo(User::class, 'id_pengelola', 'id_user');
    }

    public function detail()
    {
        return $this->hasMany(DetailPeminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }

    public function detailPeminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class, 'id_peminjaman', 'id_peminjaman');
    }
}