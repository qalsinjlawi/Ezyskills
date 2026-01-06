<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezyskills - Online Learning Platform</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
/* Custom Scrollbar - Orange & Blue Theme */

/* Webkit browsers (Chrome, Edge, Safari) */
::-webkit-scrollbar {
    width: 12px; /* عرض الشريط */
}

::-webkit-scrollbar-track {
    background: #f3f4f6; /* رمادي فاتح زي خلفية الموقع */
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #f97316; /* برتقالي أساسي orange-500 */
    border-radius: 10px;
    border: 3px solid #f3f4f6; /* مسافة عشان يبدو أنيق */
}

::-webkit-scrollbar-thumb:hover {
    background: #ff7a59; /* برتقالي أفتح لما الماوس عليه */
}

/* Firefox */
* {
    scrollbar-width: thin;
    scrollbar-color: #f97316 #f3f4f6;
}
</style>
<body class="font-sans antialiased bg-white">
    
    <!-- Header -->
    @include('includes.header')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 to-white py-20 overflow-hidden">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight text-blue-900">
                    Skill Your Way<br>
                    Up To Success<br>
                    With Us
                </h1>
                <p class="text-lg mb-8 text-gray-600">
                    Get the skills you need for the future of work.
                </p>
                
                <!-- Search Box -->
                <form action="{{ route('courses.index') }}" method="GET" class="mb-6">
                    <div class="flex gap-2 bg-white rounded-lg shadow-lg p-2 max-w-xl">
                        <input 
                            type="text" 
                            name="search"
                            placeholder="Search the course you want" 
                            class="flex-1 px-4 py-3 border-0 focus:outline-none focus:ring-0"
                        >
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition">
                            Search
                        </button>
                    </div>
                </form>

                <!-- Categories Tags -->
                <div class="flex flex-wrap gap-3">
                    @foreach($categories->take(6) as $category)
                    <a href="{{ route('categories.show', $category->slug) }}" 
                       class="px-6 py-2 bg-white hover:bg-orange-500 hover:text-white text-gray-700 rounded-full shadow-md transition font-medium">
                        {{ $category->name }}
                    </a>
                    @endforeach
                </div>
                
                <!-- Best Seller & Course Cards -->
                <div class="mt-8 space-y-4">
                    <!-- Best Seller Badge -->
                    <div class="inline-block bg-orange-500 text-white px-6 py-2.5 rounded-lg shadow-lg font-semibold text-sm">
                        Best seller
                    </div>
                    
                    <!-- Course Cards -->
                    @if($featuredCourses->count() >= 2)
                    <div class="space-y-3">
                        <div class="bg-white rounded-xl shadow-xl p-4 flex items-center gap-3 max-w-sm">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">{{ Str::limit($featuredCourses[0]->title, 25) }}</h4>
                                <p class="text-orange-500 text-xs flex items-center gap-1">
                                    <span>⭐</span>
                                    <span>{{ $featuredCourses[0]->reviews ?? '2145' }} Reviews</span>
                                </p>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl shadow-xl p-4 flex items-center gap-3 max-w-sm">
                            <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">{{ Str::limit($featuredCourses[1]->title, 25) }}</h4>
                                <p class="text-orange-500 text-xs flex items-center gap-1">
                                    <span>⭐</span>
                                    <span>{{ $featuredCourses[1]->reviews ?? '2145' }} Reviews</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative">
                <div class="relative z-10">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=600&fit=crop" alt="Student Success" class="w-full max-w-lg mx-auto rounded-full object-cover">
                </div>
                
                <!-- Decorative Circle - Orange -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-orange-400 rounded-full -z-0 opacity-80"></div>
                
                <!-- Decorative Circle - Blue -->
                <div class="absolute bottom-10 right-20 w-80 h-80 bg-blue-600 rounded-full -z-10"></div>
            </div>
        </div>
    </div>
</section>
<!-- World's First AI Based Platform Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                    <span class="text-blue-900">World's<br>First AI Based</span><br>
                    <span class="text-orange-500">Online Learning<br>Platform</span>
                </h2>
                
                <!-- Decorative Dots -->
                <div class="flex gap-1 mt-6">
                    <div class="grid grid-cols-6 gap-1">
                        @for($i = 0; $i < 24; $i++)
                        <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                        @endfor
                    </div>
                </div>
            </div>
            
            <!-- Right Content - AI Features Slider -->
            <div class="relative overflow-hidden">
                <div id="ai-slider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Slide 1: AI Based Course Selector -->
                    <div class="w-full flex-shrink-0 px-2">
                        <div class="bg-orange-50 rounded-2xl p-8 hover:shadow-xl transition">
                            <div class="flex items-center gap-3 mb-6">
                                <svg class="w-10 h-10 text-blue-600" viewBox="0 0 40 40" fill="currentColor">
                                    <circle cx="20" cy="20" r="18" fill="#1e40af"/>
                                    <path d="M15 15 L25 20 L15 25 Z" fill="white"/>
                                </svg>
                                <span class="text-blue-900 font-bold text-lg">EZYSKILLS
