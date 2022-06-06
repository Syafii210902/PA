<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' =>"User1",
            'email' => "user1@gmail.com",
            'password' => bcrypt('password1'),
            'image' => 'pp.jpg',
            'role' => 'user'
        ]);
        User::create([
            'username' =>"User2",
            'email' => "user2@gmail.com",
            'password' => bcrypt('password2'),
            'image' => 'pp2.jpg',
            'role' => 'user'
        ]);
        User::create([
            'username' =>"User3",
            'email' => "user3@gmail.com",
            'password' => bcrypt('password3'),
            'role' => 'user'
        ]);
        User::create([
            'username' =>"User4",
            'email' => "user4@gmail.com",
            'password' => bcrypt('password4'),
            'role' => 'user'
        ]);
        User::create([
            'username' =>"Admin1",
            'email' => "admin1@gmail.com",
            'password' => bcrypt('admin1'),
            'role' => 'admin'
        ]);
        User::create([
            'username' =>"Admin2",
            'email' => "admin2@gmail.com",
            'password' => bcrypt('admin2'),
            'role' => 'admin'
        ]);
        User::create([
            'username' =>"Super Admin",
            'email' => "superadmin@gmail.com",
            'password' => bcrypt('superadmin'),
            'role' => 'super admin'
        ]);
    }
}
