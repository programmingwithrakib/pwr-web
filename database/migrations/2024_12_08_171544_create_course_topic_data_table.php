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
        Schema::create('course_topic_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('course_topic_id');
            $table->text('description');
            $table->enum('description_type', ['md', 'text'])->default('text');
            $table->boolean('is_paid')->nullable()->default(false);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('course_topic_id')->references('id')->on('course_topics')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_topic_data');
    }
};
