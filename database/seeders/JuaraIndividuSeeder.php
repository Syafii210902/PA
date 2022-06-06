<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JuaraIndividu;

class JuaraIndividuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JuaraIndividu::create([
            'user_id' => '1',
            'lomba_id' => '1',
            'bidang' => 'UI/UX',
            'keterangan' => 'Juara 1',
            'sertifikat' => 'poster1.jpg',
            'status' => '1',
            'tahun' => '2020',
            'type' => 'publish'
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
        JuaraIndividu::create([
            'user_id' => '3',
            'lomba_id' => '1',
            'bidang' => 'Cyber Security',
            'keterangan' => 'Juara 1',
            'sertifikat' => 'poster1.jpg',
            'status' => '1',
            'tahun' => '2022',
            'type' => 'publish'
        ]);
    }
}
