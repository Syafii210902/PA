<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JoinDivisi;

class JoinDivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JoinDivisi::create([
            'user_id' => '1',
            'divisi_id' => '1',
            'pilihan1' => 'Acara',
            'pilihan2' => 'Perlengkapan',
            'status1' => '0',
            'status2' => '1',
            'no_wa' => '081'
        ]);
        JoinDivisi::create([
            'user_id' => '2',
            'divisi_id' => '3',
            'pilihan1' => 'Sponsorship',
            'pilihan2' => 'Acara',
            'status1' => '1',
            'status2' => '0',
            'no_wa' => '082'
        ]);
        JoinDivisi::create([
            'user_id' => '4',
            'divisi_id' => '3',
            'pilihan1' => 'Perlengkapan',
            'pilihan2' => NULL,
            'status1' => '0',
            'status2' => '0',
            'no_wa' => '083'
        ]);
    }
}
