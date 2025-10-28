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
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['email']);
            $table->string('password')->nullable()->default(null)->change();

            $table->string('phone')->after('email')->nullable()->default(null);
            $table->string('image')->nullable()->default(null)->after('phone');
            $table->enum('status', ['active', 'de-active', 'banned', 'block'])->default('active')->after('image');

            $table->enum('provider_name', ['system','github', 'google'])->default('system')->nullable()->default(null)->after('status');
            $table->string('provider_id')->nullable()->default(null)->after('provider_name');
            $table->string('provider_token')->nullable()->default(null)->after('provider_id');
            $table->string('provider_refresh_token')->nullable()->default(null)->after('provider_token');
            $table->unique(['email', 'provider_name']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['email', 'provider_name']);
            $table->dropColumn('phone');
            $table->dropColumn('image');
            $table->dropColumn('status');
            $table->dropColumn('provider_name');
            $table->dropColumn('provider_id');
            $table->dropColumn('provider_token');
            $table->unique('email');
            $table->string('password')->change();
        });
    }
};
