<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // عرض جميع التصنيفات
    public function index()
    {
        $categories = Category::withCount('courses')
                             ->orderBy('order')
                             ->get();
        
        return view('categories.index', compact('categories'));
    }
    
    // عرض كورسات تصنيف معين
    public function show($slug)
    {
        $category = Category::where('slug', $slug)
                           ->withCount('courses')
                           ->firstOrFail();
        
        $courses = $category->courses()
                          ->with('instructor')
                          ->where('status', 'opened')
                          ->paginate(12);
        
        return view('categories.show', compact('category', 'courses'));
    }
}