<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'user1',
                'email' => 'user1@email.com',
                'password' => Hash::make('user'),
            ],
            [
                'name' => 'user2',
                'email' => 'user2@email.com',
                'password' => Hash::make('user'),
            ],
            [
                'name' => 'user3',
                'email' => 'user3@email.com',
                'password' => Hash::make('user'),
            ],
            [
                'name' => 'user4',
                'email' => 'user4@email.com',
                'password' => Hash::make('user'),
            ],
            [
                'name' => 'user5',
                'email' => 'user5@email.com',
                'password' => Hash::make('user'),
            ],
        ];
        foreach ($users as $key => $value)
            User::create($value);
    }
}
