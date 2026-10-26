@extends('layouts.frontend')

@section('content')
@php
    // Deteksi apakah proyek yang sedang dibuka adalah EcoGuard
    $isEcoGuard = str_contains(strtolower($project->slug ?? ''), 'ecoguard') || str_contains(strtolower($project->title ?? ''), 'ecoguard');

    // Pastikan URL Live Demo EcoGuard mengarah ke subdomain resmi jika kosong/belum sesuai
    $liveDemoUrl = $isEcoGuard
        ? ($project->live_demo_url ?: 'https://ecoguard.wawansugianto.my.id')
        : $project->live_demo_url;

    // Pengecekan aman untuk tipe data screenshots & technologies dari CMS
    $screenshotArray = is_string($project->screenshots) ? json_decode($project->screenshots, true) : $project->screenshots;
    $ screenshotArray = is_array($screenshotArray) ? array_values(array_filter($screenshotArray, fn($item) => $item && $item !== 'false')) : [];

    $techArray = is_string($project->technologies) ? json_decode($project->technologies, true) : $project->technologies;
    if ($isEcoGuard && (!is_array($techArray) || count($techArray) === 0)) {
        $techArray = ['Laravel', 'PHP', 'MySQL', 'Blade', 'Tailwind CSS', 'JavaScript', 'Vite'];
    }

    // Data Fitur Utama EcoGuard (Mudah disesuaikan dengan modul aktif)
    $ecoGuardFeatures = [
        [
            'title' => 'Wildlife Companion: Harimau Sumatera',
            'desc' => 'Pendamping virtual interaktif bertema satwa langka yang merespons progres aktivitas pengguna di dalam platform.',
            'color' => 'amber',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>',
        ],
        [
            'title' => 'Daily Quests',
            'desc' => 'Sistem misi harian terstruktur yang mendorong pengguna menyelesaikan tantangan bertema lingkungan secara berkala.',
            'color' => 'blue',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>',
        ],
        [
            'title' => 'Eco-Quiz',
            'desc' => 'Kuis edukatif interaktif seputar wawasan lingkungan, konservasi alam, dan pengelolaan limbah dengan umpan balik langsung.',
            'color' => 'purple',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        ],
        [
            'title' => 'Simulasi Aksi: Sort Waste, Forest Guard & Ocean Clean',
            'desc' => 'Modul aktivitas tematik untuk mengenalkan pemilahan sampah, perlindungan kawasan hutan, dan kebersihan ekosistem laut.',
            'color' => 'emerald',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        ],
        [
            'title' => 'World Boss: Monster Sampah Plastik',
            'desc' => 'Tantangan kolektif bergaya RPG di mana kontribusi poin aktivitas pengguna digabungkan untuk mengalahkan bos pencemar lingkungan.',
            'color' => 'rose',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
        ],
        [
            'title' => 'Indonesia Reforestation Goal',
            'desc' => 'Visualisasi target penghijauan bersama yang menampilkan progres akumulasi kontribusi pengguna di dalam platform.',
            'color' => 'green',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>',
        ],
        [
            'title' => 'Supply Depot Shop',
            'desc' => 'Toko penukaran poin di dalam aplikasi untuk memperoleh item pendukung companion maupun atribut profil pengguna.',
            'color' => 'cyan',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>',
        ],
        [
            'title' => 'Leaderboard, ID Card & Badge Pengguna',
            'desc' => 'Papan peringkat kompetitif serta kartu identitas digital yang menampilkan level, badge pencapaian, dan riwayat kontribusi pengguna.',
            'color' => 'indigo',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>',
        ],
    ];

    // Caption kontekstual untuk screenshot EcoGuard
    $ecoGuardCaptions = [
        0 => 'Dashboard utama EcoGuard dengan ringkasan progres, status misi, dan navigasi fitur interaktif.',
        1 => 'Tampilan Wildlife Companion (Harimau Sumatera) beserta indikator status dan interaksi pengguna.',
        2 => 'Halaman Daily Quests dan Eco-Quiz untuk aktivitas edukasi lingkungan berbasis gamifikasi.',
        3 => 'Papan peringkat (Leaderboard), profil ID Card, dan pencapaian komunitas EcoGuard.',
    ];
