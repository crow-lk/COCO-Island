<?php

namespace App\Filament\Resources\Blog\BlogSettingResource\Pages;

use App\Filament\Resources\Blog\BlogSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogSettings extends ListRecords
{
    protected static string $resource = BlogSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
