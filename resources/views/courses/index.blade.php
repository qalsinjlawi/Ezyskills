<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الدورات - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar نفس اللي في home -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Ezyskills</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/courses">الدورات</a></li>
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

    <!-- Courses List -->
    <section class="py-5">
        <div class="container">
            <h1 class="text-center fw-bold mb-5">جميع الدورات</h1>

            @if($courses->count() == 0)
                <div class="text-center py-5">
                    <p class="lead text-muted">لا توجد دورات متاحة حاليًا. تابعونا قريبًا!</p>
                </div>
            @else
                <div class="row">
                    @foreach($courses as $course)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($course->description, 80) }}</p>
                                <p class="text-primary fw-bold">${{ $course->price }}</p>
                                <p class="text-muted small">المدرب: {{ $course->instructor->full_name }}</p>
<a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-primary btn-sm w-100">عرض التفاصيل</a>                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $courses->links() }}
                </div>
            @endif
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