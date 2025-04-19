<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Seu Nome',
            'email' => 'seu@email.com',
            'password' => Hash::make('abcd@1234'),
        ]);
    }
} 