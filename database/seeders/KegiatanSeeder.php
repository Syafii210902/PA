<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kegiatan::create([
            'user_id' => '5',
            'kategori_id' => '1',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan1.jpg',
            'info' => 'www.google.com'
        ]);
        Kegiatan::create([
            'user_id' => '5',
            'kategori_id' => '2',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan2.jpg',
            'info' => 'www.google.com'
        ]);
        Kegiatan::create([
            'user_id' => '5',
            'kategori_id' => '1',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan3.jpg',
            'info' => 'www.google.com'
        ]);
        Kegiatan::create([
            'user_id' => '6',
            'kategori_id' => '2',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan4.jpg',
            'info' => 'www.google.com'
        ]);  
    }
}
