<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DivisiKegiatan;

class DivisiKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DivisiKegiatan::create([
            'kegiatan_id' => '1',
            'nama_divisi' => 'Acara',
            'deskripsi' => 'Divisi yang bertugas mengurus rangkaian acara mulai dari tahap persiapan hingga tahap pelaksanaan.'
        ]);
        DivisiKegiatan::create([
            'kegiatan_id' => '1',
            'nama_divisi' => 'Perlengkapan',
            'deskripsi' => 'Divisi yang bertugas menyediakan semua perlengkapan yang dibutuhkan selama acara. Berkoordinasi dengan divisi lain untuk menghimpun semua perlengkapan yang diperlukan oleh setiap divisi.'
        ]);
        DivisiKegiatan::create([
            'kegiatan_id' => '1',
            'nama_divisi' => 'Sponsorship',
            'deskripsi' => 'Divisi yang bertugas memastikan tersedianya dana untuk menyelenggarakan acara.'
        ]);
    }
}