@endphp

<!-- HEADER SECTION -->
<section class="pt-32 pb-16 bg-slate-50 dark:bg-[#0a0a0a] border-b border-slate-200 dark:border-[#262626] transition-colors duration-500">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        <!-- Back Button -->
        <a href="{{ route('projects.index') }}" class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-500 transition-colors text-sm font-medium mb-10 inline-flex items-center gap-2 group focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded-lg">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali ke Portfolio
        </a>
        
        <!-- Category & Date Badge -->
        <div class="flex flex-wrap items-center gap-3 mb-6">
            <span class="px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 text-xs font-bold rounded-full uppercase tracking-wider">
                {{ $project->category }}
            </span>
            @if($isEcoGuard)
                <span class="px-3.5 py-1.5 bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 dark:text-emerald-400 text-xs font-semibold rounded-full inline-flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    Interactive Gamified Web Platform
                </span>
            @endif
            @if($project->created_at)
                <span class="text-sm font-medium text-slate-500 dark:text-slate-400">
                    • {{ $project->created_at->format('M Y') }}
                </span>
            @endif
        </div>

        <!-- Title & Short Description -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-slate-900 dark:text-white mb-6 tracking-tight leading-tight">
            {{ $project->title }}
        </h1>
        <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-400 max-w-3xl leading-relaxed">
            @if($isEcoGuard && empty($project->short_description))
                Platform web interaktif bertema lingkungan yang menggabungkan gamifikasi, edukasi, dan kepedulian terhadap satwa liar.
            @else
                {{ $project->short_description }}
            @endif
        </p>
    </div>
</section>

