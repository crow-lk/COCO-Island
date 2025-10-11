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
        Schema::create('limited_time_offers', function (Blueprint $table) {
            $table->id();
            $table->string('section_label')->nullable();
            $table->string('section_icon')->nullable();
            $table->string('section_title')->nullable();
            $table->string('floating_badge_text')->nullable();
            $table->string('floating_badge_icon')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('offer_title');
            $table->string('offer_duration')->nullable();
            $table->string('offer_highlight')->nullable();
            $table->text('offer_summary')->nullable();
            $table->json('highlights')->nullable();
            $table->decimal('regular_price', 10, 2)->nullable();
            $table->decimal('special_price', 10, 2)->nullable();
            $table->string('currency', 3)->default('USD');
            $table->string('price_note')->nullable();
            $table->string('savings_text')->nullable();
            $table->string('countdown_label')->nullable();
            $table->timestamp('countdown_ends_at')->nullable();
            $table->boolean('countdown_enabled')->default(true);
            $table->string('primary_cta_label')->nullable();
            $table->string('primary_cta_url')->nullable();
            $table->string('primary_cta_icon')->nullable();
            $table->json('secondary_ctas')->nullable();
            $table->json('trust_indicators')->nullable();
            $table->text('bottom_note')->nullable();
            $table->string('bottom_badge_text')->nullable();
            $table->string('bottom_badge_icon')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('limited_time_offers');
    }
};
