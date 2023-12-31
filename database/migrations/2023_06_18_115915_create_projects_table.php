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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            //description
            $table->text('description')->nullable();
            //image
            $table->string('image')->nullable();
            //git_url
            $table->string('git_url')->nullable();
            //demo_url
            $table->string('demo_url')->nullable();
            //fecha proyecto
            $table->date('date')->nullable();

            //soft delete
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
