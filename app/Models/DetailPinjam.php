<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPinjam extends Model
{
    // Ganti dari 'detil_pinjam' ke 'detail_pinjam' (atau 'detail_pinjams')
    protected $table = 'detail_pinjam'; 

    protected $fillable = [
        'peminjaman_id',
        'alat_id',
        'jumlah',
    ];

    public function peminjaman(): BelongsTo
    {
        return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
    }

    public function alat(): BelongsTo
    {
        return $this->belongsTo(Alat::class, 'alat_id');
    }
}