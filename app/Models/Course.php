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
        'status',  
        'objectives',      // ← جديد
        'curriculum',      // ← جديد
        'projects',        // ← جديد
        'tools',       
        'instructor_id'
    ];

    // ← تحويل الحقول JSON تلقائياً
    protected $casts = [
        'objectives' => 'array',
        'curriculum' => 'array',
        'projects' => 'array',
        'tools' => 'array',
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