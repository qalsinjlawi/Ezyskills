<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;

class PricingController extends Controller
{
    /**
     * عرض صفحة الأسعار مع جميع الخطط
     */
    public function index()
    {
        $plans = PricingPlan::all();

        return view('pricing.index', compact('plans'));
    }
}