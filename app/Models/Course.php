<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'course_id';
    
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'price',
        'duration_hours',
        'level',
        'instructor_id'
    ];

    // علاقة الدورة بالمدرب
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'instructor_id');
    }

    // علاقة الدورة بالتسجيلات
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id', 'course_id');
    }
}