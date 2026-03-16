<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
     public function run(): void
     {
          User::create([
               'name' => 'Admin Teacher',
               'email' => 'admin@chemquest.com',
               'password' => Hash::make('password'),
               'is_admin' => true,
               'email_verified_at' => now(),
          ]);

          User::create([
               'name' => 'Ahmed Student',
               'email' => 'student@chemquest.com',
               'password' => Hash::make('password'),
               'is_admin' => false,
               'email_verified_at' => now(),
          ]);
     }
}