</span>
                            </div>
                            <h3 class="text-2xl font-bold text-orange-500 mb-6">AI Based<br>Course<br>Selector</h3>
                            <div class="flex justify-center">
                                <div class="relative w-40 h-40">
                                    <svg class="w-full h-full" viewBox="0 0 200 200" fill="none">
                                        <!-- Brain illustration -->
                                        <ellipse cx="100" cy="90" rx="50" ry="55" fill="#fb923c" opacity="0.3"/>
                                        <!-- Brain curves -->
                                        <path d="M70 70 Q60 90 70 110" stroke="#fb923c" stroke-width="3" fill="none"/>
                                        <path d="M80 65 Q75 85 80 105" stroke="#fb923c" stroke-width="3" fill="none"/>
                                        <path d="M90 60 Q85 80 90 100" stroke="#fb923c" stroke-width="3" fill="none"/>
                                        <path d="M100 58 Q95 78 100 98" stroke="#fb923c" stroke-width="3" fill="none"/>
                                        <path d="M110 60 Q115 80 110 100" stroke="#fb923c" stroke-width="3" fill="none"/>
                                        <path d="M120 65 Q125 85 120 105" stroke="#fb923c" stroke-width="3" fill="none"/>
                                        <path d="M130 70 Q140 90 130 110" stroke="#fb923c" stroke-width="3" fill="none"/>
                                        <!-- Circuit connections -->
                                        <circle cx="60" cy="90" r="5" fill="#fb923c"/>
                                        <circle cx="140" cy="90" r="5" fill="#fb923c"/>
                                        <circle cx="100" cy="50" r="5" fill="#fb923c"/>
                                        <circle cx="100" cy="130" r="5" fill="#fb923c"/>
                                        <!-- Lines connecting -->
                                        <line x1="60" y1="90" x2="40" y2="90" stroke="#fb923c" stroke-width="2"/>
                                        <line x1="140" y1="90" x2="160" y2="90" stroke="#fb923c" stroke-width="2"/>
                                        <line x1="100" y1="130" x2="100" y2="150" stroke="#fb923c" stroke-width="2"/>
                                        <!-- Power symbol at bottom -->
                                        <rect x="85" y="155" width="30" height="15" rx="3" fill="#fb923c"/>
                                        <line x1="95" y1="162" x2="105" y2="162" stroke="white" stroke-width="2"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: AI Based Scenarios -->
                    <div class="w-full flex-shrink-0 px-2">
                        <div class="bg-orange-50 rounded-2xl p-8 hover:shadow-xl transition">
                            <div class="flex items-center gap-3 mb-6">
                                <svg class="w-10 h-10 text-blue-600" viewBox="0 0 40 40" fill="currentColor">
                                    <circle cx="20" cy="20" r="18" fill="#1e40af"/>
                                    <path d="M15 15 L25 20 L15 25 Z" fill="white"/>
                                </svg>
                                <span class="text-blue-900 font-bold text-lg">EZYSKILLS</span>
                            </div>
                            <h3 class="text-2xl font-bold text-orange-500 mb-6">AI Based<br>Scenarios</h3>
                            <div class="flex justify-center">
                                <div class="relative w-40 h-40">
                                    <svg class="w-full h-full text-orange-500" viewBox="0 0 200 200" fill="none">
                                        <rect x="40" y="40" width="120" height="90" rx="8" stroke="currentColor" stroke-width="3"/>
                                        <line x1="40" y1="60" x2="160" y2="60" stroke="currentColor" stroke-width="3"/>
                                        <line x1="55" y1="80" x2="145" y2="80" stroke="currentColor" stroke-width="2"/>
                                        <line x1="55" y1="100" x2="145" y2="100" stroke="currentColor" stroke-width="2"/>
                                        <line x1="55" y1="120" x2="100" y2="120" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="100" cy="160" r="25" stroke="currentColor" stroke-width="3" fill="none"/>
                                        <path d="M85 160 L95 170 L115 150" stroke="currentColor" stroke-width="3" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: AI Based Quiz/Tests -->
                    <div class="w-full flex-shrink-0 px-2">
                        <div class="bg-orange-50 rounded-2xl p-8 hover:shadow-xl transition">
                            <div class="flex items-center gap-3 mb-6">
                                <svg class="w-10 h-10 text-blue-600" viewBox="0 0 40 40" fill="currentColor">
                                    <circle cx="20" cy="20" r="18" fill="#1e40af"/>
                                    <path d="M15 15 L25 20 L15 25 Z" fill="white"/>
                                </svg>
                                <span class="text-blue-900 font-bold text-lg">EZYSKILLS</span>
                            </div>
                            <h3 class="text-2xl font-bold text-orange-500 mb-6">AI Based<br>Quiz/Tests</h3>
                            <div class="flex justify-center">
                                <div class="relative w-40 h-40">
                                    <svg class="w-full h-full text-orange-500" viewBox="0 0 200 200" fill="none">
                                        <circle cx="70" cy="70" r="35" stroke="currentColor" stroke-width="3"/>
                                        <circle cx="130" cy="70" r="35" stroke="currentColor" stroke-width="3"/>
                                        <circle cx="100" cy="130" r="35" stroke="currentColor" stroke-width="3"/>
                                        <path d="M80 60 L90 70 L100 50" stroke="currentColor" stroke-width="3" fill="none"/>
                                        <line x1="120" y1="60" x2="140" y2="80" stroke="currentColor" stroke-width="3"/>
                                        <line x1="140" y1="60" x2="120" y2="80" stroke="currentColor" stroke-width="3"/>
                                        <path d="M90 120 L100 130 L110 110" stroke="currentColor" stroke-width="3" fill="none"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: AI Based Gamification -->
                    <div class="w-full flex-shrink-0 px-2">
                        <div class="bg-orange-50 rounded-2xl p-8 hover:shadow-xl transition">
                            <div class="flex items-center gap-3 mb-6">
                                <svg class="w-10 h-10 text-blue-600" viewBox="0 0 40 40" fill="currentColor">
                                    <circle cx="20" cy="20" r="18" fill="#1e40af"/>
                                    <path d="M15 15 L25 20 L15 25 Z" fill="white"/>
                                </svg>
                                <span class="text-blue-900 font-bold text-lg">EZYSKILLS</span>
                            </div>
                            <h3 class="text-2xl font-bold text-orange-500 mb-6">AI Based<br>Gamification</h3>
                            <div class="flex justify-center">
                                <div class="relative w-40 h-40">
                                    <svg class="w-full h-full text-orange-500" viewBox="0 0 200 200" fill="none">
                                        <rect x="40" y="60" width="120" height="80" rx="12" stroke="currentColor" stroke-width="3"/>
                                        <rect x="55" y="75" width="30" height="50" rx="8" stroke="currentColor" stroke-width="2"/>
                                        <rect x="115" y="75" width="30" height="50" rx="8" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="70" cy="100" r="8" fill="currentColor"/>
                                        <circle cx="130" cy="100" r="8" fill="currentColor"/>
                                        <line x1="85" y1="100" x2="115" y2="100" stroke="currentColor" stroke-width="3"/>
                                        <line x1="100" y1="100" x2="100" y2="120" stroke="currentColor" stroke-width="3"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Dots Indicator -->
        <div class="flex justify-center gap-2 mt-8">
            <div id="dot-0" class="w-8 h-2 bg-orange-500 rounded-full cursor-pointer transition-all"></div>
            <div id="dot-1" class="w-2 h-2 bg-gray-300 rounded-full cursor-pointer transition-all"></div>
            <div id="dot-2" class="w-2 h-2 bg-gray-300 rounded-full cursor-pointer transition-all"></div>
            <div id="dot-3" class="w-2 h-2 bg-gray-300 rounded-full cursor-pointer transition-all"></div>
        </div>
    </div>
