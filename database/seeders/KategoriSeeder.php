<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            ['nama_kategori' => 'Jaringan'],
            ['nama_kategori' => 'Multimedia'],
            ['nama_kategori' => 'Komputer'],
            ['nama_kategori' => 'Peralatan/Tools'],
            ['nama_kategori' => 'Aksesoris'],
        ];

        foreach ($kategori as $item) {
            Kategori::create($item);
        }
    }
}