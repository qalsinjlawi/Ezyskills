<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $instructor->full_name }} - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('includes.header')

   

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-3 mx-auto" style="width: 150px; height: 150px;">
                                <span class="fs-1">{{ substr($instructor->full_name, 0, 1) }}</span>
                            </div>
                            <h3>{{ $instructor->full_name }}</h3>
                            <p class="text-muted">{{ $instructor->title }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2>الدورات التي يقدمها</h2>
                    @if($instructor->courses->count() == 0)
                        <p class="text-muted">لا توجد دورات حاليًا.</p>
                    @else
                        <div class="row">
                            @foreach($instructor->courses as $course)
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5>{{ $course->title }}</h5>
                                        <p class="text-muted">{{ Str::limit($course->description, 50) }}</p>
<a href="{{ route('courses.show', $course->course_id) }}" class="btn btn-primary btn-sm">عرض الدورة</a>                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif
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