<?php

namespace Database\Seeders;

use App\Models\JuaraIndividu;
use App\Models\JuaraTim;
use Illuminate\Database\Seeder;
use App\Models\Lomba;
use App\Models\Kegiatan;
use App\Models\KategoriKegiatan;
use App\Models\Tim;
use App\Models\JoinTim;
use App\Models\Mahasiswa;
use App\Models\Pengalaman;
use App\Models\Prestasi;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' =>"User1",
            'email' => "user1@gmail.com",
            'password' => '12345',
            'photo_profile' => 'pp.jpg'
        ]);
        Mahasiswa::create([
            'user_id' => '1',
            'full_name' => 'Full Name User1',
            'nrp' => '2103191045',
            'kelas' => '3 D3 IT B',
            'jurusan' => 'Teknik Informatika',
            'bio' => 'Always Coding'
        ]);
        User::create([
            'username' =>"User2",
            'email' => "user2@gmail.com",
            'password' => '12345',
            'photo_profile' => ''
        ]);
        Mahasiswa::create([
            'user_id' => '2',
            'full_name' => '',
            'nrp' => '',
            'kelas' => '',
            'jurusan' => '',
            'bio' => ''
        ]);
        User::create([
            'username' =>"User3",
            'email' => "user3@gmail.com",
            'password' => '12345',
            'photo_profile' => ''
        ]);
        Mahasiswa::create([
            'user_id' => '3'
        ]);
        User::create([
            'username' =>"User4",
            'email' => "user4@gmail.com",
            'password' => '12345',
            'photo_profile' => ''
        ]);

        Lomba::create([
            'user_id' => '1',
            'nama_lomba' => 'Information Technology Creative Competition',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'tingkat' => 'Nasional',
            'deadline' => '2022-03-01',
            'poster' => 'poster1.jpg',
            'info' => 'www.google.com'
        ]);

        Lomba::create([
            'user_id' => '1',
            'nama_lomba' => 'Information Technology Creative Competition',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'tingkat' => 'Nasional',
            'deadline' => '2022-03-01',
            'poster' => 'poster2.jpg',
            'info' => 'www.google.com'
        ]);

        Lomba::create([
            'user_id' => '1',
            'nama_lomba' => 'Information Technology Creative Competition',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'tingkat' => 'Nasional',
            'deadline' => '2022-03-01',
            'poster' => 'poster3.jpg',
            'info' => 'www.google.com'
        ]);

        Lomba::create([
            'user_id' => '1',
            'nama_lomba' => 'Information Technology Creative Competition',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'tingkat' => 'Nasional',
            'deadline' => '2022-03-01',
            'poster' => 'poster1.jpg',
            'info' => 'www.google.com'
        ]);

        Kegiatan::create([
            'user_id' => '1',
            'kategori_id' => '1',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan1.jpg',
            'info' => 'www.google.com'
        ]);

        Kegiatan::create([
            'user_id' => '1',
            'kategori_id' => '2',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan2.jpg',
            'info' => 'www.google.com'
        ]);

        Kegiatan::create([
            'user_id' => '1',
            'kategori_id' => '1',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan3.jpg',
            'info' => 'www.google.com'
        ]);

        Kegiatan::create([
            'user_id' => '1',
            'kategori_id' => '2',
            'nama_kegiatan' => 'Recruitment Staff Muda HIMIT 2022',
            'deskripsi' => 'Ide Bisnis TIK adalah salah satu cabang lomba yang diselenggarakan pada acara ITCC 2021 yang merupakan kegiatan yang diselenggarakan oleh program studi Teknologi Informasi Universitas Udayana. Pembeda lomba ini dengan lomba ide bisnis lainnya berada pada lingkup TIK yang diwajibkan pada lomba Ide Bisnis TIK. Karenanya, produk bisnis ciptaan peserta harus berada pada ruang teknologi informasi berupa aplikasi, system, dan lainnya yang disajikan dalam bentuk mockup.',
            'deadline' => '2022-03-01',
            'poster' => 'kegiatan4.jpg',
            'info' => 'www.google.com'
        ]);

        KategoriKegiatan::create([
            'nama_kategori' => 'it'
        ]);

        KategoriKegiatan::create([
            'nama_kategori' => 'tekkom'
        ]);

        Tim::create([
            'lomba_id' => '1',
            'user_id' => '1',
            'nama_tim' => 'Tim1',
            'jumlah_anggota' => '2',
            'bidang' => 'UI/UX',
            'requirement' => 'Programming, Public Speaking'
        ]);
        Tim::create([
            'lomba_id' => '1',
            'user_id' => '2',
            'nama_tim' => 'Tim2',
            'jumlah_anggota' => '3',
            'bidang' => 'Pemrograman',
            'requirement' => 'Programming, Public Speaking'
        ]);
        Tim::create([
            'lomba_id' => '1',
            'user_id' => '3',
            'nama_tim' => 'Tim3',
            'jumlah_anggota' => '4',
            'bidang' => 'Ide bisnis',
            'requirement' => 'Programming, Public Speaking'
        ]);
        Tim::create([
            'lomba_id' => '1',
            'user_id' => '1',
            'nama_tim' => 'Tim4',
            'jumlah_anggota' => '5',
            'bidang' => 'Cerdas Cermat',
            'requirement' => 'Programming, Public Speaking'
        ]);

        JuaraIndividu::create([
            'user_id' => '1',
            'lomba_id' => '1',
            'bidang' => 'UI/UX',
            'keterangan' => 'Juara 1',
            'sertifikat' => 'poster1.jpg',
            'status' => '0'
        ]);
        
        JuaraTim::create([
            'tim_id' => '1',
            'keterangan' => 'Juara 2',
            'sertifikat' => 'poster1.jpg',
            'status' => '0'
        ]);

        JuaraIndividu::create([
            'user_id' => '2',
            'lomba_id' => '1',
            'bidang' => 'Cerdas Cermat',
            'keterangan' => 'Juara 3',
            'sertifikat' => 'poster1.jpg',
            'status' => '0'
        ]);
        
        JuaraTim::create([
            'tim_id' => '2',
            'keterangan' => 'Juara 4',
            'sertifikat' => 'poster1.jpg',
            'status' => '0'
        ]);

        JoinTim::create([
            'user_id' => '2',
            'tim_id' => '1',
            'no_wa' => '081231129214',
            'status' => '1'
        ]);

        JoinTim::create([
            'user_id' => '3',
            'tim_id' => '1',
            'no_wa' => '081231129214',
            'status' => '1'
        ]);

        JoinTim::create([
            'user_id' => '4',
            'tim_id' => '1',
            'no_wa' => '081231129214',
            'status' => '0'
        ]);

        JoinTim::create([
            'user_id' => '1',
            'tim_id' => '2',
            'no_wa' => '081231129214',
            'status' => '1'
        ]);

        JoinTim::create([
            'user_id' => '3',
            'tim_id' => '2',
            'no_wa' => '081231129214',
            'status' => '1'
        ]);

        JoinTim::create([
            'user_id' => '4',
            'tim_id' => '2',
            'no_wa' => '081231129214',
            'status' => '1'
        ]);

        JoinTim::create([
            'user_id' => '1',
            'tim_id' => '3',
            'no_wa' => '081231129214',
            'status' => '1'
        ]);

        JoinTim::create([
            'user_id' => '2',
            'tim_id' => '4',
            'no_wa' => '081231129214',
            'status' => '0'
        ]);

        // Prestasi::create([
        //     'mahasiswa_id' => '1',
        //     'nama_lomba' => 'Information Technology Creative Competition',
        //     'bidang' => 'UI/UX',
        //     'keterangan' => 'juara 1',
        //     'tingkat' => 'Nasional',
        //     'tahun' => '2022',
        //     'sertifikat' => ''
        // ]);

        Pengalaman::create([
            'mahasiswa_id' => '1',
            'nama_kegiatan' => 'Suksesi HIMIT',
            'jabatan' => 'PJ PDD',
            'tahun' => '2019'
        ]);
    }
}
