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
        Schema::create('quick_tips', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable()->default(null);
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->enum('description_type', ['md', 'text'])->default('text');
            $table->boolean('is_paid')->default(false);
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['course_id', 'title']);
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quick_tips');
    }
};
