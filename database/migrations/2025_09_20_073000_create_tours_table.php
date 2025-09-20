<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Modified to prevent conflicts on fresh installations
     */
    public function up(): void
    {
        // Only create the table if it doesn't exist to avoid conflicts with the earlier migration
        if (!Schema::hasTable('tours')) {
            Schema::create('tours', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('description');
                $table->string('image_path');
                $table->string('route_name')->nullable();
                $table->boolean('is_popular')->default(false);
                $table->boolean('is_active')->default(true);
                $table->integer('display_order')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
