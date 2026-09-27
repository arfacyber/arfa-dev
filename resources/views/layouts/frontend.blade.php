<!DOCTYPE html>
<!-- Tambahkan Alpine.js Theme Logic di tag HTML -->
<html lang="id" class="scroll-smooth" 
      x-data="{ theme: localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light') }"
      x-init="$watch('theme', val => localStorage.setItem('theme', val))"
      :class="theme === 'dark' ? 'dark' : ''">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Dynamic Theme Color for Mobile Browser -->
    <meta name="theme-color" :content="theme === 'dark' ? '#0a0a0a' : '#f8fafc'">

    <meta name="google-site-verification" content="oj_BUQaFnrLH2L4-zGIt8q7RhelI-kQxRzB-JPMR0DM">
    <meta name="author" content="Muhammad Arfadhia Rizqitamma Giari">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $title ?? 'Arfa - Full-Stack Developer Portfolio' }}</title>
    <meta name="description" content="{{ $description ?? 'Portofolio resmi Muhammad Arfadhia Rizqitamma Giari. Jelajahi proyek, case study, dan tulisan seputar web development.' }}">
    
    <!-- ==========================================
         OPEN GRAPH & TWITTER CARDS (SOCIAL SHARE)
    =========================================== -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Arfa - Full-Stack Developer Portfolio' }}">
    <meta property="og:description" content="{{ $description ?? 'Portofolio resmi Muhammad Arfadhia Rizqitamma Giari. Jelajahi proyek, case study, dan tulisan seputar web development.' }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Arfa - Full-Stack Developer Portfolio' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Portofolio resmi Muhammad Arfadhia Rizqitamma Giari. Jelajahi proyek, case study, dan tulisan seputar web development.' }}">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">
    <!-- ========================================== -->

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<!-- Transisi background dinamis: Light (slate-50) & Dark (#0a0a0a) -->
<body class="bg-slate-50 dark:bg-[#0a0a0a] text-slate-900 dark:text-[#f8fafc] font-sans antialiased selection:bg-blue-500 selection:text-white transition-colors duration-500">

    <nav x-data="{ 
            mobileMenuOpen: false, 
            scrolled: false,
            activeSection: '{{ request()->routeIs('home') ? 'home' : (request()->routeIs('projects.*', 'project.*') ? 'portfolio' : (request()->routeIs('blogs.*', 'blog.*') ? 'journal' : '')) }}',
            updateActiveSection() {
                @if(request()->routeIs('home'))
                const sections = ['about', 'skills', 'services'];
                let current = 'home';
                for (let s of sections) {
                    const el = document.getElementById(s);
                    if (el && window.scrollY >= (el.offsetTop - 200)) {
                        current = s;
                    }
                }
                this.activeSection = current;
                @endif
            }
         }" 
         @scroll.window="scrolled = (window.pageYOffset > 20); updateActiveSection()"
         x-init="setTimeout(() => updateActiveSection(), 100)"
         :class="scrolled ? 'bg-white/80 dark:bg-[#0a0a0a]/80 backdrop-blur-lg border-b border-slate-200 dark:border-[#262626] shadow-[0_4px_30px_rgba(0,0,0,0.05)] dark:shadow-[0_4px_30px_rgba(0,0,0,0.5)]' : 'bg-transparent border-b border-transparent'"
         class="fixed w-full z-50 transition-all duration-500 top-0">
        
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex items-center justify-between h-20 md:h-24 transition-all duration-500" :class="scrolled ? 'h-16 md:h-20' : 'h-20 md:h-24'">
                
                <!-- LOGO -->
                <a href="{{ route('home') }}" class="group flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl flex items-center justify-center group-hover:rotate-12 group-hover:scale-110 transition-all duration-300 shadow-lg shadow-blue-500/20">
                        <span class="text-white font-black text-lg tracking-tighter">A</span>
                    </div>
                    <span class="text-2xl font-black text-slate-900 dark:text-white tracking-tighter">
                        ARFA<span class="text-blue-500">.DEV</span>
                    </span>
                </a>

                <!-- DESKTOP MENU -->
                <div class="hidden lg:flex items-center gap-5 xl:gap-8">
                    <a href="{{ route('home') }}#home" :class="activeSection === 'home' ? 'text-blue-600 dark:text-white' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'" class="relative text-sm font-bold tracking-wide transition-colors group">
                        Home
                        <span :class="activeSection === 'home' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'" class="absolute -bottom-2 left-0 w-full h-[2px] bg-blue-500 rounded-full origin-left transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('home') }}#about" :class="activeSection === 'about' ? 'text-blue-600 dark:text-white' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'" class="relative text-sm font-bold tracking-wide transition-colors group">
                        About
                        <span :class="activeSection === 'about' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'" class="absolute -bottom-2 left-0 w-full h-[2px] bg-blue-500 rounded-full origin-left transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('home') }}#skills" :class="activeSection === 'skills' ? 'text-blue-600 dark:text-white' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'" class="relative text-sm font-bold tracking-wide transition-colors group">
                        Skills
                        <span :class="activeSection === 'skills' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'" class="absolute -bottom-2 left-0 w-full h-[2px] bg-blue-500 rounded-full origin-left transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('home') }}#services" :class="activeSection === 'services' ? 'text-blue-600 dark:text-white' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'" class="relative text-sm font-bold tracking-wide transition-colors group">
                        Services
                        <span :class="activeSection === 'services' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'" class="absolute -bottom-2 left-0 w-full h-[2px] bg-blue-500 rounded-full origin-left transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('projects.index') }}" :class="activeSection === 'portfolio' ? 'text-blue-600 dark:text-white' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'" class="relative text-sm font-bold tracking-wide transition-colors group">
                        Portfolio
                        <span :class="activeSection === 'portfolio' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'" class="absolute -bottom-2 left-0 w-full h-[2px] bg-blue-500 rounded-full origin-left transition-transform duration-300"></span>
                    </a>
                    <a href="{{ route('blogs.index') }}" :class="activeSection === 'journal' ? 'text-blue-600 dark:text-white' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white'" class="relative text-sm font-bold tracking-wide transition-colors group">
                        Journal
                        <span :class="activeSection === 'journal' ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100'" class="absolute -bottom-2 left-0 w-full h-[2px] bg-blue-500 rounded-full origin-left transition-transform duration-300"></span>
                    </a>
                </div>

                <!-- RIGHT SECTION: Theme Toggle + Contact -->
                <div class="hidden md:flex items-center gap-4">
                    <!-- Theme Toggle Button -->
                    <button @click="theme = theme === 'light' ? 'dark' : 'light'" class="p-2.5 rounded-full bg-slate-200 dark:bg-[#111111] text-slate-600 dark:text-slate-400 hover:text-blue-500 dark:hover:text-blue-400 transition-colors border border-transparent dark:border-[#262626]">
                        <!-- Sun Icon (Tampil saat Dark) -->
                        <svg x-show="theme === 'dark'" style="display: none;" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <!-- Moon Icon (Tampil saat Light) -->
                        <svg x-show="theme === 'light'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </button>

                    <a href="{{ route('home') }}#contact" class="px-6 py-2.5 bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] hover:border-blue-500 dark:hover:border-blue-500 text-slate-900 dark:text-white hover:text-blue-500 dark:hover:text-blue-400 text-sm font-bold rounded-full transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] flex items-center gap-2 group">
                        <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                        Contact
                    </a>
                </div>

                <!-- MOBILE MENU BUTTON -->
                <div class="lg:hidden flex items-center gap-4">
                    <button @click="theme = theme === 'light' ? 'dark' : 'light'" class="p-2 text-slate-600 dark:text-slate-400 focus:outline-none">
                        <svg x-show="theme === 'dark'" style="display: none;" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <svg x-show="theme === 'light'" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </button>
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-600 dark:text-slate-400 focus:outline-none p-2">
                        <svg x-show="!mobileMenuOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path></svg>
                        <svg x-show="mobileMenuOpen" class="w-7 h-7" style="display: none;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE MENU DROPDOWN -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-4 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 -translate-y-4 sm:scale-95"
             class="lg:hidden absolute top-full left-0 w-full bg-white/95 dark:bg-[#0a0a0a]/95 backdrop-blur-xl border-b border-slate-200 dark:border-[#262626] shadow-2xl" 
             style="display: none;">
            
            <div class="px-6 py-6 flex flex-col space-y-5">
                <a @click="mobileMenuOpen = false" href="{{ route('home') }}#home" :class="activeSection === 'home' ? 'text-blue-600 dark:text-blue-500' : 'text-slate-900 dark:text-white'" class="text-xl font-bold">Home</a>
                <a @click="mobileMenuOpen = false" href="{{ route('home') }}#about" :class="activeSection === 'about' ? 'text-blue-600 dark:text-blue-500' : 'text-slate-900 dark:text-white'" class="text-xl font-bold">About Me</a>
                <a @click="mobileMenuOpen = false" href="{{ route('home') }}#skills" :class="activeSection === 'skills' ? 'text-blue-600 dark:text-blue-500' : 'text-slate-900 dark:text-white'" class="text-xl font-bold">Skills & Tech</a>
                <a @click="mobileMenuOpen = false" href="{{ route('home') }}#services" :class="activeSection === 'services' ? 'text-blue-600 dark:text-blue-500' : 'text-slate-900 dark:text-white'" class="text-xl font-bold">Services</a>
                <a @click="mobileMenuOpen = false" href="{{ route('projects.index') }}" :class="activeSection === 'portfolio' ? 'text-blue-600 dark:text-blue-500' : 'text-slate-900 dark:text-white'" class="text-xl font-bold">Portfolio</a>
                <a @click="mobileMenuOpen = false" href="{{ route('blogs.index') }}" :class="activeSection === 'journal' ? 'text-blue-600 dark:text-blue-500' : 'text-slate-900 dark:text-white'" class="text-xl font-bold">Journal</a>
                
                <div class="pt-6 mt-2 border-t border-slate-200 dark:border-[#262626]">
                    <a @click="mobileMenuOpen = false" href="{{ route('home') }}#contact" class="flex items-center justify-between px-6 py-4 bg-blue-600 hover:bg-blue-700 rounded-xl text-white font-bold text-lg">
                        Hubungi Saya
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-[#111111] border-t border-slate-200 dark:border-[#262626] py-12 mt-20 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0 text-center md:text-left">
                <a href="{{ route('home') }}" class="text-xl font-bold tracking-wider text-slate-900 dark:text-white mb-2 block">
                    ARFA<span class="text-blue-500">.DEV</span>
                </a>
                <p class="text-slate-500 dark:text-slate-400 text-sm">Building Modern Websites & Digital Solutions</p>
            </div>
            
            <div class="flex space-x-6 text-sm font-medium text-slate-600 dark:text-slate-400">
                <a href="https://github.com/arfacyber" target="_blank" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">GitHub</a>
                <a href="https://instagram.com/ar_fa.354" target="_blank" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Instagram</a>
                <!--<a href="mailto:rizqitammagiari@gmail.com" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Email</a>
                <a href="https://wa.me/6281359111799" target="_blank" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">WhatsApp</a>-->
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-12 mt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-400 dark:text-slate-500">
            <p>&copy; {{ date('Y') }} Arfa Developer. All rights reserved.</p>
            <p class="mt-2 md:mt-0">Built with Laravel & Tailwind CSS</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ once: true, duration: 800, offset: 100, easing: 'ease-out-cubic' });
        });
    </script>
</body>
</html>