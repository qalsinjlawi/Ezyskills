<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ezyskills</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-orange: #FF7A59;
            --light-orange: #FF9478;
            --dark-blue: #003D82;
            --bg-light: #F8F9FA;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Hero Section */
        .contact-hero {
            background: linear-gradient(135deg, var(--primary-orange) 0%, var(--light-orange) 100%);
            padding: 60px 0 100px;
            position: relative;
            overflow: hidden;
            border-radius: 0 0 50px 50px;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .contact-hero h1 {
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

        .dots-row {
            display: flex;
            gap: 8px;
        }

        .dots-decoration span {
            display: block;
            width: 8px;
            height: 8px;
            background-color: var(--primary-orange);
            border-radius: 50%;
            opacity: 0.6;
        }

        /* Form Container */
        .contact-container {
            position: relative;
            max-width: 900px;
            margin: -60px auto 80px;
            padding: 0 15px;
        }

        .contact-form-card {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        /* Form Styling */
        .form-label {
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-control, .form-select {
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-orange);
            box-shadow: 0 0 0 3px rgba(255, 122, 89, 0.1);
        }

        .form-control::placeholder {
            color: #9CA3AF;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* Submit Button */
        .btn-submit {
            background-color: var(--dark-blue);
            color: white;
            border: none;
            padding: 12px 50px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #002D6B;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 61, 130, 0.3);
        }

        /* Privacy Text */
        .privacy-text {
            font-size: 0.85rem;
            color: #6B7280;
            line-height: 1.6;
            margin-top: 20px;
        }

        .privacy-text a {
            color: var(--primary-orange);
            text-decoration: none;
        }

        .privacy-text a:hover {
            text-decoration: underline;
        }

        /* Contact Info Cards */
        .contact-info-section {
            padding: 60px 0;
        }

        .contact-info-card {
            text-align: center;
            padding: 40px 20px;
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .email-icon {
            background: linear-gradient(135deg, #FCD34D 0%, #FFA500 100%);
            border-radius: 15px;
            color: white;
            position: relative;
        }

        .email-icon i {
            font-size: 2.5rem;
        }

        .email-icon::after {
            content: '';
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 25px;
            height: 25px;
            background-color: #4A90E2;
            border-radius: 50%;
            border: 3px solid white;
        }

        .call-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            position: relative;
        }

        .call-icon-inner {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #FF6B6B 0%, #FF8E8E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .call-icon i {
            color: white;
            font-size: 2rem;
            transform: rotate(-45deg);
        }

        .contact-info-card h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 10px;
        }

        .contact-info-card p {
            color: #6B7280;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .contact-link {
            color: var(--dark-blue);
            font-weight: 600;
            text-decoration: none;
            font-size: 1rem;
        }

        .contact-link:hover {
            color: var(--primary-orange);
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

        /* Alert Styling */
        .alert-success {
            border-radius: 10px;
            border: none;
            background-color: #D1FAE5;
            color: #065F46;
            padding: 15px 20px;
            margin-bottom: 30px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 1.8rem;
            }

            .contact-form-card {
                padding: 30px 20px;
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

            .contact-info-section {
                padding: 40px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Hero Section -->
    <div class="contact-hero">
        <div class="container text-center">
            <h1>Contact Our Team</h1>
        </div>
    </div>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="contact-container">
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

            <div class="contact-form-card">
                @if(session('success'))
                    <div class="alert alert-success text-center">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Your name*</label>
                            <input type="text" 
                                   name="name" 
                                   id="name" 
                                   class="form-control" 
                                   placeholder="John William"
                                   value="{{ old('name') }}" 
                                   required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Contact email *</label>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   class="form-control" 
                                   placeholder="you@example.com"
                                   value="{{ old('email') }}" 
                                   required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone Number*</label>
                            <input type="tel" 
                                   name="phone" 
                                   id="phone" 
                                   class="form-control" 
                                   placeholder="+1234567890"
                                   value="{{ old('phone') }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="subject" class="form-label">Issue Related to *</label>
                            <select name="subject" id="subject" class="form-select" required>
                                <option value="">Course Structure</option>
                                <option value="Course Structure" {{ old('subject') == 'Course Structure' ? 'selected' : '' }}>Course Structure</option>
                                <option value="Payment Failure" {{ old('subject') == 'Payment Failure' ? 'selected' : '' }}>Payment Failure</option>
                                <option value="Technical Issue" {{ old('subject') == 'Technical Issue' ? 'selected' : '' }}>Technical Issue</option>
                                <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('subject')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Your message*</label>
                        <textarea name="message" 
                                  id="message" 
                                  class="form-control" 
                                  placeholder="Type your message..."
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="privacy-text">
                        By submitting this form you agree to our terms and conditions and our <a href="#">Privacy Policy</a> which explains how we may collect, use and disclose your personal information including to third parties.
                    </div>

                    <div class="text-start mt-4">
                        <button type="submit" class="btn btn-submit">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Circle Decoration -->
        <div class="circle-decoration"></div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="contact-info-card">
                        <div class="contact-icon email-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email us</h3>
                        <p>Email us for general queries, including<br>marketing and partnership opportunities.</p>
                        <a href="mailto:hello@ezyskills.com" class="contact-link">hello@ezyskills.com</a>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="contact-info-card">
                        <div class="call-icon">
                            <div class="call-icon-inner">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <h3>Call us</h3>
                        <p>Call us to speak to a member of our<br>team. We are always happy to help.</p>
                        <a href="tel:+12023339999" class="contact-link">+1 (202) 333-9999</a>
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