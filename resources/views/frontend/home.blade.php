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
                <p>Saya adalah Full-Stack Web Developer yang fokus membangun website dan aplikasi web modern menggunakan Laravel, PHP, MySQL, JavaScript, dan teknologi web modern.</p>
                <p>Saya senang mengubah ide menjadi produk digital yang benar-benar dapat digunakan. Saya terus meningkatkan kemampuan melalui project nyata dan membangun berbagai aplikasi web untuk memperkuat pengalaman development saya.</p>
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
<section id="skills" class="py-24 overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="mb-16" data-aos="fade-up">
            <p class="text-blue-600 dark:text-blue-500 text-sm font-semibold tracking-widest uppercase mb-2">Technical Arsenal</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white transition-colors">Technologies I Work With</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Frontend Card -->
            <div class="bg-white dark:bg-[#111111] rounded-xl p-8 border border-slate-200 dark:border-[#262626] hover:border-blue-400 dark:hover:border-blue-500/50 transition-colors shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-3 mb-8">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">Frontend</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Tailwind CSS</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Blade</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> JavaScript</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Alpine.js</li>
                </ul>
            </div>
            
            <!-- Backend Card -->
            <div class="bg-white dark:bg-[#111111] rounded-xl p-8 border border-slate-200 dark:border-[#262626] hover:border-red-400 dark:hover:border-red-500/50 transition-colors shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-3 mb-8">
                    <svg class="w-6 h-6 text-red-600 dark:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">Backend</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> PHP</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Laravel</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Eloquent ORM</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Auth & RBAC</li>
                </ul>
            </div>

            <!-- Database Card -->
            <div class="bg-white dark:bg-[#111111] rounded-xl p-8 border border-slate-200 dark:border-[#262626] hover:border-yellow-400 dark:hover:border-yellow-500/50 transition-colors shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center gap-3 mb-8">
                    <svg class="w-6 h-6 text-yellow-600 dark:text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">Database</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-yellow-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> MySQL</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-yellow-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Database Design</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-yellow-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Migration</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-yellow-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Optimization</li>
                </ul>
            </div>

            <!-- Dev Tools Card -->
            <div class="bg-white dark:bg-[#111111] rounded-xl p-8 border border-slate-200 dark:border-[#262626] hover:border-slate-400 dark:hover:border-slate-500/50 transition-colors shadow-sm dark:shadow-none" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center gap-3 mb-8">
                    <div class="bg-slate-100 dark:bg-slate-800 p-2 rounded-lg text-slate-600 dark:text-slate-300 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white transition-colors">Dev Tools</h3>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Git & GitHub</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> VS Code & XAMPP</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Vite</li>
                    <li class="flex items-center gap-3 text-slate-600 dark:text-slate-400 text-sm"><svg class="w-5 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> aaPanel</li>
                </ul>
            </div>
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