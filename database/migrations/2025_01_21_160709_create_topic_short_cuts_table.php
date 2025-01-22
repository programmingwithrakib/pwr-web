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
        Schema::create('topic_short_cuts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable()->default(null);
            $table->unsignedBigInteger('course_topic_id')->nullable()->default(null);
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->enum('description_type', ['md', 'text'])->default('text');
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('course_topic_id')->references('id')->on('course_topics');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_short_cuts');
    }
};
