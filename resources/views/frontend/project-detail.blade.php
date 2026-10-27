@extends('layouts.frontend')

@section('content')
@php
    // 1. Identifikasi proyek secara spesifik tanpa mengganggu proyek lain
    $slugOrTitle = strtolower(($project->slug ?? '') . ' ' . ($project->title ?? ''));
    $isAscenso = str_contains($slugOrTitle, 'ascenso');
    $isEcoGuard = str_contains($slugOrTitle, 'ecoguard');

    // 2. Pastikan URL Live Demo mengarah ke alamat resmi masing-masing proyek
    $liveDemoUrl = $project->live_demo_url;
    if ($isAscenso) {
        $liveDemoUrl = $liveDemoUrl ?: 'https://ascenso-class.pages.dev';
    } elseif ($isEcoGuard) {
        $liveDemoUrl = $liveDemoUrl ?: 'https://ecoguard.wawansugianto.my.id';
    }

    // 3. Normalisasi data Screenshots dari CMS (aman dari nilai kosong atau 'false')
    $rawScreenshots = is_string($project->screenshots) ? json_decode($project->screenshots, true) : $project->screenshots;
    $screenshotArray = is_array($rawScreenshots)
        ? array_values(array_filter($rawScreenshots, fn($item) => !empty($item) && $item !== 'false'))
        : [];

    // 4. Normalisasi data Technologies dari CMS
    $rawTech = is_string($project->technologies) ? json_decode($project->technologies, true) : $project->technologies;
    $techArray = is_array($rawTech)
        ? array_values(array_filter(array_map('trim', $rawTech), fn($item) => $item !== ''))
        : [];

    if ($isAscenso && count($techArray) === 0) {
        $techArray = ['HTML5', 'CSS3', 'JavaScript', 'Responsive Web Design'];
    } elseif ($isEcoGuard && count($techArray) === 0) {
        $techArray = ['Laravel', 'PHP', 'MySQL', 'Blade', 'Tailwind CSS', 'JavaScript', 'Vite'];
    }

    // 5. Konten Overview, Challenge, dan Solution yang telah dirapikan
    $overviewText = $project->overview;
    $challengeText = $project->challenge;
    $solutionText = $project->solution;

    if ($isAscenso) {
        $overviewText = 'ASCENSO CLASS adalah website informasi dan dokumentasi kelas yang saya bangun dengan tampilan modern dan responsif. Website ini menyediakan informasi mengenai kelas, struktur, anggota, album, dan kontak dalam satu platform yang mudah diakses.';
        $challengeText = 'Menyajikan informasi kelas dan dokumentasi dalam tampilan yang terorganisir, menarik, dan nyaman digunakan pada desktop maupun perangkat mobile.';
        $solutionText = 'Menyusun informasi kelas dalam halaman yang terorganisir, menggunakan navigasi sederhana dan desain responsif agar pengguna dapat menemukan informasi yang dibutuhkan dengan mudah.';
    } elseif ($isEcoGuard) {
        $overviewText = $overviewText ?: 'EcoGuard adalah platform web interaktif bertema lingkungan yang menggabungkan gamifikasi, edukasi, dan kepedulian terhadap satwa liar. Platform ini dirancang untuk membuat aktivitas menjaga lingkungan terasa lebih menarik melalui berbagai fitur interaktif.';
    }

    // 6. Konfigurasi Kartu Key Features (ASCENSO CLASS & EcoGuard)
    $activeFeatures = [];
    if ($isAscenso) {
        $activeFeatures = [
            [
                'title' => 'Class Profile',
                'desc' => 'Menyajikan informasi utama dan identitas kelas secara ringkas sebagai pengenalan awal bagi pengunjung.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
            ],
            [
                'title' => 'Class Structure',
                'desc' => 'Menampilkan informasi struktur kepengurusan kelas dengan susunan organisasi yang jelas dan mudah dibaca.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>',
            ],
            [
                'title' => 'Class Members',
                'desc' => 'Memuat daftar anggota kelas dalam tata letak kartu yang rapi serta responsif di layar desktop maupun mobile.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>',
            ],
            [
                'title' => 'Class Album',
                'desc' => 'Menyediakan galeri dokumentasi foto kegiatan dan momen kebersamaan kelas dalam tampilan visual yang terorganisir.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>',
            ],
            [
                'title' => 'Contact Information',
                'desc' => 'Menampilkan informasi kontak kelas yang tersedia agar pengunjung dapat terhubung dengan mudah.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>',
            ],
        ];
    } elseif ($isEcoGuard) {
        $activeFeatures = [
            [
                'title' => 'Wildlife Companion: Harimau Sumatera',
                'desc' => 'Pendamping virtual interaktif bertema satwa langka yang merespons progres aktivitas pengguna di dalam platform.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>',
            ],
            [
                'title' => 'Daily Quests',
                'desc' => 'Daftar misi harian terstruktur yang mendorong pengguna menyelesaikan tantangan bertema lingkungan secara berkala.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>',
            ],
            [
                'title' => 'Eco-Quiz',
                'desc' => 'Kuis edukatif interaktif seputar wawasan lingkungan, konservasi alam, dan pengelolaan limbah.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
            ],
            [
                'title' => 'Leaderboard',
                'desc' => 'Papan peringkat kompetitif yang mengurutkan capaian poin pengguna berdasarkan aktivitas yang diselesaikan.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
            ],
            [
                'title' => 'Sort Waste, Forest Guard & Ocean Clean',
                'desc' => 'Modul simulasi aksi lingkungan untuk pemilahan sampah, pelestarian kawasan hutan, dan kebersihan ekosistem laut.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
            ],
            [
                'title' => 'World Boss: Monster Sampah Plastik',
                'desc' => 'Tantangan kolektif bergaya RPG di mana kontribusi poin aktivitas pengguna digabungkan untuk mengalahkan bos pencemar plastik.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
            ],
            [
                'title' => 'Indonesia Reforestation Goal',
                'desc' => 'Visualisasi target penghijauan bersama yang menampilkan progres akumulasi kontribusi pengguna di dalam platform.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>',
            ],
            [
                'title' => 'Supply Depot Shop, ID Card & Badge',
                'desc' => 'Toko penukaran poin serta kartu identitas digital yang memuat level dan koleksi badge pencapaian pengguna.',
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>',
            ],
        ];
    }

    // 7. Caption kontekstual untuk Screenshot Showcase
    $ascensoCaptions = [
        0 => 'Halaman utama dan profil identitas ASCENSO CLASS dengan navigasi bagian terstruktur.',
        1 => 'Tampilan informasi struktur kelas (Class Structure) dan daftar anggota kelas (Class Members).',
        2 => 'Galeri dokumentasi foto kegiatan kelas pada bagian Class Album.',
        3 => 'Bagian informasi kontak (Contact Information) dan tampilan responsif ASCENSO CLASS.',
    ];

    $ecoGuardCaptions = [
        0 => 'Dashboard utama EcoGuard dengan ringkasan progres, status misi, dan navigasi fitur interaktif.',
        1 => 'Tampilan Wildlife Companion (Harimau Sumatera) beserta indikator status dan interaksi pengguna.',
        2 => 'Halaman Daily Quests dan Eco-Quiz untuk aktivitas edukasi lingkungan berbasis gamifikasi.',
        3 => 'Papan peringkat (Leaderboard), profil ID Card, dan pencapaian komunitas EcoGuard.',
    ];
