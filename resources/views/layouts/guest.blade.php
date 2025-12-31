<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            body {
                background: linear-gradient(135deg, #003366 0%, #004080 100%);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl w-full flex bg-white rounded-2xl shadow-2xl overflow-hidden">
                <!-- Left Side - Form -->
                <div class="w-full lg:w-1/2 p-8 lg:p-12">
                    <div class="mb-8">
                        <a href="/">
                            <x-application-logo class="h-12 w-auto" />
                        </a>
                    </div>

                    {{ $slot }}
                </div>

                <!-- Right Side - Illustration (Hidden on mobile) -->
                <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-blue-50 to-orange-50 items-center justify-center p-12">
                    <div class="text-center">
                        <div class="mb-6">
                            <svg class="w-64 h-64 mx-auto" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Phone illustration -->
                                <rect x="150" y="80" width="200" height="320" rx="20" fill="#FF6B35" stroke="#003366" stroke-width="4"/>
                                <rect x="170" y="100" width="160" height="240" rx="8" fill="#FFF"/>
                                <circle cx="250" cy="370" r="20" fill="#003366"/>
                                
                                <!-- Person 1 -->
                                <circle cx="180" cy="280" r="25" fill="#003366"/>
                                <rect x="160" y="310" width="40" height="60" rx="8" fill="#003366"/>
                                
                                <!-- Person 2 -->
                                <circle cx="320" cy="280" r="25" fill="#FF6B35"/>
                                <rect x="300" y="310" width="40" height="60" rx="8" fill="#FF6B35"/>
                                
                                <!-- Decorative elements -->
                                <circle cx="100" cy="150" r="30" fill="#FF6B35" opacity="0.2"/>
                                <circle cx="400" cy="350" r="40" fill="#003366" opacity="0.1"/>
                                <rect x="80" y="300" width="50" height="30" rx="5" fill="#003366" opacity="0.3"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Join EzySkills Today!</h2>
                        <p class="text-gray-600">Start your learning journey with expert instructors</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>