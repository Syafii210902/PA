<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriKegiatan;

class KategoriKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriKegiatan::create([
            'nama_kategori' => 'it'
        ]);
        KategoriKegiatan::create([
            'nama_kategori' => 'tekkom'
        ]);
    }
}
