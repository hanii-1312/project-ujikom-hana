<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alat extends Model
{
    use HasFactory;

    // Mendefinisikan nama tabel secara tegas agar tidak otomatis dibaca 'alats'
    protected $table = 'alat';

    protected $fillable = [
        'kategori_id',
        'nama_alat',
        'stok',
        'status_kondisi',
        'deskripsi',
        'gambar',
    ];

    protected function casts(): array
    {
        return [
            'stok' => 'integer',
        ];
    }

    // Relasi ke Model Kategori
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Relasi ke Model DetailPinjam (menggunakan bentuk jamak 'detailPinjams')
    public function detailPinjams(): HasMany
    {
        return $this->hasMany(DetailPinjam::class, 'alat_id');
    }
}