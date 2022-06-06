<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tim;

class TimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            'jumlah_anggota' => '1',
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
    }
}
