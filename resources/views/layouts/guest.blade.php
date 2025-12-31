<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
                overflow: hidden;
            }
            
            .illustration-container {
                animation: float 6s ease-in-out infinite;
            }
            
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
            
            .code-line {
                animation: pulse 2s ease-in-out infinite;
            }
            
            @keyframes pulse {
                0%, 100% { opacity: 0.6; }
                50% { opacity: 1; }
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="h-screen flex">
            
            <!-- Left Side - Form (النموذج على اليسار) -->
            <div class="w-full lg:w-1/2 bg-white overflow-y-auto flex flex-col">
                
                <!-- Header -->
                <div class="flex-shrink-0">
                    @include('includes.header')
                </div>
                
                <!-- Main Content -->
                <div class="flex-1 flex items-center justify-center p-8 lg:p-12">
                    <div class="w-full max-w-md">
                        {{ $slot }}
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="flex-shrink-0">
                    @include('includes.footer')
                </div>
                
            </div>

            <!-- Right Side - Illustration (الرسمة على اليمين) -->
            <div class="hidden lg:flex lg:w-1/2 items-center justify-center p-12 relative overflow-hidden" style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);">
                
                <!-- Decorative circles -->
                <div class="absolute top-10 right-10 w-16 h-16 bg-orange-400 rounded-full opacity-20"></div>
                <div class="absolute bottom-20 left-10 w-24 h-24 bg-blue-400 rounded-full opacity-10"></div>
                <div class="absolute top-1/3 right-1/4 w-12 h-12 bg-orange-500 rounded-full opacity-15"></div>
                
                <div class="illustration-container relative z-10">
                    <svg class="w-96 h-96" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                        
                        <!-- Main Phone/Screen -->
                        <rect x="180" y="80" width="240" height="380" rx="25" fill="#FF6B35" stroke="#FFF" stroke-width="5"/>
                        <rect x="200" y="105" width="200" height="300" rx="12" fill="#FFF"/>
                        
                        <!-- Phone details -->
                        <circle cx="300" cy="415" r="18" fill="#FFF"/>
                        <rect x="270" y="95" width="60" height="6" rx="3" fill="#FFF" opacity="0.3"/>
                        
                        <!-- Image icon in phone -->
                        <rect x="230" y="140" width="140" height="100" rx="10" fill="#FFE5D9"/>
                        <circle cx="260" cy="170" r="15" fill="#FF6B35"/>
                        <path d="M230 220 L280 180 L330 210 L370 170" stroke="#FF6B35" stroke-width="4" stroke-linecap="round"/>
                        
                        <!-- Code editor window -->
                        <rect x="210" y="260" width="180" height="120" rx="8" fill="#1e3a8a" opacity="0.9"/>
                        <circle cx="225" cy="275" r="4" fill="#FF6B35"/>
                        <circle cx="240" cy="275" r="4" fill="#FCD34D"/>
                        <circle cx="255" cy="275" r="4" fill="#34D399"/>
                        
                        <!-- Code lines -->
                        <rect class="code-line" x="225" y="295" width="100" height="4" rx="2" fill="#60A5FA" opacity="0.8"/>
                        <rect class="code-line" x="225" y="310" width="140" height="4" rx="2" fill="#34D399" opacity="0.7" style="animation-delay: 0.3s"/>
                        <rect class="code-line" x="225" y="325" width="80" height="4" rx="2" fill="#F472B6" opacity="0.8" style="animation-delay: 0.6s"/>
                        <rect class="code-line" x="225" y="340" width="120" height="4" rx="2" fill="#FBBF24" opacity="0.7" style="animation-delay: 0.9s"/>
                        <rect class="code-line" x="225" y="355" width="90" height="4" rx="2" fill="#60A5FA" opacity="0.8" style="animation-delay: 1.2s"/>
                        
                        <!-- Person 1 (Left) - Sitting with laptop -->
                        <circle cx="120" cy="350" r="28" fill="#FFF"/>
                        <path d="M120 355 Q115 360 110 365 Q105 370 105 380 L105 420" stroke="#FFF" stroke-width="8" stroke-linecap="round"/>
                        <path d="M120 355 Q125 360 130 365 Q135 370 135 380 L135 420" stroke="#FFF" stroke-width="8" stroke-linecap="round"/>
                        <rect x="90" y="385" width="60" height="35" rx="5" fill="#FFF"/>
                        <rect x="95" y="390" width="50" height="25" rx="3" fill="#60A5FA"/>
                        
                        <!-- Laptop for Person 1 -->
                        <rect x="75" y="415" width="90" height="5" rx="2" fill="#FFF"/>
                        
                        <!-- Person 2 (Right) - Standing with tablet -->
                        <circle cx="480" cy="340" r="28" fill="#FF6B35"/>
                        <path d="M480 345 Q475 350 470 355 Q465 360 465 370 L465 420" stroke="#FF6B35" stroke-width="8" stroke-linecap="round"/>
                        <path d="M480 345 Q485 350 490 355 Q495 360 495 370 L495 420" stroke="#FF6B35" stroke-width="8" stroke-linecap="round"/>
                        <rect x="450" y="370" width="60" height="50" rx="8" fill="#FF6B35"/>
                        
                        <!-- Tablet in hand -->
                        <rect x="435" y="375" width="50" height="70" rx="5" fill="#FFF"/>
                        <rect x="440" y="380" width="40" height="55" rx="3" fill="#E0F2FE"/>
                        
                        <!-- Security/Lock icon -->
                        <rect x="80" y="200" width="60" height="70" rx="10" fill="#FFF" opacity="0.9"/>
                        <rect x="95" y="220" width="30" height="35" rx="5" fill="#FCD34D"/>
                        <path d="M105 220 L105 210 Q105 200 110 200 Q115 200 115 210 L115 220" stroke="#1e3a8a" stroke-width="4" stroke-linecap="round" fill="none"/>
                        <circle cx="110" cy="235" r="4" fill="#1e3a8a"/>
                        
                        <!-- Hashtag/Code symbol -->
                        <rect x="460" y="120" width="80" height="80" rx="15" fill="#FF6B35" opacity="0.9"/>
                        <text x="485" y="175" font-size="50" font-weight="bold" fill="#FFF" font-family="monospace">#</text>
                        
                        <!-- User profile icon -->
                        <circle cx="500" cy="280" r="35" fill="#FFF" opacity="0.9"/>
                        <circle cx="500" cy="270" r="12" fill="#60A5FA"/>
                        <path d="M475 300 Q475 285 500 285 Q525 285 525 300" fill="#60A5FA"/>
                        
                        <!-- Floating dots decoration -->
                        <circle cx="150" cy="120" r="6" fill="#FF6B35" opacity="0.6"/>
                        <circle cx="520" cy="450" r="8" fill="#FFF" opacity="0.5"/>
                        <circle cx="440" cy="90" r="5" fill="#60A5FA" opacity="0.7"/>
                        
                        <!-- Speech bubble -->
                        <rect x="380" y="190" width="80" height="50" rx="10" fill="#FFF" stroke="#60A5FA" stroke-width="2"/>
                        <circle cx="400" cy="210" r="3" fill="#60A5FA"/>
                        <circle cx="420" cy="210" r="3" fill="#60A5FA"/>
                        <circle cx="440" cy="210" r="3" fill="#60A5FA"/>
                        
                    </svg>
                </div>
            </div>
        </div>
    </body>
</html>