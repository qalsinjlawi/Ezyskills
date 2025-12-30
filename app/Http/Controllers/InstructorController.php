<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::paginate(12);
        
        return view('instructors.index', compact('instructors'));
    }
    
    public function show($id)
{
    $instructor = Instructor::with('courses')
                           ->where('instructor_id', $id)
                           ->firstOrFail();
    
    return view('instructors.show', compact('instructor'));
}
}