<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// ==========================================
// PUBLIC ROUTES (Frontend)
// ==========================================
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects.index');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs.index');
Route::get('/project/{slug}', [FrontendController::class, 'showProject'])->name('project.show');
Route::get('/blog/{slug}', [FrontendController::class, 'showBlog'])->name('blog.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

// ==========================================
// ADMIN CMS ROUTES
// ==========================================
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard Admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Projects
    Route::resource('projects', ProjectController::class)->except(['show']);
    
    // CRUD Blogs
    Route::resource('blogs', BlogController::class)->except(['show']);

    // Daftar Pesan Masuk (Contact Form)
    Route::get('/contacts', function () {
        $contacts = \App\Models\Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    })->name('contacts.index');
    
});

// ==========================================
// PROFILE ROUTES (Laravel Breeze Default)
// ==========================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';