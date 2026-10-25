@extends('layouts.frontend')

@section('content')

<!-- HERO SECTION -->
<section id="hero" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
    <!-- Glow dinamis -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-blue-500/20 dark:bg-blue-600/10 blur-[100px] rounded-full pointer-events-none transition-colors duration-500"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col-reverse lg:flex-row items-center gap-16">
        <!-- LEFT: Typography -->
        <div class="w-full lg:w-3/5 text-center lg:text-left z-10" data-aos="fade-right" data-aos-duration="1000">
            
            <div class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] mb-8 shadow-sm transition-colors duration-500" data-aos="fade-down" data-aos-delay="200">
                <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                <span class="text-xs font-semibold tracking-widest text-slate-600 dark:text-slate-300 uppercase">Available for Hire</span>
            </div>
            
            <p class="text-sm font-semibold tracking-widest text-blue-600 dark:text-blue-500 uppercase mb-3" data-aos="fade-up" data-aos-delay="300">Full-Stack Web Developer</p>
            
            <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 dark:text-white leading-tight mb-4 tracking-tight transition-colors duration-500" data-aos="fade-up" data-aos-delay="400">
                Hi, I'm Arfa.<br>
                <span class="text-3xl lg:text-4xl text-slate-500 dark:text-slate-400 font-medium mt-2 block">Muhammad Arfadhia Rizqitamma Giari</span>
            </h1>
            
            <h2 class="text-xl lg:text-2xl font-medium text-slate-800 dark:text-white mb-6 transition-colors duration-500" data-aos="fade-up" data-aos-delay="500">
                Building Modern Websites & Digital Solutions
            </h2>
            
            <p class="text-slate-600 dark:text-slate-400 text-base lg:text-lg max-w-2xl mx-auto lg:mx-0 mb-10 leading-relaxed transition-colors duration-500" data-aos="fade-up" data-aos-delay="600">
                Saya membangun website dan aplikasi web modern yang fokus pada clean code, responsive UI/UX, performance, dan security. Merubah ide menjadi <i>real-world web applications</i>.
            </p>
            
            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-5" data-aos="fade-up" data-aos-delay="700">
                <a href="#projects" class="w-full sm:w-auto px-8 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition-all duration-300 text-center shadow-[0_0_15px_rgba(37,99,235,0.3)]">
                    View My Work
                </a>
                <a href="#contact" class="w-full sm:w-auto px-8 py-3.5 bg-white dark:bg-[#111111] border border-slate-300 dark:border-[#262626] text-slate-700 dark:text-white font-medium rounded-lg hover:border-blue-500 hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-300 text-center">
                    Let's Work Together
                </a>
            </div>
        </div>

        <!-- RIGHT: Photo -->
        <div class="w-full lg:w-2/5 flex justify-center z-10" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
            <div class="relative w-64 h-80 lg:w-[340px] lg:h-[420px] group">
                <div class="absolute inset-0 border border-blue-500/30 rounded-2xl translate-x-5 translate-y-5 transition-transform duration-500 group-hover:translate-x-3 group-hover:translate-y-3"></div>
                <div class="absolute inset-0 bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] rounded-2xl overflow-hidden shadow-2xl transition-colors duration-500">
                    <img src="{{ asset('images/arfa-photo.png') }}" alt="Muhammad Arfadhia Rizqitamma Giari" class="w-full h-full object-cover filter grayscale hover:grayscale-0 transition-all duration-700">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="py-24 bg-white/50 dark:bg-[#111111]/30 border-y border-slate-200 dark:border-[#262626]/50 overflow-hidden transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="mb-16" data-aos="fade-up">
            <p class="text-blue-600 dark:text-blue-500 text-sm font-semibold tracking-widest uppercase mb-2">About Me</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white transition-colors">Who I Am</h2>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed space-y-6 transition-colors" data-aos="fade-right" data-aos-delay="100">
                <p>
                    Saya adalah Full-Stack Web Developer yang berfokus pada pengembangan website dan aplikasi web menggunakan Laravel, PHP, MySQL, JavaScript, dan teknologi web modern.
                </p>
                <p>
                    Saya senang mengubah ide menjadi produk digital yang fungsional, responsif, dan mudah digunakan. Melalui berbagai proyek nyata, saya terus mengembangkan kemampuan dalam membangun aplikasi web, memecahkan masalah, serta mempelajari praktik pengembangan yang lebih baik.
                </p>
                <p>
                    Bagi saya, setiap proyek adalah kesempatan untuk belajar, meningkatkan keterampilan, dan menciptakan solusi digital yang bermanfaat.
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Capability 1 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-blue-500 dark:hover:border-blue-500/50 transition-colors duration-300 group shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6 bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-blue-500 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Struktur Laravel yang terorganisir, Eloquent ORM, Blade, dan pemisahan logic yang jelas.</p>
                </div>
                <!-- Capability 2 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-purple-500 dark:hover:border-purple-500/50 transition-colors duration-300 group shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6 bg-purple-50 dark:bg-purple-500/10 text-purple-600 dark:text-purple-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Efisiensi database dan optimasi query untuk menjaga aplikasi tetap responsif.</p>
                </div>
                <!-- Capability 3 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-green-500 dark:hover:border-green-500/50 transition-colors duration-300 group shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6 bg-green-50 dark:bg-green-500/10 text-green-600 dark:text-green-500 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Membangun antarmuka modern yang nyaman digunakan pada berbagai ukuran layar.</p>
                </div>
                <!-- Capability 4 -->
                <div class="p-8 rounded-2xl bg-white dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-orange-500 dark:hover:border-orange-500/50 transition-colors duration-300 group shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6 bg-orange-50 dark:bg-orange-500/10 text-orange-600 dark:text-orange-400 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">Menerapkan keamanan seperti CSRF, validasi, dan pembatasan akses (RBAC).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills" aria-labelledby="skills-heading" class="py-24 overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] transition-colors duration-500 motion-reduce:transition-none">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <!-- Section Header -->
        <div class="max-w-3xl mb-16" data-aos="fade-up">
            <p class="text-blue-600 dark:text-blue-500 text-sm font-semibold tracking-widest uppercase mb-2">
                MY TOOLKIT
            </p>
            <h2 id="skills-heading" class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white tracking-tight transition-colors">
                Skills &amp; Technologies
            </h2>
            <p class="mt-4 text-base lg:text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                Teknologi yang saya gunakan untuk membangun website dan aplikasi web melalui proyek nyata, dari antarmuka pengguna hingga backend dan database.
            </p>
        </div>

        <!-- Skills Grid (1 col on mobile, 2 cols on tablet & desktop for optimal badge readability) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

            <!-- A. Frontend Development -->
            <article tabindex="0" class="group flex flex-col justify-between rounded-2xl bg-white dark:bg-[#111111] p-7 lg:p-8 border border-slate-200 dark:border-[#262626] hover:border-blue-500/60 dark:hover:border-blue-500/50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 transition-all duration-300 motion-reduce:transition-none hover:-translate-y-0.5 motion-reduce:hover:translate-y-0 shadow-sm hover:shadow-md dark:shadow-none" data-aos="fade-up" data-aos-delay="100">
                <div>
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 bg-blue-50 dark:bg-blue-500/10 text-blue-600 dark:text-blue-400 border border-blue-100 dark:border-blue-500/20 group-hover:scale-105 motion-reduce:group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">
                                Frontend Development
                            </h3>
                            <p class="mt-1.5 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                Membangun antarmuka web yang responsif, interaktif, dan mudah digunakan.
                            </p>
                        </div>
                    </div>
                </div>

                <ul role="list" aria-label="Teknologi Frontend Development" class="flex flex-wrap gap-2.5 pt-6 mt-6 border-t border-slate-100 dark:border-[#1f1f1f]">
                    <!-- HTML -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-orange-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        <span>HTML</span>
                    </li>
                    <!-- CSS -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-blue-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                        <span>CSS</span>
                    </li>
                    <!-- JavaScript -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-yellow-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span>JavaScript</span>
                    </li>
                    <!-- Blade -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-red-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span>Blade</span>
                    </li>
                    <!-- Tailwind CSS -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-cyan-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        <span>Tailwind CSS</span>
                    </li>
                    <!-- Alpine.js -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-sky-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span>Alpine.js</span>
                    </li>
                </ul>
            </article>

            <!-- B. Backend Development -->
            <article tabindex="0" class="group flex flex-col justify-between rounded-2xl bg-white dark:bg-[#111111] p-7 lg:p-8 border border-slate-200 dark:border-[#262626] hover:border-red-500/60 dark:hover:border-red-500/50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 transition-all duration-300 motion-reduce:transition-none hover:-translate-y-0.5 motion-reduce:hover:translate-y-0 shadow-sm hover:shadow-md dark:shadow-none" data-aos="fade-up" data-aos-delay="200">
                <div>
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 bg-red-50 dark:bg-red-500/10 text-red-600 dark:text-red-400 border border-red-100 dark:border-red-500/20 group-hover:scale-105 motion-reduce:group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">
                                Backend Development
                            </h3>
                            <p class="mt-1.5 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                Mengembangkan logika aplikasi, pengelolaan request, autentikasi, dan pembatasan akses pengguna.
                            </p>
                        </div>
                    </div>
                </div>

                <ul role="list" aria-label="Teknologi Backend Development" class="flex flex-wrap gap-2.5 pt-6 mt-6 border-t border-slate-100 dark:border-[#1f1f1f]">
                    <!-- PHP -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-indigo-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        <span>PHP</span>
                    </li>
                    <!-- Laravel -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-red-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        <span>Laravel</span>
                    </li>
                    <!-- Eloquent ORM -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-rose-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                        <span>Eloquent ORM</span>
                    </li>
                    <!-- Authentication & RBAC -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-emerald-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        <span>Authentication &amp; Role-Based Access Control (RBAC)</span>
                    </li>
                </ul>
            </article>

            <!-- C. Database -->
            <article tabindex="0" class="group flex flex-col justify-between rounded-2xl bg-white dark:bg-[#111111] p-7 lg:p-8 border border-slate-200 dark:border-[#262626] hover:border-amber-500/60 dark:hover:border-amber-500/50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 transition-all duration-300 motion-reduce:transition-none hover:-translate-y-0.5 motion-reduce:hover:translate-y-0 shadow-sm hover:shadow-md dark:shadow-none" data-aos="fade-up" data-aos-delay="300">
                <div>
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 bg-amber-50 dark:bg-amber-500/10 text-amber-600 dark:text-amber-400 border border-amber-100 dark:border-amber-500/20 group-hover:scale-105 motion-reduce:group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">
                                Database
                            </h3>
                            <p class="mt-1.5 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                Mengelola struktur dan relasi data untuk mendukung kebutuhan aplikasi web.
                            </p>
                        </div>
                    </div>
                </div>

                <ul role="list" aria-label="Teknologi Database" class="flex flex-wrap gap-2.5 pt-6 mt-6 border-t border-slate-100 dark:border-[#1f1f1f]">
                    <!-- MySQL -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-amber-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                        </svg>
                        <span>MySQL</span>
                    </li>
                    <!-- Database Migrations -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-blue-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        <span>Database Migrations</span>
                    </li>
                    <!-- Relational Data Modeling -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-purple-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                        </svg>
                        <span>Relational Data Modeling</span>
                    </li>
                </ul>
            </article>

            <!-- D. Development Tools -->
            <article tabindex="0" class="group flex flex-col justify-between rounded-2xl bg-white dark:bg-[#111111] p-7 lg:p-8 border border-slate-200 dark:border-[#262626] hover:border-emerald-500/60 dark:hover:border-emerald-500/50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 transition-all duration-300 motion-reduce:transition-none hover:-translate-y-0.5 motion-reduce:hover:translate-y-0 shadow-sm hover:shadow-md dark:shadow-none" data-aos="fade-up" data-aos-delay="400">
                <div>
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center shrink-0 bg-emerald-50 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-100 dark:border-emerald-500/20 group-hover:scale-105 motion-reduce:group-hover:scale-100 transition-transform duration-300">
                            <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">
                                Development Tools
                            </h3>
                            <p class="mt-1.5 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                Mendukung pengembangan lokal, pengelolaan kode sumber, dan workflow proyek web.
                            </p>
                        </div>
                    </div>
                </div>

                <ul role="list" aria-label="Development Tools" class="flex flex-wrap gap-2.5 pt-6 mt-6 border-t border-slate-100 dark:border-[#1f1f1f]">
                    <!-- Git -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-orange-600 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                        </svg>
                        <span>Git</span>
                    </li>
                    <!-- GitHub -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-slate-700 dark:text-slate-300 shrink-0" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                        </svg>
                        <span>GitHub</span>
                    </li>
                    <!-- Vite -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-purple-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span>Vite</span>
                    </li>
                    <!-- XAMPP -->
                    <li class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg text-xs sm:text-sm font-medium bg-slate-50 dark:bg-[#0a0a0a] text-slate-700 dark:text-slate-300 border border-slate-200/80 dark:border-[#262626] group-hover:border-slate-300 dark:group-hover:border-[#333333] transition-colors">
                        <svg class="w-4 h-4 text-orange-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path>
                        </svg>
                        <span>XAMPP</span>
                    </li>
                </ul>
            </article>

        </div>
    </div>
</section>

<!-- PROJECTS SECTION -->
<section id="projects" class="py-24 bg-white dark:bg-[#0a0a0a] border-y border-slate-200 dark:border-[#262626] overflow-hidden transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div data-aos="fade-right">
                <p class="text-blue-600 dark:text-blue-500 text-sm font-semibold tracking-widest uppercase mb-2">Selected Work</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white transition-colors">Projects I've Built</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-500 transition-colors" data-aos="fade-left">View All Projects &rarr;</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            @forelse($projects as $project)
            <div class="group bg-slate-50 dark:bg-[#111111] rounded-2xl border border-slate-200 dark:border-[#262626] overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 flex flex-col shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <a href="{{ route('project.show', $project->slug) }}" class="block h-64 md:h-72 overflow-hidden relative border-b border-slate-200 dark:border-[#262626]">
                    <div class="absolute inset-0 bg-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                    <img src="{{ $project->thumbnail ? asset('storage/'.$project->thumbnail) : asset('images/default-project.jpg') }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </a>
                
                <div class="p-8 flex flex-col flex-grow">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-1.5 bg-blue-50 dark:bg-blue-500/10 border border-blue-200 dark:border-blue-500/20 text-blue-600 dark:text-blue-400 text-xs font-semibold rounded-full transition-colors">{{ $project->category }}</span>
                    </div>
                    
                    <a href="{{ route('project.show', $project->slug) }}" class="text-2xl font-bold text-slate-900 dark:text-white mb-4 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        {{ $project->title }}
                    </a>
                    
                    <p class="text-slate-600 dark:text-slate-400 text-base mb-8 line-clamp-3 leading-relaxed transition-colors">{{ $project->short_description }}</p>
                    
                    <div class="flex items-center justify-between mt-auto">
                        @if($project->live_demo_url)
                        <a href="{{ $project->live_demo_url }}" target="_blank" class="text-sm font-bold text-slate-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-500 transition-colors">Live Demo &nearr;</a>
                        @else
                        <span></span>
                        @endif
                        <a href="{{ route('project.show', $project->slug) }}" class="px-5 py-2 bg-slate-200 hover:bg-slate-300 dark:bg-[#262626] dark:hover:bg-[#333333] text-slate-800 dark:text-white text-sm font-medium rounded-lg transition-colors">Case Study &rarr;</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 text-center border border-dashed border-slate-300 dark:border-[#262626] rounded-xl" data-aos="fade-in">
                <p class="text-slate-500 dark:text-slate-400">Projects will appear here once added from the CMS.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="py-24 overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="mb-16 text-center" data-aos="fade-up">
            <p class="text-blue-600 dark:text-blue-500 text-sm font-semibold tracking-widest uppercase mb-2">What I Can Do</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white transition-colors">Services</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Service 1 -->
            <div class="p-8 rounded-2xl bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] hover:border-blue-400 dark:hover:border-blue-500/50 transition-colors duration-300 text-center shadow-sm dark:shadow-none" data-aos="zoom-in" data-aos-delay="100">
                <div class="w-12 h-12 mx-auto bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] rounded-full flex items-center justify-center mb-6 transition-colors">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3 transition-colors">Business Website</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed transition-colors">Website profesional untuk bisnis, brand, organisasi, atau personal brand.</p>
            </div>

            <!-- Service 2 -->
            <div class="p-8 rounded-2xl bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] hover:border-blue-400 dark:hover:border-blue-500/50 transition-colors duration-300 text-center shadow-sm dark:shadow-none" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-12 h-12 mx-auto bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] rounded-full flex items-center justify-center mb-6 transition-colors">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3 transition-colors">Custom Web Application</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed transition-colors">Aplikasi web custom yang dibuat sesuai kebutuhan dan workflow spesifik.</p>
            </div>

            <!-- Service 3 -->
            <div class="p-8 rounded-2xl bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] hover:border-blue-400 dark:hover:border-blue-500/50 transition-colors duration-300 text-center shadow-sm dark:shadow-none" data-aos="zoom-in" data-aos-delay="300">
                <div class="w-12 h-12 mx-auto bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] rounded-full flex items-center justify-center mb-6 transition-colors">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3 transition-colors">Website Maintenance</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed transition-colors">Maintenance, improvement, bug fixing, optimization, dan pengembangan fitur.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-24 overflow-hidden bg-white dark:bg-[#0a0a0a] transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        
        @if(session('success'))
        <div class="mb-8 p-4 rounded-lg bg-green-50 dark:bg-green-500/10 border border-green-200 dark:border-green-500/50 text-green-700 dark:text-green-400 text-sm text-center transition-colors" data-aos="fade-down">
            {{ session('success') }}
        </div>
        @endif
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <!-- Left Column: Info -->
            <div data-aos="fade-right">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-[2px] bg-blue-600"></div>
                    <h2 class="text-4xl font-bold text-slate-900 dark:text-white tracking-tight transition-colors">Get In Touch</h2>
                </div>
                <p class="text-slate-600 dark:text-slate-400 mb-10 leading-relaxed text-lg max-w-md transition-colors">
                    Punya ide proyek, kebutuhan pembuatan website bisnis, atau sekadar ingin berdiskusi tentang teknologi web? Jangan ragu untuk menghubungi saya.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-center gap-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-14 h-14 rounded-xl border border-slate-200 dark:border-[#262626] bg-slate-50 dark:bg-[#111111] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-6 h-6 text-blue-600 dark:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold tracking-widest text-slate-500 dark:text-slate-400 mb-1 uppercase">Email</p>
                            <a href="mailto:rizqitammagiari@gmail.com" class="text-slate-900 dark:text-white font-medium hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                rizqitammagiari@gmail.com
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-14 h-14 rounded-xl border border-slate-200 dark:border-[#262626] bg-slate-50 dark:bg-[#111111] flex items-center justify-center shrink-0 transition-colors">
                            <svg class="w-6 h-6 text-green-600 dark:text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold tracking-widest text-slate-500 dark:text-slate-400 mb-1 uppercase">WhatsApp</p>
                            <a href="https://wa.me/6281359111799?text=Halo%20Mas Arfa,%20saya%20tertarik%20untuk%20berdiskusi%20mengenai%20pembuatan%20website.%20Bisa%20luangkan%20waktu?" target="_blank" class="text-slate-900 dark:text-white font-medium hover:text-blue-600 dark:hover:text-blue-500 transition-colors">
                                +62 813-5911-1799
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Form -->
            <div data-aos="fade-left" data-aos-delay="200">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6 bg-slate-50 dark:bg-[#111111] border border-slate-200 dark:border-[#262626] p-8 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none transition-colors duration-500">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-400 mb-2 transition-colors">Nama Lengkap</label>
                            <input type="text" name="name" required class="w-full bg-white dark:bg-[#0a0a0a] border border-slate-300 dark:border-[#262626] rounded-lg px-4 py-3 text-slate-900 dark:text-white focus:outline-none focus:border-blue-500 transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-400 mb-2 transition-colors">Email Address</label>
                            <input type="email" name="email" required class="w-full bg-white dark:bg-[#0a0a0a] border border-slate-300 dark:border-[#262626] rounded-lg px-4 py-3 text-slate-900 dark:text-white focus:outline-none focus:border-blue-500 transition-colors">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-400 mb-2 transition-colors">Pesan</label>
                        <textarea name="message" rows="5" required class="w-full bg-white dark:bg-[#0a0a0a] border border-slate-300 dark:border-[#262626] rounded-lg px-4 py-3 text-slate-900 dark:text-white focus:outline-none focus:border-blue-500 transition-colors resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-lg transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<!-- Script SweetAlert2 untuk Pop-Up -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('wa_url'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const isDark = document.documentElement.classList.contains('dark');
        Swal.fire({
            title: 'Pesan Tersimpan!',
            text: 'Meneruskan ke WhatsApp Anda...',
            icon: 'success',
            confirmButtonText: 'Lanjutkan ke WA',
            confirmButtonColor: '#2563eb',
            background: isDark ? '#111111' : '#ffffff',
            color: isDark ? '#ffffff' : '#0f172a',
            allowOutsideClick: false
        }).then((result) => {
            if (result.isConfirmed) {
                window.open('{!! session('wa_url') !!}', '_blank');
            }
        });
    });
</script>
@endif
@endsection