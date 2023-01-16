<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                "name" => "Claude Myburgh",
                "email" => config('dashboard.claude.email'),
                "password" => config('dashboard.claude.password')
            ],
            [
                "name" => "Hendry Ollewagen",
                "email" => config('dashboard.hendry.email'),
                "password" => config('dashboard.hendry.password')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }


    }
}
