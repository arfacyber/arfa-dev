<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Blog;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        // Ambil semua project & blog yang sudah di-publish
        $projects = Project::where('is_published', true)->latest()->get();
        $blogs = Blog::where('is_published', true)->latest()->get();

        // Tampilkan ke view dengan format XML
        return response()->view('sitemap', [
            'projects' => $projects,
            'blogs'    => $blogs,
        ])->header('Content-Type', 'text/xml');
    }
}