<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\LogAktivitas;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Jalankan Seeder Utama
        $this->call([
            UserSeeder::class,
            KategoriSeeder::class,
            AlatSeeder::class,
            PeminjamanSeeder::class,
            DetailPinjamSeeder::class,
            PengembalianSeeder::class,
        ]);

        // 2. Tulis LogAktivitas Langsung Di Sini
        $admin    = User::first()->id ?? 1;
        $petugas  = User::skip(1)->first()->id ?? $admin;
        $peminjam = User::skip(2)->first()->id ?? $admin;

        $logs = [
            ['user_id' => $admin, 'aktivitas' => 'Melakukan import data master alat baru sebanyak 5 entitas.'],
            ['user_id' => $petugas, 'aktivitas' => 'Menyetujui permohonan peminjaman ID #4.'],
            ['user_id' => $peminjam, 'aktivitas' => 'Mengajukan peminjaman alat baru untuk kebutuhan praktik kelompok.'],
            ['user_id' => $petugas, 'aktivitas' => 'Memproses pengembalian alat telat untuk peminjaman ID #3 dan mengenakan denda.'],
            ['user_id' => $admin, 'aktivitas' => 'Mengubah konfigurasi hak akses aplikasi.'],
        ];

        foreach ($logs as $log) {
            LogAktivitas::create($log);
        }
    }
}