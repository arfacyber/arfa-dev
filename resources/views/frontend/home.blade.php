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
@php
    $skillCategories = $skillCategories ?? [
        [
            'name' => 'Frontend Development',
            'is_learning' => false,
            'items' => [
                [
                    'name' => 'HTML5',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" fill="#E34F26"/></svg>',
                ],
                [
                    'name' => 'CSS3',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z" fill="#1572B6"/></svg>',
                ],
                [
                    'name' => 'JavaScript',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8 rounded" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect width="24" height="24" rx="3" fill="#F7DF1E"/><path d="M6.75 18.82l1.83-1.11c.35.62.67 1.15 1.44 1.15.73 0 1.2-.29 1.2-1.41v-7.63h2.25v7.66c0 2.32-1.36 3.38-3.35 3.38-1.79 0-2.83-.93-3.37-2.04zm7.97-.24l1.83-1.06c.48.79 1.11 1.37 2.22 1.37.93 0 1.53-.47 1.53-1.11 0-.77-.61-1.04-1.64-1.49l-.56-.24c-1.63-.69-2.71-1.56-2.71-3.39 0-1.69 1.29-2.97 3.3-2.97 1.43 0 2.46.5 3.2 1.81l-1.75 1.12c-.38-.69-.8-.96-1.45-.96-.66 0-1.08.42-1.08.96 0 .67.42.94 1.39 1.36l.56.24c1.91.82 2.99 1.66 2.99 3.54 0 2.03-1.59 3.14-3.73 3.14-2.09 0-3.44-.99-4.1-2.28z" fill="#000000"/></svg>',
                ],
                [
                    'name' => 'Blade',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" stroke="#FF2D20" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                ],
                [
                    'name' => 'Alpine.js',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M18.667 6L24 11.333 18.667 16.667 13.333 11.333 18.667 6z" fill="#77C1D2"/><path d="M5.333 6L16.333 17H5.667L0 11.333 5.333 6z" fill="#2D3441" class="dark:fill-slate-300"/></svg>',
                ],
                [
                    'name' => 'React.js',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="-11.5 -10.23174 23 20.46348" fill="none" aria-hidden="true"><circle cx="0" cy="0" r="2.05" fill="#61DAFB"/><g stroke="#61DAFB" stroke-width="1" fill="none"><ellipse rx="11" ry="4.2"/><ellipse rx="11" ry="4.2" transform="rotate(60)"/><ellipse rx="11" ry="4.2" transform="rotate(120)"/></g></svg>',
                ],
            ],
        ],
        [
            'name' => 'Backend Development',
            'is_learning' => false,
            'items' => [
                [
                    'name' => 'PHP',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><ellipse cx="12" cy="12" rx="11" ry="6.5" fill="#777BB4"/><path d="M6.3 14.2l.8-4.2h1.9c.9 0 1.4.5 1.3 1.3-.1.9-.7 1.5-1.7 1.5h-.9l-.2 1.4H6.3zm1.6-2.2h.6c.4 0 .7-.2.7-.6.1-.4-.1-.6-.6-.6h-.5l-.2 1.2zm3.2 2.2l.8-4.2h1.2l-.3 1.5h1.1l.3-1.5h1.2l-.8 4.2h-1.2l.3-1.7h-1.1l-.3 1.7h-1.2zm4.6 0l.8-4.2h1.9c.9 0 1.4.5 1.3 1.3-.1.9-.7 1.5-1.7 1.5h-.9l-.2 1.4h-1.2zm1.6-2.2h.6c.4 0 .7-.2.7-.6.1-.4-.1-.6-.6-.6h-.5l-.2 1.2z" fill="#FFFFFF"/></svg>',
                ],
                [
                    'name' => 'Laravel',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.337.337 0 01-.066.028c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.97c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.01.015-.018.02-.026.015-.02.03-.04.048-.055.008-.007.018-.01.026-.016.02-.014.041-.029.065-.039l4.323-2.496a.376.376 0 01.375 0L9.575 2.65c.024.01.044.025.065.039.008.006.018.009.026.016.019.015.034.035.048.055.006.008.016.016.021.026.01.019.015.038.023.058.004.012.011.02.014.032.01.032.014.065.014.098v9.652l3.572-2.064V5.53c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.387.387 0 01.024-.058c.005-.01.015-.018.02-.026.014-.02.03-.04.048-.055.008-.007.018-.01.026-.016.02-.014.04-.029.065-.039l4.323-2.496a.376.376 0 01.375 0l4.323 2.496c.023.01.044.025.065.039.008.006.018.009.025.016.019.015.034.035.048.055.006.008.016.016.021.026.01.019.016.038.024.058.003.012.01.02.013.032z" fill="#FF2D20"/></svg>',
                ],
            ],
        ],
        [
            'name' => 'Database',
            'is_learning' => false,
            'items' => [
                [
                    'name' => 'MySQL',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><ellipse cx="12" cy="6" rx="8" ry="3" stroke="#00758F" stroke-width="1.8"/><path d="M4 6v6c0 1.657 3.582 3 8 3s8-1.343 8-3V6" stroke="#00758F" stroke-width="1.8"/><path d="M4 12v6c0 1.657 3.582 3 8 3s8-1.343 8-3v-6" stroke="#F29111" stroke-width="1.8"/></svg>',
                ],
            ],
        ],
        [
            'name' => 'Styling & UI',
            'is_learning' => false,
            'items' => [
                [
                    'name' => 'Tailwind CSS',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z" fill="#06B6D4"/></svg>',
                ],
            ],
        ],
        [
            'name' => 'Development Tools',
            'is_learning' => false,
            'items' => [
                [
                    'name' => 'Git',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M23.546 10.93L13.067.452a1.55 1.55 0 00-2.188 0L8.708 2.627l2.76 2.76a1.838 1.838 0 012.327 2.341l2.658 2.66a1.838 1.838 0 11-1.103 1.035l-2.48-2.48v6.53a1.84 1.84 0 11-1.515-.046V8.79a1.838 1.838 0 01-.998-2.41L7.63 3.652.452 10.83a1.55 1.55 0 000 2.188l10.48 10.48a1.55 1.55 0 002.187 0l10.427-10.38a1.55 1.55 0 000-2.188z" fill="#F05032"/></svg>',
                ],
                [
                    'name' => 'GitHub',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8 text-slate-900 dark:text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>',
                ],
                [
                    'name' => 'Vite',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M22.9 3.6L12.6 22.1c-.2.4-.8.4-1.1 0L1.1 3.6c-.3-.5.2-1 .7-.9l10.2 1.8c.1 0 .2 0 .3 0l10-1.8c.5-.1.9.4.6.9z" fill="#646CFF"/><path d="M16.5 2L9 3.5c-.2 0-.4.2-.4.4l-.5 7.9c0 .3.3.5.5.4l2.1-.5c.3-.1.6.2.5.5l-.6 3.1c-.1.3.2.6.5.5l1.3-.4c.3-.1.6.2.5.5l-1 4.8c-.1.4.4.6.6.3l6.4-9.8c.2-.3-.1-.7-.4-.6l-2.2.4c-.3.1-.6-.2-.5-.5L17 2.5c.1-.3-.2-.6-.5-.5z" fill="#FFD62E"/></svg>',
                ],
                [
                    'name' => 'XAMPP',
                    'learning' => false,
                    'svg' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="4" fill="#FB7A24"/><path d="M7.5 7.5l9 9m0-9l-9 9" stroke="#FFFFFF" stroke-width="2.6" stroke-linecap="round"/></svg>',
                ],
            ],
        ],
        [
            'name' => 'Currently Learning',
            'is_learning' => true,
            'items' => [
                [
                    'name' => 'Next.js',
                    'learning' => true,
                    'svg' => '<svg class="w-8 h-8 text-slate-900 dark:text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10c2.14 0 4.123-.672 5.753-1.815L9.625 9.172v6.953h-1.45V7.2h1.512l8.938 11.97A9.956 9.956 0 0022 12c0-5.523-4.477-10-10-10zm3.825 11.6h-1.45V7.2h1.45v6.4z"/></svg>',
                ],
                [
                    'name' => 'TypeScript',
                    'learning' => true,
                    'svg' => '<svg class="w-8 h-8 rounded" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect width="24" height="24" rx="3" fill="#3178C6"/><path d="M10.45 11.45H7.65v8.05H5.55v-8.05H2.75V9.7h7.7v1.75zm4.1 8.2c-1.55 0-2.75-.45-3.55-1.15l.9-1.5c.65.55 1.55.95 2.55.95.95 0 1.5-.4 1.5-1.05 0-.6-.45-.9-1.7-1.35-1.75-.6-2.85-1.35-2.85-2.9 0-1.65 1.35-2.8 3.45-2.8 1.35 0 2.4.35 3.15.9l-.85 1.5c-.6-.4-1.35-.7-2.25-.7-.9 0-1.4.4-1.4.95 0 .6.5.85 1.75 1.3 1.75.6 2.8 1.4 2.8 2.95 0 1.75-1.4 2.9-3.5 2.9z" fill="#FFFFFF"/></svg>',
                ],
            ],
        ],
    ];
@endphp

<section id="skills" aria-labelledby="skills-heading" class="relative py-24 overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] transition-colors duration-500 motion-reduce:transition-none">
    <!-- Subtle Dark-Futuristic Ambient Glow (Visible in Dark Mode) -->
    <div class="pointer-events-none absolute inset-0 hidden dark:block overflow-hidden" aria-hidden="true">
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[550px] h-[250px] bg-blue-600/5 blur-[120px] rounded-full"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-12">
        
        <!-- Section Header -->
        <div class="max-w-3xl mb-16" data-aos="fade-up">
            <p class="text-blue-600 dark:text-blue-500 text-sm font-semibold tracking-widest uppercase mb-2">
                Technical Arsenal
            </p>
            <h2 id="skills-heading" class="text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white tracking-tight transition-colors">
                Skills &amp; Technologies
            </h2>
            <p class="mt-4 text-base lg:text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                Teknologi yang saya gunakan untuk membangun website dan aplikasi web modern, beserta teknologi yang sedang saya eksplorasi.
            </p>
        </div>

        <!-- 3-Column Desktop / 2-Column Tablet / 1-Column Mobile Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-7">
            @foreach($skillCategories as $index => $category)
                @php
                    $isLearningCard = !empty($category['is_learning']);
                @endphp
                <article class="group rounded-2xl bg-white dark:bg-[#0f1117]/90 border {{ $isLearningCard ? 'border-dashed border-amber-400/60 dark:border-amber-500/30 hover:border-amber-500 dark:hover:border-amber-400/60 dark:hover:shadow-[0_0_30px_-10px_rgba(245,158,11,0.18)]' : 'border-slate-200 dark:border-[#222631] hover:border-blue-500/50 dark:hover:border-blue-500/40 dark:hover:shadow-[0_0_30px_-10px_rgba(59,130,246,0.2)]' }} p-6 sm:p-7 transition-all duration-300 motion-reduce:transition-none hover:shadow-lg flex flex-col justify-between"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($index + 1) * 80 }}">
                    
                    <div>
                        <!-- Card Header: Category Title (Left) & Count Badge (Right) -->
                        <div class="flex items-center justify-between gap-4 pb-4 mb-6 border-b border-slate-100 dark:border-[#1c202a]">
                            <div class="flex items-center gap-2.5">
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white tracking-tight {{ $isLearningCard ? 'group-hover:text-amber-600 dark:group-hover:text-amber-400' : 'group-hover:text-blue-600 dark:group-hover:text-blue-400' }} transition-colors">
                                    {{ $category['name'] }}
                                </h3>
                                @if($isLearningCard)
                                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse" title="Sedang Dipelajari"></span>
                                @endif
                            </div>

                            <span class="inline-flex items-center justify-center min-w-[28px] h-7 px-2.5 rounded-full text-xs font-bold {{ $isLearningCard ? 'bg-amber-500/10 text-amber-600 dark:text-amber-400 border border-amber-500/25' : 'bg-slate-100 dark:bg-[#171b24] text-slate-600 dark:text-slate-400 border border-slate-200/80 dark:border-[#262b38] group-hover:border-blue-500/30 group-hover:text-blue-600 dark:group-hover:text-blue-400' }} transition-colors"
                                  title="{{ count($category['items']) }} Teknologi">
                                {{ count($category['items']) }}
                            </span>
                        </div>

                        <!-- Card Body: Logo Tiles Grid -->
                        <div class="grid {{ $isLearningCard ? 'grid-cols-2' : 'grid-cols-3' }} gap-3 sm:gap-4">
                            @foreach($category['items'] as $tech)
                                @php
                                    $isLearningItem = !empty($tech['learning']);
                                @endphp
                                <div class="group/item flex flex-col items-center text-center">
                                    <!-- Dark Tile Box for Logo -->
                                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl bg-slate-50 dark:bg-[#151821] border {{ $isLearningItem ? 'border-amber-500/30 dark:border-amber-500/25 group-hover/item:border-amber-500/60 dark:group-hover/item:border-amber-400/60' : 'border-slate-200/80 dark:border-[#242936] group-hover/item:border-blue-500/50 dark:group-hover/item:border-blue-500/40' }} group-hover/item:bg-white dark:group-hover/item:bg-[#1a1f2c] group-hover/item:-translate-y-1 motion-reduce:group-hover/item:translate-y-0 transition-all duration-300 flex items-center justify-center shadow-sm dark:shadow-none mb-2.5">
                                        <div class="group-hover/item:scale-110 motion-reduce:group-hover/item:scale-100 transition-transform duration-300 flex items-center justify-center">
                                            {!! $tech['svg'] !!}
                                        </div>
                                    </div>

                                    <!-- Technology Name Below Logo -->
                                    <span class="text-xs font-medium text-slate-700 dark:text-slate-300 group-hover/item:text-slate-900 dark:group-hover/item:text-white transition-colors leading-tight">
                                        {{ $tech['name'] }}
                                    </span>

                                    <!-- Currently Learning Badge (Specifically for Next.js & TypeScript) -->
                                    @if($isLearningItem)
                                        <span class="mt-1.5 inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-500/10 text-amber-700 dark:text-amber-400 border border-amber-500/25 leading-tight">
                                            Currently Learning
                                        </span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                </article>
            @endforeach
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