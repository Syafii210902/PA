<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JoinTim;

class JoinTimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
