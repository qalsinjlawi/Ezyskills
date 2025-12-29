<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;

class HomeController extends Controller
{
    public function index()
    {
        // جلب أحدث 4 دورات
        $courses = Course::with('instructor')
                        ->latest()
                        ->take(4)
                        ->get();
        
        // جلب جميع المدربين
        $instructors = Instructor::all();
        
        // إحصائيات
        $stats = [
            'total_students' => 100,
            'total_courses' => Course::count(),
            'success_rate' => 70,
            'certified_students' => 60
        ];
        
        return view('home', compact('courses', 'instructors', 'stats'));
    }
}