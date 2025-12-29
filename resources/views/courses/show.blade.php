<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }} - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                    <li class="nav-item"><a class="nav-link" href="#">التواصل</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('enrollments.my_courses') }}">دوراتي</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">لوحة التحكم</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">دخول</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">تسجيل</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="fw-bold">{{ $course->title }}</h1>
                    <p class="lead text-muted">مع المدرب: {{ $course->instructor->full_name }}</p>
                    <p class="fs-4 text-primary fw-bold">${{ $course->price }}</p>
                    <p>{{ $course->description }}</p>

                    <!-- نظام التسجيل الذكي -->
                    <div class="mt-4">
                        @if(Auth::check())
                            @php
                                $isEnrolled = Auth::user()->enrollments()->where('course_id', $course->id)->exists();
                            @endphp

                            @if($isEnrolled)
                                <button class="btn btn-success btn-lg" disabled>
                                    <i class="fas fa-check-circle"></i> مسجل بالفعل في الدورة
                                </button>
                                <form action="{{ route('enroll.destroy', $course->id) }}" method="POST" class="d-inline ms-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-lg" 
                                            onclick="return confirm('هل أنت متأكد من إلغاء التسجيل في هذه الدورة؟')">
                                        إلغاء التسجيل
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('enroll.store', $course->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-lg">
                                        <i class="fas fa-shopping-cart"></i> التسجيل في الدورة الآن
                                    </button>
                                </form>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                                تسجيل الدخول للتسجيل في الدورة
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>معلومات الدورة</h5>
                            <ul class="list-unstyled">
                                <li><strong>المدرب:</strong> {{ $course->instructor->full_name }}</li>
                                <li><strong>المدة:</strong> {{ $course->duration_hours ?? 'غير محدد' }} ساعة</li>
                                <li><strong>المستوى:</strong> {{ $course->level ?? 'مبتدئ - متقدم' }}</li>
                                <li><strong>السعر:</strong> ${{ $course->price }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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