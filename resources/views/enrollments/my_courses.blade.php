<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دوراتي - Ezyskills</title>
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
                    <li class="nav-item"><a class="nav-link" href="/courses">الدورات</a></li>
                    <li class="nav-item"><a class="nav-link" href="/instructors">المدربون</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('enrollments.my_courses') }}">دوراتي</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <h1 class="text-center fw-bold mb-5">دوراتي المسجل فيها</h1>

            @if($enrollments->count() == 0)
                <div class="text-center py-5">
                    <p class="lead text-muted">لم تسجل في أي دورة بعد.</p>
                    <a href="/courses" class="btn btn-primary btn-lg">استكشف الدورات</a>
                </div>
            @else
                <div class="row">
                    @foreach($enrollments as $enrollment)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $enrollment->course->title }}</h5>
                                <p class="text-muted small">المدرب: {{ $enrollment->course->instructor->full_name }}</p>
                                <p class="text-muted">تاريخ التسجيل: {{ $enrollment->enrollment_date->format('d/m/Y') }}</p>
                                <a href="{{ route('courses.show', $enrollment->course->id) }}" class="btn btn-primary btn-sm w-100">عرض الدورة</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2024 Ezyskills. جميع الحقوق محفوظة.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>