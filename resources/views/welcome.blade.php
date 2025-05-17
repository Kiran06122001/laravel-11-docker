<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wakanda Forever</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
            font-family: 'Exo 2', sans-serif;
            background-color: #0a0a0a;
            color: #fff;
            overflow-x: hidden;
        }
        
        .wakanda-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23353535' fill-opacity='0.15'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .vibranium-text {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(to right, #663399, #9370DB, #663399);
            background-size: 200% auto;
            animation: shine 3s linear infinite;
        }
        
        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }
        
        .glow {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
        }
        
        .vibranium-btn {
            background: linear-gradient(45deg, #1a1a1a, #333);
            border: 1px solid #666;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            z-index: 1;
        }
        
        .vibranium-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(147, 112, 219, 0.4), transparent);
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .vibranium-btn:hover:before {
            left: 100%;
        }
        
        .vibranium-btn:hover {
            box-shadow: 0 0 15px rgba(147, 112, 219, 0.5);
            transform: translateY(-2px);
        }
        
        .panther-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .nav-link {
            position: relative;
            padding-bottom: 5px;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #9370DB;
            transition: width 0.3s;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .feature-card {
            transition: all 0.3s ease;
            border: 1px solid #333;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            border-color: #9370DB;
        }
        
        .panther-icon {
            filter: drop-shadow(0 0 8px rgba(147, 112, 219, 0.5));
        }
        
        .necklace {
            position: relative;
        }
        
        .necklace-bead {
            position: absolute;
            width: 20px;
            height: 20px;
            background: #fff;
            border-radius: 50%;
            transform-origin: center;
            animation: glowing 2s ease-in-out infinite;
        }
        
        @keyframes glowing {
            0%, 100% {
                box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #9370DB, 0 0 20px #9370DB;
            }
            50% {
                box-shadow: 0 0 10px #fff, 0 0 15px #9370DB, 0 0 20px #9370DB, 0 0 25px #9370DB;
            }
        }
        
        .claw-marks {
            position: relative;
            overflow: hidden;
        }
        
        .claw-marks:before {
            content: '';
            position: absolute;
            top: -20px;
            right: -20px;
            width: 100px;
            height: 100px;
            background-image: linear-gradient(45deg, transparent 45%, #9370DB 45%, #9370DB 55%, transparent 55%),
                              linear-gradient(45deg, transparent 45%, #9370DB 45%, #9370DB 55%, transparent 55%),
                              linear-gradient(45deg, transparent 45%, #9370DB 45%, #9370DB 55%, transparent 55%);
            background-size: 100% 33.33%;
            background-repeat: no-repeat;
            background-position: 0 0, 0 50%, 0 100%;
            transform: rotate(45deg);
            opacity: 0.2;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Navigation -->
    <nav class="py-4 px-6 md:px-10 flex items-center justify-between absolute w-full z-10">
        <div class="flex items-center">
            <div class="mr-2 w-12 h-12">
                <img src="{{ asset('images/svgwaves_io_svg (3) 1.svg') }}" alt="Panther Logo" class="panther-icon">
            </div>
            <a href="#" class="text-xl font-bold text-white">WAKANDA<span class="vibranium-text">FOREVER</span></a>
        </div>
        <div class="hidden md:flex space-x-8">
            <a href="#" class="nav-link text-gray-300 hover:text-white">Home</a>
            <a href="#" class="nav-link text-gray-300 hover:text-white">Kingdom</a>
            <a href="#" class="nav-link text-gray-300 hover:text-white">Technology</a>
            <a href="#" class="nav-link text-gray-300 hover:text-white">Join Us</a>
        </div>
        <div class="md:hidden">
            <button class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <header class="relative min-h-screen flex items-center justify-center wakanda-pattern">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-black/90"></div>
        
        <div class="container mx-auto px-4 relative z-1 flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-4">
                    Welcome to <span class="vibranium-text">Wakanda</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-gray-300">The most technologically advanced nation on Earth, powered by <span class="glow">Vibranium</span>.</p>
                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                    <a href="#" class="vibranium-btn py-3 px-8 rounded-full font-semibold text-white">Explore Kingdom</a>
                    <a href="#" class="vibranium-btn py-3 px-8 rounded-full font-semibold text-white">Learn Technology</a>
                </div>
            </div>
            
            <div class="md:w-1/2 panther-animation">
                <div class="relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-lg blur opacity-30"></div>
                    <div class="relative">
                        <img src="{{ asset('images/BP.jpg') }}" alt="Black Panther" class="rounded-lg shadow-2xl">
                        
                        <!-- Animated Necklace -->
                        <div class="necklace absolute bottom-0 left-0 right-0 flex justify-center">
                            @for ($i = 0; $i < 7; $i++)
                                <div class="necklace-bead" style="left: calc(50% + {{ ($i - 3) * 24 }}px); bottom: 20px;"></div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2">
            <a href="#features" class="flex flex-col items-center text-gray-400 hover:text-white transition duration-300">
                <span class="mb-2">Discover Wakanda</span>
                <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </a>
        </div>
    </header>
    
    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">The Wonders of <span class="vibranium-text">Wakanda</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card rounded-xl p-6 bg-black bg-opacity-50 claw-marks">
                    <div class="h-14 w-14 rounded-full bg-purple-900 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Vibranium Technology</h3>
                    <p class="text-gray-400">Harnessing the power of vibranium, Wakanda has developed technology centuries ahead of the rest of the world.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card rounded-xl p-6 bg-black bg-opacity-50 claw-marks">
                    <div class="h-14 w-14 rounded-full bg-purple-900 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Heart-Shaped Herb</h3>
                    <p class="text-gray-400">The mystical herb that grants superhuman abilities to the Black Panther, protector of Wakanda.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card rounded-xl p-6 bg-black bg-opacity-50 claw-marks">
                    <div class="h-14 w-14 rounded-full bg-purple-900 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Advanced Infrastructure</h3>
                    <p class="text-gray-400">Behind its façade as a third-world country, Wakanda boasts the most advanced cities on the planet.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-card rounded-xl p-6 bg-black bg-opacity-50 claw-marks">
                    <div class="h-14 w-14 rounded-full bg-purple-900 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Dora Milaje</h3>
                    <p class="text-gray-400">Wakanda's elite all-female special forces, serving as the royal guard and the kingdom's most skilled warriors.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-card rounded-xl p-6 bg-black bg-opacity-50 claw-marks">
                    <div class="h-14 w-14 rounded-full bg-purple-900 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Vibranium Weapons</h3>
                    <p class="text-gray-400">From energy-absorbing suits to kinetic energy weapons, Wakanda's arsenal is unmatched in power and efficiency.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="feature-card rounded-xl p-6 bg-black bg-opacity-50 claw-marks">
                    <div class="h-14 w-14 rounded-full bg-purple-900 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Rich Traditions</h3>
                    <p class="text-gray-400">Despite its technological prowess, Wakanda maintains its ancient traditions, rituals, and tribal unity.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Black Panther Showcase -->
    <section class="py-20 bg-black relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">The <span class="vibranium-text">Black Panther</span></h2>
                    <p class="text-lg mb-6 text-gray-300">The protector of Wakanda, enhanced by the heart-shaped herb and clad in vibranium weave armor. More than a warrior, the Black Panther is a symbol of Wakanda's strength and wisdom.</p>
                    <p class="text-lg mb-8 text-gray-300">The mantle of the Black Panther is passed down through ritual combat, ensuring only the worthy can claim the throne and the responsibility to protect the nation.</p>
                    <a href="#" class="vibranium-btn py-3 px-8 rounded-full font-semibold text-white inline-block">Learn the Legacy</a>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-80 h-80">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full blur-xl opacity-20 animate-pulse"></div>
                        <img src="{{ asset('images/svgwaves_io_svg (1) 1.png') }}" alt="Black Panther Emblem" class="relative z-10 w-full">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Background Elements -->
        <div class="absolute top-1/4 left-10 w-40 h-40 bg-purple-900 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob"></div>
        <div class="absolute bottom-1/4 right-10 w-40 h-40 bg-indigo-900 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-2000"></div>
    </section>
    
    <!-- Join Wakanda Section -->
    <section class="py-20 bg-gradient-to-b from-gray-900 to-black relative">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Join the <span class="vibranium-text">Wakandan Legacy</span></h2>
            <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">Become part of Wakanda's journey as we share our knowledge and technology with the world.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-16">
                <div class="bg-black bg-opacity-50 p-8 rounded-xl border border-gray-800">
                    <div class="h-16 w-16 rounded-full bg-purple-900 flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Technology Exchange</h3>
                    <p class="text-gray-400">Learn from Wakandan scientists and engineers about our sustainable technology initiatives.</p>
                </div>
                
                <div class="bg-black bg-opacity-50 p-8 rounded-xl border border-gray-800">
                    <div class="h-16 w-16 rounded-full bg-purple-900 flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Cultural Programs</h3>
                    <p class="text-gray-400">Immerse yourself in Wakandan history, language, and traditions through our cultural exchange initiatives.</p>
                </div>
                
                <div class="bg-black bg-opacity-50 p-8 rounded-xl border border-gray-800">
                    <div class="h-16 w-16 rounded-full bg-purple-900 flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Outreach Missions</h3>
                    <p class="text-gray-400">Join our global humanitarian efforts as we help communities around the world with Wakandan resources.</p>
                </div>
            </div>
            
            <a href="#" class="vibranium-btn py-4 px-10 rounded-full font-semibold text-white inline-block">Join Wakanda Outreach</a>
        </div>
        
        <!-- Panther Symbol Background -->
        <div class="absolute bottom-0 right-0 w-96 h-96 opacity-5">
            <img src="{{ asset('images/svgwaves_io_svg (2) 1.png') }}" alt="Panther Symbol" class="w-full">
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-black py-12 border-t border-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="flex items-center mb-6 md:mb-0">
                    <div class="mr-2 w-10 h-10">
                        <img src="{{ asset('images/svgwaves_io_svg (3) 1.svg') }}" alt="Logo" class="panther-icon">
                    </div>
                    <span class="text-xl font-bold">WAKANDA<span class="vibranium-text">FOREVER</span></span>
                </div>
                
                <div class="flex space-x-8">
                    <a href="#" class="text-gray-400 hover:text-white transition">Privacy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Terms</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Contact</a>
                    <a href="#" class="text-gray-400 hover:text-white transition">Press</a>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 mb-4 md:mb-0">&copy; {{ date('Y') }} Wakanda. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.342-3.369-1.342-.454-1.155-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.202 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.416 22 12c0-5.523-4.477-10-10-10z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0C23.512 20.55 23.971 18.196 24 12c-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 3.993L9 16z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Loading Animation -->
    <div class="fixed inset-0 flex items-center justify-center bg-black z-50 transition-opacity duration-500" id="loader">
        <div class="w-24 h-24 relative">
            <svg class="w-full h-full animate-spin" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L9 7H15L12 2Z" fill="#9370DB"/>
                <path d="M15 7L19 10H21L15 7Z" fill="#9370DB"/>
                <path d="M9 7L5 10H3L9 7Z" fill="#9370DB"/>
                <path d="M21 10V14L19 16L15 18H9L5 16L3 14V10H21Z" fill="#663399"/>
                <path d="M15 18L17 22H7L9 18" fill="#9370DB"/>
            </svg>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Loading Animation
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const loader = document.getElementById('loader');
                loader.classList.add('opacity-0');
                setTimeout(function() {
                    loader.style.display = 'none';
                }, 500);
            }, 1500);
        });
        
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('nav button');
            const mobileMenu = document.createElement('div');
            
            mobileMenu.className = 'fixed inset-0 bg-black bg-opacity-95 flex flex-col items-center justify-center space-y-8 transform transition-all duration-300 translate-x-full z-20';
            mobileMenu.innerHTML = `
                <a href="#" class="text-2xl text-white hover:text-purple-400 transition">Home</a>
                <a href="#" class="text-2xl text-white hover:text-purple-400 transition">Kingdom</a>
                <a href="#" class="text-2xl text-white hover:text-purple-400 transition">Technology</a>
                <a href="#" class="text-2xl text-white hover:text-purple-400 transition">Join Us</a>
                <button class="absolute top-6 right-6 text-white">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            `;
            
            document.body.appendChild(mobileMenu);
            
            const closeButton = mobileMenu.querySelector('button');
            
            menuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('translate-x-full');
                document.body.classList.add('overflow-hidden');
            });
            
            closeButton.addEventListener('click', function() {
                mobileMenu.classList.add('translate-x-full');
                document.body.classList.remove('overflow-hidden');
            });
        });
        
        // Smooth scrolling for anchor links
        document.addEventListener('DOMContentLoaded', function() {
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            
            anchorLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
        
        // Create animated claw marks on scroll
        document.addEventListener('DOMContentLoaded', function() {
            function createClawMark() {
                const clawMark = document.createElement('div');
                clawMark.className = 'absolute w-20 h-20 pointer-events-none';
                
                // Random position
                clawMark.style.left = Math.random() * 100 + 'vw';
                clawMark.style.top = Math.random() * 100 + 'vh';
                
                // Create SVG for claw mark
                clawMark.innerHTML = `
                    <svg viewBox="0 0 100 100" class="w-full h-full opacity-5">
                        <path d="M20,20 L80,80" stroke="#9370DB" stroke-width="5" />
                        <path d="M30,20 L90,80" stroke="#9370DB" stroke-width="5" />
                        <path d="M40,20 L100,80" stroke="#9370DB" stroke-width="5" />
                    </svg>
                `;
                
                document.body.appendChild(clawMark);
                
                // Remove after animation
                setTimeout(() => {
                    clawMark.remove();
                }, 2000);
            }
            
            // Create claw marks on scroll
            window.addEventListener('scroll', () => {
                if (Math.random() > 0.9) { // 10% chance on scroll
                    createClawMark();
                }
            });
        });
        
        // Animated necklace beads
        document.addEventListener('DOMContentLoaded', function() {
            const beads = document.querySelectorAll('.necklace-bead');
            
            beads.forEach((bead, index) => {
                // Set different animation delays for each bead
                bead.style.animationDelay = (index * 0.2) + 's';
            });
        });
        
        // Parallax effect for hero section
        document.addEventListener('DOMContentLoaded', function() {
            const heroSection = document.querySelector('header');
            const heroImage = document.querySelector('.panther-animation');
            
            window.addEventListener('scroll', function() {
                const scrollPosition = window.scrollY;
                
                if (scrollPosition < heroSection.offsetHeight) {
                    // Move the hero image slightly based on scroll
                    heroImage.style.transform = `translateY(${scrollPosition * 0.1}px)`;
                }
            });
        });
    </script>
</body>
</html>