<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // عرض جميع الدورات
    public function index()
    {
        $courses = Course::with('instructor')
                        ->paginate(12);
        
        return view('courses.index', compact('courses'));
    }
    
    public function show($id)
    {
        $course = Course::with('instructor')
                       ->findOrFail($id);
        
        return view('courses.show', compact('course'));
    }
}