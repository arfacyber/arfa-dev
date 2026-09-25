<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('thumbnail')->nullable();
            $table->text('short_description');
            $table->longText('overview')->nullable();
            $table->longText('challenge')->nullable();
            $table->longText('solution')->nullable();
            $table->json('technologies')->nullable();
            $table->string('live_demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};