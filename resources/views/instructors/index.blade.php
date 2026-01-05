<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Instructors - Ezyskills</title>
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
        .instructors-hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #1e40af 100%);
            padding: 60px 0 80px;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
        }

        .instructors-hero::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .instructors-hero::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: -80px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .instructors-hero h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .instructors-hero p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
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

        /* Instructors Container */
        .instructors-container {
            position: relative;
            max-width: 1200px;
            margin: -40px auto 80px;
            padding: 0 15px;
        }

        /* Instructor Card - تنسيق الصفحة الرئيسية */
        .instructor-card {
            background: #F9FAFB;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .instructor-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .instructor-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--primary-orange);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* تخطيط أفقي للأفاتار والمعلومات */
        .instructor-header {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 20px;
        }

        .instructor-avatar {
            width: 96px;
            height: 96px;
            background: linear-gradient(135deg, var(--primary-orange), var(--light-orange));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            position: relative;
            flex-shrink: 0;
        }

        .instructor-avatar::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-orange);
            border-radius: 2px;
        }

        .instructor-info {
            flex: 1;
        }

        .instructor-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 5px;
        }

        .instructor-title {
            color: var(--primary-orange);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .instructor-stats {
            display: flex;
            gap: 20px;
            font-size: 0.85rem;
            color: #6B7280;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .stat-item svg {
            width: 16px;
            height: 16px;
        }

        .instructor-bio {
            color: #6B7280;
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .instructor-actions {
            display: flex;
            gap: 10px;
        }

        .btn-view-profile {
            flex: 1;
            background: var(--primary-blue);
            color: white;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-view-profile:hover {
            background: #1e40af;
            color: white;
        }

        .btn-contact {
            flex: 1;
            background: white;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-contact:hover {
            background: var(--primary-blue);
            color: white;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #6B7280;
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

        /* Pagination */
        .pagination {
            margin-top: 40px;
            justify-content: center;
        }

        .pagination .page-link {
            color: var(--primary-blue);
            border: 1px solid #E5E7EB;
            margin: 0 5px;
            border-radius: 8px;
        }

        .pagination .page-link:hover {
            background: var(--primary-orange);
            color: white;
            border-color: var(--primary-orange);
        }

        .pagination .page-item.active .page-link {
            background: var(--primary-blue);
            border-color: var(--primary-blue);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .instructors-hero h1 {
                font-size: 1.8rem;
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

            .instructor-card {
                padding: 20px;
            }

            .instructor-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .instructor-stats {
                justify-content: center;
            }

            .instructor-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Hero Section -->
    <div class="instructors-hero">
        <div class="container text-center">
            <h1>Meet Our Professional Instructors</h1>
            <p>Learn from industry experts with years of experience</p>
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

    <!-- Instructors Section -->
    <section class="instructors-section">
        <div class="instructors-container">
            @if($instructors->count() == 0)
                <div class="empty-state">
                    <h3>No Instructors Available</h3>
                    <p>No instructors have been added yet. Please check back later!</p>
                </div>
            @else
                <div class="row g-4">
                    @foreach($instructors as $instructor)
                    <div class="col-md-6 col-lg-4">
                        <div class="instructor-card">
                            <!-- Badge -->
                            <div class="instructor-badge">BEST TRAINER</div>
                            
                            <!-- Header: Avatar + Info -->
                            <div class="instructor-header">
                                <div class="instructor-avatar">
                                    {{ substr($instructor->full_name, 0, 1) }}
                                </div>
                                
                                <div class="instructor-info">
                                    <h3 class="instructor-name">{{ $instructor->full_name }}</h3>
                                    <p class="instructor-title">{{ $instructor->title ?? 'Senior Instructor' }}</p>
                                    
                                    <!-- Stats -->
                                    <div class="instructor-stats">
                                        <div class="stat-item">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            <span>{{ $instructor->courses_count ?? $instructor->courses->count() ?? '0' }} Courses</span>
                                        </div>
                                        <div class="stat-item">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                            </svg>
                                            <span>{{ rand(100, 500) }} Students</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bio -->
                            <p class="instructor-bio">
                                {{ Str::limit($instructor->bio ?? 'Experienced professional with deep knowledge in their field. Dedicated to helping students achieve their learning goals through practical, hands-on teaching methods and real-world insights.', 120) }}
                            </p>
                            
                            <!-- Action Buttons -->
                            <div class="instructor-actions">
                                <a href="{{ route('instructors.show', $instructor->instructor_id) }}" class="btn-view-profile">
                                    View Profile
                                </a>
                                <a href="#" class="btn-contact">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $instructors->links() }}
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