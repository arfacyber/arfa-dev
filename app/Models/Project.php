<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'overview',
        'challenge',
        'solution',
        'technologies',
        'thumbnail',
        'screenshots',
        'live_demo_url',
        'github_url',
        'is_published',
        'is_featured',
    ];

    protected $casts = [
        'technologies' => 'array',
        'screenshots'  => 'array',
        'is_published' => 'boolean',
        'is_featured'  => 'boolean',
    ];
}