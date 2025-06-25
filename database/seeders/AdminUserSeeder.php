<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'profession' => 'Administrateur',
            'phone' => '0987654321',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'), // Changez ce mot de passe pour la production !
            'role' => 'user',
        ]);
    }
}
