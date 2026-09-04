<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAktivitas extends Model
{
    use HasFactory;

    protected $table = 'log_aktivitas'; // Sesuaikan nama tabel di database

    protected $fillable = [
        'user_id',
        'aktivitas',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
