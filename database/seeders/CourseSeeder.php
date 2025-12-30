<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'title' => 'Angular JS Complete Course',
            'description' => 'Learn Angular from basics to advanced concepts',
            'price' => 99.99,
            'duration_hours' => 40,
            'level' => 'Basic to Advance',
            'instructor_id' => 1
        ]);

        Course::create([
            'title' => 'AWS Cloud Practitioner',
            'description' => 'Master Amazon Web Services fundamentals',
            'price' => 149.99,
            'duration_hours' => 30,
            'level' => 'Intermediate',
            'instructor_id' => 2
        ]);

        Course::create([
            'title' => 'Vue.js Modern Development',
            'description' => 'Build modern web applications with Vue.js',
            'price' => 89.99,
            'duration_hours' => 35,
            'level' => 'Basic to Advance',
            'instructor_id' => 3
        ]);
    }
}