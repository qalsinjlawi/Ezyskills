<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأسعار والخطط - Ezyskills</title>
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
                    <li class="nav-item"><a class="nav-link active" href="/pricing">الأسعار</a></li>
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

    <!-- Pricing Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="fw-bold">اختر الخطة المناسبة لك</h1>
                <p class="lead text-muted">اشترك الآن واحصل على وصول غير محدود لتطوير مهاراتك</p>
            </div>

            <div class="row justify-content-center">
                @forelse($plans as $plan)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center h-100 shadow-sm border-0 {{ $plan->name == 'Premium' ? 'border-primary border-3' : '' }}">
                        @if($plan->name == 'Premium')
                            <div class="badge bg-primary position-absolute top-0 start-50 translate-middle-x px-3 py-2 rounded-pill">
                                الأكثر شعبية
                            </div>
                        @endif
                        <div class="card-header bg-white border-0 pt-5">
                            <h3 class="fw-bold">{{ $plan->name }}</h3>
                            <p class="fs-1 fw-bold text-primary">${{ $plan->price }}<span class="fs-5 text-muted">/{{ $plan->duration_months }} شهر</span></p>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                {!! nl2br(e($plan->features)) !!}
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0 pb-4">
                            <a href="#" class="btn btn-primary btn-lg w-100">اشترك الآن</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center py-5">
                    <p class="lead text-muted">لا توجد خطط أسعار متاحة حاليًا.</p>
                </div>
                @endforelse
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