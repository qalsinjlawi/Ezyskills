<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }} - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-orange: #FF7A59;
            --light-orange: #FFB088;
            --dark-blue: #003D82;
            --card-blue: #004A99;
            --bg-light: #F8F9FA;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Hero Section */
        .course-hero {
            background: linear-gradient(135deg, var(--card-blue) 0%, #0056b3 100%);
            padding: 60px 0;
            color: white;
            border-radius: 0 0 30px 30px;
            margin-bottom: 40px;
        }

        .course-hero-content {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .course-icon-large {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            flex-shrink: 0;
        }

        .course-hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .course-hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            font-weight: 400;
        }

        /* Content Section */
        .course-content {
            padding: 0 0 80px;
        }

        /* Section Headers */
        .section-header {
            color: var(--primary-orange);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* About Section */
        .about-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }

        .about-section p {
            color: #4B5563;
            line-height: 1.8;
            font-size: 0.95rem;
        }

        /* Objectives Section */
        .objectives-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }

        .objective-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            padding: 12px;
            background: #F9FAFB;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .objective-item:hover {
            background: #FFF4F0;
            transform: translateX(-5px);
        }

        .objective-icon {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .objective-text {
            color: #374151;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Course Content (Curriculum) */
        .curriculum-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }

        .curriculum-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
            background: #F9FAFB;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .curriculum-item:hover {
            background: #FFF4F0;
            transform: translateX(5px);
        }

        .curriculum-number {
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 0.9rem;
            margin-right: 15px;
        }

        .curriculum-title {
            flex-grow: 1;
            color: #1F2937;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .curriculum-arrow {
            color: var(--primary-orange);
            font-size: 1.2rem;
        }

        /* Projects Section */
        .projects-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .project-card {
            background: #F9FAFB;
            padding: 25px 20px;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .project-card:hover {
            background: #FFF4F0;
            border-color: var(--primary-orange);
            transform: translateY(-5px);
        }

        .project-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.8rem;
            color: white;
        }

        .project-title {
            color: #1F2937;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .project-description {
            color: #6B7280;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        /* Tools Section */
        .tools-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .tool-item {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--card-blue) 0%, #0056b3 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .tool-item:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 20px rgba(0, 61, 130, 0.3);
        }

        .tool-item i {
            font-size: 2rem;
            color: white;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--card-blue) 0%, #0056b3 100%);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            color: white;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 61, 130, 0.2);
        }

        .cta-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-demo {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 12px 35px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-demo:hover {
            background: white;
            color: var(--card-blue);
        }

        .btn-enroll-now {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border: none;
            color: white;
            padding: 12px 35px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-enroll-now:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 122, 89, 0.4);
            color: white;
        }

        /* Sidebar */
        .course-sidebar {
            position: sticky;
            top: 20px;
        }

        .sidebar-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }

        .sidebar-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #F3F4F6;
        }

        .sidebar-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #F3F4F6;
        }

        .sidebar-item:last-child {
            border-bottom: none;
        }

        .sidebar-label {
            color: #6B7280;
            font-size: 0.95rem;
        }

        .sidebar-value {
            color: #1F2937;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .sidebar-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-orange);
            text-align: center;
            margin: 20px 0;
        }

        .btn-enroll-sidebar {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border: none;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn-enroll-sidebar:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 122, 89, 0.4);
        }

        .btn-enrolled {
            background: #10B981;
            cursor: not-allowed;
        }

        .btn-unenroll {
            background: transparent;
            border: 2px solid #EF4444;
            color: #EF4444;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-unenroll:hover {
            background: #EF4444;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .course-hero-content {
                flex-direction: column;
                text-align: center;
            }

            .course-hero-title {
                font-size: 1.8rem;
            }

            .project-grid {
                grid-template-columns: 1fr;
            }

            .tools-grid {
                grid-template-columns: repeat(auto-fill, minmax(70px, 1fr));
            }

            .cta-buttons {
                flex-direction: column;
            }

            .btn-demo, .btn-enroll-now {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Hero Section -->
    <div class="course-hero">
        <div class="container">
            <div class="course-hero-content">
                <div class="course-icon-large">
                    @if(stripos($course->title, 'angular') !== false)
                        <i class="fab fa-angular"></i>
                    @elseif(stripos($course->title, 'aws') !== false)
                        <i class="fab fa-aws"></i>
                    @elseif(stripos($course->title, 'vue') !== false)
                        <i class="fab fa-vuejs"></i>
                    @elseif(stripos($course->title, 'python') !== false)
                        <i class="fab fa-python"></i>
                    @elseif(stripos($course->title, 'react') !== false)
                        <i class="fab fa-react"></i>
                    @elseif(stripos($course->title, 'node') !== false)
                        <i class="fab fa-node-js"></i>
                    @else
                        <i class="fas fa-graduation-cap"></i>
                    @endif
                </div>
                <div>
                    <h1 class="course-hero-title">{{ $course->title }}:</h1>
                    <p class="course-hero-subtitle">{{ ucfirst($course->level) }} Level Coding</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="course-content">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-lg-8">
                    <!-- About Section -->
                    <div class="about-section">
                        <h2 class="section-header">About The Course</h2>
                        <p>{{ $course->description }}</p>
                    </div>

                    <!-- Objectives Section -->
                    <div class="objectives-section">
                        <h2 class="section-header">Objectives</h2>
                        @if($course->objectives && count($course->objectives) > 0)
                            @foreach($course->objectives as $objective)
                            <div class="objective-item">
                                <div class="objective-icon"><i class="fas fa-check"></i></div>
                                <div class="objective-text">{{ $objective }}</div>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Course Content Section -->
                    <div class="curriculum-section">
                        <h2 class="section-header">Course Content</h2>
                        @if($course->curriculum && count($course->curriculum) > 0)
                            @foreach($course->curriculum as $index => $item)
                            <div class="curriculum-item">
                                <div class="curriculum-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                                <div class="curriculum-title">{{ $item }}</div>
                                <div class="curriculum-arrow"><i class="fas fa-chevron-right"></i></div>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Projects Section -->
                    <div class="projects-section">
                        <h2 class="section-header">{{ $course->title }} Projects</h2>
                        @if($course->projects && count($course->projects) > 0)
                            <div class="project-grid">
                                @foreach($course->projects as $project)
                                <div class="project-card">
                                    <div class="project-icon">{{ $project['icon'] ?? '📁' }}</div>
                                    <div class="project-title">{{ $project['title'] }}</div>
                                    <div class="project-description">{{ $project['description'] }}</div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- CTA Section -->
                    <div class="cta-section">
                        <h3 class="cta-title">Wanna check more about the course?</h3>
                        <div class="cta-buttons">
                            <a href="#" class="btn-demo">
                                <i class="fas fa-play-circle"></i> Demo
                            </a>
                            <a href="#" class="btn-demo">
                                <i class="fas fa-envelope"></i> Email Now
                            </a>
                            @auth
                                @php
                                    $isEnrolled = Auth::user()->enrollments()->where('course_id', $course->course_id)->exists();
                                @endphp
                                @if(!$isEnrolled)
                                    <form action="{{ route('enroll.store', $course->course_id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn-enroll-now">
                                            <i class="fas fa-graduation-cap"></i> Download Curriculum
                                        </button>
                                    </form>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn-enroll-now">
                                    <i class="fas fa-graduation-cap"></i> Download Curriculum
                                </a>
                            @endauth
                        </div>
                    </div>

                    <!-- Tools Section -->
                    <div class="tools-section">
                        <h2 class="section-header">Tools & Platforms</h2>
                        @if($course->tools && count($course->tools) > 0)
                            <div class="tools-grid">
                                @foreach($course->tools as $tool)
                                <div class="tool-item" title="{{ $tool['name'] ?? 'Tool' }}">
                                    <i class="{{ $tool['icon'] ?? 'fas fa-tools' }}"></i>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="col-lg-4">
                    <div class="course-sidebar">
                        <div class="sidebar-card">
                            <h3 class="sidebar-title">Course Details</h3>
                            
                            <div class="sidebar-item">
                                <span class="sidebar-label">Instructor</span>
                                <span class="sidebar-value">{{ $course->instructor->full_name }}</span>
                            </div>
                            
                            <div class="sidebar-item">
                                <span class="sidebar-label">Duration</span>
                                <span class="sidebar-value">{{ $course->duration_hours }} Hours</span>
                            </div>
                            
                            <div class="sidebar-item">
                                <span class="sidebar-label">Level</span>
                                <span class="sidebar-value">{{ ucfirst($course->level) }}</span>
                            </div>
                            
                            <div class="sidebar-item">
                                <span class="sidebar-label">Language</span>
                                <span class="sidebar-value">English</span>
                            </div>
                            
                            <div class="sidebar-item">
                                <span class="sidebar-label">Certificate</span>
                                <span class="sidebar-value">Yes</span>
                            </div>

                            <div class="sidebar-price">${{ number_format($course->price, 2) }}</div>

                            @if(Auth::check())
                                @php
                                    $isEnrolled = Auth::user()->enrollments()->where('course_id', $course->course_id)->exists();
                                @endphp

                                @if($isEnrolled)
                                    <button class="btn-enroll-sidebar btn-enrolled" disabled>
                                        <i class="fas fa-check-circle"></i> Already Enrolled
                                    </button>
                                    <form action="{{ route('enroll.destroy', $course->course_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-unenroll" 
                                                onclick="return confirm('Are you sure you want to unenroll from this course?')">
                                            <i class="fas fa-times-circle"></i> Unenroll
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('enroll.store', $course->course_id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-enroll-sidebar">
                                            <i class="fas fa-shopping-cart"></i> Enroll Now
                                        </button>
                                    </form>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn-enroll-sidebar" style="text-decoration: none; display: block; text-align: center;">
                                    <i class="fas fa-sign-in-alt"></i> Login to Enroll
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>