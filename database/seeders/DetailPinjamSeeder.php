<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sesuaikan 'detail_pinjam' dengan nama tabel di database/migration Anda
        DB::table('detail_pinjam')->insert([
            [
                'peminjaman_id' => 1,
                'alat_id' => 1,
                'jumlah' => 1,
            ],
            [
                'peminjaman_id' => 2,
                'alat_id' => 2,
                'jumlah' => 1,
            ],
            [
                'peminjaman_id' => 3,
                'alat_id' => 1,
                'jumlah' => 1,
            ],
        ]);
    }
}