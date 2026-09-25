<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'     => 'required|string|max:255',
            'excerpt'   => 'required|string|max:500',
            'content'   => 'required|string', // Format HTML dari TinyMCE
            'tags'      => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();
        $validated['is_published'] = $request->has('is_published');
        $validated['published_date'] = $validated['is_published'] ? now() : null;

        // Pisahkan tag dengan koma menjadi array
        if ($request->filled('tags')) {
            $validated['tags'] = array_map('trim', explode(',', $request->tags));
        }

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('blogs', 'public');
        }

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Artikel berhasil dibuat.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title'     => 'required|string|max:255',
            'excerpt'   => 'required|string|max:500',
            'content'   => 'required|string',
            'tags'      => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['is_published'] = $request->has('is_published');
        
        // Set tanggal rilis jika baru di-publish
        if ($validated['is_published'] && !$blog->published_date) {
            $validated['published_date'] = now();
        }

        if ($request->filled('tags')) {
            $validated['tags'] = array_map('trim', explode(',', $request->tags));
        } else {
            $validated['tags'] = null;
        }

        if ($request->hasFile('thumbnail')) {
            if ($blog->thumbnail) Storage::disk('public')->delete($blog->thumbnail);
            $validated['thumbnail'] = $request->file('thumbnail')->store('blogs', 'public');
        }

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->thumbnail) Storage::disk('public')->delete($blog->thumbnail);
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Artikel dihapus.');
    }
}