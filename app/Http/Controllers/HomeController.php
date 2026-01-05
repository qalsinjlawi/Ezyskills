<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Hero Section Data
        $heroData = [
            'title' => 'Skill Your Way Up To Success With Us',
            'subtitle' => 'Get the skills you need for the future of work.',
            'search_placeholder' => 'Search the course you want'
        ];

        // Categories
        $categories = Category::orderBy('order')->get();

        // Featured/Best Seller Courses (أول دورتين)
        $featuredCourses = Course::with(['instructor', 'category'])
                                ->where('status', 'opened')
                                ->orderBy('price', 'desc')
                                ->take(2)
                                ->get();

        // Popular Courses (أحدث 4 دورات)
        $courses = Course::with(['instructor', 'category'])
                        ->where('status', 'opened')
                        ->latest()
                        ->take(4)
                        ->get();
        
        // جلب المدربين (أول اثنين)
$instructors = Instructor::take(3)->get();        
        // إحصائيات
        $stats = [
            'total_students' => 100,
            'total_courses' => Course::count(),
            'expert_tutors' => 100,
            'video_hours' => 50,
            'success_rate' => 70,
            'expert_instructors' => 50
        ];

        // Certifications (بيانات ثابتة)
        $certifications = [
            ['name' => 'ISO Certified', 'icon' => '🏆', 'color' => 'purple'],
            ['name' => 'Accredited Courses', 'icon' => '🎓', 'color' => 'blue'],
            ['name' => 'Verified Learning', 'icon' => '✓', 'color' => 'green'],
            ['name' => 'Top Rated Platform', 'icon' => '⭐', 'color' => 'pink']
        ];

        // Collaborations (بيانات ثابتة)
        $collaborations = [
            ['name' => 'Google', 'logo' => 'fab fa-google'],
            ['name' => 'Microsoft', 'logo' => 'fab fa-microsoft'],
            ['name' => 'Amazon', 'logo' => 'fab fa-amazon'],
            ['name' => 'Meta', 'logo' => 'fab fa-meta']
        ];
        
        return view('home', compact(
            'heroData',
            'categories', 
            'featuredCourses',
            'courses', 
            'instructors', 
            'stats',
            'certifications',
            'collaborations'
        ));
    }
}