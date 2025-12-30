<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricingPlan;

class PricingPlanSeeder extends Seeder
{
    public function run()
    {
        PricingPlan::create([
            'name' => 'Basic',
            'price' => 29.99,
            'duration_months' => 1,
            'features' => 'Access to 5 courses, Email support, Certificate of completion'
        ]);

        PricingPlan::create([
            'name' => 'Premium',
            'price' => 79.99,
            'duration_months' => 3,
            'features' => 'Access to all courses, Priority support, Certificates, Monthly webinars'
        ]);

        PricingPlan::create([
            'name' => 'Enterprise',
            'price' => 199.99,
            'duration_months' => 12,
            'features' => 'Unlimited access, 24/7 support, All certificates, Private sessions, Custom content'
        ]);
    }
}