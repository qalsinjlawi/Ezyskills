<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $primaryKey = 'instructor_id';
    public $incrementing = true;
    protected $keyType = 'int';
    
    protected $fillable = [
        'full_name',
        'title',
        'profile_image'
    ];

    // علاقة المدرب بالدورات
    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id', 'instructor_id');
    }
}