<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// الصفحة الرئيسية
Route::get('/', [HomeController::class, 'index'])->name('home');

// صفحة الدورات
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');

// صفحة المدربين
Route::get('/instructors', [InstructorController::class, 'index'])->name('instructors.index');
Route::get('/instructors/{id}', [InstructorController::class, 'show'])->name('instructors.show');

// صفحة الأسعار
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');

// صفحة الأسئلة الشائعة
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// صفحة التواصل
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // تسجيل في دورة
    Route::post('/courses/{courseId}/enroll', [EnrollmentController::class, 'store'])->name('enroll.store');

    // عرض دوراتي
    Route::get('/my-courses', [EnrollmentController::class, 'myCourses'])->name('enrollments.my_courses');

    // إلغاء التسجيل
    Route::delete('/courses/{courseId}/enroll', [EnrollmentController::class, 'destroy'])->name('enroll.destroy');
});

require __DIR__.'/auth.php';