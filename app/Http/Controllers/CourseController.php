<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // عرض جميع الدورات
    public function index(Request $request)
    {
        $query = Course::with('instructor');
        
        // فلترة حسب الحالة (status)
        if ($request->filled('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }
        
        // بحث حسب العنوان
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
        
        // ترتيب النتائج
        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price-asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'title':
                    $query->orderBy('title', 'asc');
                    break;
                default:
                    $query->latest();
            }
        } else {
            $query->latest();
        }
        
        $courses = $query->paginate(12)->appends($request->all());
        
        return view('courses.index', compact('courses'));
    }
    
    public function show($id)
    {
        $course = Course::with('instructor')
                       ->findOrFail($id);
        
        return view('courses.show', compact('course'));
    }
}