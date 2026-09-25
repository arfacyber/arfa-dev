<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'tags', 'thumbnail', 'is_published', 'published_date'
    ];

    protected $casts = [
        'tags' => 'array',
        'is_published' => 'boolean',
        'published_date' => 'datetime',
    ];
}