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
        Schema::create('read_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_topic_id');
            $table->bigInteger('count_of_read')->default(0);
            $table->dateTime('last_visited_time');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('course_topic_id')->references('id')->on('course_topics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('read_histories');
    }
};
