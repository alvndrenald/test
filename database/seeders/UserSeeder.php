<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Chatarine Caroline',
            'email' => 'chatarinecaroline@gmail.com',
            'password' => bcrypt('chatarine19'),
        ]);

        User::create([
            'name' => 'Alvindra Renaldo',
            'email' => 'alvindrarenaldo@gmail.com',
            'password' => bcrypt('alvindra07'),
        ]);

        User::create([
            'name' => 'Dewi Bulan Irene',
            'email' => 'dewibulanirene@gmail.com',
            'password' => bcrypt('dewi07'),
        ]);
    }
}
