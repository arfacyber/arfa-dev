<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'category'          => 'required|string|max:255',
            'thumbnail'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'screenshots.*'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'short_description' => 'required|string|max:500',
            'overview'          => 'nullable|string',
            'challenge'         => 'nullable|string',
            'solution'          => 'nullable|string',
            'technologies'      => 'nullable|string',
            'live_demo_url'     => 'nullable|url',
            'github_url'        => 'nullable|url',
        ]);

        // Auto generate slug dari title
        $validated['slug'] = Str::slug($validated['title']) . '-' . uniqid();

        // Format technologies (comma separated to array)
        if ($request->filled('technologies')) {
            $validated['technologies'] = array_map('trim', explode(',', $request->technologies));
        }

        // Handle Thumbnail Upload
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('projects', 'public');
        }

        // Handle Multiple Screenshots Upload
        if ($request->hasFile('screenshots')) {
            $screenshotsPath = [];
            foreach ($request->file('screenshots') as $file) {
                $screenshotsPath[] = $file->store('projects/screenshots', 'public');
            }
            $validated['screenshots'] = $screenshotsPath;
        }

        $validated['is_published'] = $request->has('is_published');
        $validated['is_featured'] = $request->has('is_featured');

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'category'          => 'required|string|max:255',
            'thumbnail'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'screenshots.*'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'short_description' => 'required|string|max:500',
            'overview'          => 'nullable|string',
            'challenge'         => 'nullable|string',
            'solution'          => 'nullable|string',
            'technologies'      => 'nullable|string',
            'live_demo_url'     => 'nullable|url',
            'github_url'        => 'nullable|url',
        ]);

        if ($request->filled('technologies')) {
            $validated['technologies'] = array_map('trim', explode(',', $request->technologies));
        } else {
            $validated['technologies'] = null;
        }

        // Update Thumbnail
        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail) Storage::disk('public')->delete($project->thumbnail);
            $validated['thumbnail'] = $request->file('thumbnail')->store('projects', 'public');
        }

        // Update Screenshots
        if ($request->hasFile('screenshots')) {
            // Hapus screenshot lama dari storage jika ada
            if ($project->screenshots) {
                foreach ($project->screenshots as $oldScreenshot) {
                    Storage::disk('public')->delete($oldScreenshot);
                }
            }
            
            $screenshotsPath = [];
            foreach ($request->file('screenshots') as $file) {
                $screenshotsPath[] = $file->store('projects/screenshots', 'public');
            }
            $validated['screenshots'] = $screenshotsPath;
        }

        $validated['is_published'] = $request->has('is_published');
        $validated['is_featured'] = $request->has('is_featured');

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->thumbnail) {
            Storage::disk('public')->delete($project->thumbnail);
        }

        if ($project->screenshots) {
            foreach ($project->screenshots as $screenshot) {
                Storage::disk('public')->delete($screenshot);
            }
        }
        
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}