@endphp

<!-- HEADER SECTION -->
<section class="pt-32 pb-16 bg-slate-50 dark:bg-[#0a0a0a] border-b border-slate-200 dark:border-[#262626] transition-colors duration-500 motion-reduce:transition-none">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        <!-- Back Button -->
        <a href="{{ route('projects.index') }}" class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-500 transition-colors text-sm font-medium mb-10 inline-flex items-center gap-2 group focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded-lg">
            <svg class="w-4 h-4 group-hover:-translate-x-1 motion-reduce:group-hover:translate-x-0 transition-transform" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span>Kembali ke Portfolio</span>
        </a>
        
        <!-- Category & Date Badge -->
        <div class="flex flex-wrap items-center gap-3 mb-6">
            <span class="px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 text-xs font-bold rounded-full uppercase tracking-wider">
                {{ $project->category }}
            </span>
            @if($isAscenso)
                <span class="px-3.5 py-1.5 bg-cyan-500/10 border border-cyan-500/20 text-cyan-600 dark:text-cyan-400 text-xs font-semibold rounded-full inline-flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-500"></span>
                    <span>Class Information &amp; Documentation Website</span>
                </span>
            @elseif($isEcoGuard)
                <span class="px-3.5 py-1.5 bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 dark:text-emerald-400 text-xs font-semibold rounded-full inline-flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    <span>Interactive Gamified Web Platform</span>
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
            @if($isAscenso && empty($project->short_description))
                Website informasi kelas dengan desain modern dan responsif untuk menampilkan profil, struktur, anggota, album, dan informasi kelas.
            @elseif($isEcoGuard && empty($project->short_description))
                Platform web interaktif bertema lingkungan yang menggabungkan gamifikasi, edukasi, dan kepedulian terhadap satwa liar.
            @else
                {{ $project->short_description }}
            @endif
        </p>
    </div>
