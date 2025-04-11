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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('department')->nullable();
            $table->string('title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->text('image_alt_tag')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('tags')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
