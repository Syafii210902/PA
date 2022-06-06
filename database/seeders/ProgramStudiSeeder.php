<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramStudi::create([
            'programstudi' => 'D1',
            'keterangan' => 'Pendidikan Diploma Satu (D1)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D2',
            'keterangan' => 'Pendidikan Diploma Dua (D2)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3',
            'keterangan' => 'Pendidikan Diploma Tiga (D3)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4',
            'keterangan' => 'Pendidikan Sarjana Terapan'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4MD-1',
            'keterangan' => 'Konsentrasi Jaringan Komputer dan Sistem Informasi'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4DK-3',
            'keterangan' => 'Konsentrasi Jaringan Komputer dan Sistem Informasi'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3CC',
            'keterangan' => 'Community College (Kelas Khusus)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4MD-2',
            'keterangan' => 'Konsentrasi Jaringan Komputer dan Multimedia'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4MD-3',
            'keterangan' => 'Jurusan Elektronika'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4LJ',
            'keterangan' => 'Pendidikan Sarjana Terapan'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4DK-4',
            'keterangan' => 'Konsentrasi Jaringan Komputer dan Sistem Informasi'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3PJJ CC',
            'keterangan' => 'Pendidikan Diploma Tiga (D3)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4DK',
            'keterangan' => 'Program Pendidikan D4 Dikmenjur'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4LJPJJ',
            'keterangan' => 'Pendidikan Sarjana Terapan'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4 VEDC',
            'keterangan' => 'Program D4 VEDC'
        ]);
        ProgramStudi::create([
            'programstudi' => 'S2',
            'keterangan' => 'Sarjana Magister Terapan'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D1PJJ',
            'keterangan' => 'Pendidikan Diploma Satu (D1)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3PJJ AK',
            'keterangan' => 'Program Pendidikan D3'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3KPLN',
            'keterangan' => 'Program Pendidikan Diploma Tiga (D3)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3KGMF',
            'keterangan' => 'Program Pendidikan Diploma Tiga (D3)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4PJJ',
            'keterangan' => 'Pendidikan Sarjana Terapan'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3PJJ',
            'keterangan' => 'Pendidikan Diploma Tiga (D3)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D4IDPLN',
            'keterangan' => 'Program Pendidikan D4 Ikatan Dinas PLN'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3PSDKU-LA',
            'keterangan' => 'Pendidikan Diploma Tiga (D3)'
        ]);
        ProgramStudi::create([
            'programstudi' => 'D3PSDKU-SM',
            'keterangan' => 'Pendidikan Diploma Tiga (D3)'
        ]);
    }
}