<!-- CONTENT SECTION -->
<section class="py-16 lg:py-24 bg-white dark:bg-[#111111] transition-colors duration-500" x-data="{ activeImage: null, activeCaption: '' }">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
            <!-- LEFT COLUMN: The Case Study -->
            <div class="lg:col-span-2 space-y-16">
                
                <!-- 1. PROJECT OVERVIEW -->
                @if($project->overview || $isEcoGuard)
                <div class="p-7 sm:p-8 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-2 h-6 bg-blue-500 rounded-full"></span>
                        <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Project Overview</h2>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 text-base sm:text-lg leading-relaxed whitespace-pre-line">{{ $isEcoGuard ? ($project->overview ?: "EcoGuard adalah platform web interaktif bertema lingkungan yang menggabungkan gamifikasi, edukasi, dan kepedulian terhadap satwa liar. Platform ini dirancang untuk membuat aktivitas menjaga lingkungan terasa lebih menarik melalui berbagai fitur interaktif.") : $project->overview }}</p>
                </div>
                @endif

                <!-- 2. PROBLEM & SOLUTION -->
                @if($project->challenge || $project->solution || $isEcoGuard)
                <div>
                    <div class="mb-8">
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Context &amp; Approach</p>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Problem &amp; Solution</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- The Problem / Challenge -->
                        @if($project->challenge || $isEcoGuard)
                        <div class="p-7 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex flex-col">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-500 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">The Problem</h3>
                            </div>

                            @if($isEcoGuard)
                                <ul class="space-y-3.5 text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2.5 shrink-0"></span>
                                        <span>Edukasi lingkungan dapat terasa monoton jika hanya disampaikan satu arah sebagai artikel atau informasi statis.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2.5 shrink-0"></span>
                                        <span>Pengguna membutuhkan pengalaman interaktif dan umpan balik visual untuk menjaga keterlibatan saat mempelajari isu lingkungan.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2.5 shrink-0"></span>
                                        <span>Informasi mengenai konservasi satwa liar dan aktivitas kepedulian lingkungan perlu dikemas dengan pendekatan yang lebih menarik.</span>
                                    </li>
                                </ul>
                            @else
                                <p class="text-slate-700 dark:text-slate-300 text-base leading-relaxed whitespace-pre-line">{{ $project->challenge }}</p>
                            @endif
                        </div>
                        @endif

                        <!-- The Solution -->
                        @if($project->solution || $isEcoGuard)
                        <div class="p-7 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex flex-col">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-500 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">The Solution</h3>
                            </div>

                            @if($isEcoGuard)
                                <ul class="space-y-3.5 text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Menggabungkan edukasi dan aktivitas bertema lingkungan dengan mekanisme gamifikasi berbasis web.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Menyediakan misi harian (Daily Quests), Eco-Quiz, serta simulasi aktivitas lingkungan yang interaktif.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Mengimplementasikan sistem progres pengguna, perolehan poin/reward, Supply Depot Shop, dan Leaderboard.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Menghadirkan fitur Wildlife Companion (Harimau Sumatera) dan target penghijauan kolektif untuk memvisualisasikan progres di dalam aplikasi.</span>
                                    </li>
                                </ul>
                            @else
                                <p class="text-slate-700 dark:text-slate-300 text-base leading-relaxed whitespace-pre-line">{{ $project->solution }}</p>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
                @endif

                <!-- 3. KEY FEATURES (KHUSUS ECOGUARD) -->
                @if($isEcoGuard)
                <div>
                    <div class="mb-8">
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Platform Capabilities</p>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Key Features</h2>
                        <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Fitur-fitur utama yang diimplementasikan di dalam aplikasi EcoGuard untuk mendukung pengalaman interaktif pengguna.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        @foreach($ecoGuardFeatures as $feature)
                        <div class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-blue-500/50 dark:hover:border-blue-500/40 transition-colors flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $feature['icon'] !!}</svg>
                                </div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">
                                    {{ $feature['title'] }}
                                </h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    {{ $feature['desc'] }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- 4. TECHNICAL HIGHLIGHTS (KHUSUS ECOGUARD) -->
                @if($isEcoGuard)
                <div>
                    <div class="mb-8">
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Under The Hood</p>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Technical Highlights</h2>
                        <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Pendekatan teknis yang diterapkan dalam membangun arsitektur dan logika aplikasi EcoGuard.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-red-500/10 border border-red-500/20 text-red-500 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">Arsitektur MVC Laravel &amp; Routing Terstruktur</h3>
                                <p class="mt-1 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    Menggunakan pola Model-View-Controller (MVC) pada Laravel untuk memisahkan logika bisnis gamifikasi, pemrosesan request di controller, dan perenderan antarmuka berbasis Blade.
                                </p>
                            </div>
                        </div>

                        <div class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-500 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">Pengelolaan Database Relasional &amp; Logika Gamifikasi</h3>
                                <p class="mt-1 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    Mengelola penyimpanan data pengguna, riwayat penyelesaian quest, perhitungan skor/poin, inventaris item, serta pengurutan Leaderboard secara dinamis menggunakan MySQL dan Eloquent ORM.
                                </p>
                            </div>
                        </div>

                        <div class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/20 text-cyan-500 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">Antarmuka Interaktif &amp; Responsif</h3>
                                <p class="mt-1 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    Mengombinasikan komponen Blade, utilitas Tailwind CSS, dan JavaScript yang dibundle melalui Vite untuk menyajikan visualisasi progres, kuis, dan elemen interaktif yang responsif di berbagai ukuran layar.
                                </p>
                            </div>
                        </div>

                        <div class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-500 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">Autentikasi Pengguna &amp; Validasi Request</h3>
                                <p class="mt-1 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    Menerapkan sistem autentikasi sesi pengguna, proteksi CSRF bawaan Laravel pada setiap pengiriman form aktivitas, serta validasi input di sisi server.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <!-- 5. SCREENSHOTS & VISUAL SHOWCASE -->
                @if(count($screenshotArray) > 0 || !empty($project->thumbnail))
                <div class="pt-4">
                    <div class="mb-8">
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Visual Preview</p>
                        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Screenshots &amp; Showcase</h2>
                        <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Tampilan antarmuka asli dari implementasi proyek {{ $project->title }}. Klik pada gambar untuk memperbesar.
                        </p>
                    </div>

                    @if(count($screenshotArray) > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($screenshotArray as $index => $screenshot)
                                @php
                                    $imgUrl = asset('storage/' . $screenshot);
                                    $caption = $isEcoGuard
                                        ? ($ecoGuardCaptions[$index] ?? 'Tampilan fitur aplikasi EcoGuard — Layar ' . ($index + 1))
                                        : ('Tampilan antarmuka ' . $project->title . ' — Layar ' . ($index + 1));
                                @endphp
                                <figure class="rounded-2xl overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-blue-500/50 transition-all duration-300 shadow-sm flex flex-col group">
                                    <button type="button"
                                            @click="activeImage = '{{ $imgUrl }}'; activeCaption = '{{ addslashes($caption) }}'"
                                            class="relative overflow-hidden aspect-video w-full bg-[#0a0a0a] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 cursor-zoom-in">
                                        <img src="{{ $imgUrl }}"
                                             alt="{{ $caption }}"
                                             loading="lazy"
                                             class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors flex items-center justify-center">
                                            <span class="opacity-0 group-hover:opacity-100 transition-opacity px-3 py-1.5 rounded-lg bg-black/75 text-white text-xs font-medium inline-flex items-center gap-1.5">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                                Perbesar
                                            </span>
                                        </div>
                                    </button>
                                    <figcaption class="p-4 text-xs sm:text-sm text-slate-600 dark:text-slate-400 border-t border-slate-200/70 dark:border-[#262626] leading-relaxed">
                                        {{ $caption }}
                                    </figcaption>
                                </figure>
                            @endforeach
                        </div>
                    @elseif(!empty($project->thumbnail))
                        @php
                            $thumbUrl = asset('storage/' . $project->thumbnail);
                            $thumbCaption = 'Tampilan utama aplikasi ' . $project->title;
                        @endphp
                        <figure class="rounded-2xl overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] shadow-sm">
                            <button type="button"
                                    @click="activeImage = '{{ $thumbUrl }}'; activeCaption = '{{ addslashes($thumbCaption) }}'"
                                    class="relative overflow-hidden aspect-video w-full bg-[#0a0a0a] cursor-zoom-in block">
                                <img src="{{ $thumbUrl }}" alt="{{ $thumbCaption }}" class="w-full h-full object-cover object-top">
                            </button>
                            <figcaption class="p-4 text-xs sm:text-sm text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-[#262626]">
                                {{ $thumbCaption }}
                            </figcaption>
                        </figure>
                    @endif
                </div>
                @endif

            </div>

            <!-- RIGHT COLUMN: Actions & Technologies -->
            <div class="lg:col-span-1">
                <div class="sticky top-28 space-y-8">
                    
                    <!-- Action Buttons Card -->
                    <div class="p-6 sm:p-7 bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] rounded-2xl flex flex-col gap-4 shadow-sm dark:shadow-none">
                        <h3 class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest mb-1">
                            Project Access
                        </h3>

                        @if($liveDemoUrl)
                            <a href="{{ $liveDemoUrl }}" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 px-5 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl transition-all duration-200 text-center flex items-center justify-center gap-2 shadow-lg shadow-blue-600/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                                <span>Visit Live Demo</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        @endif
                        
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 px-5 bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 dark:text-slate-300 font-bold rounded-xl transition-colors text-center flex items-center justify-center gap-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                                <span>View Source Code</span>
                            </a>
                        @else
                            <div class="w-full py-3.5 px-5 bg-slate-100 dark:bg-[#111111] border border-slate-200 dark:border-[#262626] text-slate-500 font-semibold rounded-xl text-center flex items-center justify-center gap-2 select-none" title="Kode sumber proyek ini bersifat privat">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                <span>Private Repository</span>
                            </div>
                        @endif

                        @if($liveDemoUrl)
                            <div class="pt-3 border-t border-slate-200 dark:border-[#262626] flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                                <span>Live URL</span>
                                <a href="{{ $liveDemoUrl }}" target="_blank" rel="noopener noreferrer" class="text-blue-600 dark:text-blue-400 hover:underline truncate max-w-[190px]">
                                    {{ parse_url($liveDemoUrl, PHP_URL_HOST) ?: $liveDemoUrl }}
                                </a>
                            </div>
                        @endif
                    </div>

                    <!-- Technologies Used -->
                    @if(is_array($techArray) && count($techArray) > 0)
                    <div class="p-6 sm:p-7 bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] rounded-2xl">
                        <h3 class="text-xs font-bold text-slate-500 dark:text-slate-400 mb-4 uppercase tracking-widest">
                            Technologies Used
                        </h3>
                        <ul role="list" class="flex flex-wrap gap-2.5">
                            @foreach($techArray as $tech)
                                @php
                                    $cleanTech = trim($tech);
                                    $lowerTech = strtolower($cleanTech);
                                @endphp
                                @if($cleanTech !== '')
                                <li class="inline-flex items-center gap-2 px-3.5 py-2 text-xs sm:text-sm font-medium bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] rounded-lg text-slate-700 dark:text-slate-300">
                                    @if(str_contains($lowerTech, 'laravel'))
                                        <svg class="w-4 h-4 text-red-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                                    @elseif(str_contains($lowerTech, 'php'))
                                        <svg class="w-4 h-4 text-indigo-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                    @elseif(str_contains($lowerTech, 'mysql') || str_contains($lowerTech, 'sql') || str_contains($lowerTech, 'database'))
                                        <svg class="w-4 h-4 text-amber-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path></svg>
                                    @elseif(str_contains($lowerTech, 'tailwind'))
                                        <svg class="w-4 h-4 text-cyan-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                    @elseif(str_contains($lowerTech, 'blade'))
                                        <svg class="w-4 h-4 text-rose-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    @elseif(str_contains($lowerTech, 'javascript') || str_contains($lowerTech, 'js') || str_contains($lowerTech, 'alpine'))
                                        <svg class="w-4 h-4 text-yellow-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    @elseif(str_contains($lowerTech, 'vite'))
                                        <svg class="w-4 h-4 text-purple-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    @else
                                        <svg class="w-4 h-4 text-blue-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    @endif
                                    <span>{{ $cleanTech }}</span>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                </div>
            </div>
            
        </div>
    </div>

    <!-- LIGHTBOX MODAL UNTUK SCREENSHOT -->
    <div x-show="activeImage"
         x-transition.opacity
         @keydown.escape.window="activeImage = null"
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/85 backdrop-blur-sm p-4 sm:p-6"
         style="display: none;">
        <div @click.outside="activeImage = null" class="relative max-w-5xl w-full bg-[#0a0a0a] border border-[#262626] rounded-2xl overflow-hidden shadow-2xl">
            <div class="flex items-center justify-between px-5 py-3.5 border-b border-[#262626]">
                <p class="text-xs sm:text-sm text-slate-300 font-medium truncate pr-4" x-text="activeCaption"></p>
                <button type="button" @click="activeImage = null" class="p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-[#1f1f1f] transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-2 sm:p-4 max-h-[80vh] overflow-auto flex items-center justify-center bg-black">
                <img :src="activeImage" :alt="activeCaption" class="max-h-[75vh] w-auto rounded-lg object-contain">
            </div>
        </div>
    </div>
</section>
@endsection