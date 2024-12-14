<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_topics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('name');
            $table->string('slug');
            $table->string('time_duration')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->enum('description_type', ['md', 'text'])->default('text');
            $table->string('video_link')->nullable()->default(null);
            $table->enum('video_type', ['youtube', 'vimeo', 'local', 'others'])->default('youtube');
            $table->string('image')->nullable()->default(null);
            $table->enum('play_as', ['video', 'image', 'none'])->default('video');
            $table->boolean('is_paid')->nullable()->default(false);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_topics');
    }
};
