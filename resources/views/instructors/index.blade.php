<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدربون - Ezyskills</title>
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
                    <li class="nav-item"><a class="nav-link active" href="/instructors">المدربون</a></li>
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

    <section class="py-5">
        <div class="container">
            <h1 class="text-center fw-bold mb-5">فريق المدربين</h1>

            @if($instructors->count() == 0)
                <div class="text-center py-5">
                    <p class="lead text-muted">لا يوجد مدربون حاليًا. تابعونا!</p>
                </div>
            @else
                <div class="row">
                    @foreach($instructors as $instructor)
                    <div class="col-md-4 mb-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3 mx-auto" style="width: 100px; height: 100px;">
                                    <span class="fs-1">{{ substr($instructor->full_name, 0, 1) }}</span>
                                </div>
                                <h5 class="card-title">{{ $instructor->full_name }}</h5>
                                <p class="card-text text-muted">{{ $instructor->title }}</p>
                                <a href="{{ route('instructors.show', $instructor->id) }}" class="btn btn-primary btn-sm">عرض التفاصيل</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-5">
                    {{ $instructors->links() }}
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