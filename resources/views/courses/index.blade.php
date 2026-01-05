<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Ezyskills</title>
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

        /* Page Header */
        .page-header {
            padding: 40px 0 30px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0;
        }

        .page-title span {
            color: var(--primary-orange);
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .filter-tabs {
            display: flex;
            gap: 30px;
            align-items: center;
            flex-wrap: wrap;
        }

       .filter-tabs .filter-item {
    font-size: 0.95rem;
    font-weight: 500;
    color: #6B7280;
    cursor: pointer;
    padding: 8px 0;
    border-bottom: 2px solid transparent;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

        .filter-tabs .filter-item:hover {
            color: var(--primary-orange);
        }

        .filter-tabs .filter-item.active {
            color: var(--primary-orange);
            border-bottom-color: var(--primary-orange);
        }

        .filter-select {
            margin-left: auto;
        }

        .filter-select select {
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 8px 35px 8px 15px;
            font-size: 0.9rem;
            color: #6B7280;
            background-color: white;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236B7280' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
        }

        /* Search Box */
        .search-box {
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .search-box input {
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 10px 15px;
            width: 100%;
            font-size: 0.95rem;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary-orange);
            box-shadow: 0 0 0 3px rgba(255, 122, 89, 0.1);
        }

        /* Course Card */
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

        /* Pagination */
        .custom-pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 40px;
        }

        .pagination-item {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: white;
            color: #6B7280;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .pagination-item:hover {
            background: var(--primary-orange);
            color: white;
        }

        .pagination-item.active {
            background: var(--primary-orange);
            color: white;
        }

        /* Empty State */
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

        /* Responsive */
        @media (max-width: 768px) {
            .page-title {
                font-size: 1.5rem;
            }

            .filter-tabs {
                gap: 15px;
            }

            .filter-select {
                margin-left: 0;
                width: 100%;
                margin-top: 15px;
            }

            .filter-select select {
                width: 100%;
            }
        }

        /* Custom Icons for Different Courses */
        .course-card[data-course="angular"] .course-icon::before { content: "🅰️"; }
        .course-card[data-course="aws"] .course-icon::before { content: "☁️"; }
        .course-card[data-course="vue"] .course-icon::before { content: "✌️"; }
        .course-card[data-course="power-bi"] .course-icon::before { content: "📊"; }
        .course-card[data-course="python"] .course-icon::before { content: "🐍"; }
        .course-card[data-course="react"] .course-icon::before { content: "⚛️"; }
        .course-card[data-course="testing"] .course-icon::before { content: "✅"; }
        .course-card[data-course="c-sharp"] .course-icon::before { content: "C#"; font-size: 3rem; font-weight: bold; }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Page Content -->
    <section class="page-content">
        <div class="container">
            <!-- Page Header -->
            <div class="page-header text-center">
                <h1 class="page-title">Courses <span>List</span></h1>
            </div>

            <!-- Search Box -->
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Search Bootcamps..." onkeyup="filterCourses()">
            </div>

            <!-- Filter Section -->
<div class="filter-section">
    <div class="filter-tabs">
        <a href="{{ route('courses.index', ['status' => 'all'] + request()->except('status')) }}" 
           class="filter-item {{ !request('status') || request('status') == 'all' ? 'active' : '' }}">
            All
        </a>
        <a href="{{ route('courses.index', ['status' => 'opened'] + request()->except('status')) }}" 
           class="filter-item {{ request('status') == 'opened' ? 'active' : '' }}">
            Opened
        </a>
        <a href="{{ route('courses.index', ['status' => 'coming-soon'] + request()->except('status')) }}" 
           class="filter-item {{ request('status') == 'coming-soon' ? 'active' : '' }}">
            Coming Soon
        </a>
        <a href="{{ route('courses.index', ['status' => 'archived'] + request()->except('status')) }}" 
           class="filter-item {{ request('status') == 'archived' ? 'active' : '' }}">
            Archived
        </a>
        <div class="filter-select">
            <select id="sortSelect" onchange="window.location.href='{{ route('courses.index') }}?status={{ request('status', 'all') }}&sort=' + this.value">
                <option value="">Sort by Progress Date</option>
                <option value="price-asc" {{ request('sort') == 'price-asc' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price-desc" {{ request('sort') == 'price-desc' ? 'selected' : '' }}>Price: High to Low</option>
                <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>Title: A-Z</option>
            </select>
        </div>
    </div>
</div>
            <!-- Courses Grid -->
            @if($courses->count() == 0)
                <div class="empty-state">
                    <i class="fas fa-book-open"></i>
                    <h3>No Courses Available</h3>
                    <p>Check back soon for new exciting courses!</p>
                </div>
            @else
                <div class="row" id="coursesGrid">
                    @foreach($courses as $course)
                    <div class="col-lg-3 col-md-4 col-sm-6 course-item" 
                         data-title="{{ strtolower($course->title) }}" 
                         data-price="{{ $course->price }}">
                        <div class="course-card" data-course="{{ Str::slug($course->title) }}">
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
                                    @elseif(stripos($course->title, 'node') !== false)
                                        <i class="fab fa-node-js"></i>
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
                <div class="custom-pagination">
                    @if($courses->currentPage() > 1)
                        <a href="{{ $courses->previousPageUrl() }}" class="pagination-item">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    @endif

                    @for($i = 1; $i <= $courses->lastPage(); $i++)
                        <a href="{{ $courses->url($i) }}" 
                           class="pagination-item {{ $i == $courses->currentPage() ? 'active' : '' }}">
                            {{ $i }}
                        </a>
                    @endfor

                    @if($courses->hasMorePages())
                        <a href="{{ $courses->nextPageUrl() }}" class="pagination-item">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filter functionality
        document.querySelectorAll('.filter-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.filter-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                // Add your filter logic here
            });
        });

       function filterCourses() {
        const input = document.getElementById('searchInput');
        const searchValue = input.value;
        const currentUrl = new URL(window.location.href);
        
        if (searchValue) {
            currentUrl.searchParams.set('search', searchValue);
        } else {
            currentUrl.searchParams.delete('search');
        }
        
        window.location.href = currentUrl.toString();
    }

    // Allow Enter key for search
    document.getElementById('searchInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            filterCourses();
        }
    });
        

        // Sort functionality
        function sortCourses() {
            const select = document.getElementById('sortSelect');
            const sortValue = select.value;
            const grid = document.getElementById('coursesGrid');
            const items = Array.from(document.querySelectorAll('.course-item'));

            if (sortValue === 'price-asc') {
                items.sort((a, b) => parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price')));
            } else if (sortValue === 'price-desc') {
                items.sort((a, b) => parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price')));
            } else if (sortValue === 'title') {
                items.sort((a, b) => a.getAttribute('data-title').localeCompare(b.getAttribute('data-title')));
            }

            items.forEach(item => grid.appendChild(item));
        }
    </script>
</body>
</html>