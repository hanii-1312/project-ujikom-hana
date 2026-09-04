<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user berdasarkan email (atau buat fallback jika tidak ditemukan)
        $rian = User::where('email', 'rian@gmail.com')->first() ?? User::find(3) ?? User::first();
        $siti = User::where('email', 'siti@gmail.com')->first() ?? User::find(4) ?? User::skip(1)->first() ?? $rian;
        $eka  = User::where('email', 'eka@gmail.com')->first()  ?? User::find(5) ?? User::skip(2)->first() ?? $rian;

        // Pastikan minimal ada 1 user di database
        if (!$rian) {
            return;
        }

        $peminjaman = [
            [
                'user_id' => $rian->id, // Menggunakan ID dinamis Rian
                'tgl_pinjam' => '2026-06-01',
                'tgl_kembali_plan' => '2026-06-04',
                'status' => 'dikembalikan',
            ],
            [
                'user_id' => $siti->id, // Menggunakan ID dinamis Siti
                'tgl_pinjam' => '2026-06-02',
                'tgl_kembali_plan' => '2026-06-05',
                'status' => 'dikembalikan',
            ],
            [
                'user_id' => $eka->id, // Menggunakan ID dinamis Eka
                'tgl_pinjam' => '2026-06-03',
                'tgl_kembali_plan' => '2026-06-06',
                'status' => 'telat',
            ],
            [
                'user_id' => $rian->id,
                'tgl_pinjam' => '2026-06-08',
                'tgl_kembali_plan' => '2026-06-11',
                'status' => 'dipinjam',
            ],
            [
                'user_id' => $siti->id,
                'tgl_pinjam' => '2026-06-09',
                'tgl_kembali_plan' => '2026-06-12',
                'status' => 'diajukan',
            ],
        ];

        foreach ($peminjaman as $pinjam) {
            Peminjaman::create($pinjam);
        }
    }
}