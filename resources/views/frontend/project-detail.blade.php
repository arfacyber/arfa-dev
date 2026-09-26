@extends('layouts.frontend')

@section('content')
<!-- HEADER SECTION -->
<section class="pt-32 pb-20 bg-[#0a0a0a] border-b border-[#262626]">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        <!-- Back Button -->
        <a href="{{ route('projects.index') }}" class="text-slate-400 hover:text-blue-500 transition-colors text-sm font-medium mb-10 inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali ke Portfolio
        </a>
        
        <!-- Category & Date Badge -->
        <div class="flex items-center gap-4 mb-6">
            <span class="px-4 py-1.5 bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold rounded-full uppercase tracking-wider">
                {{ $project->category }}
            </span>
            <span class="text-sm font-medium text-slate-500">
                {{ $project->created_at->format('M Y') }}
            </span>
        </div>

        <!-- Title & Short Description -->
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-8 tracking-tight">{{ $project->title }}</h1>
        <p class="text-xl text-slate-400 max-w-3xl leading-relaxed">
            {{ $project->short_description }}
        </p>
    </div>
</section>

<!-- CONTENT SECTION -->
<section class="py-20 bg-[#111111]">
    <div class="max-w-6xl mx-auto px-6 lg:px-12">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <!-- LEFT COLUMN: The Case Study -->
            <div class="lg:col-span-2 space-y-16">
                
                @if($project->overview)
                <div>
                    <h2 class="text-2xl font-bold text-white mb-6">Project Overview</h2>
                    <p class="text-slate-300 text-lg leading-relaxed whitespace-pre-line">{{ $project->overview }}</p>
                </div>
                @endif

                @if($project->challenge)
                <div>
                    <h2 class="text-2xl font-bold text-white mb-6">The Challenge</h2>
                    <p class="text-slate-300 text-lg leading-relaxed whitespace-pre-line">{{ $project->challenge }}</p>
                </div>
                @endif

                @if($project->solution)
                <div>
                    <h2 class="text-2xl font-bold text-white mb-6">The Solution</h2>
                    <p class="text-slate-300 text-lg leading-relaxed whitespace-pre-line">{{ $project->solution }}</p>
                </div>
                @endif

                <!-- SCREENSHOTS SECTION -->
                @php
                    // Memastikan data screenshots menjadi array yang valid dan mencegah Error 500
                    $screenshotArray = is_string($project->screenshots) ? json_decode($project->screenshots, true) : $project->screenshots;
                @endphp

                @if(is_array($screenshotArray) && count($screenshotArray) > 0)
                <div class="pt-10">
                    <h2 class="text-2xl font-bold text-white mb-8">Screenshots</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($screenshotArray as $index => $screenshot)
                            {{-- Abaikan jika data bernilai 'false' atau kosong --}}
                            @if($screenshot && $screenshot !== 'false')
                            <div class="rounded-xl overflow-hidden border border-[#262626] shadow-xl group cursor-pointer">
                                <img src="{{ asset('storage/' . $screenshot) }}" alt="Screenshot {{ $index + 1 }}" class="w-full h-auto group-hover:scale-105 transition-transform duration-500">
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endif

            </div>

            <!-- RIGHT COLUMN: Actions & Technologies -->
            <div class="lg:col-span-1">
                <div class="sticky top-32 space-y-12">
                    
                    <!-- Action Buttons Card -->
                    <div class="p-6 bg-[#0a0a0a] border border-[#262626] rounded-2xl flex flex-col gap-4">
                        @if($project->live_demo_url)
                            <a href="{{ $project->live_demo_url }}" target="_blank" class="w-full py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl transition-colors text-center flex items-center justify-center gap-2">
                                Visit Live Demo 
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        @endif
                        
                        @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="w-full py-3.5 bg-transparent border border-[#262626] hover:border-slate-500 text-slate-300 font-bold rounded-xl transition-colors text-center">
                                View Source Code
                            </a>
                        @else
                            <!-- Tombol Nonaktif jika tidak ada repository (Private) -->
                            <button disabled class="w-full py-3.5 bg-[#111111] border border-[#262626] text-slate-500 font-bold rounded-xl cursor-not-allowed text-center">
                                Private Repository
                            </button>
                        @endif
                    </div>

                    <!-- Technologies Used -->
                    @php
                        // Pengecekan aman untuk tipe data technologies
                        $techArray = is_string($project->technologies) ? json_decode($project->technologies, true) : $project->technologies;
                    @endphp

                    @if(is_array($techArray) && count($techArray) > 0)
                    <div>
                        <h3 class="text-xs font-bold text-slate-400 mb-4 uppercase tracking-widest">Technologies Used</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($techArray as $tech)
                                @if(trim($tech) !== '')
                                <span class="px-4 py-2 text-sm font-medium bg-[#0a0a0a] border border-[#262626] rounded-lg text-slate-300">{{ trim($tech) }}</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endif
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection