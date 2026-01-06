<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-orange: #FF7A59;
            --light-orange: #FF9478;
            --dark-blue: #004A99;
            --bg-light: #F8F9FA;
        }

        body {
            background-color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(135deg, #003D82 0%, #004A99 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            bottom: 0;
            right: -100px;
            width: 400px;
            height: 400px;
            background: var(--primary-orange);
            border-radius: 50%;
            opacity: 0.8;
        }

        /* Decorative Dots */
        .dots-pattern {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            gap: 8px;
            z-index: 1;
        }

        .dots-pattern span {
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-label {
            color: var(--primary-orange);
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .hero-title {
            color: white;
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .hero-description {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            line-height: 1.6;
            max-width: 500px;
        }

        .hero-images {
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .hero-image-box {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .hero-image-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .hero-image-box:first-child {
            margin-top: 0;
        }

        .hero-image-box:nth-child(2) {
            margin-top: 40px;
        }

        .hero-image-box:nth-child(3) {
            grid-column: 1 / -1;
            margin-top: -20px;
        }

        .hero-image-box:nth-child(3) img {
            height: 250px;
        }

        /* Story Section */
        .story-section {
            padding: 100px 0;
            position: relative;
        }

        .story-label {
            color: #6B7280;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .story-title {
            color: var(--primary-orange);
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 25px;
        }

        .story-description {
            color: #6B7280;
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .story-image-container {
            position: relative;
        }

        .story-circle {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            border: 8px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .story-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story-decoration {
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 250px;
            height: 250px;
            background: var(--primary-orange);
            border-radius: 50%;
            opacity: 0.3;
        }

        /* Decorative Arrows */
        .arrow-pattern {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .arrow-pattern i {
            display: block;
            color: var(--dark-blue);
            font-size: 1.2rem;
            margin: 5px 0;
        }

        /* Decorative Dots Grid */
        .dots-grid {
            position: absolute;
            bottom: 50px;
            left: 50px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .dots-grid span {
            width: 12px;
            height: 12px;
            background: var(--primary-orange);
            border-radius: 50%;
        }

        /* Mission & Vision Section */
        .mission-section {
            background: #003F7D;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
            margin-bottom: 50px;
        }

        .mission-card {
            text-align: center;
            padding: 40px 30px;
        }

        .mission-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 30px;
            background: rgba(255, 122, 89, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .mission-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--primary-orange);
            border-radius: 50%;
            opacity: 0.3;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.3;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.5;
            }
        }

        .mission-icon i {
            font-size: 3rem;
            color: var(--primary-orange);
            position: relative;
            z-index: 1;
        }

        .mission-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 15px;
        }

        .mission-title span {
            color: var(--primary-orange);
        }

        .mission-description {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.95rem;
            line-height: 1.8;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-orange);
            border-radius: 10px;
            border: 3px solid #f1f1f1;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--light-orange);
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: var(--primary-orange) #f1f1f1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .story-title {
                font-size: 1.8rem;
            }

            .hero-images {
                grid-template-columns: 1fr;
                margin-top: 40px;
            }

            .hero-image-box:nth-child(2) {
                margin-top: 0;
            }

            .dots-pattern,
            .arrow-pattern,
            .dots-grid {
                display: none;
            }

            .about-hero::before {
                width: 250px;
                height: 250px;
                right: -50px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <div class="hero-label">ABOUT US</div>
                    <h1 class="hero-title">The Platform For The Next Billion Learners</h1>
                    <p class="hero-description">
                        Transforming tech education for the next generation of students & ambitious professionals.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="hero-images">
                        <div class="hero-image-box">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=500&h=400&fit=crop" alt="Learning">
                        </div>
                        <div class="hero-image-box">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=500&h=400&fit=crop" alt="Students">
                        </div>
                        <div class="hero-image-box">
                            <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?w=800&h=500&fit=crop" alt="Collaboration">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Dots -->
        <div class="dots-pattern">
            @for($i = 0; $i < 10; $i++)
                <span></span>
            @endfor
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="story-image-container">
                        <div class="story-circle">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=400&fit=crop" alt="Our Story">
                        </div>
                        <div class="story-decoration"></div>
                    </div>
                    
                    <!-- Arrow Pattern -->
                    <div class="arrow-pattern">
                        <i class="fas fa-chevron-up"></i>
                        <i class="fas fa-chevron-up"></i>
                        <i class="fas fa-chevron-up"></i>
                    </div>

                    <!-- Dots Grid -->
                    <div class="dots-grid">
                        @for($i = 0; $i < 8; $i++)
                            <span></span>
                        @endfor
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-label">OUR STORY</div>
                    <h2 class="story-title">Innovating new ways to train students</h2>
                    <p class="story-description">
                        We are so thrilled to share what we can achieve by harnessing our individual and collective learners, using industry standards to help build better and unique perspectives.
                    </p>
                    <p class="story-description">
                        Our innovative is backed by data, curiosity and the growth of our students. We create an uplifting environment where we learn from our failures and celebrate our success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="mission-title">Our <span>Mission</span></h3>
                        <p class="mission-description">
                            Develop great leaders and inspiring and unique teaching methodology to foster high quality part skills required in initiating for working standards from their professional skill based on career which are fully prepared for students to pursue higher education.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="mission-title">Our <span>Vision</span></h3>
                        <p class="mission-description">
                            To transform into a right progressive in guiding training sector in delivering excellence for working environment with holistic approach.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>