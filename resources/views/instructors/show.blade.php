<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $instructor->full_name }} - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-orange: #FF7A59;
            --light-orange: #FF9478;
            --primary-blue: #1e3a8a;
            --bg-light: #F8F9FA;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Cairo', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Hero Section */
        .instructor-hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #1e40af 100%);
            padding: 60px 0 80px;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
        }

        .instructor-hero::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .instructor-hero::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: -80px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        /* Decorative Dots */
        .dots-decoration {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 8px;
            z-index: 1;
        }

        .dots-decoration span {
            display: block;
            width: 8px;
            height: 8px;
            background-color: var(--primary-orange);
            border-radius: 50%;
            opacity: 0.6;
        }

        .dots-row {
            display: flex;
            gap: 8px;
        }

        /* Main Container */
        .instructor-container {
            position: relative;
            max-width: 1200px;
            margin: -40px auto 80px;
            padding: 0 15px;
        }

        /* Profile Card */
        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-orange), var(--light-orange));
        }

        .instructor-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--primary-orange);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .instructor-avatar-large {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, var(--primary-orange), var(--light-orange));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 4rem;
            font-weight: 700;
            color: white;
            position: relative;
            border: 5px solid white;
            box-shadow: 0 5px 20px rgba(255, 122, 89, 0.3);
        }

        .instructor-name-large {
            font-size: 2rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 10px;
            text-align: center;
        }

        .instructor-title-large {
            color: var(--primary-orange);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 25px;
            text-align: center;
        }

        .instructor-stats-large {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 30px 0;
            padding: 25px 0;
            border-top: 2px solid #E5E7EB;
            border-bottom: 2px solid #E5E7EB;
        }

        .stat-item-large {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-blue);
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #6B7280;
            margin-top: 5px;
        }

        .instructor-bio-large {
            color: #4B5563;
            font-size: 1rem;
            line-height: 1.8;
            text-align: center;
            max-width: 700px;
            margin: 25px auto;
        }

        /* Courses Section */
        .courses-section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1F2937;
            margin: 50px 0 30px;
            text-align: center;
        }

        .courses-section-title span {
            color: var(--primary-orange);
        }

        .course-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            border-top: 3px solid var(--primary-orange);
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .course-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-orange), var(--light-orange));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
        }

        .course-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 10px;
        }

        .course-description {
            color: #6B7280;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-view-course {
            display: block;
            width: 100%;
            background: var(--primary-blue);
            color: white;
            padding: 12px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-view-course:hover {
            background: #1e40af;
            color: white;
            transform: scale(1.02);
        }

        .empty-courses {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .empty-courses h3 {
            font-size: 1.5rem;
            color: #6B7280;
            margin-bottom: 10px;
        }

        /* Circle Decoration */
        .circle-decoration {
            position: fixed;
            bottom: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border-radius: 50%;
            opacity: 0.15;
            z-index: 0;
        }

        /* Back Button */
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .btn-back:hover {
            background: rgba(255, 255, 255, 0.3);
            color: white;
        }
/* Custom Scrollbar to match the orange theme */

/* For Chrome, Edge, Safari */
::-webkit-scrollbar {
    width: 12px; /* عرض الشريط العمودي */
}

::-webkit-scrollbar-track {
    background: #f1f1f1; /* خلفية التراك فاتحة */
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: var(--primary-orange); /* اللون البرتقالي الرئيسي */
    border-radius: 10px;
    border: 3px solid #f1f1f1; /* مسافة حول الـ thumb عشان يبدو أنيق */
}

::-webkit-scrollbar-thumb:hover {
    background: var(--light-orange); /* لون أفتح لما تمرر الماوس عليه */
}

/* For Firefox */
* {
    scrollbar-width: thin; /* شريط رفيع */
    scrollbar-color: var(--primary-orange) #f1f1f1; /* thumb برتقالي، track فاتح */
}
        /* Responsive */
        @media (max-width: 768px) {
            .instructor-hero {
                padding: 40px 0 60px;
            }

            .dots-decoration {
                display: none;
            }

            .circle-decoration {
                width: 250px;
                height: 250px;
                bottom: -50px;
                left: -50px;
            }

            .profile-card {
                padding: 30px 20px;
            }

            .instructor-stats-large {
                flex-direction: column;
                gap: 20px;
            }

            .course-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Hero Section -->
    <div class="instructor-hero">
        <div class="container">
            <a href="{{ route('instructors.index') }}" class="btn-back">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Instructors
            </a>
        </div>
        
        <!-- Decorative Dots -->
        <div class="dots-decoration">
            @for($i = 0; $i < 7; $i++)
            <div class="dots-row">
                @for($j = 0; $j < 3; $j++)
                <span></span>
                @endfor
            </div>
            @endfor
        </div>
    </div>

    <!-- Instructor Profile Section -->
    <section class="instructor-section">
        <div class="instructor-container">
            <!-- Profile Card -->
            <div class="profile-card">
                <div class="instructor-badge">BEST TRAINER</div>
                
                <!-- Avatar -->
                <div class="instructor-avatar-large">
                    {{ substr($instructor->full_name, 0, 1) }}
                </div>
                
                <!-- Name & Title -->
                <h1 class="instructor-name-large">{{ $instructor->full_name }}</h1>
                <p class="instructor-title-large">{{ $instructor->title ?? 'Senior Instructor' }}</p>
                
                <!-- Stats -->
                <div class="instructor-stats-large">
                    <div class="stat-item-large">
                        <span class="stat-number">{{ $instructor->courses->count() }}</span>
                        <span class="stat-label">Courses</span>
                    </div>
                    <div class="stat-item-large">
                        <span class="stat-number">{{ rand(100, 500) }}</span>
                        <span class="stat-label">Students</span>
                    </div>
                    <div class="stat-item-large">
                        <span class="stat-number">4.8</span>
                        <span class="stat-label">Rating</span>
                    </div>
                </div>
                
                <!-- Bio -->
                @if($instructor->bio)
                <p class="instructor-bio-large">
                    {{ $instructor->bio }}
                </p>
                @endif
            </div>

            <!-- Courses Section -->
            <h2 class="courses-section-title">
                Courses by <span>{{ $instructor->full_name }}</span>
            </h2>

            @if($instructor->courses->count() == 0)
                <div class="empty-courses">
                    <h3>No Courses Available</h3>
                    <p>This instructor hasn't published any courses yet. Check back soon!</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach($instructor->courses as $course)
                    <div class="col-md-6 col-lg-4">
                        <div class="course-card">
                            <!-- Course Icon -->
                            <div class="course-icon">
                                {{ substr($course->title, 0, 1) }}
                            </div>
                            
                            <!-- Course Title -->
                            <h3 class="course-title">{{ $course->title }}</h3>
                            
                            <!-- Course Description -->
                            <p class="course-description">
                                {{ Str::limit($course->description, 100) }}
                            </p>
                            
                            <!-- View Course Button -->
                            <a href="{{ route('courses.show', $course->course_id) }}" class="btn-view-course">
                                View Course Details
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Circle Decoration -->
        <div class="circle-decoration"></div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>