<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'namajurusan' => 'Teknik Elektronika',
            'alias' => 'Elka'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknik Telekomunikasi',
            'alias' => 'Telkom'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknik Elektro Industri',
            'alias' => 'Elin'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknik Informatika',
            'alias' => 'IT'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknik Mekatronika',
            'alias' => 'MK'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknik Komputer',
            'alias' => 'TK'
        ]);
        Jurusan::create([
            'namajurusan' => 'Multimedia Broadcasting',
            'alias' => 'MM'
        ]);
        Jurusan::create([
            'namajurusan' => 'Sistem Pembangkit Energi',
            'alias' => 'SPE'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknologi Game',
            'alias' => 'Game'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknologi Rekayasa Internet',
            'alias' => 'TRI'
        ]);
        Jurusan::create([
            'namajurusan' => 'Teknologi Rekayasa Multimedia',
            'alias' => 'TRM'
        ]);
        Jurusan::create([
            'namajurusan' => 'Sains Data Terapan',
            'alias' => 'SDT'
        ]);
    }
}
