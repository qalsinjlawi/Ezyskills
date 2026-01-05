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
            padding: 0.25rem 0.25rem;
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
            font-size: 1rem;
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
            padding: 0.625rem 1.5rem;
            color: #f97316;
            font-weight: 500;
            transition: color 0.2s;
            border: 1px solid #f97316;
            border-radius: 0.375rem;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
        }
        
        .main-header .btn-login:hover {
            color: #ea580c;
            border-color: #ea580c;
        }
        
        .main-header .btn-register {
            padding: 0.75rem 1.75rem;
            background-color: #f97316;
            color: white;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: background-color 0.2s;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            font-size: 1rem;
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
                    <img src="{{ asset('images/logo.png') }}" alt="EzySkills Logo" style="height: 7rem; width: auto; object-fit: contain;">
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
                    <div style="position: relative;">
                        <button id="profile-dropdown-btn" style="display: flex; align-items: center; gap: 0.5rem; background: none; border: none; cursor: pointer; padding: 0.5rem;">
                            @if(Auth::user()->profile_image)
                                <img src="{{ asset('/' . Auth::user()->profile_image) }}" style="width: 3rem; height: 3rem; border-radius: 50%; object-fit: cover;" alt="Profile">
                            @else
                                <div style="width: 2rem; height: 2rem; border-radius: 50%; background: linear-gradient(to bottom right, #fb923c, #ea580c); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                            @endif
                            <svg style="width: 1rem; height: 1rem; color: #374151;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <div id="profile-dropdown" style="display: none; position: absolute; right: 0; top: 100%; background: white; border: 1px solid #e5e7eb; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); min-width: 12rem; margin-top: 0.5rem; z-index: 50;">
                            <a href="{{ route('profile.edit') }}" style="display: block; padding: 0.75rem 1rem; color: #374151; text-decoration: none; border-bottom: 1px solid #e5e7eb;">Profile</a>
                            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                                @csrf
                                <button type="submit" style="width: 100%; text-align: left; padding: 0.75rem 1rem; background: none; border: none; color: #374151; cursor: pointer;">Logout</button>
                            </form>
                        </div>
                    </div>
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
                    <a href="{{ route('profile.edit') }}" class="nav-link">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" class="nav-link" style="width: 100%; text-align: left; cursor: pointer; background: none; border: none; padding: 0;">
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
        
        // Profile Dropdown Toggle
        const profileBtn = document.getElementById('profile-dropdown-btn');
        const profileDropdown = document.getElementById('profile-dropdown');

        if (profileBtn && profileDropdown) {
            profileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                profileDropdown.style.display = profileDropdown.style.display === 'none' ? 'block' : 'none';
            });

            document.addEventListener('click', function() {
                profileDropdown.style.display = 'none';
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