<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Pricing - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-orange: #FF7A59;
            --light-orange: #FF9478;
            --bg-light: #F8F9FA;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Cairo', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Hero Section */
        .pricing-hero {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            padding: 60px 0 80px;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
        }

        .pricing-hero::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .pricing-hero::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: -80px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .pricing-hero h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
        }

        .pricing-hero h1 span {
            color: #FFE082;
        }

        /* Decorative Dots */
        .dots-decoration {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 8px;
            z-index: 1;
        }

        .dots-decoration span {
            display: block;
            width: 8px;
            height: 8px;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
        }

        .dots-row {
            display: flex;
            gap: 8px;
        }

        /* Pricing Container */
        .pricing-container {
            position: relative;
            max-width: 1100px;
            margin: -40px auto 80px;
            padding: 0 15px;
        }

        /* Pricing Cards Wrapper */
        .pricing-cards-wrapper {
            background: white;
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        /* Pricing Card */
        .pricing-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-radius: 15px;
            padding: 35px 25px;
            text-align: center;
            position: relative;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .pricing-card:hover {
            border-color: var(--primary-orange);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 122, 89, 0.15);
        }

        /* Featured Card */
        .pricing-card.featured {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border-color: var(--primary-orange);
            transform: scale(1.05);
        }

        .pricing-card.featured:hover {
            transform: scale(1.08) translateY(-5px);
        }

        .pricing-card.featured * {
            color: white !important;
        }

        /* Plan Badge */
        .plan-badge {
            background: rgba(255, 122, 89, 0.15);
            color: var(--primary-orange);
            font-size: 0.85rem;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 25px;
        }

        .pricing-card.featured .plan-badge {
            background: rgba(255, 255, 255, 0.25);
            color: white;
        }

        /* Price */
        .price-section {
            margin-bottom: 30px;
        }

        .price-amount {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-orange);
            line-height: 1.1;
        }

        .pricing-card.featured .price-amount {
            color: white;
        }

        .price-currency {
            font-size: 1.5rem;
            margin-right: 5px;
            font-weight: 600;
        }

        .price-tax {
            font-size: 0.9rem;
            color: #6B7280;
            margin-left: 6px;
            font-weight: 500;
        }

        .pricing-card.featured .price-tax {
            color: rgba(255, 255, 255, 0.9);
        }

        .price-note {
            font-size: 0.75rem;
            color: #9CA3AF;
            margin-top: 8px;
        }

        .pricing-card.featured .price-note {
            color: rgba(255, 255, 255, 0.85);
        }

        /* Button */
        .btn-choose {
            width: 100%;
            padding: 13px;
            border: 2px solid var(--primary-orange);
            background: white;
            color: var(--primary-orange);
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }

        .btn-choose:hover {
            background: var(--primary-orange);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 122, 89, 0.3);
        }

        .pricing-card.featured .btn-choose {
            background: transparent;
            color: white;
            border-color: white;
        }

        .pricing-card.featured .btn-choose:hover {
            background: #FF8263;
            color: #FF8263;
            transform: translateY(-2px);
        }

        /* Powered by */
        .powered-by {
            font-size: 0.85rem;
            color: #9CA3AF;
            font-weight: 600;
        }

        .pricing-card.featured .powered-by {
            color: rgba(255, 255, 255, 0.8);
        }

        /* Circle Decoration */
        .circle-decoration {
            position: fixed;
            bottom: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            border-radius: 50%;
            opacity: 0.15;
            z-index: 0;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #9CA3AF;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #6B7280;
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
            .pricing-hero h1 {
                font-size: 1.8rem;
            }

            .pricing-cards-wrapper {
                padding: 30px 20px;
            }

            .pricing-cards {
                grid-template-columns: 1fr;
            }

            .pricing-card.featured {
                transform: scale(1);
            }

            .pricing-card.featured:hover {
                transform: translateY(-5px);
            }

            .dots-decoration {
                display: none;
            }

            .circle-decoration {
                width: 250px;
                height: 250px;
                bottom: -50px;
                left: -50px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Hero Section -->
    <div class="pricing-hero">
        <div class="container text-center">
            <h1>Our <span>Pricing</span></h1>
        </div>
        
        <!-- Decorative Dots -->
        <div class="dots-decoration">
            @for($i = 0; $i < 7; $i++)
                <div class="dots-row">
                    @for($j = 0; $j < 3; $j++)
                        <span></span>
                    @endfor
                </div>
            @endfor
        </div>
    </div>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="pricing-container">
            <div class="pricing-cards-wrapper">
                @forelse($plans as $index => $plan)
                    @if($plans->count() > 0)
                        <div class="pricing-cards">
                            @foreach($plans as $idx => $p)
                                <div class="pricing-card {{ $idx == 1 ? 'featured' : '' }}">
                                    <div class="plan-badge">{{ $p->name }}</div>
                                    
                                    <div class="price-section">
                                        <div>
                                            <span class="price-currency">₹</span>
                                            <span class="price-amount">{{ number_format($p->price, 0, '', ',') }}</span>
                                            <span class="price-tax">+ Tax</span>
                                        </div>
                                        <div class="price-note">(Exclusive of GST & Taxes)</div>
                                    </div>

                                    <button class="btn-choose">Choose Plan</button>
                                    <div class="powered-by">#Nowayy</div>
                                </div>
                            @endforeach
                        </div>
                        @php break; @endphp
                    @endif
                @empty
                    <div class="empty-state">
                        <h3>No Pricing Plans Available</h3>
                        <p>No pricing plans have been added yet. Please check back later.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Circle Decoration -->
        <div class="circle-decoration"></div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>