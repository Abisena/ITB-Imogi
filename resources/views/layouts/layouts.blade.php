<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ITB (Inovasi Terbaik Bangsa)')</title>
    <meta name="description" content="@yield('meta_description', 'ITB menyediakan solusi IT dan digitalisasi untuk bisnis Anda.')">
    <meta name="keywords" content="@yield('meta_keywords', 'ITB, Inovasi Terbaik Bangsa, solusi IT, digitalisasi bisnis')">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="{{ asset('images/image.jpg') }}">

    {{-- Custom CSS for smooth scrolling --}}
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Navbar animation */
        .navbar-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #fbbf24, #f59e0b);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-link:hover::after,
        .navbar-link.active::after {
            width: 100%;
        }

        .navbar-link:hover {
            color: #fbbf24;
            transform: translateY(-1px);
        }

        /* Logo animation */
        .logo-container {
            transition: transform 0.3s ease;
        }

        .logo-container:hover {
            transform: scale(1.05);
        }

        /* Mobile menu animations */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        /* Backdrop blur for navbar */
        .navbar-blur {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        /* Active section indicator */
        .section-active {
            color: #fbbf24 !important;
        }

        /* Additional animations and effects */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Form focus effects */
        input:focus, select:focus, textarea:focus {
            box-shadow: 0 0 0 3px rgba(252, 211, 77, 0.1);
        }

        /* Custom scrollbar for demo form */
        #demoForm {
            scrollbar-width: thin;
            scrollbar-color: #fbbf24 #374151;
        }

        #demoForm::-webkit-scrollbar {
            width: 6px;
        }

        #demoForm::-webkit-scrollbar-track {
            background: #374151;
            border-radius: 3px;
        }

        #demoForm::-webkit-scrollbar-thumb {
            background: #fbbf24;
            border-radius: 3px;
        }

        /* Alert animations */
        .alert-fade-in {
            animation: fadeInSlideLeft 0.5s ease-out;
        }

        @keyframes fadeInSlideLeft {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Floating shapes animation */
        .floating-shapes {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .shape {
            position: absolute;
            background: linear-gradient(45deg, #60a5fa, #3b82f6);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 80px;
            height: 80px;
            bottom: 30%;
            left: 80%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</head>
<body class="bg-white min-h-screen">

    {{-- Enhanced Navbar --}}
    {{-- <nav class="fixed w-full top-0 left-0 z-50 navbar-blur bg-gradient-to-r from-blue-600/95 via-blue-500/95 to-blue-700/95 shadow-lg border-b border-blue-400/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                {{-- Logo Section --}}
                {{-- <div class="flex items-center space-x-4"> --}}
                    {{-- <div class="logo-container">
                        <img src="{{ asset('images/imogi.png') }}" alt="Logo ITB" class="h-10 w-10 rounded-lg shadow-md">
                    </div> --}}
                    {{-- <div class="hidden sm:block">
                        <h1 class="text-xl font-bold bg-gradient-to-r from-yellow-300 to-yellow-400 bg-clip-text text-transparent">
                            ITB
                        </h1>
                        <p class="text-xs text-blue-100 -mt-1">Inovasi Terbaik Bangsa</p>
                    </div>
                </div> --}}

                {{-- Desktop Navigation --}}
                {{-- <div class="hidden md:flex items-center space-x-8"> --}}
                    {{-- <a href="#home" class="navbar-link text-white font-medium px-3 py-2 rounded-md text-sm tracking-wide">
                        Home
                    </a>
                    <a href="#about" class="navbar-link text-white font-medium px-3 py-2 rounded-md text-sm tracking-wide">
                        About
                    </a>
                    <a href="#contact" class="navbar-link text-white font-medium px-3 py-2 rounded-md text-sm tracking-wide">
                        Contact
                    </a> --}}

                    {{-- CTA Button --}}
                    {{-- <a href="#contact" class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 px-6 py-2 rounded-full font-semibold text-sm hover:from-yellow-300 hover:to-yellow-400 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Contact
                    </a> --}}
                {{-- </div> --}}

                {{-- Mobile Menu Button --}}
                {{-- <div class="md:hidden">
                    <button type="button" class="mobile-menu-button text-white hover:text-yellow-300 focus:outline-none focus:text-yellow-300 transition-colors duration-200" aria-label="Toggle menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path class="close-icon hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div> --}}

        {{-- Mobile Menu --}}
        {{-- <div class="mobile-menu md:hidden fixed top-16 right-0 h-screen w-64 bg-gradient-to-b from-blue-600 to-blue-800 shadow-2xl">
            <div class="px-6 py-8 space-y-6">
                <a href="#home" class="mobile-nav-link block text-white font-medium py-3 px-4 rounded-lg hover:bg-blue-500/50 transition-all duration-200">
                    <span class="flex items-center space-x-3">
                        <i class="fas fa-home w-5 text-center"></i>
                        <span>Home</span>
                    </span>
                </a>
                <a href="#about" class="mobile-nav-link block text-white font-medium py-3 px-4 rounded-lg hover:bg-blue-500/50 transition-all duration-200">
                    <span class="flex items-center space-x-3">
                        <i class="fas fa-info-circle w-5 text-center"></i>
                        <span>About</span>
                    </span>
                </a>
                <a href="#contact" class="mobile-nav-link block text-white font-medium py-3 px-4 rounded-lg hover:bg-blue-500/50 transition-all duration-200">
                    <span class="flex items-center space-x-3">
                        <i class="fas fa-envelope w-5 text-center"></i>
                        <span>Contact</span>
                    </span>
                </a>

                {{-- Mobile CTA --}}
                {{-- <div class="pt-6 border-t border-blue-400/30">
                    <a href="#contact" class="block w-full bg-gradient-to-r from-yellow-400 to-yellow-500 text-blue-900 px-6 py-3 rounded-full font-semibold text-center hover:from-yellow-300 hover:to-yellow-400 transform hover:scale-105 transition-all duration-300 shadow-lg">
                        Get Demo
                    </a>
                </div>
            </div>
        </div>
    </nav> --}}

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Enhanced Footer --}}
    {{-- <footer class="bg-gradient-to-r from-blue-600 via-blue-500 to-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                {{-- Company Info --}}
                {{-- <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/imogi.png') }}" alt="Logo ITB" class="h-10 w-10 rounded-lg">
                        <div>
                            <h3 class="text-xl font-bold text-yellow-300">ITB</h3>
                            <p class="text-sm text-blue-100">Inovasi Terbaik Bangsa</p>
                        </div>
                    </div>
                    <p class="text-blue-100 text-sm leading-relaxed">
                        Menyediakan solusi teknologi inovatif untuk meningkatkan efisiensi bisnis Anda dengan sistem ERP terdepan.
                    </p> --}}
                    {{-- Social Media --}}
                    {{-- <div class="flex space-x-4 pt-4">
                        <a href="#" class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center hover:bg-blue-400 transition-colors">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center hover:bg-blue-400 transition-colors">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center hover:bg-blue-400 transition-colors">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center hover:bg-blue-400 transition-colors">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                    </div>
                </div> --}}

                {{-- Solutions --}}
                {{-- <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-yellow-300">Solutions</h4>
                    <div class="space-y-2">
                        <a href="#about" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">ITB Core ERP</a>
                        <a href="#about" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">Manufacturing Suite</a>
                        <a href="#about" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">HRM Suite</a>
                        <a href="#about" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">Retail & POS</a>
                        <a href="#about" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">Construction Suite</a>
                    </div>
                </div> --}}

                {{-- Quick Links --}}
                {{-- <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-yellow-300">Quick Links</h4>
                    <div class="space-y-2">
                        <a href="#home" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">Home</a>
                        <a href="#about" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">About Us</a>
                        <a href="#contact" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">Contact</a>
                        <a href="#" class="block text-blue-100 hover:text-yellow-300 transition-colors duration-200 text-sm">Privacy Policy</a>
                    </div>
                </div> --}}

                {{-- Contact Info --}}
                {{-- <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-yellow-300">Contact Info</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-yellow-300 mt-1"></i>
                            <div>
                                <p class="text-blue-100 font-medium">JAKARTA OFFICE</p>
                                <p class="text-blue-200">Jalan Sudirman No. 123</p>
                                <p class="text-blue-200">Jakarta Pusat 10220</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-yellow-300"></i>
                            <p class="text-blue-100">info@itb-indonesia.com</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-yellow-300"></i>
                            <p class="text-blue-100">+62 21 1234 5678</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-yellow-300"></i>
                            <p class="text-blue-100">24/7 Support</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-blue-400/30 mt-8 pt-8 text-center">
                <p class="text-blue-100 text-sm">&copy; {{ now()->year }} ITB (Inovasi Terbaik Bangsa). All rights reserved.</p>
            </div>
        </div>
    </footer> --}}

    {{-- JavaScript for Enhanced Functionality --}}
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        const menuIcon = document.querySelector('.menu-icon');
        const closeIcon = document.querySelector('.close-icon');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.remove('open');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });

        // Active section highlighting
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-link, .mobile-nav-link');

        function highlightActiveSection() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active', 'section-active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active', 'section-active');
                }
            });
        }

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const navHeight = document.querySelector('nav').offsetHeight;
                    const targetPosition = target.offsetTop - navHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar background opacity on scroll
        const navbar = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            highlightActiveSection();

            if (window.scrollY > 50) {
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('shadow-lg');
            }
        });

        // Initial call
        highlightActiveSection();

        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            document.querySelectorAll('.alert-fade-in').forEach(alert => {
                alert.style.opacity = '0';
                alert.style.transform = 'translateX(100%)';
                setTimeout(() => alert.remove(), 300);
            });
        }, 5000);
    </script>
</body>
</html>
