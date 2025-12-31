<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $primaryKey = 'plan_id';
    
    protected $fillable = [
        'name',
        'price',
        'duration_months',
        'features'
    ];

    protected $casts = [
        'features' => 'array'
    ];
}