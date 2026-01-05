<header class="main-header" style="all: initial; display: block;">
    <style scoped>
        .main-header {
            background-color: white !important;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1) !important;
            position: sticky !important;
            top: 0 !important;
            z-index: 9999 !important;
            border-bottom: 1px solid #e5e7eb !important;
        }
        
        .main-header * {
            box-sizing: border-box !important;
        }
        
        .main-header .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0.75rem 1rem;
        }
        
        .main-header .nav-flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .main-header .logo-link {
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        
        .main-header .nav-links {
            display: none;
        }
        
        @media (min-width: 1024px) {
            .main-header .nav-links {
                display: flex;
                align-items: center;
                gap: 2rem;
                flex: 1;
                justify-content: center;
            }
        }
        
        .main-header .nav-link {
            color: #374151;
            font-weight: 500;
            transition: color 0.2s;
            font-size: 0.875rem;
            text-decoration: none;
        }
        
        .main-header .nav-link:hover {
            color: #f97316;
        }
        
        .main-header .nav-link.active {
            color: #f97316;
        }
        
        .main-header .auth-buttons {
            display: none;
        }
        
        @media (min-width: 1024px) {
            .main-header .auth-buttons {
                display: flex;
                align-items: center;
                gap: 0.75rem;
            }
        }
        
        .main-header .btn-login {
            padding: 0.5rem 1.25rem;
            color: #f97316;
            font-weight: 500;
            transition: color 0.2s;
            border: 1px solid #f97316;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            text-decoration: none;
            display: inline-block;
        }
        
        .main-header .btn-login:hover {
            color: #ea580c;
            border-color: #ea580c;
        }
        
        .main-header .btn-register {
            padding: 0.625rem 1.5rem;
            background-color: #f97316;
            color: white;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: background-color 0.2s;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            font-size: 0.875rem;
            text-decoration: none;
            display: inline-block;
            border: none;
            cursor: pointer;
        }
        
        .main-header .btn-register:hover {
            background-color: #ea580c;
        }
        
        .main-header .mobile-menu-btn {
            display: block;
            color: #374151;
        }
        
        @media (min-width: 1024px) {
            .main-header .mobile-menu-btn {
                display: none;
            }
        }
        
        .main-header .mobile-menu {
            display: none;
            margin-top: 1rem;
            padding-bottom: 1rem;
            border-top: 1px solid #e5e7eb;
            padding-top: 1rem;
        }
        
        @media (min-width: 1024px) {
            .main-header .mobile-menu {
                display: none !important;
            }
        }
        
        .main-header .mobile-menu.show {
            display: block;
        }
        
        .main-header .mobile-menu-links {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
    
    <nav class="nav-container">
        <div class="nav-flex">
            <!-- Logo -->
            <div style="display: flex; align-items: center;">
                <a href="{{ route('home') }}" class="logo-link">
                    <!-- Hexagon Logo -->
                    <div style="position: relative; width: 3rem; height: 3rem; margin-right: 0.75rem;">
                        <svg viewBox="0 0 100 100" style="width: 100%; height: 100%;">
                            <defs>
                                <linearGradient id="hexGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#2563eb;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#1e40af;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <polygon points="50,5 90,27.5 90,72.5 50,95 10,72.5 10,27.5" fill="url(#hexGradient)"/>
                            <circle cx="50" cy="45" r="12" fill="white"/>
                            <rect x="44" y="60" width="12" height="8" rx="2" fill="white"/>
                            <path d="M 35 38 L 42 45 L 35 52" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M 65 38 L 58 45 L 65 52" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    
                    <!-- Logo Text -->
                    <div>
                        <div style="display: flex; align-items: baseline;">
                            <span style="font-size: 1.5rem; font-weight: 700; color: #2563eb;">EZY</span>
                            <span style="font-size: 1.5rem; font-weight: 700; color: #1f2937;">SKILLS</span>
                        </div>
                        <p style="font-size: 0.75rem; color: #6b7280; margin-top: -0.25rem;">Online Learning</p>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses.index') ? 'active' : '' }}">
                    Courses
                </a>
                <a href="#about" class="nav-link">
                    About Us
                </a>
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                    Contact
                </a>
                <a href="{{ route('faq.index') }}" class="nav-link {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                    FAQ
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="auth-buttons">
                @auth
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline; margin: 0;">
                        @csrf
                        <button type="submit" class="btn-register">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-login">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="btn-register">
                        Create Account
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="mobile-menu-btn">
                <svg style="width: 1.5rem; height: 1.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu">
            <div class="mobile-menu-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses.index') ? 'active' : '' }}">
                    Courses
                </a>
                <a href="#about" class="nav-link">
                    About Us
                </a>
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                    Contact
                </a>
                <a href="{{ route('faq.index') }}" class="nav-link {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                    FAQ
                </a>
                
                @auth
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" class="nav-link" style="width: 100%; text-align: left; cursor: pointer;">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-login" style="text-align: center; display: block;">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="btn-register" style="text-align: center; display: block;">
                        Create Account
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</header>

<script>
    (function() {
        // Mobile Menu Toggle
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('show');
            });
        }
        
        // Smooth Scroll للـ Anchor Links
        document.querySelectorAll('.main-header a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    if (mobileMenu) {
                        mobileMenu.classList.remove('show');
                    }
                }
            });
        });
    })();
</script>