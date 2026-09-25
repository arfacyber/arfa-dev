<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-white tracking-tight">Tulis <span class="text-blue-500">Artikel Baru</span></h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
                    <!-- KIRI: Konten Utama -->
                    <div class="xl:col-span-2 space-y-6">
                        <div class="bg-[#111111] border border-[#262626] rounded-2xl p-8">
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-slate-400 mb-2">Judul Artikel</label>
                                <input type="text" name="title" required class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500">
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-slate-400 mb-2">Cuplikan (Tampil di Card Halaman Depan)</label>
                                <textarea name="excerpt" rows="3" required class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-3 text-white focus:border-blue-500"></textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-400 mb-2">Isi Artikel (Bisa Copy-Paste dari Word/Website)</label>
                                <!-- ID ini akan diubah menjadi Editor oleh TinyMCE -->
                                <textarea id="content-editor" name="content"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- KANAN: Settings -->
                    <div class="xl:col-span-1 space-y-6">
                        <div class="bg-[#111111] border border-[#262626] rounded-2xl p-6">
                            <label class="block text-sm font-medium text-slate-400 mb-2">Gambar Thumbnail</label>
                            <input type="file" name="thumbnail" accept="image/*" class="w-full text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-[#262626] file:text-white cursor-pointer mb-6">
                            
                            <label class="block text-sm font-medium text-slate-400 mb-2">Tags (Pisahkan koma)</label>
                            <input type="text" name="tags" class="w-full bg-[#0a0a0a] border border-[#262626] rounded-xl px-4 py-2.5 text-white focus:border-blue-500" placeholder="Web, Tutorial, Opini">
                        </div>

                        <div class="bg-[#111111] border border-[#262626] rounded-2xl p-6">
                            <label class="flex items-center mb-6 cursor-pointer">
                                <input type="checkbox" name="is_published" value="1" class="rounded border-[#262626] bg-[#0a0a0a] text-blue-600 focus:ring-blue-500 w-5 h-5">
                                <span class="ml-3 text-sm font-medium text-slate-400">Langsung Publish Artikel</span>
                            </label>
                            <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl transition-colors">Simpan Artikel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Script TinyMCE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#content-editor',
            height: 600,
            skin: 'oxide-dark',
            content_css: 'dark',
            plugins: 'lists link image code table wordcount',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            menubar: false,
        });
    </script>
</x-app-layout>