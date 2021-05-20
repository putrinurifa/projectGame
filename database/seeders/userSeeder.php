<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Admin', 'Ilham'];
        $email = ['admin@gmail.com', 'ilham@gmail.com'];
        $password = ['12345678', '12345678'];
        $skor = [0,0];
        $role = ['admin', 'player'];

        for ($i = 0; $i < 2; $i++) {
            DB::table('users')->insert([
                'name' => $name[$i],
                'email' => $email[$i],
                'password' => Hash::make($password[$i]),
                'skor' => $skor[$i],
                'role' => $role[$i]
            ]);
        }
    }
}
