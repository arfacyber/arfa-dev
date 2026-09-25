@extends('layouts.frontend')

@section('content')
<section class="pt-32 pb-24 bg-[#0a0a0a] min-h-screen">
    <div class="max-w-3xl mx-auto px-6 lg:px-12">
        
        <!-- Back Button -->
        <a href="{{ route('blogs.index') }}" class="text-slate-400 hover:text-blue-500 transition-colors text-sm font-medium mb-10 inline-flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali ke Tulisan & Pemikiran
        </a>
        
        <!-- Date & Status -->
        <time class="text-blue-500 text-sm font-bold tracking-widest uppercase mb-6 block">
            {{ $blog->published_date ? $blog->published_date->format('d F Y') : 'Draft' }}
        </time>
        
        <!-- Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-10 leading-tight tracking-tight">{{ $blog->title }}</h1>
        
        <!-- Thumbnail (Jika ada) -->
        @if($blog->thumbnail)
        <div class="w-full h-64 md:h-[450px] rounded-2xl overflow-hidden mb-12 border border-[#262626] shadow-2xl relative">
            <img src="{{ asset('storage/'.$blog->thumbnail) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
        </div>
        @endif

        <!-- Blog Content (Formatted for WYSIWYG Editor) -->
        <div class="text-slate-300 leading-relaxed text-lg
                    [&>p]:mb-6 
                    [&>h1]:text-3xl [&>h1]:font-bold [&>h1]:text-white [&>h1]:mb-4 
                    [&>h2]:text-2xl [&>h2]:font-bold [&>h2]:text-white [&>h2]:mt-10 [&>h2]:mb-4 
                    [&>h3]:text-xl [&>h3]:font-bold [&>h3]:text-white [&>h3]:mt-8 [&>h3]:mb-4
                    [&>ul]:list-disc [&>ul]:pl-5 [&>ul]:mb-6 [&>ul>li]:mb-2
                    [&>ol]:list-decimal [&>ol]:pl-5 [&>ol]:mb-6 [&>ol>li]:mb-2
                    [&>a]:text-blue-400 [&>a]:underline [&>a:hover]:text-blue-300
                    [&>strong]:text-white [&>b]:text-white
                    [&>img]:rounded-xl [&>img]:my-8 [&>img]:border [&>img]:border-[#262626] [&>img]:w-full [&>img]:h-auto">
            {!! $blog->content !!}
        </div>

        <!-- Tags Section -->
        @if($blog->tags && count($blog->tags) > 0)
        <div class="mt-16 pt-8 border-t border-[#262626]">
            <h3 class="text-sm font-bold text-slate-400 mb-4 uppercase tracking-widest">Tags</h3>
            <div class="flex flex-wrap gap-2">
                @foreach($blog->tags as $tag)
                    <span class="px-4 py-1.5 bg-[#111111] border border-[#262626] rounded-full text-xs font-semibold text-slate-400 hover:text-white transition-colors cursor-default">
                        #{{ trim($tag) }}
                    </span>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
@endsection