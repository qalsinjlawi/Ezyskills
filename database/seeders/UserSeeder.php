<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@ezyskills.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'phone' => '+962777000001'
        ]);

        // Teacher User
        User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@ezyskills.com',
            'password' => Hash::make('teacher123'),
            'role' => 'teacher',
            'phone' => '+962777000002'
        ]);

        // Student User
        User::create([
            'name' => 'Student User',
            'email' => 'student@ezyskills.com',
            'password' => Hash::make('student123'),
            'role' => 'student',
            'phone' => '+962777000003'
        ]);
    }
}