</section>

<script>
    let currentSlide = 0;
    const totalSlides = 4;
    const slider = document.getElementById('ai-slider');
    
    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.getElementById(`dot-${i}`);
            if (i === currentSlide) {
                dot.classList.remove('w-2', 'bg-gray-300');
                dot.classList.add('w-8', 'bg-orange-500');
            } else {
                dot.classList.remove('w-8', 'bg-orange-500');
                dot.classList.add('w-2', 'bg-gray-300');
            }
        }
    }
    
    // Auto slide every 5 seconds
    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }, 5000);
    
    // Manual dot click
    for (let i = 0; i < totalSlides; i++) {
        document.getElementById(`dot-${i}`).addEventListener('click', () => {
            currentSlide = i;
            updateSlider();
        });
    }
</script>
<!-- Skill Development Schemes Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <p class="text-orange-500 font-semibold text-sm uppercase tracking-wider mb-4">WHO CAN JOIN</p>
                <h2 class="text-4xl lg:text-5xl font-bold text-blue-900 mb-12">
                    Skill Development<br>Schemes For All
                </h2>
                
                <!-- Four Categories Grid -->
                <div class="grid grid-cols-2 gap-8">
                    <!-- 01 - Colleges/Universities -->
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-full h-full text-orange-500" viewBox="0 0 100 100" fill="none">
                                <rect x="20" y="40" width="60" height="45" stroke="currentColor" stroke-width="2" fill="none"/>
                                <rect x="30" y="50" width="15" height="20" stroke="currentColor" stroke-width="2" fill="none"/>
                                <rect x="55" y="50" width="15" height="20" stroke="currentColor" stroke-width="2" fill="none"/>
                                <polygon points="50,20 15,40 85,40" stroke="currentColor" stroke-width="2" fill="none"/>
                                <rect x="42" y="65" width="16" height="20" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="text-blue-900 font-bold text-2xl mb-1">01</div>
                        <div class="text-gray-700 font-semibold">Colleges/Universities</div>
                    </div>

                    <!-- 02 - Individuals/Working Professionals -->
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-full h-full text-orange-500" viewBox="0 0 100 100" fill="none">
                                <circle cx="50" cy="30" r="15" stroke="currentColor" stroke-width="2" fill="none"/>
                                <path d="M30 85 L30 60 Q30 50 50 50 Q70 50 70 60 L70 85" stroke="currentColor" stroke-width="2" fill="none"/>
                                <line x1="35" y1="85" x2="35" y2="95" stroke="currentColor" stroke-width="2"/>
                                <line x1="65" y1="85" x2="65" y2="95" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="text-blue-900 font-bold text-2xl mb-1">02</div>
                        <div class="text-gray-700 font-semibold">Individuals/Working<br>Professionals</div>
                    </div>

                    <!-- 03 - Startups -->
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-full h-full text-orange-500" viewBox="0 0 100 100" fill="none">
                                <ellipse cx="50" cy="60" rx="15" ry="20" stroke="currentColor" stroke-width="2" fill="none"/>
                                <path d="M40 40 Q50 20 60 40" stroke="currentColor" stroke-width="2" fill="none"/>
                                <circle cx="35" cy="50" r="3" fill="currentColor"/>
                                <circle cx="50" cy="45" r="3" fill="currentColor"/>
                                <circle cx="65" cy="50" r="3" fill="currentColor"/>
                                <line x1="50" y1="80" x2="50" y2="95" stroke="currentColor" stroke-width="2"/>
                                <line x1="40" y1="90" x2="60" y2="90" stroke="currentColor" stroke-width="3"/>
                            </svg>
                        </div>
                        <div class="text-blue-900 font-bold text-2xl mb-1">03</div>
                        <div class="text-gray-700 font-semibold">Startups</div>
                    </div>

                    <!-- 04 - Corporates -->
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-full h-full text-orange-500" viewBox="0 0 100 100" fill="none">
                                <rect x="30" y="25" width="40" height="60" stroke="currentColor" stroke-width="2" fill="none"/>
                                <line x1="30" y1="35" x2="70" y2="35" stroke="currentColor" stroke-width="1"/>
                                <line x1="30" y1="45" x2="70" y2="45" stroke="currentColor" stroke-width="1"/>
                                <line x1="30" y1="55" x2="70" y2="55" stroke="currentColor" stroke-width="1"/>
                                <line x1="30" y1="65" x2="70" y2="65" stroke="currentColor" stroke-width="1"/>
                                <line x1="30" y1="75" x2="70" y2="75" stroke="currentColor" stroke-width="1"/>
                                <rect x="36" y="28" width="8" height="5" fill="currentColor"/>
                                <rect x="52" y="28" width="8" height="5" fill="currentColor"/>
                                <rect x="36" y="38" width="8" height="5" fill="currentColor"/>
                                <rect x="52" y="38" width="8" height="5" fill="currentColor"/>
                                <circle cx="50" cy="20" r="3" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="text-blue-900 font-bold text-2xl mb-1">04</div>
                        <div class="text-gray-700 font-semibold">Corporates</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&h=600&fit=crop" alt="Learning Environment" class="w-full rounded-2xl shadow-2xl">
                
                <!-- Decorative Elements -->
                <div class="absolute -bottom-6 -left-6 w-32 h-32">
                    <svg viewBox="0 0 100 100" fill="none">
                        <path d="M10 30 Q10 10 30 10" stroke="#3b82f6" stroke-width="3" fill="none"/>
                        <path d="M10 50 Q10 30 30 30" stroke="#3b82f6" stroke-width="3" fill="none"/>
                        <path d="M10 70 Q10 50 30 50" stroke="#3b82f6" stroke-width="3" fill="none"/>
                        <path d="M10 90 Q10 70 30 70" stroke="#3b82f6" stroke-width="3" fill="none"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Decorative Dots - Left -->
        <div class="absolute left-0 top-20 grid grid-cols-3 gap-2">
            @for($i = 0; $i < 18; $i++)
            <div class="w-3 h-3 {{ $i < 12 ? 'bg-blue-600' : 'bg-orange-500' }} rounded-full"></div>
            @endfor
        </div>
        
        <!-- Decorative Circle - Right -->
        <div class="absolute -right-20 top-0 w-64 h-64 bg-orange-400 rounded-full opacity-30"></div>
        <div class="absolute -right-32 top-32 w-48 h-48 bg-orange-500 rounded-full opacity-20"></div>
        
        <!-- Main Content -->
        <div class="relative bg-gradient-to-r from-blue-900 to-blue-700 rounded-3xl p-12 shadow-2xl">
            <!-- Title -->
            <div class="text-center mb-16">
                <div class="inline-block bg-orange-500 text-white px-10 py-4 rounded-2xl font-bold text-2xl shadow-lg">
                    How It Works
                </div>
            </div>
            
            <!-- Workflow Steps -->
            <div class="flex items-center justify-between gap-4 overflow-x-auto pb-8">
                <!-- Job Seeker Card -->
                <div class="flex-shrink-0 bg-white rounded-2xl p-6 w-48 shadow-xl">
                    <div class="text-orange-500 font-bold text-sm mb-3">Job Seeker</div>
                    <div class="w-32 h-32 mx-auto">
                        <svg viewBox="0 0 100 100" fill="none" class="w-full h-full">
                            <circle cx="50" cy="35" r="15" fill="#1e3a8a"/>
                            <path d="M30 90 L30 65 Q30 55 50 55 Q70 55 70 65 L70 90 Z" fill="#1e3a8a"/>
                            <rect x="40" y="70" width="20" height="5" fill="white"/>
                        </svg>
                    </div>
                </div>

                <!-- Arrow -->
                <svg class="w-8 h-8 text-orange-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                </svg>

                <!-- Step 01 -->
                <div class="flex-shrink-0 text-center">
                    <div class="w-24 h-24 bg-blue-600 border-4 border-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="text-white font-bold text-xl mb-1">01</div>
                    <div class="text-white text-xs max-w-[120px]">Assessment<br>Aptitude Test<br>Interview</div>
                </div>

                <svg class="w-8 h-8 text-orange-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                </svg>

                <!-- Step 02 -->
                <div class="flex-shrink-0 text-center">
                    <div class="w-24 h-24 bg-blue-600 border-4 border-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="text-white font-bold text-xl mb-1">02</div>
                    <div class="text-white text-xs max-w-[120px]">Hands on Practice<br>Scenarios, Test<br>Cases</div>
                </div>

                <svg class="w-8 h-8 text-orange-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                </svg>

                <!-- Step 03 -->
                <div class="flex-shrink-0 text-center">
                    <div class="w-24 h-24 bg-blue-600 border-4 border-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div class="text-white font-bold text-xl mb-1">03</div>
                    <div class="text-white text-xs max-w-[120px]">Soft Skills &<br>Business Training</div>
                </div>

                <svg class="w-8 h-8 text-orange-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                </svg>

                <!-- Step 04 -->
                <div class="flex-shrink-0 text-center">
                    <div class="w-24 h-24 bg-blue-600 border-4 border-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <div class="text-white font-bold text-xl mb-1">04</div>
                    <div class="text-white text-xs max-w-[120px]">Daily, Weekly, Monthly<br>Assessments</div>
                </div>

                <svg class="w-8 h-8 text-orange-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                </svg>

                <!-- Step 05 -->
                <div class="flex-shrink-0 text-center">
                    <div class="w-24 h-24 bg-blue-600 border-4 border-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="text-white font-bold text-xl mb-1">05</div>
                    <div class="text-white text-xs max-w-[120px]">Real Timer Project<br>Hackathons</div>
                </div>

                <svg class="w-8 h-8 text-orange-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                </svg>

                <!-- Step 06 -->
                <div class="flex-shrink-0 text-center">
                    <div class="w-24 h-24 bg-blue-600 border-4 border-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div class="text-white font-bold text-xl mb-1">06</div>
                    <div class="text-white text-xs max-w-[120px]">Assessment Guidance<br>& Monitoring</div>
                </div>

                <svg class="w-8 h-8 text-orange-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                </svg>

                <!-- Employed Card -->
                <div class="flex-shrink-0 bg-white rounded-2xl p-6 w-48 shadow-xl">
                    <div class="text-orange-500 font-bold text-sm mb-3">Employed</div>
                    <div class="w-32 h-32 mx-auto">
                        <svg viewBox="0 0 100 100" fill="none" class="w-full h-full">
                            <circle cx="50" cy="35" r="15" fill="#1e3a8a"/>
                            <path d="M30 90 L30 65 Q30 55 50 55 Q70 55 70 65 L70 90 Z" fill="#1e3a8a"/>
                            <circle cx="50" cy="70" r="8" fill="white"/>
                            <rect x="35" y="60" width="30" height="3" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  

 <!-- Popular Courses Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                <span class="text-blue-900">Popular</span> <span class="text-orange-500">Courses</span>
            </h2>
        </div>
        
        <!-- Courses Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            @foreach($courses as $course)
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">
                <!-- Course Icon/Image -->
                <div class="h-48 bg-gradient-to-br from-blue-800 to-blue-900 flex items-center justify-center">
                    @if(stripos($course->title, 'angular') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <polygon points="50,10 90,30 85,75 50,95 15,75 10,30" fill="#DD0031"/>
                            <polygon points="50,10 90,30 85,75 50,95 50,20" fill="#C3002F"/>
                            <text x="50" y="65" font-size="40" font-weight="bold" fill="white" text-anchor="middle">A</text>
                        </svg>
                    @elseif(stripos($course->title, 'aws') !== false || stripos($course->title, 'amazon') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <text x="50" y="50" font-size="24" font-weight="bold" fill="white" text-anchor="middle">aws</text>
                            <path d="M20 60 Q50 70 80 60" stroke="#FF9900" stroke-width="4" fill="none"/>
                        </svg>
                    @elseif(stripos($course->title, 'vue') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <polygon points="50,20 70,60 30,60" fill="#42B883"/>
                            <polygon points="50,30 60,50 40,50" fill="#35495E"/>
                        </svg>
                    @elseif(stripos($course->title, 'power bi') !== false || stripos($course->title, 'bi') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <rect x="25" y="50" width="15" height="35" fill="#F2C811"/>
                            <rect x="45" y="35" width="15" height="50" fill="#F2C811"/>
                            <rect x="65" y="20" width="15" height="65" fill="#F2C811"/>
                        </svg>
                    @elseif(stripos($course->title, 'python') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <circle cx="40" cy="35" r="15" fill="#3776AB"/>
                            <circle cx="60" cy="65" r="15" fill="#FFD43B"/>
                            <path d="M40 50 L60 50" stroke="#3776AB" stroke-width="8"/>
                        </svg>
                    @elseif(stripos($course->title, 'react') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <ellipse cx="50" cy="50" rx="35" ry="15" fill="none" stroke="#61DAFB" stroke-width="3"/>
                            <ellipse cx="50" cy="50" rx="35" ry="15" fill="none" stroke="#61DAFB" stroke-width="3" transform="rotate(60 50 50)"/>
                            <ellipse cx="50" cy="50" rx="35" ry="15" fill="none" stroke="#61DAFB" stroke-width="3" transform="rotate(120 50 50)"/>
                            <circle cx="50" cy="50" r="5" fill="#61DAFB"/>
                        </svg>
                    @elseif(stripos($course->title, 'test') !== false || stripos($course->title, 'selenium') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <rect x="30" y="30" width="40" height="40" rx="5" fill="#43B02A"/>
                            <path d="M40 50 L48 58 L65 38" stroke="white" stroke-width="4" fill="none"/>
                        </svg>
                    @elseif(stripos($course->title, 'c') !== false || stripos($course->title, 'core') !== false)
                        <svg class="w-32 h-32" viewBox="0 0 100 100">
                            <polygon points="50,20 80,35 80,65 50,80 20,65 20,35" fill="none" stroke="#5C2D91" stroke-width="4"/>
                            <text x="50" y="60" font-size="35" font-weight="bold" fill="#5C2D91" text-anchor="middle">C</text>
                        </svg>
                    @else
                        <span class="text-white text-6xl font-bold">{{ substr($course->title, 0, 1) }}</span>
                    @endif
                </div>
                
                <!-- Course Details -->
                <div class="p-6 bg-white">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $course->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4 h-12 overflow-hidden">{{ Str::limit($course->description, 80) }}</p>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-2 mb-4">
                        <button class="flex-1 flex items-center justify-center gap-2 text-blue-600 border border-blue-600 py-2 px-3 rounded-lg text-sm hover:bg-blue-50 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Live Demo
                        </button>
                        <button class="flex-1 flex items-center justify-center gap-2 text-blue-600 border border-blue-600 py-2 px-3 rounded-lg text-sm hover:bg-blue-50 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Enroll Now
                        </button>
                    </div>
                    
                    <!-- Download Curriculum Button -->
                    <a href="#" class="flex items-center justify-center gap-2 bg-orange-500 hover:bg-orange-600 text-white py-2.5 px-4 rounded-lg font-semibold transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Download Curriculum
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- View All Courses Button -->
        <div class="text-center">
            <a href="{{ route('courses.index') }}" class="inline-block bg-blue-900 hover:bg-blue-800 text-white px-10 py-4 rounded-lg font-bold text-lg transition shadow-lg hover:shadow-xl">
                View All Courses
            </a>
        </div>
    </div>
</section>
<!-- Our Achievements Section -->
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold">
                <span class="text-blue-900">Our</span> <span class="text-orange-500">Achievements</span>
            </h2>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left - Illustration -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" alt="Team Achievement" class="w-full rounded-2xl shadow-xl">
                
                <!-- Decorative elements overlay could go here -->
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-blue-900 rounded-full opacity-20"></div>
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-orange-500 rounded-full opacity-20"></div>
            </div>
            
            <!-- Right - Stats Cards -->
            <div class="space-y-6">
                <!-- Top Row - Two Cards -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- 100 Students Trained -->
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition">
                        <div class="text-6xl font-bold text-orange-500 mb-4">{{ $stats['total_students'] }}</div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-8 h-8 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <div class="font-semibold">
                                Students<br>Trained
                            </div>
                        </div>
                    </div>
                    
                    <!-- 50 Courses Available -->
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition">
                        <div class="text-6xl font-bold text-orange-500 mb-4">{{ $stats['video_hours'] }}</div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <svg class="w-8 h-8 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <div class="font-semibold">
                                Courses<br>Available
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom - Large Card -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition relative overflow-hidden">
                    <div class="flex items-center gap-6">
                        <div class="text-7xl font-bold text-blue-900">{{ $stats['success_rate'] }}%</div>
                        <div class="text-gray-700 font-semibold text-lg">
                            Students Secured<br>Jobs in Level 1<br>Companies
                        </div>
                    </div>
                    
                    <!-- Decorative Dots Pattern -->
                    <div class="absolute -right-10 top-1/2 transform -translate-y-1/2 grid grid-cols-6 gap-2 opacity-20">
                        @for($i = 0; $i < 36; $i++)
                        <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Background Decorative Dots -->
    <div class="absolute bottom-10 left-10 grid grid-cols-3 gap-2 opacity-10">
        @for($i = 0; $i < 12; $i++)
        <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
        @endfor
    </div>
</section>


<!-- Meet Our Professional Mentors & Trainers Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold">
                <span class="text-blue-900">Meet Our Professional</span><br>
                <span class="text-orange-500">Mentors & Trainers</span>
            </h2>
        </div>
        
        <!-- Decorative Circle -->
        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1/2 w-64 h-64 border-8 border-orange-500 rounded-full opacity-30"></div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($instructors as $instructor)
            <div class="bg-gray-50 rounded-2xl p-8 hover:shadow-xl transition relative">
                <!-- Badge -->
                <div class="absolute top-6 right-6 bg-orange-500 text-white px-4 py-1 rounded-full text-xs font-semibold">
                    BEST TRAINER
                </div>
                
                <!-- Instructor Avatar -->
                <div class="flex items-start gap-6 mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center flex-shrink-0 relative">
                        <span class="text-white text-3xl font-bold">{{ substr($instructor->full_name, 0, 1) }}</span>
                        <!-- Decorative lines -->
                        <div class="absolute -bottom-2 left-0 w-full h-1 bg-orange-500"></div>
                    </div>
                    
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $instructor->full_name }}</h3>
                        <p class="text-orange-500 font-semibold text-sm mb-3">{{ $instructor->title ?? 'Senior Instructor' }}</p>
                        
                        <!-- Stats -->
                        <div class="flex gap-4 text-sm text-gray-600">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>{{ $instructor->courses->count() ?? '12' }} Courses</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                <span>{{ rand(100, 500) }} Students</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Description -->
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    {{ $instructor->bio ?? 'Experienced professional with deep knowledge in their field. Dedicated to helping students achieve their learning goals through practical, hands-on teaching methods and real-world insights.' }}
                </p>
                
                <!-- Social Links / Contact -->
                <div class="flex gap-3">
                    <a href="#" class="flex-1 text-center bg-blue-900 hover:bg-blue-800 text-white py-2 px-4 rounded-lg font-semibold text-sm transition">
                        View Profile
                    </a>
                    <a href="#" class="flex-1 text-center border-2 border-blue-900 text-blue-900 hover:bg-blue-900 hover:text-white py-2 px-4 rounded-lg font-semibold text-sm transition">
                        Contact
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- View All Instructors Button -->
        <div class="text-center mt-12">
            <a href="{{ route('instructors.index') }}" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-10 py-4 rounded-lg font-bold text-lg transition shadow-lg hover:shadow-xl">
                View All Mentors
            </a>
        </div>
    </div>
</section>

<!-- Our Certifications Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold">
                <span class="text-blue-900">Our</span> <span class="text-orange-500">Certifications</span>
            </h2>
        </div>
        
        <!-- Certifications Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
            <!-- ISO 27001 -->
            <div class="text-center group">
                <div class="relative w-40 h-40 mx-auto mb-4">
                    <!-- Outer Circle -->
                    <svg class="w-full h-full transform group-hover:scale-110 transition-transform duration-300" viewBox="0 0 160 160">
                        <!-- Purple Badge -->
                        <circle cx="80" cy="80" r="70" fill="none" stroke="#8B5CF6" stroke-width="8"/>
                        <circle cx="80" cy="80" r="60" fill="#8B5CF6" opacity="0.1"/>
                        
                        <!-- Text -->
                        <text x="80" y="60" font-size="12" font-weight="bold" fill="#8B5CF6" text-anchor="middle">INFORMATION SECURITY</text>
                        <text x="80" y="75" font-size="10" font-weight="normal" fill="#8B5CF6" text-anchor="middle">MANAGEMENT</text>
                        <text x="80" y="95" font-size="24" font-weight="bold" fill="#8B5CF6" text-anchor="middle">ISO</text>
                        <text x="80" y="115" font-size="28" font-weight="bold" fill="#8B5CF6" text-anchor="middle">27001</text>
                        <text x="80" y="130" font-size="10" font-weight="normal" fill="#8B5CF6" text-anchor="middle">CERTIFIED</text>
                        
                        <!-- Checkmark -->
                        <circle cx="110" cy="110" r="15" fill="#8B5CF6"/>
                        <path d="M105 110 L108 113 L115 106" stroke="white" stroke-width="2" fill="none"/>
                    </svg>
                </div>
            </div>
            
            <!-- ISO 9001 -->
            <div class="text-center group">
                <div class="relative w-40 h-40 mx-auto mb-4">
                    <svg class="w-full h-full transform group-hover:scale-110 transition-transform duration-300" viewBox="0 0 160 160">
                        <!-- Blue Badge -->
                        <circle cx="80" cy="80" r="70" fill="none" stroke="#3B82F6" stroke-width="8"/>
                        <circle cx="80" cy="80" r="60" fill="#3B82F6" opacity="0.1"/>
                        
                        <!-- Text -->
                        <text x="80" y="60" font-size="12" font-weight="bold" fill="#3B82F6" text-anchor="middle">QUALITY MANAGEMENT</text>
                        <text x="80" y="75" font-size="10" font-weight="normal" fill="#3B82F6" text-anchor="middle">SYSTEM</text>
                        <text x="80" y="95" font-size="24" font-weight="bold" fill="#3B82F6" text-anchor="middle">ISO</text>
                        <text x="80" y="115" font-size="28" font-weight="bold" fill="#3B82F6" text-anchor="middle">9001</text>
                        <text x="80" y="130" font-size="10" font-weight="normal" fill="#3B82F6" text-anchor="middle">CERTIFIED</text>
                        
                        <!-- Checkmark -->
                        <circle cx="110" cy="110" r="15" fill="#3B82F6"/>
                        <path d="M105 110 L108 113 L115 106" stroke="white" stroke-width="2" fill="none"/>
                    </svg>
                </div>
            </div>
            
            <!-- ISO 20000-1 -->
            <div class="text-center group">
                <div class="relative w-40 h-40 mx-auto mb-4">
                    <svg class="w-full h-full transform group-hover:scale-110 transition-transform duration-300" viewBox="0 0 160 160">
                        <!-- Green Badge -->
                        <circle cx="80" cy="80" r="70" fill="none" stroke="#10B981" stroke-width="8"/>
                        <circle cx="80" cy="80" r="60" fill="#10B981" opacity="0.1"/>
                        
                        <!-- Text -->
                        <text x="80" y="60" font-size="12" font-weight="bold" fill="#10B981" text-anchor="middle">IT SERVICE</text>
                        <text x="80" y="75" font-size="10" font-weight="normal" fill="#10B981" text-anchor="middle">MANAGEMENT</text>
                        <text x="80" y="95" font-size="24" font-weight="bold" fill="#10B981" text-anchor="middle">ISO</text>
                        <text x="80" y="115" font-size="24" font-weight="bold" fill="#10B981" text-anchor="middle">20000-1</text>
                        <text x="80" y="130" font-size="10" font-weight="normal" fill="#10B981" text-anchor="middle">CERTIFIED</text>
                        
                        <!-- Checkmark -->
                        <circle cx="110" cy="110" r="15" fill="#10B981"/>
                        <path d="M105 110 L108 113 L115 106" stroke="white" stroke-width="2" fill="none"/>
                    </svg>
                </div>
            </div>
            
            <!-- ISO 29993 -->
            <div class="text-center group">
                <div class="relative w-40 h-40 mx-auto mb-4">
                    <svg class="w-full h-full transform group-hover:scale-110 transition-transform duration-300" viewBox="0 0 160 160">
                        <!-- Pink Badge -->
                        <circle cx="80" cy="80" r="70" fill="none" stroke="#EC4899" stroke-width="8"/>
                        <circle cx="80" cy="80" r="60" fill="#EC4899" opacity="0.1"/>
                        
                        <!-- Text -->
                        <text x="80" y="60" font-size="12" font-weight="bold" fill="#EC4899" text-anchor="middle">LEARNING SERVICES</text>
                        <text x="80" y="75" font-size="10" font-weight="normal" fill="#EC4899" text-anchor="middle">OUTSIDE FORMAL</text>
                        <text x="80" y="95" font-size="24" font-weight="bold" fill="#EC4899" text-anchor="middle">ISO</text>
                        <text x="80" y="115" font-size="28" font-weight="bold" fill="#EC4899" text-anchor="middle">29993</text>
                        <text x="80" y="130" font-size="10" font-weight="normal" fill="#EC4899" text-anchor="middle">CERTIFIED</text>
                        
                        <!-- Checkmark -->
                        <circle cx="110" cy="110" r="15" fill="#EC4899"/>
                        <path d="M105 110 L108 113 L115 106" stroke="white" stroke-width="2" fill="none"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Additional Info -->
        <div class="text-center mt-12">
            <p class="text-gray-600 max-w-3xl mx-auto">
                Our certifications demonstrate our commitment to maintaining the highest standards in education, quality management, and information security. We continuously strive to provide world-class learning experiences.
            </p>
        </div>
    </div>
</section>
<!-- Our Collaborations Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6 lg:px-20">
        <!-- Decorative Dots - Left -->
        <div class="absolute left-0 top-20 grid grid-cols-3 gap-2 opacity-30">
            @for($i = 0; $i < 18; $i++)
            <div class="w-2 h-2 bg-orange-500 rounded-full"></div>
            @endfor
        </div>
        
        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold">
                <span class="text-blue-900">Our</span> <span class="text-orange-500">Collaborations</span>
            </h2>
        </div>
        
        <!-- Collaborations Logos Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 items-center max-w-5xl mx-auto">
            <!-- NASSCOM Foundation -->
            <div class="flex items-center justify-center group">
                <div class="text-center transform group-hover:scale-110 transition-transform duration-300">
                    <div class="mb-2">
                        <svg class="w-32 h-16 mx-auto" viewBox="0 0 200 80" fill="none">
                            <text x="10" y="35" font-size="24" font-weight="bold" fill="#8B0000" font-family="Arial">NASSCOM</text>
                            <text x="10" y="60" font-size="16" font-weight="bold" fill="#8B0000" font-family="Arial">FOUNDATION</text>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Skill India -->
            <div class="flex items-center justify-center group">
                <div class="text-center transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-32 h-20 mx-auto" viewBox="0 0 160 100" fill="none">
                        <!-- Logo Icon -->
                        <circle cx="40" cy="40" r="25" fill="none" stroke="#1e40af" stroke-width="3"/>
                        <path d="M30 40 L40 50 L55 30" stroke="#1e40af" stroke-width="3" fill="none"/>
                        
                        <!-- Text -->
                        <text x="80" y="35" font-size="18" font-weight="bold" fill="#1e40af">Skill India</text>
                        <text x="80" y="55" font-size="10" fill="#666">KAUSHAL BHARAT • KUSHAL BHARAT</text>
                    </svg>
                </div>
            </div>
            
            <!-- Startup India -->
            <div class="flex items-center justify-center group">
                <div class="text-center transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-32 h-20 mx-auto" viewBox="0 0 160 100" fill="none">
                        <!-- Logo -->
                        <text x="10" y="40" font-size="20" font-weight="bold" fill="#000">startup</text>
                        <text x="95" y="40" font-size="20" font-weight="bold" fill="#FF6B35">india</text>
                        
                        <!-- Icon -->
                        <rect x="55" y="50" width="3" height="30" fill="#10B981"/>
                        <polygon points="45,60 56,45 68,60" fill="#10B981"/>
                    </svg>
                </div>
            </div>
            
            <!-- TiE Hyderabad -->
            <div class="flex items-center justify-center group">
                <div class="text-center transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-32 h-20 mx-auto" viewBox="0 0 160 100" fill="none">
                        <!-- TiE Logo -->
                        <rect x="10" y="20" width="50" height="45" fill="#DC2626" rx="5"/>
                        <text x="35" y="50" font-size="28" font-weight="bold" fill="white" text-anchor="middle">TiE</text>
                        
                        <!-- Text -->
                        <text x="70" y="35" font-size="16" font-weight="bold" fill="#DC2626">HYDERABAD</text>
                        <text x="70" y="55" font-size="8" fill="#666">THE INDUS ENTREPRENEURS</text>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Additional Collaborations Text -->
        <div class="text-center mt-16">
            <p class="text-gray-600 max-w-3xl mx-auto mb-8">
                We proudly collaborate with leading organizations and government initiatives to provide quality education and skill development opportunities to students across the nation.
            </p>
            
            <!-- CTA Button -->
            <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-10 py-4 rounded-lg font-bold text-lg transition shadow-lg hover:shadow-xl">
                Become a Partner
            </a>
        </div>
    </div>
</section>
   

    <!-- Footer -->
    @include('includes.footer')

</body>
</html>