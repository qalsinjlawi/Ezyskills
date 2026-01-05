<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} Courses - Ezyskills</title>
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

        .category-hero {
            background: linear-gradient(135deg, var(--card-blue) 0%, #0056b3 100%);
            padding: 60px 0;
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }

        .category-hero-icon {
            font-size: 5rem;
            margin-bottom: 20px;
        }

        .category-hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .category-hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .course-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .course-card-header {
            background: linear-gradient(135deg, var(--card-blue) 0%, #0056b3 100%);
            padding: 40px 20px;
            text-align: center;
            position: relative;
            min-height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .course-icon {
            font-size: 4rem;
            color: white;
        }

        .course-card-body {
            padding: 25px 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .course-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 12px;
            text-align: center;
        }

        .course-description {
            color: #6B7280;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: center;
            flex-grow: 1;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid #E5E7EB;
            margin-bottom: 15px;
        }

        .course-meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.85rem;
            color: #6B7280;
        }

        .course-meta-item i {
            color: var(--primary-orange);
            font-size: 0.9rem;
        }

        .course-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-orange);
            text-align: center;
            margin-bottom: 15px;
        }

        .course-btn {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            width: 100%;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .course-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 122, 89, 0.3);
            color: white;
        }

        .empty-state {
            text-align: center;
            padding: 80px 20px;
        }

        .empty-state i {
            font-size: 4rem;
            color: #D1D5DB;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            color: #6B7280;
            margin-bottom: 10px;
        }

        .empty-state p {
            color: #9CA3AF;
        }

        @media (max-width: 768px) {
            .category-hero-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    @include('includes.header')

    <!-- Category Hero -->
    <div class="category-hero">
        <div class="container">
            <div class="category-hero-icon">{{ $category->icon }}</div>
            <h1 class="category-hero-title">{{ $category->name }}</h1>
            <p class="category-hero-subtitle">{{ $category->courses_count }} Courses Available</p>
        </div>
    </div>

    <!-- Courses Section -->
    <section class="page-content">
        <div class="container">
            @if($courses->count() == 0)
                <div class="empty-state">
                    <i class="fas fa-book-open"></i>
                    <h3>No Courses Available</h3>
                    <p>Check back soon for new courses in this category!</p>
                </div>
            @else
                <div class="row">
                    @foreach($courses as $course)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="course-card">
                            <div class="course-card-header">
                                <div class="course-icon">
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
                                    @else
                                        <i class="fas fa-graduation-cap"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="course-card-body">
                                <h3 class="course-title">{{ $course->title }}</h3>
                                <p class="course-description">{{ Str::limit($course->description, 100) }}</p>
                                <div class="course-meta">
                                    <div class="course-meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>{{ $course->duration_hours }}h</span>
                                    </div>
                                    <div class="course-meta-item">
                                        <i class="fas fa-signal"></i>
                                        <span>{{ ucfirst($course->level) }}</span>
                                    </div>
                                </div>
                                <div class="course-price">${{ number_format($course->price, 2) }}</div>
                                <a href="{{ route('courses.show', $course->course_id) }}" class="course-btn">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $courses->links() }}
                </div>
            @endif
        </div>
    </section>

    @include('includes.footer')
</body>
</html>