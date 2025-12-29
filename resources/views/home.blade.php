<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezyskills - الصفحة الرئيسية</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Ezyskills</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">الدورات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">التواصل</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">دخول</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">تسجيل</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">ابدأ رحلتك نحو النجاح معنا</h1>
            <p class="lead">منصة Ezyskills لتطوير المهارات التقنية</p>
            <a href="#" class="btn btn-light btn-lg mt-3">استكشف الدورات</a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h2 class="fw-bold text-primary">{{ $stats['total_students'] }}+</h2>
                    <p>طالب</p>
                </div>
                <div class="col-md-3">
                    <h2 class="fw-bold text-primary">{{ $stats['total_courses'] }}+</h2>
                    <p>دورة</p>
                </div>
                <div class="col-md-3">
                    <h2 class="fw-bold text-primary">{{ $stats['success_rate'] }}%</h2>
                    <p>معدل النجاح</p>
                </div>
                <div class="col-md-3">
                    <h2 class="fw-bold text-primary">{{ $stats['certified_students'] }}+</h2>
                    <p>شهادة معتمدة</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">أحدث الدورات</h2>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($course->description, 50) }}</p>
                            <p class="text-primary fw-bold">${{ $course->price }}</p>
                            <p class="text-muted small">المدرب: {{ $course->instructor->full_name }}</p>
                            <a href="#" class="btn btn-primary btn-sm w-100">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Instructors Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">المدربون المحترفون</h2>
            <div class="row">
                @foreach($instructors as $instructor)
                <div class="col-md-4 mb-4">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <span class="fs-2">{{ substr($instructor->full_name, 0, 1) }}</span>
                            </div>
                            <h5 class="card-title">{{ $instructor->full_name }}</h5>
                            <p class="card-text text-muted">{{ $instructor->title }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Ezyskills. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>