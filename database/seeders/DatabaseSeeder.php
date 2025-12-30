<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,           // أضف هذا السطر
            InstructorSeeder::class,
            CourseSeeder::class,
            PricingPlanSeeder::class,
            FaqSeeder::class,
            ContactMessageSeeder::class,

        ]);
    }
}