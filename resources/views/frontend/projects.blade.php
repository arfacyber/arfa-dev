@extends('layouts.frontend')

@section('content')
<!-- Tambahkan x-data untuk state filter Alpine.js -->
<section class="pt-32 pb-24 min-h-screen bg-[#0a0a0a]" x-data="{ filter: 'All Projects' }">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        
        <!-- Header Section -->
        <div class="mb-12 text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 tracking-tight">
                Project <span class="text-blue-500">Portfolio</span>
            </h1>
            <p class="text-slate-400 text-lg leading-relaxed">
                Eksplorasi hasil karya terbaik saya. Mulai dari sistem manajemen kompleks hingga website company profile premium.
            </p>
        </div>

        <!-- Filter Buttons (Kategori) -->
        <div class="flex flex-wrap justify-center gap-3 mb-16">
            <!-- Tombol All Projects -->
            <button @click="filter = 'All Projects'" 
                    :class="filter === 'All Projects' ? 'bg-blue-500 text-white border-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.4)]' : 'bg-[#111111] text-slate-400 border-[#262626] hover:text-white hover:border-slate-500'" 
                    class="px-6 py-2.5 rounded-full text-sm font-medium border transition-all duration-300">
                All Projects
            </button>
            
            <!-- Mengambil kategori unik dari database secara otomatis -->
            @php
                $categories = $projects->pluck('category')->unique()->filter();
            @endphp
            
            @foreach($categories as $cat)
            <button @click="filter = '{{ $cat }}'" 
                    :class="filter === '{{ $cat }}' ? 'bg-blue-500 text-white border-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.4)]' : 'bg-[#111111] text-slate-400 border-[#262626] hover:text-white hover:border-slate-500'" 
                    class="px-6 py-2.5 rounded-full text-sm font-medium border transition-all duration-300">
                {{ $cat }}
            </button>
            @endforeach
        </div>

        <!-- Grid 2 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            
            @forelse($projects as $project)
            <!-- Project Card dengan logika x-show Alpine.js -->
            <div x-show="filter === 'All Projects' || filter === '{{ $project->category }}'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 class="group bg-[#111111] rounded-2xl border border-[#262626] overflow-hidden transition-all duration-300 flex flex-col">
                
                <!-- Gambar Project (Full width, object-top agar screenshot website terlihat baik) -->
                <a href="{{ route('project.show', $project->slug) }}" class="block h-64 md:h-[340px] overflow-hidden relative border-b border-[#262626]">
                    <div class="absolute inset-0 bg-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                    <img src="{{ $project->thumbnail ? asset('storage/'.$project->thumbnail) : asset('images/default-project.jpg') }}" alt="{{ $project->title }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                </a>
                
                <!-- Detail Konten Bawah -->
                <div class="p-8 flex flex-col flex-grow">
                    <!-- Judul warna biru -->
                    <a href="{{ route('project.show', $project->slug) }}" class="text-2xl font-bold text-blue-500 mb-4 hover:text-blue-400 transition-colors">
                        {{ $project->title }}
                    </a>
                    
                    <!-- Deskripsi -->
                    <p class="text-slate-400 text-base mb-8 line-clamp-3 leading-relaxed">{{ $project->short_description }}</p>
                    
                    <!-- Link View Case Study -->
                    <div class="mt-auto">
                        <a href="{{ route('project.show', $project->slug) }}" class="inline-flex items-center text-sm font-bold text-white hover:text-blue-400 transition-colors">
                            View Case Study 
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-12 text-center border border-dashed border-[#262626] rounded-xl">
                <p class="text-slate-400">Belum ada project yang dipublikasikan.</p>
            </div>
            @endforelse

        </div>

        <!-- Pagination -->
        @if($projects->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $projects->links('vendor.pagination.tailwind') }}
        </div>
        @endif

    </div>
</section>
@endsection