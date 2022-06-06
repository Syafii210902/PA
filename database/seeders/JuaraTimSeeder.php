<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JuaraTim;

class JuaraTimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JuaraTim::create([
            'tim_id' => '1',
            'keterangan' => 'Juara 2',
            'sertifikat' => 'poster1.jpg',
            'status' => '0',
            'tahun' => '2020',
            'type' => 'private'
        ]);
        JuaraTim::create([
            'tim_id' => '2',
            'keterangan' => 'Juara 4',
            'sertifikat' => 'poster1.jpg',
            'status' => '1',
            'tahun' => '2022',
            'type' => 'publish'
        ]);
        JuaraTim::create([
            'tim_id' => '3',
            'keterangan' => 'Juara 2',
            'sertifikat' => 'poster1.jpg',
            'status' => '1',
            'tahun' => '2022',
            'type' => 'publish'
        ]);
    }
}
