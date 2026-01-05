<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'color',
        'order'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id', 'category_id');
    }
}