</section>

<!-- CONTENT SECTION -->
<section class="py-16 lg:py-24 bg-white dark:bg-[#111111] transition-colors duration-500 motion-reduce:transition-none"
         x-data="{ activeImage: null, activeCaption: '' }">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">
            <!-- LEFT COLUMN: The Case Study -->
            <div class="lg:col-span-2 space-y-16">
                
                <!-- 1. PROJECT OVERVIEW -->
                @if($overviewText)
                <section aria-labelledby="overview-heading" class="p-7 sm:p-8 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626]">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-1.5 h-6 bg-blue-500 rounded-full" aria-hidden="true"></span>
                        <h2 id="overview-heading" class="text-2xl font-bold text-slate-900 dark:text-white">Project Overview</h2>
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 text-base sm:text-lg leading-relaxed whitespace-pre-line">{{ $overviewText }}</p>
                </section>
                @endif

                <!-- 2. KEY FEATURES (DITAMPILKAN LEBIH AWAL UNTUK ASCENSO CLASS) -->
                @if($isAscenso && count($activeFeatures) > 0)
                <section aria-labelledby="ascenso-features-heading" class="space-y-6">
                    <div>
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Core Sections</p>
                        <h2 id="ascenso-features-heading" class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Key Features</h2>
                        <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Fitur dan bagian informasi utama yang tersedia di dalam website {{ $project->title }}.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        @foreach($activeFeatures as $feature)
                        <article tabindex="0" class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-blue-500/50 dark:hover:border-blue-500/40 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 transition-all duration-300 motion-reduce:transition-none hover:-translate-y-0.5 motion-reduce:hover:translate-y-0 flex flex-col justify-between group">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-4 group-hover:scale-105 motion-reduce:group-hover:scale-100 transition-transform">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $feature['icon'] !!}</svg>
                                </div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">
                                    {{ $feature['title'] }}
                                </h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    {{ $feature['desc'] }}
                                </p>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </section>
                @endif

                <!-- 3. THE CHALLENGE & THE SOLUTION -->
                @if($challengeText || $solutionText || $isEcoGuard)
                <section aria-labelledby="challenge-solution-heading" class="space-y-6">
                    <div>
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Context &amp; Approach</p>
                        <h2 id="challenge-solution-heading" class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">
                            {{ $isEcoGuard ? 'Problem & Solution' : 'The Challenge & The Solution' }}
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- The Challenge / Problem -->
                        @if($challengeText || $isEcoGuard)
                        <div class="p-7 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex flex-col">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-500 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                                    {{ $isEcoGuard ? 'The Problem' : 'The Challenge' }}
                                </h3>
                            </div>

                            @if($isEcoGuard)
                                <ul class="space-y-3.5 text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2.5 shrink-0"></span>
                                        <span>Edukasi lingkungan dapat terasa monoton jika hanya disampaikan sebagai informasi.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2.5 shrink-0"></span>
                                        <span>Pengguna membutuhkan pengalaman interaktif untuk meningkatkan keterlibatan.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2.5 shrink-0"></span>
                                        <span>Informasi dan aktivitas kepedulian lingkungan perlu dikemas dengan cara yang menarik.</span>
                                    </li>
                                </ul>
                            @else
                                <p class="text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed whitespace-pre-line">{{ $challengeText }}</p>
                            @endif
                        </div>
                        @endif

                        <!-- The Solution -->
                        @if($solutionText || $isEcoGuard)
                        <div class="p-7 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex flex-col">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-500 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">The Solution</h3>
                            </div>

                            @if($isEcoGuard)
                                <ul class="space-y-3.5 text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Menggabungkan aktivitas lingkungan dengan mekanisme gamifikasi.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Menyediakan quest harian dan kuis interaktif yang dapat dikerjakan pengguna.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Menggunakan progres, reward, Supply Depot Shop, dan leaderboard sesuai implementasi aplikasi.</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-2.5 shrink-0"></span>
                                        <span>Menyediakan fitur Wildlife Companion (Harimau Sumatera) dan simulasi aksi kepedulian lingkungan.</span>
                                    </li>
                                </ul>
                            @else
                                <p class="text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed whitespace-pre-line">{{ $solutionText }}</p>
                            @endif
                        </div>
                        @endif
                    </div>
                </section>
                @endif

                <!-- 4. KEY FEATURES & TECHNICAL HIGHLIGHTS (KHUSUS ECOGUARD) -->
                @if($isEcoGuard && count($activeFeatures) > 0)
                <section aria-labelledby="ecoguard-features-heading" class="space-y-6">
                    <div>
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Platform Capabilities</p>
                        <h2 id="ecoguard-features-heading" class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Key Features</h2>
                        <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Fitur-fitur utama yang diimplementasikan di dalam aplikasi EcoGuard untuk mendukung pengalaman interaktif pengguna.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        @foreach($activeFeatures as $feature)
                        <article tabindex="0" class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-blue-500/50 dark:hover:border-blue-500/40 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 transition-colors flex flex-col justify-between">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 flex items-center justify-center mb-4">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $feature['icon'] !!}</svg>
                                </div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">
                                    {{ $feature['title'] }}
                                </h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    {{ $feature['desc'] }}
                                </p>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </section>

                <section aria-labelledby="ecoguard-tech-heading" class="space-y-6">
                    <div>
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Under The Hood</p>
                        <h2 id="ecoguard-tech-heading" class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Technical Highlights</h2>
                        <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Pendekatan teknis yang diterapkan dalam membangun arsitektur dan logika aplikasi EcoGuard.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="p-6 rounded-2xl bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-red-500/10 border border-red-500/20 text-red-500 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
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
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">Pengelolaan Database Relasional &amp; Logika Gamifikasi</h3>
                                <p class="mt-1 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                                    Mengelola penyimpanan data pengguna, riwayat penyelesaian quest, perhitungan skor/poin, inventaris item, serta pengurutan Leaderboard secara dinamis menggunakan MySQL dan Eloquent ORM.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                @endif

                <!-- 5. SCREENSHOT SHOWCASE -->
                @if(count($screenshotArray) > 0 || !empty($project->thumbnail))
                <section aria-labelledby="screenshots-heading" class="pt-4 space-y-6">
                    <div>
                        <p class="text-blue-600 dark:text-blue-500 text-xs font-bold tracking-widest uppercase mb-2">Visual Preview</p>
                        <h2 id="screenshots-heading" class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">Screenshot Showcase</h2>
                        <p class="mt-2 text-slate-600 dark:text-slate-400 text-sm sm:text-base">
                            Tampilan antarmuka asli dari proyek {{ $project->title }}. Klik pada gambar untuk memperbesar.
                        </p>
                    </div>

                    @if(count($screenshotArray) > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach($screenshotArray as $index => $screenshot)
                                @php
                                    $imgUrl = asset('storage/' . $screenshot);
                                    if ($isAscenso) {
                                        $caption = $ascensoCaptions[$index] ?? ('Tampilan halaman ASCENSO CLASS — Bagian ' . ($index + 1));
                                    } elseif ($isEcoGuard) {
                                        $caption = $ecoGuardCaptions[$index] ?? ('Tampilan fitur aplikasi EcoGuard — Layar ' . ($index + 1));
                                    } else {
                                        $caption = 'Tampilan antarmuka ' . $project->title . ' — Layar ' . ($index + 1);
                                    }
                                @endphp
                                <figure class="rounded-2xl overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] hover:border-blue-500/50 transition-all duration-300 shadow-sm flex flex-col group">
                                    <button type="button"
                                            @click="activeImage = '{{ $imgUrl }}'; activeCaption = '{{ addslashes($caption) }}'"
                                            class="relative overflow-hidden aspect-video w-full bg-[#0a0a0a] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 cursor-zoom-in">
                                        <img src="{{ $imgUrl }}"
                                             alt="{{ $caption }}"
                                             loading="lazy"
                                             class="w-full h-full object-cover object-top group-hover:scale-105 motion-reduce:group-hover:scale-100 transition-transform duration-500">
                                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors flex items-center justify-center">
                                            <span class="opacity-0 group-hover:opacity-100 transition-opacity px-3 py-1.5 rounded-lg bg-black/75 text-white text-xs font-medium inline-flex items-center gap-1.5">
                                                <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                                <span>Perbesar</span>
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
                            $thumbCaption = $isAscenso
                                ? 'Tampilan antarmuka utama website informasi kelas ASCENSO CLASS.'
                                : ('Tampilan utama ' . $project->title);
                        @endphp
                        <figure class="rounded-2xl overflow-hidden bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] shadow-sm">
                            <button type="button"
                                    @click="activeImage = '{{ $thumbUrl }}'; activeCaption = '{{ addslashes($thumbCaption) }}'"
                                    class="relative overflow-hidden aspect-video w-full bg-[#0a0a0a] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 cursor-zoom-in block">
                                <img src="{{ $thumbUrl }}" alt="{{ $thumbCaption }}" class="w-full h-full object-cover object-top">
                            </button>
                            <figcaption class="p-4 text-xs sm:text-sm text-slate-600 dark:text-slate-400 border-t border-slate-200 dark:border-[#262626]">
                                {{ $thumbCaption }}
                            </figcaption>
                        </figure>
                    @endif
                </section>
                @endif

            </div>

            <!-- RIGHT COLUMN: Actions & Technologies -->
            <div class="lg:col-span-1">
                <div class="sticky top-28 space-y-8">
                    
                    <!-- Action Buttons Card -->
                    <div class="p-6 sm:p-7 bg-slate-50 dark:bg-[#0a0a0a] border border-slate-200 dark:border-[#262626] rounded-2xl flex flex-col gap-4 shadow-sm dark:shadow-none">
                        <h3 class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest mb-1">
                            Project Links
                        </h3>

                        @if($liveDemoUrl)
                            <a href="{{ $liveDemoUrl }}" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 px-5 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl transition-all duration-200 text-center flex items-center justify-center gap-2 shadow-lg shadow-blue-600/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                                <span>Visit Live Demo</span>
                                <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        @endif
                        
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="w-full py-3.5 px-5 bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 dark:text-slate-300 font-bold rounded-xl transition-colors text-center flex items-center justify-center gap-2 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path></svg>
                                <span>View Source Code</span>
                            </a>
                        @else
                            <button type="button" disabled class="w-full py-3.5 px-5 bg-slate-100 dark:bg-[#111111] border border-slate-200 dark:border-[#262626] text-slate-500 font-semibold rounded-xl cursor-not-allowed text-center flex items-center justify-center gap-2 select-none" title="Kode sumber proyek ini bersifat privat">
                                <svg class="w-4 h-4 text-slate-400" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                <span>Private Repository</span>
                            </button>
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
                                    $isDesignApproach = str_contains($lowerTech, 'responsive');
                                @endphp
                                @if($cleanTech !== '')
                                <li class="inline-flex items-center gap-2 px-3.5 py-2 text-xs sm:text-sm font-medium bg-white dark:bg-[#111111] border border-slate-200 dark:border-[#262626] rounded-lg text-slate-700 dark:text-slate-300">
                                    @if(str_contains($lowerTech, 'laravel'))
                                        <svg class="w-4 h-4 text-red-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                                    @elseif(str_contains($lowerTech, 'html'))
                                        <svg class="w-4 h-4 text-orange-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                    @elseif(str_contains($lowerTech, 'php'))
                                        <svg class="w-4 h-4 text-indigo-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                    @elseif(str_contains($lowerTech, 'mysql') || str_contains($lowerTech, 'sql') || str_contains($lowerTech, 'database'))
                                        <svg class="w-4 h-4 text-amber-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path></svg>
                                    @elseif(str_contains($lowerTech, 'css') || str_contains($lowerTech, 'tailwind'))
                                        <svg class="w-4 h-4 text-blue-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                                    @elseif(str_contains($lowerTech, 'blade'))
                                        <svg class="w-4 h-4 text-rose-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    @elseif(str_contains($lowerTech, 'javascript') || str_contains($lowerTech, 'js') || str_contains($lowerTech, 'alpine'))
                                        <svg class="w-4 h-4 text-yellow-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    @elseif(str_contains($lowerTech, 'vite'))
                                        <svg class="w-4 h-4 text-purple-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    @elseif($isDesignApproach)
                                        <svg class="w-4 h-4 text-emerald-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    @else
                                        <svg class="w-4 h-4 text-blue-500 shrink-0" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    @endif
                                    <span>{{ $cleanTech }}</span>
                                    @if($isDesignApproach)
                                        <span class="text-[10px] font-semibold uppercase tracking-wider px-1.5 py-0.5 rounded bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20" title="Pendekatan desain antarmuka, bukan bahasa pemrograman">
                                            Design Approach
                                        </span>
                                    @endif
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