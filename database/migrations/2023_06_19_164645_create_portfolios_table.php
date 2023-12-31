<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('git_url')->nullable()->default(null);
            $table->string('job_title')->nullable()->default(null);
            $table->string('current_company')->nullable()->default(null);
            $table->string('current_company_website')->nullable()->default(null);
            $table->string('linkedin_url')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
