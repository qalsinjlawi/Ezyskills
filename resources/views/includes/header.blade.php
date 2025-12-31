<header class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-200">
    <nav class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <!-- Hexagon Logo -->
                    <div class="relative w-12 h-12 mr-3">
                        <svg viewBox="0 0 100 100" class="w-full h-full">
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
                        <div class="flex items-baseline">
                            <span class="text-2xl font-bold text-blue-600">EZY</span>
                            <span class="text-2xl font-bold text-gray-800">SKILLS</span>
                        </div>
                        <p class="text-xs text-gray-500 -mt-1">Online Learning</p>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-8 flex-1 justify-center">
                <a href="/" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    Home
                </a>
                <a href="/courses" class="text-orange-500 hover:text-orange-600 font-medium transition duration-200 text-sm">
                    Course Selector
                </a>
                <a href="/courses" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    Courses
                </a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    FAQ
                </a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    Contact
                </a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    About US
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden lg:flex items-center gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="px-5 py-2 text-gray-700 font-medium hover:text-orange-500 transition duration-200 text-sm">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-6 py-2.5 bg-orange-500 text-white rounded-md font-medium hover:bg-orange-600 transition duration-200 shadow-sm text-sm">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-2 text-orange-500 font-medium hover:text-orange-600 transition duration-200 border border-orange-500 rounded-md text-sm">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-2.5 bg-orange-500 text-white rounded-md font-medium hover:bg-orange-600 transition duration-200 shadow-sm text-sm">
                        Create Account
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4 border-t border-gray-200 pt-4">
            <div class="flex flex-col space-y-4">
                <a href="/" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    Home
                </a>
                <a href="/courses" class="text-orange-500 hover:text-orange-600 font-medium transition duration-200 text-sm">
                    Course Selector
                </a>
                <a href="/courses" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    Courses
                </a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    FAQ
                </a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    Contact
                </a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                    About US
                </a>
                
                @auth
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left text-gray-700 hover:text-orange-500 font-medium transition duration-200 text-sm">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-center px-5 py-2 text-orange-500 font-medium hover:text-orange-600 transition duration-200 border border-orange-500 rounded-md text-sm">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="text-center px-6 py-2.5 bg-orange-500 text-white rounded-md font-medium hover:bg-orange-600 transition duration-200 shadow-sm text-sm">
                        Create Account
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</header>

<script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>