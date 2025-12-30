<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    public function run()
    {
        Instructor::create([
            'full_name' => 'John Smith',
            'title' => 'Senior Web Developer',
            'profile_image' => null
        ]);

        Instructor::create([
            'full_name' => 'Sarah Johnson',
            'title' => 'Cloud Architecture Expert',
            'profile_image' => null
        ]);

        Instructor::create([
            'full_name' => 'Michael Chen',
            'title' => 'Frontend Specialist',
            'profile_image' => null
        ]);
    }
}