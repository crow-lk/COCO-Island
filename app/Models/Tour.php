<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'description',
        'content',
        'image_path',
        'hero_image',
        'route_name',
        'duration',
        'meta_title',
        'meta_description',
        'highlights',
        'why_youll_love_it',
        'is_popular',
        'display_order',
        'is_active',
        'show_in_menu',
        'menu_order'
    ];
    
    protected $casts = [
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
        'show_in_menu' => 'boolean',
        'highlights' => 'array',
        'why_youll_love_it' => 'array',
    ];
    
    /**
     * Get the full image path with asset() helper.
     *
     * @return string
     */
    public function getImageUrlAttribute(): string
    {
        // If image path already starts with 'storage/', return as is
        if (strpos($this->image_path, 'storage/') === 0) {
            return asset($this->image_path);
        }
        
        // Otherwise, append 'storage/' to the path
        return asset('storage/' . $this->image_path);
    }
}
