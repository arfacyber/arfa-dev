<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // Ambil project yang di-publish DAN dicentang 'is_featured' dari CMS
        $projects = Project::where('is_published', true)
                           ->where('is_featured', true)
                           ->latest()
                           ->take(2)
                           ->get();
        
        return view('frontend.home', compact('projects'));
    }

    // Fungsi untuk halaman Semua Project
    public function projects()
    {
        // Tampilkan semua project dengan pagination (6 per halaman)
        $projects = Project::where('is_published', true)->latest()->paginate(6);
        return view('frontend.projects', compact('projects'));
    }

    // Fungsi untuk halaman Semua Blog (Tulisan & Pemikiran)
    public function blogs()
    {
        // Tampilkan semua blog dengan pagination (9 per halaman)
        $blogs = Blog::where('is_published', true)->latest()->paginate(9);
        return view('frontend.blogs', compact('blogs'));
    }

    public function showProject($slug)
    {
        $project = Project::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('frontend.project-detail', compact('project'));
    }

    public function showBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        return view('frontend.blog-detail', compact('blog'));
    }
}