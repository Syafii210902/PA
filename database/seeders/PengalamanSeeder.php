<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengalaman;

class PengalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengalaman::create([
            'user_id' => '1',
            'nama_kegiatan' => 'Suksesi HIMIT',
            'jabatan' => 'PJ PDD',
            'tahun' => '2019'
        ]);
    }
}
