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
            --dark-blue: #003D82;
            --card-blue: #004A99;
        }

        .pricing-body {
            background: linear-gradient(180deg, #1565C0 0%, #0D47A1 100%);
            min-height: calc(100vh - 80px);
            padding: 60px 0 0;
            position: relative;
            overflow: hidden;
        }

        /* Curved Shape at Bottom */
        .pricing-body::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 180px;
            background: #FAFAFA;
            border-radius: 50% 50% 0 0 / 90px 90px 0 0;
            z-index: 1;
        }

        /* Decorative Dots - Left */
        .dots-left {
            position: absolute;
            left: 60px;
            top: 50%;
            transform: translateY(-50%);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            z-index: 2;
        }

        .dots-left .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #FF7043;
        }

        /* Decorative Dots - Right */
        .dots-right {
            position: absolute;
            right: 60px;
            top: 50%;
            transform: translateY(-50%);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            z-index: 2;
        }

        .dots-right .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #FF7043;
        }

        /* Page Title */
        .pricing-header {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
            z-index: 10;
        }

        .pricing-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        .pricing-title span {
            color: #FF9800;
        }

        /* Pricing Container */
        .pricing-container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: -20px;
            position: relative;
            z-index: 10;
            padding: 0 20px;
        }

        /* Pricing Card */
        .pricing-card {
            background: white;
            border-radius: 20px 20px 0 0;
            padding: 40px 30px 30px;
            width: 300px;
            text-align: center;
            position: relative;
            box-shadow: 0 -8px 30px rgba(0, 0, 0, 0.12);
            min-height: 380px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: 0 -10px;
        }

        /* First Card (Orange) */
        .pricing-card:first-child {
            margin-top: 50px;
            background: linear-gradient(135deg, #FF8A65 0%, #FF7043 100%);
            z-index: 3;
        }

        .pricing-card:first-child * {
            color: white !important;
        }

        .pricing-card:first-child .plan-badge {
            background: rgba(255, 255, 255, 0.25);
        }

        .pricing-card:first-child .btn-choose {
            background: transparent;
            border-color: white;
            color: white;
        }

        .pricing-card:first-child .btn-choose:hover {
            background: white;
            color: #FF7043;
        }

        /* Middle Card (White - Featured/Taller) */
        .pricing-card.featured {
            background: white;
            width: 340px;
            padding: 50px 35px 35px;
            margin-top: 0;
            z-index: 4;
            min-height: 420px;
        }

        .pricing-card.featured .plan-badge {
            background: rgba(255, 138, 101, 0.15);
            color: #FF7043;
        }

        .pricing-card.featured .price-amount {
            color: #FF7043;
        }

        /* Last Card (Orange) */
        .pricing-card:last-child {
            margin-top: 50px;
            background: linear-gradient(135deg, #FF8A65 0%, #FF7043 100%);
            z-index: 3;
        }

        .pricing-card:last-child * {
            color: white !important;
        }

        .pricing-card:last-child .plan-badge {
            background: rgba(255, 255, 255, 0.25);
        }

        .pricing-card:last-child .btn-choose {
            background: transparent;
            border-color: white;
            color: white;
        }

        .pricing-card:last-child .btn-choose:hover {
            background: white;
            color: #FF7043;
        }

        /* Plan Name Badge */
        .plan-badge {
            background: rgba(255, 138, 101, 0.15);
            color: #666;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 30px;
        }

        /* Price */
        .price-section {
            margin-bottom: 35px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .price-amount {
            font-size: 2.8rem;
            font-weight: 700;
            color: #FF7043;
            line-height: 1.1;
        }

        .pricing-card.featured .price-amount {
            font-size: 3.2rem;
        }

        .price-currency {
            font-size: 1.8rem;
            margin-right: 5px;
            font-weight: 600;
        }

        .price-tax {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.9);
            margin-left: 6px;
            font-weight: 500;
        }

        .pricing-card.featured .price-tax {
            color: #999;
        }

        .price-note {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.85);
            margin-top: 6px;
        }

        .pricing-card.featured .price-note {
            color: #999;
        }

        /* Button */
        .btn-choose {
            width: 100%;
            padding: 13px;
            border: 2px solid #FF7043;
            background: white;
            color: #FF7043;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }

        .btn-choose:hover {
            background: #FF7043;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 112, 67, 0.3);
        }

        /* Powered by */
        .powered-by {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 600;
        }

        .pricing-card.featured .powered-by {
            color: #999;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .dots-left, .dots-right {
                display: none;
            }

            .pricing-container {
                flex-direction: column;
                align-items: center;
                gap: 25px;
            }

            .pricing-card,
            .pricing-card.featured {
                width: 100%;
                max-width: 350px;
                margin: 0 !important;
            }

            .pricing-body {
                padding: 40px 0 0;
            }

            .pricing-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Pricing Section -->
    <div class="pricing-body">
        <!-- Decorative Dots - Left -->
        <div class="dots-left">
            @for($i = 0; $i < 16; $i++)
                <div class="dot"></div>
            @endfor
        </div>

        <!-- Decorative Dots - Right -->
        <div class="dots-right">
            @for($i = 0; $i < 16; $i++)
                <div class="dot"></div>
            @endfor
        </div>

        <div class="container">
            <div class="pricing-header">
                <h1 class="pricing-title">Our <span>Pricing</span></h1>
            </div>

            <div class="pricing-container">
                @forelse($plans as $index => $plan)
                <div class="pricing-card {{ $index == 1 ? 'featured' : '' }}">
                    <div>
                        <div class="plan-badge">{{ $plan->name }}</div>
                        
                        <div class="price-section">
                            <div>
                                <span class="price-currency">₹</span>
                                <span class="price-amount">{{ number_format($plan->price, 0, '', ',') }}</span>
                                <span class="price-tax">+ Tax</span>
                            </div>
                            <div class="price-note">(Exclusive of GST & Taxes)</div>
                        </div>
                    </div>

                    <div>
                        <button class="btn-choose">Choose Plan</button>
                        <div class="powered-by">#Nowayy</div>
                    </div>
                </div>
                @empty
                <div class="text-center">
                    <p style="color: white;">No pricing plans available.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>