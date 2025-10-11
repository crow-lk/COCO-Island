<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class LimitedTimeOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_label',
        'section_icon',
        'section_title',
        'floating_badge_text',
        'floating_badge_icon',
        'hero_image',
        'offer_title',
        'offer_duration',
        'offer_highlight',
        'offer_summary',
        'highlights',
        'regular_price',
        'special_price',
        'currency',
        'price_note',
        'savings_text',
        'countdown_label',
        'countdown_ends_at',
        'countdown_enabled',
        'primary_cta_label',
        'primary_cta_url',
        'primary_cta_icon',
        'secondary_ctas',
        'trust_indicators',
        'bottom_note',
        'bottom_badge_text',
        'bottom_badge_icon',
        'is_active',
        'display_order',
    ];

    protected $casts = [
        'highlights' => 'array',
        'secondary_ctas' => 'array',
        'trust_indicators' => 'array',
        'countdown_ends_at' => 'datetime',
        'countdown_enabled' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('display_order');
    }
}
