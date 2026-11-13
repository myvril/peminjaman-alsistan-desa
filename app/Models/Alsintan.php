<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alsintan extends Model
{
    protected $table = 'alat_berat';
    protected $primaryKey = 'id_alsintan';
    public $timestamps = false;

    protected $fillable = [
        'nama_alat',
        'jenis',
        'deskripsi',
        'foto',
        'status_operasional',
        'tarif_sewa_per_hari',
    ];

    public function detailPeminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class, 'id_alsintan', 'id_alsintan');
    }
}