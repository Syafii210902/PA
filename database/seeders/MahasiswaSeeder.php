<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'user_id' => '1',
            'program_id' => '3',
            'jurusan_id' => '4',
            'full_name' => 'Full Name User1',
            'nrp' => '2103191045',
            'kelas' => '1',
            'paralel' => 'A',
            'bio' => 'Always Coding'
        ]);
        Mahasiswa::create([
            'user_id' => '2',
            'program_id' => '3',
            'jurusan_id' => '4',
            'full_name' => 'Full Name User2',
            'nrp' => '2103191046',
            'kelas' => '2',
            'paralel' => 'B',
            'bio' => 'Busy'
        ]);
        Mahasiswa::create([
            'user_id' => '3',
            'program_id' => '3',
            'jurusan_id' => '4',
            'full_name' => 'Full Name User3',
            'nrp' => '2103191047',
            'kelas' => '3',
            'paralel' => 'A',
            'bio' => 'Available'
        ]);
        Mahasiswa::create([
            'user_id' => '4',
            'program_id' => '4',
            'jurusan_id' => '4',
            'full_name' => 'Full Name User4',
            'nrp' => '2103191048',
            'kelas' => '4',
            'paralel' => 'B',
            'bio' => 'None'
        ]);
    }
}
