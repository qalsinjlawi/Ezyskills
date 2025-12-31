<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricingPlan;

class PricingPlanSeeder extends Seeder
{
    public function run()
    {
        // College Program
        PricingPlan::create([
            'name' => 'College Program',
            'price' => 20000,
            'duration_months' => 1,
            'features' => json_encode([
                'For Colleges, Universities & Group Of Students',
                'Common Timings'
            ])
        ]);

        // Employee Program
        PricingPlan::create([
            'name' => 'Employee Program',
            'price' => 50000,
            'duration_months' => 1,
            'features' => json_encode([
                '1-1 Individuals',
                'Choose Timings'
            ])
        ]);

        // Complete Transformation Program
        PricingPlan::create([
            'name' => 'Complete Transformation Program',
            'price' => 75000,
            'duration_months' => 1,
            'features' => json_encode([
                '1-1 Individuals',
                'Flexible Timings'
            ])
        ]);
    }
}