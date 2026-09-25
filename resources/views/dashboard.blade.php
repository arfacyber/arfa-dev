<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Command Center') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#111111] border border-[#262626] overflow-hidden shadow-2xl sm:rounded-2xl p-8 lg:p-12 text-center relative">
                
                <!-- Background Accent -->
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[300px] h-[300px] bg-blue-500/5 blur-[80px] rounded-full pointer-events-none"></div>

                <div class="relative z-10">
                    <div class="w-20 h-20 bg-blue-500/10 text-blue-500 rounded-2xl border border-blue-500/20 flex items-center justify-center mx-auto mb-6 transform rotate-3">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    
                    <h3 class="text-3xl font-bold text-white mb-4 tracking-tight">Welcome back, {{ explode(' ', Auth::user()->name)[0] }}!</h3>
                    
                    <p class="text-slate-400 text-lg mb-10 max-w-xl mx-auto leading-relaxed">
                        Ini adalah Command Center CMS Anda. Kelola project portfolio, tulis artikel blog, dan pastikan ARFA.DEV selalu menyajikan konten yang up-to-date untuk calon client.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('admin.projects.create') }}" class="px-6 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-lg transition-colors w-full sm:w-auto shadow-lg shadow-blue-500/20">
                            + Add New Project
                        </a>
                        <a href="{{ route('admin.blogs.create') }}" class="px-6 py-3.5 bg-transparent border border-slate-700 hover:border-slate-500 hover:text-white text-slate-300 font-bold rounded-lg transition-colors w-full sm:w-auto">
                            Write Journal
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>