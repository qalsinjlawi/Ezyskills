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

        .main-header .settings-btn:hover {
            background: #e5e7eb !important;
        }

        .main-header .dropdown-item:hover {
            background: #f3f4f6;
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
                <a href="{{ route('pricing.index') }}" class="nav-link {{ request()->routeIs('pricing.index') ? 'active' : '' }}">
    Pricing
</a>
                <a href="{{ route('faq.index') }}" class="nav-link {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                    FAQ
                </a>
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                    Contact US
                </a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
    About Us
</a>
            </div>

            <!-- Auth Buttons -->
            <div class="auth-buttons">
                @auth
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <!-- Settings Icon -->
                        <div style="position: relative;">
                            <button id="settings-dropdown-btn" class="settings-btn" style="display: flex; align-items: center; justify-content: center; background: #f3f4f6; border: none; cursor: pointer; padding: 0.5rem; border-radius: 50%; width: 2.5rem; height: 2.5rem; transition: background 0.2s;">
                                <svg style="width: 1.25rem; height: 1.25rem; color: #374151;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </button>
                            
                            <div id="settings-dropdown" style="display: none; position: absolute; left: 0; top: 100%; background: white; border: 1px solid #e5e7eb; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); min-width: 14rem; margin-top: 0.5rem; z-index: 50;">
                                <div style="padding: 0.5rem 0;">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; color: #374151; text-decoration: none; transition: background 0.2s;">
                                        <svg style="width: 1.25rem; height: 1.25rem; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        <span>Profile Settings</span>
                                    </a>
                                    <a href="#" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; color: #374151; text-decoration: none; transition: background 0.2s;">
                                        <svg style="width: 1.25rem; height: 1.25rem; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                        </svg>
                                        <span>My Courses</span>
                                    </a>
                                    <a href="#" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; color: #374151; text-decoration: none; transition: background 0.2s;">
                                        <svg style="width: 1.25rem; height: 1.25rem; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                        </svg>
                                        <span>Certificates</span>
                                    </a>
                                    <div style="border-top: 1px solid #e5e7eb; margin: 0.5rem 0;"></div>
                                    <a href="#" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; color: #374151; text-decoration: none; transition: background 0.2s;">
                                        <svg style="width: 1.25rem; height: 1.25rem; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                        </svg>
                                        <span>Preferences</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Dropdown -->
                        <div style="position: relative;">
                            <button id="profile-dropdown-btn" style="display: flex; align-items: center; gap: 0.5rem; background: none; border: none; cursor: pointer; padding: 0.5rem;">
                                @if(Auth::user()->profile_image)
                                    <img src="{{ asset('/' . Auth::user()->profile_image) }}" style="width: 2.5rem; height: 2.5rem; border-radius: 50%; object-fit: cover; border: 2px solid #f97316;" alt="Profile">
                                @else
                                    <div style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: linear-gradient(to bottom right, #fb923c, #ea580c); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </div>
                                @endif
                                <svg style="width: 1rem; height: 1rem; color: #374151;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            
                         <div id="profile-dropdown" style="display: none; position: absolute; right: 0; top: 100%; background: white; border: 1px solid #e5e7eb; border-radius: 0.75rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1); min-width: 16rem; margin-top: 0.5rem; z-index: 50; overflow: hidden;">
    <!-- User Info Header -->
    <div style="background: linear-gradient(135deg, #fb923c 0%, #ea580c 100%); padding: 1rem; text-align: center;">
        @if(Auth::user()->profile_image)
            <img src="{{ asset('/' . Auth::user()->profile_image) }}" style="width: 3.5rem; height: 3.5rem; border-radius: 50%; object-fit: cover; border: 3px solid white; margin: 0 auto 0.75rem;" alt="Profile">
        @else
            <div style="width: 3.5rem; height: 3.5rem; border-radius: 50%; background: white; display: flex; align-items: center; justify-content: center; color: #f97316; font-weight: bold; font-size: 1.5rem; margin: 0 auto 0.75rem; border: 3px solid white;">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
        @endif
        <p style="font-weight: 700; color: white; margin: 0; font-size: 0.95rem;">{{ Auth::user()->name }}</p>
        <p style="font-size: 0.75rem; color: rgba(255, 255, 255, 0.9); margin: 0.25rem 0 0 0; word-break: break-all;">{{ Auth::user()->email }}</p>
    </div>
    
    <!-- Menu Items -->
    <div style="padding: 0.5rem 0;">
        <a href="{{ route('profile.edit') }}" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; color: #374151; text-decoration: none; transition: background 0.2s;">
            <svg style="width: 1.25rem; height: 1.25rem; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            <span style="font-weight: 500;">View Profile</span>
        </a>
        <a href="#" class="dropdown-item" style="display: flex; align-items: center; gap: 0.75rem; padding: 0.75rem 1rem; color: #374151; text-decoration: none; transition: background 0.2s;">
            <svg style="width: 1.25rem; height: 1.25rem; color: #6b7280;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            <span style="font-weight: 500;">My Courses</span>
        </a>
    </div>
    
    <!-- Logout Button -->
    <div style="border-top: 1px solid #e5e7eb; padding: 0.5rem;">
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" style="width: 100%; text-align: left; padding: 0.75rem 1rem; background: none; border: none; color: #dc2626; cursor: pointer; display: flex; align-items: center; gap: 0.75rem; font-weight: 500; transition: background 0.2s;" onmouseover="this.style.background='#fee2e2'" onmouseout="this.style.background='transparent'">
                <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
</div>
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
                <a href="{{ route('pricing.index') }}" class="nav-link {{ request()->routeIs('pricing.index') ? 'active' : '' }}">
    Pricing
</a>
                <a href="{{ route('faq.index') }}" class="nav-link {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                    FAQ
                </a>
                <a href="{{ route('contact.index') }}" class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                    Contact US
                </a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
    About Us
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
        
        // Settings Dropdown Toggle
        const settingsBtn = document.getElementById('settings-dropdown-btn');
        const settingsDropdown = document.getElementById('settings-dropdown');
        const profileBtn = document.getElementById('profile-dropdown-btn');
        const profileDropdown = document.getElementById('profile-dropdown');

        if (settingsBtn && settingsDropdown) {
            settingsBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                // Close profile dropdown if open
                if (profileDropdown) profileDropdown.style.display = 'none';
                settingsDropdown.style.display = settingsDropdown.style.display === 'none' ? 'block' : 'none';
            });
        }

        // Profile Dropdown Toggle
        if (profileBtn && profileDropdown) {
            profileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                // Close settings dropdown if open
                if (settingsDropdown) settingsDropdown.style.display = 'none';
                profileDropdown.style.display = profileDropdown.style.display === 'none' ? 'block' : 'none';
            });
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function() {
            if (profileDropdown) profileDropdown.style.display = 'none';
            if (settingsDropdown) settingsDropdown.style.display = 'none';
        });
        
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