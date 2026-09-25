@extends('layouts.frontend')

@section('content')
<section class="pt-32 pb-24 min-h-screen bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        
        <!-- Header -->
        <div class="mb-20 text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">
                Tulisan & <span class="text-blue-500">Pemikiran</span>
            </h1>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            @forelse($blogs as $blog)
            <!-- Blog Card (Text Focus) -->
            <a href="{{ route('blog.show', $blog->slug) }}" class="group block p-8 bg-[#111111] border border-[#262626] rounded-2xl hover:-translate-y-1 hover:border-blue-500/50 hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300">
                <time class="text-xs font-medium text-slate-500 mb-5 block">
                    {{ $blog->published_date ? $blog->published_date->format('d M Y') : $blog->created_at->format('d M Y') }}
                </time>
                <h2 class="text-xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors leading-snug">
                    {{ $blog->title }}
                </h2>
                <p class="text-slate-400 text-sm line-clamp-3 leading-relaxed">
                    {{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 120) }}
                </p>
            </a>
            @empty
            <div class="col-span-full py-16 text-center border border-dashed border-[#262626] rounded-xl">
                <p class="text-slate-400 text-lg">Belum ada artikel yang dipublikasikan.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($blogs->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $blogs->links('vendor.pagination.tailwind') }}
        </div>
        @endif

    </div>
</section>
@endsection