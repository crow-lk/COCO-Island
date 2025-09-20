<?php

namespace App\Filament\Resources\Traits;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Set;

trait HandlesImages
{
    /**
     * Configure a file upload component for images that ensures proper storage path
     *
     * @param string $name The field name
     * @param string $label The field label
     * @param string $directory The storage directory
     * @return FileUpload The configured upload component
     */
    public static function imageUpload(string $name, string $label, string $directory = 'images'): FileUpload
    {
        return FileUpload::make($name)
            ->label($label)
            ->image()
            ->disk('public')
            ->directory($directory)
            ->visibility('public')
            ->imagePreviewHeight('250')
            ->imageResizeMode('cover')
            ->imageCropAspectRatio('16:9')
            ->imageResizeTargetWidth('1200')
            ->imageResizeTargetHeight('800')
            ->required()
            ->afterStateUpdated(function (Set $set, $state) use ($name) {
                if (!$state) return;
                
                if (is_array($state) && count($state) > 0) {
                    $path = 'storage/' . $state[0];
                    $set($name, $path);
                } elseif (is_string($state)) {
                    $path = 'storage/' . $state;
                    $set($name, $path);
                }
            });
    }
}
