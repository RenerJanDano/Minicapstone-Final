<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'                  => 'RenerjanDano',
            'email'                 => 'admin@gmail.com',
            'gender'                => 'Male',
            'email_verified_at'     =>  now(),
            'password' => bcrypt('password123'), // password
            'remember_token' => Str::random(10),
        ])->assignRole('writer', 'admin');

        $users = [
        [
            'name' => 'Gwapo ko',
            'email' => 'janrener@gmail.com',
            'gender' => 'Male',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ],
        [
            'name' => 'Nam Dela Pena',
            'email' => 'delapena@gmail.com',
            'gender' => 'Female',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ],
    ];
    foreach($users as $user) {
        User::create($user)
        ->assignRole('user');
    }
    }
}
