<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Ezyskills</title>
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

        .category-card {
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

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .category-card-header {
            background: linear-gradient(135deg, var(--card-blue) 0%, #0056b3 100%);
            padding: 50px 20px;
            text-align: center;
            position: relative;
            min-height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .category-icon {
            font-size: 4rem;
            margin-bottom: 15px;
        }

        .category-name {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
        }

        .category-card-body {
            padding: 25px 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .category-courses-count {
            text-align: center;
            font-size: 1.2rem;
            color: #6B7280;
            margin-bottom: 20px;
        }

        .category-courses-count strong {
            color: var(--primary-orange);
            font-size: 2rem;
            display: block;
            margin-bottom: 5px;
        }

        .category-btn {
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

        .category-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 122, 89, 0.3);
            color: white;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    @include('includes.header')

    <section class="page-content">
        <div class="container">
            <div class="page-header text-center">
                <h1 class="page-title">Course <span>Categories</span></h1>
            </div>

            <div class="row">
                @foreach($categories as $category)
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="category-card-header">
                            <div class="category-icon">{{ $category->icon }}</div>
                            <h3 class="category-name">{{ $category->name }}</h3>
                        </div>
                        <div class="category-card-body">
                            <div class="category-courses-count">
                                <strong>{{ $category->courses_count }}</strong>
                                Available Courses
                            </div>
                            <a href="{{ route('categories.show', $category->slug) }}" class="category-btn">
                                View Courses
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('includes.footer')
</body>
</html>