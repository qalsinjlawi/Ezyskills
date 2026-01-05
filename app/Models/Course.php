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
        'objectives',
        'curriculum',
        'projects',
        'tools',
        'instructor_id',
        'category_id'
    ];

    protected $casts = [
        'objectives' => 'array',
        'curriculum' => 'array',
        'projects' => 'array',
        'tools' => 'array',
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'instructor_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id', 'course_id');
    }
}