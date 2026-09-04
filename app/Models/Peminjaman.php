<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'user_id', 
        'tgl_pinjam', 
        'tgl_kembali_plan', 
        'status'
    ];

    protected function casts(): array {
        return [
            'tgl_pinjam' => 'date:Y-m-d',
            'tgl_kembali_plan' => 'date:Y-m-d',
        ];
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function detailPinjams(): HasMany {
        return $this->hasMany(DetailPinjam::class, 'peminjaman_id');
    }

    public function detailPinjam(): HasMany {
        return $this->detailPinjams();
    }

    public function pengembalian(): HasOne {
        return $this->hasOne(Pengembalian::class, 'peminjaman_id');
    }

    /**
     * Accessor untuk menghitung denda otomatis secara dinamis
     * Mencegah error pada pemanggilan {{ $item->calculated_denda }} di view Blade
     */
    protected function calculatedDenda(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (!$this->tgl_kembali_plan) {
                    return 0;
                }

                // Ambil tanggal aktual pengembalian (berdasarkan updated_at saat status selesai/dikembalikan)
                $tglRencana = Carbon::parse($this->tgl_kembali_plan);
                $tglAktifKembali = $this->updated_at ? Carbon::parse($this->updated_at) : now();

                // Jika dikembalikan melebihi tanggal rencana, hitung denda (misal: Rp 5.000 per hari telat)
                if ($tglAktifKembali->greaterThan($tglRencana)) {
                    $selisihHari = $tglRencana->diffInDays($tglAktifKembali);
                    return $selisihHari * 5000; 
                }

                return 0;
            }
        );
    }
}