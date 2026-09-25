<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-white tracking-tight">
                Create <span class="text-blue-500">New Project</span>
            </h2>
            <a href="{{ route('admin.projects.index') }}" class="text-sm font-medium text-slate-400 hover:text-white transition-colors">
                &larr; Batal & Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                    <!-- KIRI: Konten Utama -->
                    <div class="xl:col-span-2 space-y-8">
                        <!-- Basic Info Card -->
                        <div class="bg-[#111111] border border-[#262626] shadow-sm rounded-2xl p-8">
                            <h3 class="text-lg font-bold text-white mb-6 border-b border-[#262626] pb-4">Basic Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-400 mb-2">Judul Project</label>
                                    <input type="text" name="title" required class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500 focus:ring-blue-500 transition-colors" placeholder="e.g. EcoGuard Web App">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-400 mb-2">Kategori</label>
                                    <input type="text" name="category" required class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500 focus:ring-blue-500 transition-colors" placeholder="e.g. Web App">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Deskripsi Singkat (Tampil di Card)</label>
                                <textarea name="short_description" rows="2" required class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500 focus:ring-blue-500 transition-colors" placeholder="Deskripsi singkat max 2-3 baris..."></textarea>
                            </div>
                        </div>

                        <!-- Case Study Card -->
                        <div class="bg-[#111111] border border-[#262626] shadow-sm rounded-2xl p-8">
                            <h3 class="text-lg font-bold text-white mb-6 border-b border-[#262626] pb-4">Case Study Details</h3>
                            <div class="space-y-6">
                                <div>
                                    <label class="block text-sm font-bold text-blue-500 mb-2">Project Overview</label>
                                    <textarea name="overview" rows="5" class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500 focus:ring-blue-500 transition-colors" placeholder="Ceritakan latar belakang dan gambaran umum project..."></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-red-500 mb-2">The Challenge</label>
                                    <textarea name="challenge" rows="4" class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500 focus:ring-blue-500 transition-colors" placeholder="Tantangan apa yang dihadapi?"></textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-green-500 mb-2">The Solution</label>
                                    <textarea name="solution" rows="4" class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500 focus:ring-blue-500 transition-colors" placeholder="Bagaimana solusi teknis yang Anda berikan?"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KANAN: Sidebar Settings -->
                    <div class="xl:col-span-1 space-y-8">
                        <!-- Media Card -->
                        <div class="bg-[#111111] border border-[#262626] shadow-sm rounded-2xl p-6">
                            <h3 class="text-sm font-bold text-slate-300 mb-4 uppercase tracking-widest">Project Media</h3>
                            
                            <label class="block text-sm font-medium text-slate-400 mb-2">Thumbnail Utama</label>
                            <input type="file" name="thumbnail" accept="image/*" class="w-full text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-[#262626] file:text-white hover:file:bg-[#333333] transition-colors cursor-pointer bg-[#0a0a0a] rounded-xl border border-[#262626] mb-6">

                            <label class="block text-sm font-medium text-slate-400 mb-2">Screenshots (Bisa pilih lebih dari 1)</label>
                            <input type="file" name="screenshots[]" multiple accept="image/*" class="w-full text-slate-400 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-bold file:bg-[#262626] file:text-white hover:file:bg-[#333333] transition-colors cursor-pointer bg-[#0a0a0a] rounded-xl border border-[#262626]">
                            <p class="text-xs text-slate-500 mt-2">Tekan CTRL/CMD saat memilih untuk upload banyak gambar sekaligus.</p>
                        </div>

                        <!-- Tech & Links Card -->
                        <div class="bg-[#111111] border border-[#262626] shadow-sm rounded-2xl p-6 space-y-6">
                            <h3 class="text-sm font-bold text-slate-300 mb-2 uppercase tracking-widest">Tech & Links</h3>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Technologies (Pisahkan koma)</label>
                                <input type="text" name="technologies" class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-2.5 text-white focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="Laravel, Tailwind CSS, Vue">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Live Demo URL</label>
                                <input type="url" name="live_demo_url" class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-2.5 text-blue-400 focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="https://...">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">GitHub URL</label>
                                <input type="url" name="github_url" class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-2.5 text-slate-300 focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="https://github.com/...">
                            </div>
                        </div>

                        <!-- Publish Action -->
                        <div class="bg-[#111111] border border-[#262626] shadow-sm rounded-2xl p-6">
                            <h3 class="text-sm font-bold text-slate-300 mb-4 uppercase tracking-widest">Publish Action</h3>
                            
                            <label class="flex items-center mb-4 cursor-pointer group">
                                <input type="checkbox" name="is_published" value="1" class="rounded border-[#262626] bg-[#0a0a0a] text-blue-600 focus:ring-blue-500 w-5 h-5 cursor-pointer">
                                <span class="ml-3 text-sm font-medium text-slate-400 group-hover:text-white transition-colors">Tampilkan di Frontend (Publish)</span>
                            </label>

                            <label class="flex items-center mb-6 cursor-pointer group">
                                <input type="checkbox" name="is_featured" value="1" class="rounded border-[#262626] bg-[#0a0a0a] text-blue-600 focus:ring-blue-500 w-5 h-5 cursor-pointer">
                                <span class="ml-3 text-sm font-medium text-slate-400 group-hover:text-white transition-colors">Tampilkan di Home (Featured)</span>
                            </label>

                            <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl transition-colors flex items-center justify-center gap-2 shadow-[0_0_15px_rgba(37,99,235,0.3)]">
                                Save Project
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>