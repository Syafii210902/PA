<?php

namespace Database\Seeders;

use App\Models\DivisiKegiatan;
use App\Models\JoinDivisi;
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
            'image' => 'pp.jpg',
            'role' => 'user'
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
            'image' => '',
            'role' => 'user'
        ]);
        Mahasiswa::create([
            'user_id' => '2',
            'full_name' => 'Full Name User2',
            'nrp' => '2103191046',
            'kelas' => '3 D4 IT A',
            'jurusan' => 'Telekomunikasi',
            'bio' => 'Busy'
        ]);
        User::create([
            'username' =>"User3",
            'email' => "user3@gmail.com",
            'password' => '12345',
            'image' => '',
            'role' => 'user'
        ]);
        Mahasiswa::create([
            'user_id' => '3',
            'full_name' => 'Full Name User3',
            'nrp' => '2103191047',
            'kelas' => '1 D3 IT B',
            'jurusan' => 'Teknik Komputer',
            'bio' => 'Available'
        ]);
        User::create([
            'username' =>"User4",
            'email' => "user4@gmail.com",
            'password' => '12345',
            'image' => '',
            'role' => 'user'
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
            'nama_lomba' => 'Tes Beda Judul',
            'deskripsi' => 'Beda Deskripsi',
            'tingkat' => 'Regional',
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
        JoinDivisi::create([
            'user_id' => '2',
            'divisi_id' => '1',
            'pilihan1' => 'Acara',
            'pilihan2' => 'Perlengkapan',
            'status1' => '0',
            'status2' => '1'
        ]);
        JoinDivisi::create([
            'user_id' => '3',
            'divisi_id' => '3',
            'pilihan1' => 'Sponsorship',
            'pilihan2' => 'Acara',
            'status1' => '1',
            'status2' => '0'
        ]);
        JoinDivisi::create([
            'user_id' => '3',
            'divisi_id' => '2',
            'pilihan1' => 'Perlengkapan',
            'pilihan2' => '',
            'status1' => '0',
            'status2' => '0'
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
            'status' => '0',
            'tahun' => '2020',
            'type' => 'publish'
        ]);
        
        JuaraTim::create([
            'tim_id' => '1',
            'keterangan' => 'Juara 2',
            'sertifikat' => 'poster1.jpg',
            'status' => '0',
            'tahun' => '2020',
            'type' => 'private'
        ]);

        JuaraIndividu::create([
            'user_id' => '2',
            'lomba_id' => '1',
            'bidang' => 'Cerdas Cermat',
            'keterangan' => 'Juara 3',
            'sertifikat' => 'poster1.jpg',
            'status' => '0',
            'tahun' => '2022',
            'type' => 'private'
        ]);
        
        JuaraTim::create([
            'tim_id' => '2',
            'keterangan' => 'Juara 4',
            'sertifikat' => 'poster1.jpg',
            'status' => '0',
            'tahun' => '2022',
            'type' => 'publish'
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

        Pengalaman::create([
            'user_id' => '1',
            'nama_kegiatan' => 'Suksesi HIMIT',
            'jabatan' => 'PJ PDD',
            'tahun' => '2019'
        ]);
    }
}
