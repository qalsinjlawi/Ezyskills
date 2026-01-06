<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions - Ezyskills</title>

    <!-- Bootstrap 5 CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
        .faq-hero {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            padding: 60px 0 80px;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
        }

        .faq-hero::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .faq-hero::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: -80px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .faq-hero h1 {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0;
            position: relative;
            z-index: 1;
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
            background-color: var(--primary-orange);
            border-radius: 50%;
            opacity: 0.6;
        }

        .dots-row {
            display: flex;
            gap: 8px;
        }

        /* FAQ Container */
        .faq-container {
            position: relative;
            max-width: 800px;
            margin: -40px auto 80px;
            padding: 0 15px;
        }

        /* Accordion Custom Style */
        .custom-accordion {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .accordion-item {
            border: none;
            background: transparent;
            margin-bottom: 15px;
        }

        .accordion-item:last-child {
            margin-bottom: 0;
        }

        .accordion-button {
            background: transparent;
            border: none;
            border-bottom: 1px solid #E5E7EB;
            padding: 20px 50px 20px 20px;
            font-size: 1rem;
            font-weight: 500;
            color: #1F2937;
            position: relative;
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            background: transparent;
            color: var(--primary-orange);
            border-bottom-color: var(--primary-orange);
        }

        .accordion-button::after {
            display: none;
        }

        .accordion-button::before {
            content: '+';
            position: absolute;
            right: 20px;
            font-size: 24px;
            font-weight: 300;
            color: var(--primary-orange);
            transition: transform 0.3s ease;
        }

        .accordion-button:not(.collapsed)::before {
            transform: rotate(45deg);
        }

        .accordion-body {
            padding: 20px 20px 20px 20px;
            color: #6B7280;
            line-height: 1.8;
            font-size: 0.95rem;
        }

        /* First Item Highlight */
        .accordion-item:first-child .accordion-button {
            color: var(--primary-orange);
            font-weight: 600;
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
/* Custom Scrollbar to match the orange theme */

/* For Chrome, Edge, Safari */
::-webkit-scrollbar {
    width: 12px; /* عرض الشريط العمودي */
}

::-webkit-scrollbar-track {
    background: #f1f1f1; /* خلفية التراك فاتحة */
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: var(--primary-orange); /* اللون البرتقالي الرئيسي */
    border-radius: 10px;
    border: 3px solid #f1f1f1; /* مسافة حول الـ thumb عشان يبدو أنيق */
}

::-webkit-scrollbar-thumb:hover {
    background: var(--light-orange); /* لون أفتح لما تمرر الماوس عليه */
}

/* For Firefox */
* {
    scrollbar-width: thin; /* شريط رفيع */
    scrollbar-color: var(--primary-orange) #f1f1f1; /* thumb برتقالي، track فاتح */
}
        /* Responsive */
        @media (max-width: 768px) {
            .faq-hero h1 {
                font-size: 1.8rem;
            }

            .custom-accordion {
                padding: 25px 20px;
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
    <div class="faq-hero">
        <div class="container text-center">
            <h1>Frequently Asked Questions</h1>
        </div>
    </div>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
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

            <div class="custom-accordion">
                @if($faqs->count() == 0)
                    <div class="empty-state">
                        <h3>No FAQs Available</h3>
                        <p>No frequently asked questions have been added yet. Please check back later.</p>
                    </div>
                @else
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $index }}"
                                            aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $index }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                     class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                     aria-labelledby="heading{{ $index }}"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        {!! nl2br(e($faq->answer)) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Circle Decoration -->
        <div class="circle-decoration"></div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

    <!-- Bootstrap 5 JS Bundle (includes Popper) - loaded once at the end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>